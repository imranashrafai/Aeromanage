<div class="bg-black dark:bg-black text-white dark:text-zinc-300">
    <div class="container mx-auto flex justify-between items-center py-4 px-6">
        <div class="flex items-center ">
            <a href="{{ route('/') }}"> <img src="{{ asset('storage/images/logo.jpg') }}" alt="logo"
                    class="rounded-full mr-5 h-16"></a>
            {{-- {{config('app.name')}} --}}
        </div>
        <nav class="hidden md:flex space-x-6">
            <ul class="flex space-x-6">
                <li><a href="#" class="text-white">Home</a></li>
                <li><a href="#" class="text-white">About</a></li>
                <li><a href="#" class="text-white">Skills</a></li>
                <li><a href="#" class="text-white">Portfolio</a></li>
                <li><a href="#" class="text-white">Contact</a></li>
            </ul>
        </nav>
          <div class="relative inline-block text-left">
            <div>
                <button id="dropdownButton"
                class="inline-flex justify-center w-full rounded-md border-zinc-300 px-4 py-2 bg-transparent text-sm font-medium text-white focus:outline-none">
                @if (auth()->check())
                    {{ auth()->user()->fname.' '.auth()->user()->lname }}
                @else
                    Guest
                @endif
                <svg class="ml-2 h-5 w-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor"
                    aria-hidden="true">
                    <path fill-rule="evenodd"
                        d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                        clip-rule="evenodd" />
                </svg>
            </button>
            </div>
            <div id="dropdownMenu"
                class="hidden origin-top-right absolute right-0 mt-1 w-64 rounded-md shadow-lg bg-white ring-1 ring-black ring-opacity-5 focus:outline-none">
                <div class="py-1" role="menu" aria-orientation="vertical" aria-labelledby="options-menu">
                    <div class="flex items-center px-4 py-2">
                        <img src="
                      @if (auth()->check()) @if (auth()->user()->gender == 'male') 
                              {{ asset('storage/images/male.jpeg') }} 
                          @elseif (auth()->user()->gender == 'female') 
                              {{ asset('storage/images/female.jpeg') }} @endif
                          @else
                          {{ asset('storage/images/guest.png') }} 
                      @endif"
                            alt="User Avatar" class="rounded-full mr-2 h-9" />

                        <div>
                            @if (auth()->check())
                                <p class="text-sm font-medium text-zinc-900"> {{ auth()->user()->fname.' '.auth()->user()->lname }}</p>
                                <p class="text-sm text-zinc-500">{{ auth()->user()->email }}</p>
                            @else
                                <p class="text-sm font-medium text-zinc-900">Guest</p>
                                <p class="text-sm text-zinc-500">guest@gmail.com</p>
                            @endif
                        </div>
                    </div>
                    @if (auth()->check())
                        <div class="border-t border-zinc-100"></div>
                        <a href="{{route('profile.setting')}}" class="block px-4 py-2 text-sm text-zinc-700 hover:bg-zinc-100"
                            role="menuitem">
                            <i class="fa-solid fa-user"></i>
                            Profile Settings
                        </a>
                    @else
                        <div class="block px-4 py-2 text-sm text-zinc-300 select-none" role="menuitem">
                            <i class="fa-solid fa-user"></i>
                            Profile Settings
                        </div>
                    @endif
                    @if (auth()->check())
                        <a href="{{ route('logout') }}" class="block px-4 py-2 text-sm text-zinc-700 hover:bg-zinc-100"
                            role="menuitem">
                            <i class="fa-solid fa-circle-exclamation"></i>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="hidden">
                                @csrf
                            </form>Logout
                        </a>
                    @else
                        <a href="{{ route('login') }}" class="block px-4 py-2 text-sm text-zinc-700 hover:bg-zinc-100"
                            role="menuitem">
                            <i class="fa-solid fa-circle-exclamation"></i>
                            <form id="logout-form" action="{{ route('login') }}" method="POST" class="hidden">
                                @csrf
                            </form>Login
                        </a>
                    @endif
                </div>
            </div>
        </div>

        <script>
            document.addEventListener('DOMContentLoaded', function() {
                const dropdownMenu = document.getElementById('dropdownMenu');

                // Show dropdown on hover
                dropdownMenu.parentElement.addEventListener('mouseenter', function() {
                    dropdownMenu.classList.remove('hidden');
                });

                // Hide dropdown on mouse leave
                dropdownMenu.parentElement.addEventListener('mouseleave', function() {
                    dropdownMenu.classList.add('hidden');
                });

                // Prevent hiding dropdown when clicking inside the dropdown menu
                dropdownMenu.addEventListener('click', function(event) {
                    event.stopPropagation();
                });
            });
        </script>


    </div>
</div>
