<?php

namespace App\Http\Controllers;

use App\Models\City;
use App\Models\UserPersonalInformation;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Country;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\ValidationException;

class UserPersonalInformationController extends Controller
{
    public function index()
    {
        $user = User::find(Auth::id());
        $userId = $user->id;
        $personalInfo = UserPersonalInformation::where('user_id', $userId)->first();

        if (!$personalInfo) {
            return redirect()->route('user-personal-information.index')->with('error', 'No personal information found for the user.');
        }

        return view('front.account.personal_info.show', compact('personalInfo'));
    }

    public function create()
    {
        $countries = Country::all();

        // Retrieve cities that belong to the selected country
        $selectedCountryId = request()->input('residence_country'); // Assuming there's a hidden input field 'country_id' in the form
        if ($selectedCountryId) {
            $cities = City::where('country_id', $selectedCountryId)->get();
        } else {
            $cities = City::all();
        }

        return view('front.account.personal_info.create', compact('countries', 'cities'));
    }
    public function store(Request $request)
    {
        try {
            // Validate the incoming request data
            $validatedData = $request->validate([
                'full_name' => 'required|string|max:255',
                'birth_date' => 'nullable|date',
                'gender' => 'nullable|in:Male,Female',
                'nationality' => 'nullable|string|max:255',
                'residence_country' => 'nullable|string|max:255',
                'city' => 'nullable|string|max:255',
                'mobile' => 'nullable|string|max:15',
                'phone' => 'nullable|string|max:15',
                'address' => 'nullable|string|max:1024',
                'website' => 'nullable|url|max:255',
            ]);

            // Get the authenticated user's ID
            $userId = Auth::id();

            // Create a new record in the user_personal_information table
            $userInformation = UserPersonalInformation::create([
                'user_id' => $userId,
                'full_name' => $validatedData['full_name'],
                'birth_date' => $validatedData['birth_date'],
                'gender' => $validatedData['gender'],
                'nationality' => $validatedData['nationality'],
                'residence_country' => $validatedData['residence_country'],
                'city' => $validatedData['city'],
                'mobile' => $validatedData['mobile'],
                'phone' => $validatedData['phone'],
                'address' => $validatedData['address'],
                'website' => $validatedData['website'],
            ]);
        } catch (ValidationException $e) {
            return response()->json([
                'message' => 'Validation failed.',
                'errors' => $e->errors()
            ], 422);
        }
        // If the record is created successfully, return a success response
        return redirect()->route('home')->with('success', 'Personal information created successfully.');
    }

    public function edit()
    {
        $countries = Country::all();

        // Retrieve cities that belong to the selected country
        $selectedCountryId = request()->input('residence_country'); // Assuming there's a hidden input field 'country_id' in the form
        if ($selectedCountryId) {
            $cities = City::where('country_id', $selectedCountryId)->get();
        } else {
            $cities = City::all();
        }

        
        $id = Auth::user()->id;

        $user = User::where('id', $id)->first();
        $userId = $user->id;
        $personalInfo = UserPersonalInformation::where('user_id', $userId)->first();
        return view(
        'front.account.personal_info.edit', [
            'user' => $user,
            'personalInfo' => $personalInfo,
            'countries' => $countries,
            'cities' => $cities,
        ]);
    }

    public function update(Request $request)
    {
        try {
            // Validate the incoming request data
            $validatedData = $request->validate([
                'full_name' => 'required|string|max:255',
                'birth_date' => 'nullable|date',
                'gender' => 'nullable|in:Male,Female',
                'nationality' => 'nullable|string|max:255',
                'residence_country' => 'nullable|string|max:255',
                'city' => 'nullable|string|max:255',
                'mobile' => 'nullable|string|max:15',
                'phone' => 'nullable|string|max:15',
                'address' => 'nullable|string|max:1024',
                'website' => 'nullable|url|max:255',
            ]);

            // Get the authenticated user's ID
            $userId = Auth::id();

            // Find the user's information by user_id
            $userInformation = UserPersonalInformation::where('user_id', $userId)->firstOrFail();

            // Update the user's information
            $userInformation->update($validatedData);

            // Return the updated user information
            return response()->json([
                'message' => 'User information updated successfully.',
                'user' => $userInformation
            ]);
        } catch (ValidationException $e) {
            return response()->json([
                'message' => 'Validation failed.',
                'errors' => $e->errors()
            ], 422);
        }
        // If the record is updated successfully, return a success response
        return redirect()->route('account.profileDetails')->with('success', 'Personal information updated successfully.');
    }
}