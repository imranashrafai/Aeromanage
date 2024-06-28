
@extends('layouts.user')

@section('title', 'Booking')
@section('content')
<div class="w-full max-w-md mx-auto mt-10">
    <form action="/bookings" method="POST" class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4">
        <h2 class="text-2xl font-bold mb-6 text-center">Create Booking</h2>
        
        <div class="mb-4">
            <label class="block text-gray-700 text-sm font-bold mb-2" for="BookingID">
                Booking ID
            </label>
            <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="BookingID" name="BookingID" type="number" placeholder="Booking ID" required>
        </div>
        
        <div class="mb-4">
            <label class="block text-gray-700 text-sm font-bold mb-2" for="PassengerID">
                Passenger ID
            </label>
            <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="PassengerID" name="PassengerID" type="text" placeholder="Passenger ID" required>
        </div>
        
        <div class="mb-4">
            <label class="block text-gray-700 text-sm font-bold mb-2" for="FlightID">
                Flight ID
            </label>
            <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="FlightID" name="FlightID" type="number" placeholder="Flight ID" required>
        </div>
        
        <div class="mb-4">
            <label class="block text-gray-700 text-sm font-bold mb-2" for="BookingDate">
                Booking Date
            </label>
            <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="BookingDate" name="BookingDate" type="date" placeholder="Booking Date" required>
        </div>
        
        <div class="mb-4">
            <label class="block text-gray-700 text-sm font-bold mb-2" for="Status">
                Status
            </label>
            <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="Status" name="Status" type="text" placeholder="Status" required>
        </div>
        
        <div class="mb-6">
            <label class="block text-gray-700 text-sm font-bold mb-2" for="PaymentAmount">
                Payment Amount
            </label>
            <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="PaymentAmount" name="PaymentAmount" type="number" step="0.001" placeholder="Payment Amount" required>
        </div>
        
        <div class="flex items-center justify-between">
            <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline" type="submit">
                Create Booking
            </button>
        </div>
    </form>
</div>
@stop
