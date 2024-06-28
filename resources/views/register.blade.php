@extends('layouts.user')

@section('title', 'Register')
@section('content')
    <div class="w-full max-w-md mx-auto mt-10">
        <form action="{{ route('register') }}" method="POST" class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4">
            @csrf
            <h2 class="text-2xl font-bold mb-6 text-center">Register</h2>

            <div class="mb-4">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="fname">
                    First Name
                </label>
                <input id="name" name="fname" type="text" placeholder="First Name" value="{{ old('fname') }}"
                    class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline
                    @error('nfame')
                        border-red-600
                    @enderror">
                @error('name')
                    <p class="text-sm text-red-500 mt-1"> {{ $message }}</p>
                @enderror
            </div>
            <div class="mb-4">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="name">
                    Last Name
                </label>
                <input id="name" name="lname" type="text" placeholder="Last Name" value="{{ old('lname') }}"
                    class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline
                    @error('lname')
                        border-red-600
                    @enderror">
                @error('lname')
                    <p class="text-sm text-red-500 mt-1"> {{ $message }}</p>
                @enderror
            </div>

            <div class="mb-4">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="email">
                    Email
                </label>
                <input id="email" name="email" type="email" placeholder="Email" value="{{ old('email') }}"
                    class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline
                    @error('email')
                        border-red-600
                    @enderror">
                @error('email')
                    <p class="text-sm text-red-500 mt-1"> {{ $message }}</p>
                @enderror
            </div>
            <div class="mb-4">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="gender">
                    Gender
                </label>
                <div>
                    <label class="inline-flex items-center">
                        <input type="radio" class="form-radio" name="gender" value="male" 
                            {{ old('gender') == 'male' ? 'checked' : '' }}>
                        <span class="ml-2">Male</span>
                    </label>
                    <label class="inline-flex items-center ml-6">
                        <input type="radio" class="form-radio" name="gender" value="female" 
                            {{ old('gender') == 'female' ? 'checked' : '' }}>
                        <span class="ml-2">Female</span>
                    </label>
                </div>
                @error('gender')
                    <p class="text-sm text-red-500 mt-1"> {{ $message }}</p>
                @enderror
            </div>
            

            <div class="mb-4">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="password">
                    Password
                </label>
                <input id="password" name="password" type="password" placeholder="Password"
                    class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline
                    @error('password')
                        border-red-600
                    @enderror">
                @error('password')
                    <p class="text-sm text-red-500 mt-1"> {{ $message }}</p>
                @enderror
            </div>

            <div class="mb-6">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="confirm_password">
                    Confirm Password
                </label>
                <input id="confirm_password" name="password_confirmation" type="password" placeholder="Confirm Password"
                    class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline
                    @error('password_confirmation')
                        border-red-600
                    @enderror">
                @error('password_confirmation')
                    <p class="text-sm text-red-500 mt-1"> {{ $message }}</p>
                @enderror
            </div>

            <div class="flex items-center justify-between">
                <button
                    class="bg-black hover:bg-slate-800 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline"
                    type="submit">
                    Register
                </button>
            </div>
            <div class="text-center mt-4">
                <span class="text-gray-700">Already registered?</span>
                <a class=" underline decoration-black font-medium"
                    href="{{ route('login') }}">
                    Login
                </a>
            </div>
        </form>
    </div>
@stop
