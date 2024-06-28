@extends('layouts.user')

@section('title', 'Add Passenger')
@section('content')
    <div class="container w-8/12 m-auto mt-8 flex items-center justify-center h-screen">


        <div class="w-full max-w-md">
            <form action="{{route('pas')}}" method="POST" class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4">
                @csrf
                <h2 class="text-2xl font-bold mb-6 text-center">Add Passenger</h2>

                <div class="mb-4">
                    <label class="block text-gray-700 text-sm font-bold mb-2" for="PassengerID">
                        Passenger ID
                    </label>
                    <input
                        class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                        id="PassengerID" name="PassengerID" type="number" placeholder="Passenger ID">
                </div>

                <div class="mb-4">
                    <label class="block text-gray-700 text-sm font-bold mb-2" for="FirstName">
                        First Name
                    </label>
                    <input
                        class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                        id="FirstName" name="FirstName" type="text" placeholder="First Name">
                </div>

                <div class="mb-4">
                    <label class="block text-gray-700 text-sm font-bold mb-2" for="LastName">
                        Last Name
                    </label>
                    <input
                        class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                        id="LastName" name="LastName" type="text" placeholder="Last Name">
                </div>

                <div class="mb-4">
                    <label class="block text-gray-700 text-sm font-bold mb-2" for="DOB">
                        Date of Birth
                    </label>
                    <input
                        class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                        id="DOB" name="DOB" type="date" placeholder="Date of Birth">
                </div>

                <div class="mb-4">
                    <label class="block text-gray-700 text-sm font-bold mb-2" for="Email">
                        Email
                    </label>
                    <input
                        class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                        id="Email" name="Email" type="email" placeholder="Email">
                </div>

                <div class="mb-4">
                    <label class="block text-gray-700 text-sm font-bold mb-2" for="PhoneNumber">
                        Phone Number
                    </label>
                    <input
                        class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                        id="PhoneNumber" name="PhoneNumber" type="tel" placeholder="Phone Number">
                </div>

                <div class="flex items-center justify-between">
                    <button
                        class="bg-black hover:bg-black text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline"
                        type="submit">
                        Add Passenger
                    </button>
                </div>
            </form>
        </div>

    </div>
@stop
