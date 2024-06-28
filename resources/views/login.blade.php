@extends('layouts.user')

@section('title', 'Login')
@section('content')
    <div class="w-full max-w-md mx-auto mt-10">
        <form action="{{ route('login') }}" method="POST" class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4">
            @csrf
            <h2 class="text-2xl font-bold mb-6 text-center">Login</h2>

            <div class="mb-4">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="email">
                    Email
                </label>
                <input
                    class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                    id="email" name="email" type="email" placeholder="Email" value="{{ old('email') }}"
                    @error('email')
                    class="border-red-600"
                @enderror>
                @error('email')
                    <p class="text-sm text-red-500 mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-4">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="password">
                    Password
                </label>
                <input
                    class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                    id="password" name="password" type="password" placeholder="Password"
                    @error('password')
                    class="border-red-600"
                @enderror>
                @error('password')
                    <p class="text-sm text-red-500 mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-4">
                <input id="remember" name="remember" type="checkbox" class="mr-2 leading-tight">
                <label class="text-gray-700 text-sm font-bold" for="remember">
                    Remember Me
                </label>
            </div>

            <div class="flex items-center justify-between">
                <button
                    class="bg-black hover:bg-slate-800 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline"
                    type="submit">
                    Login
                </button>
            </div>
            <div class="text-center mt-4">
                <span class="text-gray-700">New here?</span>
                <a class=" underline decoration-black font-medium"
                    href="{{ route('register') }}">
                    Register
                </a>
            </div>
        </form>
    </div>
@endsection
