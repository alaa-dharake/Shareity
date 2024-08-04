<?php

namespace App\Http\Controllers;

use Stripe\Stripe;
use App\Models\Dish;
use App\Models\Order;
use App\Models\Campaign;
use App\Models\Donation;
use Stripe\PaymentIntent;
use Illuminate\Http\Request;
use Stripe\Checkout\Session;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Auth;

class StripeController extends Controller
{
    public function checkout()
    {
        return view('user.checkout');
    }

    public function session(Request $request)
    {
        Stripe::setApiKey(config('stripe.sk'));
    
        $productname = $request->get('productname');
        $totalprice = $request->get('total');
        $dishIds = $request->get('dish_id'); // Ensure dish_id is an array
        $total = intval(floatval($totalprice) * 100); // Convert to cents
    
        $session = Session::create([
            'line_items' => [
                [
                    'price_data' => [
                        'currency' => 'USD',
                        'product_data' => [
                            'name' => $productname,
                        ],
                        'unit_amount' => $total,
                    ],
                    'quantity' => 1,
                ],
            ],
            'mode' => 'payment',
            'success_url' => route('success', ['dish_id' => json_encode($dishIds), 'total' => $totalprice]),
            'cancel_url' => route('checkout'),
        ]);
    
        return redirect()->away($session->url);
    }

    public function success(Request $request)
    {
        $dishIds = json_decode($request->query('dish_id'), true);
        $totalPrice = $request->query('total');
        
        if ($dishIds && $totalPrice) {
            foreach ($dishIds as $dishId) {
                $this->updateDishQuantity($dishId);
                $this->saveOrder($dishId, $totalPrice);
            }
            
            // Clear the cart session
            session()->forget('cart');
            
            return redirect()->route('my-orders')->with('success', 'Thanks for your order. You have just completed your payment. The seller will reach out to you as soon as possible.');
        }
    
        return redirect()->route('checkout')->with('error', 'There was an error with your order. Please try again.');
    }

    private function updateDishQuantity($dishId)
    {
        $dish = Dish::find($dishId);
        if ($dish) {
            $dish->quantity -= 1; // Decrease quantity by 1 (or the quantity purchased)
            $dish->save();
        }
    }

    private function saveOrder($dishId, $totalPrice)
    {
        $order = new Order();
        $order->user_id = Auth::id(); // Assuming the user is authenticated
        $order->dish_id = $dishId;
        $order->transaction_id = uniqid(); // Replace with the actual transaction ID from Stripe
        $order->amount = $totalPrice;
        $order->save();
    }

    public function createDonationSession(Request $request)
    {
        Stripe::setApiKey(config('stripe.sk'));

        $campaignId = $request->input('campaign_id');
        $donationAmount = $request->input('amount');
        $amountInCents = $donationAmount * 100; // Convert to cents

        $session = Session::create([
            'payment_method_types' => ['card'],
            'line_items' => [
                [
                    'price_data' => [
                        'currency' => 'USD',
                        'product_data' => [
                            'name' => "Donation to Campaign $campaignId",
                        ],
                        'unit_amount' => $amountInCents,
                    ],
                    'quantity' => 1,
                ],
            ],
            'mode' => 'payment',
            'success_url' => route('donation.success', ['campaign_id' => $campaignId]) . '?session_id={CHECKOUT_SESSION_ID}',
            'cancel_url' => route('donation.cancel', ['campaign_id' => $campaignId]),
        ]);

        return redirect()->away($session->url);
    }

    public function donationSuccess(Request $request, $campaign_id)
    {
        Stripe::setApiKey(config('stripe.sk'));

        Log::info('Donation success for campaign: ' . $campaign_id);

        $sessionId = $request->query('session_id');

        if (!$sessionId) {
            Log::error('Session ID not found in the request.');
            return redirect()->route('donation.cancel', ['campaign_id' => $campaign_id])
                ->with('error', 'Session ID not found.');
        }

        $session = Session::retrieve($sessionId);
        Log::info('Stripe session retrieved: ' . $session->id);

        $paymentIntent = PaymentIntent::retrieve($session->payment_intent);
        Log::info('Payment intent retrieved: ' . $paymentIntent->id);
        Log::info('Amount received: ' . $paymentIntent->amount_received);

        $amount = $paymentIntent->amount_received / 100; // Convert cents to dollars

        // Fetch campaign and update donation amount
        $campaign = Campaign::find($campaign_id);
        $campaign->donated_amount += $amount;
        $campaign->save();

        // Save donation record
        $donation = new Donation;
        $donation->author_id = Auth::id();
        $donation->campaign_id = $campaign_id;
        $donation->donation_amount = $amount;
        $donation->transaction_id = $paymentIntent->id;
        $donation->status = 'succeeded';
        $donation->save();

        return view('successful-donation', ['donationInfo' => $donation]);
    }

    public function donationCancel(Request $request, $campaign_id)
    {
        return view('donation-cancel', ['campaign_id' => $campaign_id]);
    }
}
