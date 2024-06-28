@extends('layouts.user')

@section('title', 'Profile Setting')

@section('content')

    <div class="min-h-screen bg-zinc-100 p-4">
        <div class="flex flex-col md:flex-row">
            <div class="md:w-1/4 p-4">
                <h2 class="text-2xl font-bold ">Settings</h2>
                <ul class="mt-4 space-y-2">
                    <li>
                        <a href="#" class="block p-2 rounded-lg bg-white shadow-md">Public profile</a>
                    </li>
                    <li>
                        <a href="#" class="block p-2 rounded-lg ">Account settings</a>
                    </li>
                </ul>
            </div>

            <div class="md:w-3/4 p-4 bg-white rounded-lg shadow-md">
                <h2 class="text-xl font-bold ">Public profile</h2>
                <form class="mt-6 space-y-4" id="profileForm">
                    <div class="flex">
                        <div class="relative">
                            <img 
                                src="@if (auth()->check()) @if (auth()->user()->gender == 'male') 
                              {{ asset('storage/images/male.jpeg') }} 
                          @elseif (auth()->user()->gender == 'female') 
                              {{ asset('storage/images/female.jpeg') }} @endif
@else
{{ asset('storage/images/guest.png') }} 
                      @endif"
                                alt="Profile"
                                class="w-24 h-24 rounded-full bg-blue-500 text-white flex items-center justify-center" />
                            <button type="button" id="editButton" class="absolute bottom-1 right-1 bg-black rounded-full"
                                style="width: 24px; height: 24px; border-radius: 50%;">
                                <i class="fa-solid fa-xs fa-pencil text-white"></i>
                            </button>

                        </div>
                    </div>

                    <div class="flex space-x-4">
                        <div class="w-1/2">
                            <label class="block text-sm font-medium ">First Name</label>
                            <input type="text" name="first_name" value="dssd"
                                class="mt-1 block w-full p-2 border border-zinc-300  rounded-lg bg-zinc-50" />
                        </div>
                        <div class="w-1/2">
                            <label class="block text-sm font-medium ">Last name</label>
                            <input type="text" name="last_name" value="Gaspar"
                                class="mt-1 block w-full p-2 border border-zinc-300  rounded-lg bg-zinc-50 " />
                        </div>
                    </div>
                    <div class="select-none">
                        <label class="block text-sm font-medium">Email</label>
                        <input type="text" readonly value="emailis@private.com"
                            class="mt-1 block w-full p-2 border border-zinc-300 rounded-lg bg-zinc-50 cursor-default select-none" />
                    </div>
                    <div>
                        <label class="block text-sm font-medium ">Profession</label>
                        <input type="text" name="profession" value="UI/UX Designer"
                            class="mt-1 block w-full p-2 border border-zinc-300 bg-zinc-50  " />
                    </div>
                    <button type="button" class="bg-blue-900 text-white px-4 py-2 rounded-lg"
                        id="updateProfileButton">Update</button>
                </form>
            </div>
        </div>
    </div>

    <div id="modal" class="fixed inset-0  bg-black bg-opacity-50 flex items-center justify-center hidden">
        <div class="bg-white w-2/5 p-6 rounded-lg">
            <div class="flex flex-col items-center">
                @php
                    $profileImage = '';

                    if (auth()->check()) {
                        if (!is_null(auth()->user()->profile_image)) {
                            $profileImage = asset('storage/' . auth()->user()->profile_image);
                        } else {
                            if (auth()->user()->gender == 'male') {
                                $profileImage = asset('storage/images/male.jpeg');
                            } elseif (auth()->user()->gender == 'female') {
                                $profileImage = asset('storage/images/female.jpeg');
                            }
                        }
                    } else {
                        $profileImage = asset('storage/images/guest.png');
                    }
                @endphp
                <div class="w-36 h-36 relative">
                    <img id="modalImage" src="{{ $profileImage }}" alt="Profile"
                        class="w-full h-full object-cover rounded-full" />
                </div>
                <div class="flex items-center border border-zinc-300 rounded-full overflow-hidden mb-4 mt-4">
                    <label for="fileInput" class="bg-black text-white px-4 py-2 cursor-poin*ter">Browse</label>
                    <input type="file" id="fileInput" name="profile_image" class="hidden" />
                    <span id="fileNameDisplay" class="px-4 py-2 text-zinc-500">No file selected</span>
                </div>
                <div class="flex space-x-4 mt-4">
                    <a href="{{route('profile.image.update')}}" id="updateButton" class="bg-black text-white px-4 py-2 rounded-lg">Update</a>
                    <a href="{{route('profile.image.remove')}}" id="removeButton" class="bg-black text-white px-4 py-2 rounded-lg" >Remove</a>
                </div>
                <a id="closeButton"
                    class="w-8 h-8 cursor-pointer hover:bg-blue-900 font-bold text-center bg-blue-950  relative left-32 bottom-52 text-white p-1 rounded-full">X</a>
            </div>
        </div>
    </div>
    <script>
        const editButton = document.getElementById('editButton');
        const modal = document.getElementById('modal');
        const closeButton = document.getElementById('closeButton');
        const fileInput = document.getElementById('fileInput');
        const modalImage = document.getElementById('modalImage');
        const fileNameDisplay = document.getElementById('fileNameDisplay');
       
        
        editButton.addEventListener('click', () => {
            modal.classList.remove('hidden');
        });

        closeButton.addEventListener('click', () => {
            modal.classList.add('hidden');
        });

        fileInput.addEventListener('change', (event) => {
            const file = event.target.files[0];
            fileNameDisplay.textContent = file['name'];

            if (file) {
                const reader = new FileReader();
                reader.onload = (e) => {
                    modalImage.src = e.target.result;
                  
                };
                reader.readAsDataURL(file);
            }
        });
    </script>

@stop
