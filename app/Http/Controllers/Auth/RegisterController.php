<?php

namespace App\Http\Controllers\Auth;

use App\Models\City;
use App\Models\User;
use App\Models\State;
use Illuminate\Http\Request;
use App\Services\CityService;
use Illuminate\Support\Facades\Log;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use App\Providers\RouteServiceProvider;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;

class RegisterController extends Controller
{
    use RegistersUsers;

    protected $redirectTo = RouteServiceProvider::HOME;
    protected $cityService;

    public function __construct(CityService $cityService)
    {
        $this->middleware('guest');
        $this->cityService = $cityService;
    }

    public function showRegistrationForm()
    {
        $cities = City::all();
        $states = State::all();
        return view('auth.register', compact('cities', 'states'));
    }

    protected function validator(array $data)
    {
        $validator = Validator::make($data, [
            'name' => ['required', 'string', 'max:255'],
            'lastName' => ['required', 'string', 'max:255'],
            'username' => ['required', 'string', 'max:255', 'unique:users'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
            'city_id' => ['required', 'exists:cities,id'],
            'state_id' => ['required', 'exists:states,id'],
        ]);

        if ($validator->fails()) {
            Log::error('Validation Errors:', $validator->errors()->toArray());
        }

        return $validator;
    }

    protected function create(array $data)
    {
        // Adjust the role based on the selected value in the form
        $role = isset($data['role']) ? $data['role'] : 'customer'; // Default to 'customer' if no role is provided
        
        return User::create([
            'name' => $data['name'],
            'lastName' => $data['lastName'],
            'username' => $data['username'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
            'city_id' => $data['city_id'],
            'state_id' => $data['state_id'],
            'role' => $role,
        ]);
    }
    public function getCitiesByState($state_id)
    {
        $cities = $this->cityService->getCitiesByState($state_id);
        return response()->json($cities);
    }
    
}
