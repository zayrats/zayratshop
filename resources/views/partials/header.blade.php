 @if (Route::has('login'))

     @auth
        <div class="bg-gray-100 dark:bg-gray-900">
            @livewire('navigation-menu')
        </div>

        @else
            <div class="sm:fixed sm:top-0 sm:right-0 text-right z-10">
                <a href="{{ route('login') }}" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Log in</a>

            @if (Route::has('register'))
                <a href="{{ route('register') }}" class="ml-4 font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Register</a>
             @endif
            </div>
     @endauth

 @endif
