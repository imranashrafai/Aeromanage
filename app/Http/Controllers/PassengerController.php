<?php

namespace App\Http\Controllers;

use  App\Models\Passenger;

use Carbon\Carbon;


use Illuminate\Http\Request;

class PassengerController extends Controller
{
    public function viewAddPassenger()
    {
        return view('/admin/addPassenger');
    }

    public function addPassenger(Request $request)
    {
        // Validate incoming request data
        $request->validate([
            'PassengerID' => 'required',
            'FirstName' => 'required',
            'LastName' => 'required',
            'DOB' => 'required|date',
            'Email' => 'required|email',
            'PhoneNumber' => 'required',
        ]);

        // Calculate age from DOB using Carbon
        $dob = Carbon::parse($request->DOB);
        $age = $dob->age; // Calculate age

        // Create Passenger record in database
        $passenger = new Passenger();
        $passenger->PassengerID = $request->PassengerID;
        $passenger->FirstName = $request->FirstName;
        $passenger->LastName = $request->LastName;
        $passenger->DOB = $dob; // Store DOB as a Carbon instance
        $passenger->Email = $request->Email;
        $passenger->PhoneNumber = $request->PhoneNumber;
        $passenger->Age = $age; // Assign calculated age

        $passenger->save(); // Save the passenger record

        // Redirect with success message and pass age as route parameter
        return redirect()->route('age.show', compact('age'));
    }
}
