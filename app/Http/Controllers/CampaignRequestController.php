<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use App\Models\CampaignRequest;
use Illuminate\Support\Facades\Auth;

class CampaignRequestController extends Controller
{
       public function __construct()
    {
        // Apply middleware to routes
        $this->middleware('is_user')->only(['create', 'store', 'index']);
        $this->middleware('is_chef')->only(['manage', 'updateStatus']);
    }

    public function create(User $chef)
    {
        return view('meal_requests.create', compact('chef'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'chef_id' => 'required|exists:users,id',
            'campaign_name' => 'required|string|max:255',
            'campaign_description' => 'required|string|max:255',
            'campaign_meal' => 'required|string|max:255',
            'campaign_date' => 'required|date',
            'campaign_startTime' => 'required|date_format:H:i',
            'campaign_endTime' => 'required|date_format:H:i',
        ]);
        
        CampaignRequest::create([
            'user_id' => auth()->id(),
            'chef_id' => $request->chef_id,
            'campaign_name' => $request->campaign_name,
            'campaign_description' => $request->campaign_description,
            'campaign_meal' => $request->campaign_meal,
            'campaign_date' => $request->campaign_date,
            'campaign_startTime' => $request->campaign_startTime,
            'campaign_endTime' => $request->campaign_endTime,
            'status' => 'pending', // Assuming you want to set a default status
        ]);
        
        return redirect()->route('chefs.show', $request->chef_id)->with('success', 'Campaign request sent successfully!');
    }

    public function accept(CampaignRequest $campaign_request)
    {
        // Implement acceptance logic here (e.g., update status)
        $campaign_request->update(['status' => 'accepted']);

        return back()->with('success', 'Campaign request accepted.');
    }

    public function reject(CampaignRequest $campaign_request)
    {
        // Implement rejection logic here (e.g., update status)
        $campaign_request->update(['status' => 'rejected']);

        return back()->with('success', 'Campaign request rejected.');
    }
    
    public function index()
    {
        // Fetch all campaign requests associated with the authenticated user
        $campaignRequests = CampaignRequest::where('user_id', auth()->id())->get();
        // Fetch all chefs (users with role 'chef')
        $chefs = User::where('role', 'chef')->get();

        return view('campaign_requests.index', compact('campaignRequests', 'chefs'));
    }

    public function manage()
    {
        // Fetch all campaign requests where the authenticated user is the chef
        $campaignRequests = CampaignRequest::where('chef_id', auth()->id())->get();
        $chef = Auth::user();

        return view('campaign_requests.manage', compact('campaignRequests', 'chef'));
    }

    public function updateStatus(Request $request, CampaignRequest $campaignRequest)
    {
        // Update the status of a campaign request
        $campaignRequest->update(['status' => $request->status]);

        // Redirect back to the manage page for campaign requests
        return redirect()->route('campaign_requests.manage');
    }
}
