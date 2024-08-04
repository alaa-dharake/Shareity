<?php

namespace App\Http\Controllers;

use App\Models\Campaign;
use App\Models\Donation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\DB;

class DonationController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth'); // Ensure user is authenticated
    }

    public function makeDonation(Request $request, $id)
    {
        $current_campaign = Campaign::findOrFail($id);
        $request->session()->put('donatedCampaign', $current_campaign);

        return view('make-donation', ['current_campaign' => $current_campaign]);
    }
    

    public function donate(Request $request)
    {
        $campaign = session('donatedCampaign');
        $amount = $request->input('amount');

        // Redirect to Stripe Controller for donation session using a POST request
        return redirect()->route('create-donation-session')->withInput([
            'campaign_id' => $campaign->id,
            'amount' => $amount,
        ]);
    }

    public function donationResponse(Request $request, $campaign_id)
    {
        $user = Auth::user();

        if (!$user) {
            Log::error('Unauthenticated user attempted to donate.');
            return redirect()->route('login')->with('error', 'Please log in to complete your donation.');
        }

        $current_campaign = Campaign::find($campaign_id);

        if (!$current_campaign) {
            Log::error('Campaign not found for donation response.', ['campaign_id' => $campaign_id]);
            return redirect()->back()->with('error', 'Campaign not found.');
        }

        $request->validate([
            'transaction_id' => 'required|string',
            'transaction_amount' => 'required|numeric|min:0.01',
            'transaction_status' => 'required|string',
        ]);

        $transaction_id = $request->input('transaction_id');
        $transaction_amount = $request->input('transaction_amount');
        $transaction_status = $request->input('transaction_status');

        Log::info('Processing donation response', [
            'transaction_id' => $transaction_id,
            'transaction_amount' => $transaction_amount,
            'transaction_status' => $transaction_status,
        ]);

        DB::beginTransaction();

        try {
            $current_campaign->donated_amount += $transaction_amount;
            $current_campaign->save();

            $donation = new Donation;
            $donation->author_id = $user->id;
            $donation->campaign_id = $campaign_id;
            $donation->donation_amount = $transaction_amount;
            $donation->transaction_id = $transaction_id;
            $donation->status = $transaction_status;
            $donation->save();

            Log::info('Donation saved', [
                'author_id' => $donation->author_id,
                'campaign_id' => $donation->campaign_id,
                'donation_amount' => $donation->donation_amount,
                'transaction_id' => $donation->transaction_id,
                'status' => $donation->status,
            ]);

            DB::commit();

            return view('successful-donation', ['donationInfo' => $donation]);
        } catch (\Exception $e) {
            DB::rollBack();

            Log::error('Error saving donation: ' . $e->getMessage(), [
                'author_id' => $user->id,
                'campaign_id' => $campaign_id,
                'transaction_id' => $transaction_id,
                'transaction_amount' => $transaction_amount,
                'transaction_status' => $transaction_status,
            ]);

            return redirect()->back()->with('error', 'Error processing your donation. Please try again.');
        }
    }

    public function myDonations()
    {
        $user = Auth::user();
        $donations = Donation::with('campaign')
                            ->where('author_id', $user->id)
                            ->get();

        return view('my-donations', ['donations' => $donations]);
    }
    public function destroy(Donation $donation){
        $donation->delete();
        return redirect('/my-donations');
    }
}
