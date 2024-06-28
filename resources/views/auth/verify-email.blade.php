@extends('layouts.user')

@section('title', 'Email Verification')
@section('content')
    <div class="flex items-center justify-center my-6">
        <div class="bg-white p-8 rounded-lg shadow-slate-400 shadow-md max-w-md text-center">
            <div class="mb-4">
                <img src="https://placehold.co/50x50" alt="email icon" class="mx-auto" />
            </div>
            <h1 class="text-2xl font-bold text-black  mb-2">
                Please verify your email
            </h1>
            <p class="text-black mb-4">
                You're almost there! We sent an email to
                <strong class="text-black">duncan@memberstack.com</strong>
            </p>
            <p class="text-black mb-4">
                Just click on the link in that email to complete your signup. If you don't see it, you may
                need to <strong class="text-black">check your spam</strong> folder.
            </p>
            <p class="text-black mb-6">Still can't find the email? No problem.</p>
            <form action="{{ route('verification.send') }}" method="post" class="pt-2">
                @csrf
            <button class="bg-black mb- hover:bg-gray-800 text-white py-2 px-4 rounded-lg " type="submit">
                Resend Verification Email
            </button>
        </form>
            <br>
           
            <a class="underline decoration-black" href="{{ route('/') }}">Skip for Now</a>
       
        </div>
    </div>
@stop
