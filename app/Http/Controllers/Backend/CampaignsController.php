<?php
namespace App\Http\Controllers\Backend;

use App\Models\Campaign;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Log;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class CampaignsController extends Controller
{
    public function __construct()
    {
        $this->middleware('admin_or_chef');
    }

    public function index()
    {
        $campaigns = Campaign::paginate(10);
        $user = auth()->user(); // Get the currently authenticated user
    
        return view('admin.campaigns.index', compact('campaigns', 'user'));
    }
    
    public function create()
    {
        $user = Auth::user();

        if ($user->isAdmin()) {
            return view('admin.campaigns.create');
        } elseif ($user->isChef()) {
            return view('chef.campaigns.create');
        }

        return abort(403, 'Unauthorized action.');
    }

    public function store(Request $request)
    {
        Log::info('Store method called', ['request_data' => $request->all()]);
    
        $request->validate([
            'campaign_name' => 'required|string|max:255',
            'price_per_meal' => 'required|numeric',
            'description' => 'required|string',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'start_time' => [
                'required',
                'date_format:H:i',
                function ($attribute, $value, $fail) {
                    $startTime = \Carbon\Carbon::createFromFormat('H:i', $value);
                    if ($startTime <= now()) {
                        $fail('The start time must be greater than the current time.');
                    }
                },
            ],
            'end_time' => [
                'required',
                'date_format:H:i',
                function ($attribute, $value, $fail) use ($request) {
                    $endTime = \Carbon\Carbon::createFromFormat('H:i', $value);
                    $startTime = \Carbon\Carbon::createFromFormat('H:i', $request->input('start_time'));
                    if ($endTime <= now() || $endTime <= $startTime) {
                        $fail('The end time must be greater than the current time and start time.');
                    }
                },
            ],
        ]);
    
        // Log the request data to debug
        Log::info('Validated request data', ['request_data' => $request->all()]);
    
        try {
            $user = Auth::user();
            Log::info('Authenticated user', ['user' => $user]);
    
            $campaign = new Campaign;
            $campaign->campaign_name = $request->campaign_name;
            $campaign->price_per_meal = $request->price_per_meal;
            $campaign->author = $user->username;
            $campaign->author_id = $user->id;
            $campaign->description = $request->description;
            $campaign->end_date = $request->end_date;
            $campaign->start_time = $request->start_time;
            $campaign->end_time = $request->end_time;
            $campaign->location = $request->location;
            $campaign->meal_name = $request->meal_name;
    
            Log::info('Campaign data set', ['campaign' => $campaign]);
    
            if ($request->hasFile('image')) {
                Log::info('Image file found');
                $image = $request->file('image');
                $imageName = time() . '.' . $image->getClientOriginalExtension();
                $image->move(public_path('/storage'), $imageName);
                $campaign->image = $imageName;
                Log::info('Image uploaded', ['image_name' => $imageName]);
            } else {
                Log::warning('Image file not found');
            }
    
            $campaign->save();
            Log::info('Campaign saved', ['campaign_id' => $campaign->id]);
    
            if ($user->isAdmin()) {
                Log::info('User is admin, redirecting to admin campaigns');
                return redirect()->route('campaigns.myCampaigns')->with('success', 'Campaign created successfully.');
            } elseif ($user->isChef()) {
                Log::info('User is chef, redirecting to chef campaigns');
                return redirect()->route('campaigns.myCampaigns')->with('success', 'Campaign created successfully.');
            } else {
                Log::warning('User role unknown, no redirect');
            }
    
        } catch (\Exception $e) {
            Log::error('Error creating campaign', ['error' => $e->getMessage()]);
            return redirect()->back()->with('error', 'Error creating campaign: ' . $e->getMessage());
        }
    }
    

    public function update(Request $request, Campaign $campaign)
    {
        $user = Auth::user();
    
        // Validate the request data
        $request->validate([
            'campaign_name' => 'required|string|max:255',
            'price_per_meal' => 'required|numeric',
            'description' => 'required|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'start_time' => 'required|date_format:H:i:s',
            'end_time' => 'required|date_format:H:i:s',
            'end_date' => 'required|date', // added validation for end_date
            'location' => 'required|string|max:255',
            'meal_name' => 'required|string|max:255',
        ]);
    
        try {
            // Update campaign data
            $campaign->campaign_name = $request->campaign_name;
            $campaign->description = $request->description;
            $campaign->end_date = $request->end_date; // added assignment for end_date
            $campaign->start_time = $request->start_time;
            $campaign->end_time = $request->end_time;
            $campaign->location = $request->location;
            $campaign->meal_name = $request->meal_name;
            $campaign->price_per_meal = $request->price_per_meal;
    
            // Assign the author_id and author username
            $campaign->author_id = $user->id;
            $campaign->author = $user->username;
    
            // Handle image upload if provided
            if ($request->hasFile('image')) {
                // Optionally delete the old image if a new one is uploaded
                if ($campaign->image) {
                    Storage::disk('public')->delete($campaign->image);
                }
    
                $path = $request->file('image')->store('images', 'public');
                $campaign->image = $path;
                Log::info('Image uploaded and stored', ['image_path' => $path]);
            }
    
            // Save the updated campaign
            $campaign->save();
    
            // Log success message
            Log::info('Campaign updated successfully', ['campaign_id' => $campaign->id]);
    
            // Redirect to my campaigns page or any appropriate route
            return redirect()->route('campaigns.myCampaigns')->with('success', 'Campaign updated successfully.');
        } catch (\Exception $e) {
            // Log the error message
            Log::error('Error updating campaign', ['error' => $e->getMessage()]);
    
            // Handle any exceptions during update
            return redirect()->back()->with('error', 'Error updating campaign: ' . $e->getMessage());
        }
    }
    
    




    public function edit($id)
    {
        $campaign = Campaign::findOrFail($id);
        $user = Auth::user();

        if ($user->isAdmin()) {
            return view('admin.campaigns.edit', compact('campaign'));
        } elseif ($user->isChef()) {
            return view('chef.campaigns.edit', compact('campaign'));
        }

        return abort(403, 'Unauthorized action.');
    }

    public function destroy(Campaign $campaign)
    {
        $user = Auth::user();
    
        // Delete related donations
        $campaign->donations()->delete(); // Assuming 'donations' is the relationship method in Campaign model
    
        // Delete the campaign itself
        $campaign->delete();
    
        // Redirect based on user role
        if ($user->isAdmin()){
            return redirect()->route('campaigns.index')->with('success', 'Campaign deleted successfully.');
        } elseif ($user->isChef()) {
            return redirect()->route('campaigns.myCampaigns')->with('success', 'Campaign deleted successfully.');
        }
    
        return abort(403, 'Unauthorized action.');
    }
    

    public function donate(Request $request, $id)
    {
        $request->validate([
            'amount' => 'required|numeric|min:1',
        ]);

        try {
            Log::info('Fetching campaign with ID: ' . $id);
            $campaign = Campaign::findOrFail($id);

            Log::info('Campaign fetched successfully.', ['campaign' => $campaign]);

            $campaign->donated_amount += $request->amount;

            // Log the current values before updating
            Log::info("Before updating meals: ", [
                'donated_amount' => $campaign->donated_amount,
                'price_per_meal' => $campaign->price_per_meal,
                'number_of_meals' => $campaign->number_of_meals
            ]);

            // Update the number of meals
            $campaign->updateNumberOfMeals();

            // Save the campaign
            $campaign->save();

            // Log the updated values
            Log::info("After updating meals: ", [
                'number_of_meals' => $campaign->number_of_meals
            ]);

            return redirect()->back()->with('success', 'Thank you for your donation!');
        } catch (\Exception $e) {
            Log::error('Error donating to campaign: ' . $e->getMessage());
            return redirect()->back()->with('error', 'Error donating to campaign: ' . $e->getMessage());
        }
    }

    public function myCampaigns()
    {
        // Get the authenticated user
        $user = Auth::user();
    
        // Retrieve the campaigns for the authenticated user using 'author_id'
        $campaigns = $user ? Campaign::where('author_id', $user->id)->get() : collect();
    
        if ($user->isAdmin()) {
            return view('admin.campaigns.index', ['campaigns' => $campaigns, 'user' => $user]);
        } elseif ($user->isChef()) {
            return view('chef.campaigns.index', ['campaigns' => $campaigns, 'user' => $user]);
        }
    
        return abort(403, 'Unauthorized action.');
    }
    
}