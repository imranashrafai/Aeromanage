@extends('layouts.user')

@section('title', 'Show Record')
@section('content')
    <div class="container mx-auto px-4 py-8">
        <h2 class="text-2xl font-bold mb-6 text-center">Passengers</h2>
        <table class="min-w-full bg-white shadow-md rounded mb-4">
            <thead>
                <tr>
                    <th class="py-2 px-4 border-b">Passenger ID</th>
                    <th class="py-2 px-4 border-b">Name</th>
                    <th class="py-2 px-4 border-b">Email</th>
                    <th class="py-2 px-4 border-b">Phone</th>
                    <th class="py-2 px-4 border-b">Loyal Status</th>
                    <th class="py-2 px-4 border-b">Actions</th>
                </tr>
            </thead>
            <tbody>
                <!-- Example of a passenger row -->
                <tr>
                    <td class="py-2 px-4 border-b">1</td>
                    <td class="py-2 px-4 border-b">John Doe</td>
                    <td class="py-2 px-4 border-b">john.doe@example.com</td>
                    <td class="py-2 px-4 border-b">123-456-7890</td>
                    <td class="py-2 px-4 border-b">Yes</td>
                    <td class="py-2 px-4 border-b">
                        <a href="" class="bg-black hover:bg-slate-700 text-white font-bold py-1 px-2 rounded">Create
                            Booking</a>
                        <a href=""
                            class="bg-black hover:bg-slate-700 text-white font-bold py-1 px-2 rounded">Update</a>
                        <button class="bg-black hover:bg-slate-700 text-white font-bold py-1 px-2 rounded">Delete</button>

                    </td>
                </tr>
                <!-- Repeat for each passenger -->
            </tbody>
        </table>

        <h2 class="text-2xl font-bold mb-6 text-center">Booking Details</h2>
        <table class="min-w-full bg-white shadow-md rounded mb-4">
            <thead>
                <tr>
                    <th class="py-2 px-4 border-b">Booking ID</th>
                    <th class="py-2 px-4 border-b">Passenger ID</th>
                    <th class="py-2 px-4 border-b">Flight ID</th>
                    <th class="py-2 px-4 border-b">Booking Date</th>
                    <th class="py-2 px-4 border-b">Status</th>
                    <th class="py-2 px-4 border-b">Departure</th>
                    <th class="py-2 px-4 border-b">Arrival</th>
                    <th class="py-2 px-4 border-b">Baggage</th>
                </tr>
            </thead>
            <tbody>
                <!-- Example of a booking row -->
                <tr>
                    <td class="py-2 px-4 border-b">1</td>
                    <td class="py-2 px-4 border-b">1</td>
                    <td class="py-2 px-4 border-b">1234</td>
                    <td class="py-2 px-4 border-b">2024-06-10</td>
                    <td class="py-2 px-4 border-b">Confirmed</td>
                    <td class="py-2 px-4 border-b">2024-06-15 10:00 AM</td>
                    <td class="py-2 px-4 border-b">2024-06-15 2:00 PM</td>
                    <td class="py-2 px-4 border-b">2 Bags</td>
                </tr>
                <!-- Repeat for each booking -->
            </tbody>
        </table>
    </div>
@stop
