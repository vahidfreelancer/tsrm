<nav x-data="{ open: false }" class="bg-white dark:bg-gray-800 border-b border-gray-100 dark:border-gray-700">
    <!-- Primary Navigation Menu -->
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between h-16">
            <div class="flex">
                <!-- Logo -->
                <div class="shrink-0 flex items-center">
                    <a href="{{ route('dashboard') }}">
                         <svg id="svg" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="50%" height="auto" viewBox="0, 0, 400,95.93495934959348" version="1.1"><g id="svgg"><path id="path0" d="M0.000 11.111 L 0.000 22.222 17.886 22.222 L 35.772 22.222 35.772 59.079 L 35.772 95.935 46.882 95.935 L 57.993 95.935 58.061 59.146 L 58.130 22.358 77.033 22.288 L 95.935 22.219 95.935 11.109 L 95.935 0.000 47.967 0.000 L 0.000 0.000 0.000 11.111 M101.897 47.967 L 101.897 95.935 127.913 95.935 L 153.930 95.935 153.930 84.824 L 153.930 73.713 139.024 73.713 L 124.119 73.713 124.119 36.856 L 124.119 0.000 113.008 0.000 L 101.897 0.000 101.897 47.967 M159.892 47.967 L 159.892 95.935 189.973 95.935 L 220.054 95.935 220.054 84.824 L 220.054 73.713 201.084 73.713 L 182.114 73.713 182.114 66.396 L 182.114 59.079 196.883 59.079 L 211.653 59.079 211.653 47.967 L 211.653 36.856 196.883 36.856 L 182.114 36.856 182.114 29.539 L 182.114 22.222 201.084 22.222 L 220.054 22.222 220.054 11.111 L 220.054 0.000 189.973 0.000 L 159.892 0.000 159.892 47.967 M226.016 47.967 L 226.016 95.935 237.127 95.935 L 248.238 95.935 248.238 59.079 L 248.238 22.222 254.607 22.222 L 260.976 22.222 260.976 59.079 L 260.976 95.935 272.087 95.935 L 283.198 95.935 283.198 59.079 L 283.198 22.222 289.566 22.222 L 295.935 22.222 295.935 59.079 L 295.935 95.935 307.046 95.935 L 318.157 95.935 318.157 47.967 L 318.157 0.000 272.087 0.000 L 226.016 0.000 226.016 47.967 M324.119 47.967 L 324.119 95.935 335.230 95.935 L 346.341 95.935 346.341 84.821 L 346.341 73.707 358.847 73.778 L 371.353 73.848 371.695 75.068 C 372.028 76.251,376.465 92.875,376.994 94.919 L 377.257 95.935 388.628 95.935 C 394.883 95.935,400.000 95.866,400.000 95.781 C 400.000 95.632,396.771 83.543,385.058 39.837 C 382.082 28.733,378.467 15.227,377.024 9.824 L 374.402 -0.000 349.261 -0.000 L 324.119 0.000 324.119 47.967 M121.680 39.295 L 121.680 76.152 136.585 76.152 L 151.491 76.152 151.491 84.824 L 151.491 93.496 127.913 93.496 L 104.336 93.496 104.336 47.967 L 104.336 2.439 113.008 2.439 L 121.680 2.439 121.680 39.295 M217.615 11.111 L 217.615 19.783 198.645 19.783 L 179.675 19.783 179.675 29.537 L 179.675 39.291 194.377 39.361 L 209.079 39.431 209.150 48.035 L 209.222 56.640 194.448 56.640 L 179.675 56.640 179.675 66.396 L 179.675 76.152 198.645 76.152 L 217.615 76.152 217.615 84.824 L 217.615 93.496 189.973 93.496 L 162.331 93.496 162.331 47.967 L 162.331 2.439 189.973 2.439 L 217.615 2.439 217.615 11.111 M315.718 47.967 L 315.718 93.496 306.911 93.496 L 298.103 93.496 298.103 56.640 L 298.103 19.783 289.431 19.783 L 280.759 19.783 280.759 56.640 L 280.759 93.496 272.087 93.496 L 263.415 93.496 263.415 56.640 L 263.415 19.783 254.607 19.783 L 245.799 19.783 245.799 56.640 L 245.799 93.496 237.127 93.496 L 228.455 93.496 228.455 47.967 L 228.455 2.439 272.087 2.439 L 315.718 2.439 315.718 47.967 M374.635 10.366 C 375.792 14.726,377.820 22.317,379.142 27.236 C 382.310 39.026,390.038 67.850,392.547 77.236 C 393.643 81.335,395.037 86.542,395.644 88.807 C 396.251 91.072,396.748 93.053,396.748 93.210 C 396.748 93.405,393.934 93.496,387.946 93.496 L 379.143 93.496 378.959 92.751 C 378.857 92.341,377.533 87.371,376.016 81.707 L 373.257 71.409 358.580 71.339 L 343.902 71.269 343.902 82.382 L 343.902 93.496 335.095 93.496 L 326.287 93.496 326.287 47.967 L 326.287 2.439 349.409 2.439 L 372.530 2.439 374.635 10.366 M343.902 36.852 L 343.902 53.930 356.533 53.930 C 366.525 53.930,369.137 53.859,369.035 53.591 C 368.965 53.404,367.230 46.972,365.179 39.295 C 363.129 31.619,361.125 24.119,360.725 22.629 L 359.999 19.919 351.951 19.847 L 343.902 19.775 343.902 36.852 M358.704 24.526 C 359.020 25.718,360.758 32.218,362.566 38.970 C 364.374 45.722,365.854 51.301,365.854 51.369 C 365.854 51.436,361.463 51.491,356.098 51.491 L 346.341 51.491 346.341 36.851 L 346.341 22.212 352.236 22.285 L 358.130 22.358 358.704 24.526 M62.060 47.967 L 62.060 59.079 74.797 59.079 L 87.534 59.079 87.534 47.967 L 87.534 36.856 74.797 36.856 L 62.060 36.856 62.060 47.967 M62.240 73.893 C 62.141 73.993,62.060 78.993,62.060 85.005 L 62.060 95.935 78.997 95.935 L 95.935 95.935 95.935 84.824 L 95.935 73.713 79.178 73.713 C 69.962 73.713,62.340 73.794,62.240 73.893 " stroke="none" fill="#AF0000" fill-rule="evenodd"></path></g></svg>
                    </a>
                </div>

                <!-- Navigation Links -->
                <div class="hidden space-x-8 sm:-my-px sm:ml-10 sm:flex">
                    <x-nav-link :href="route('dashboard')" :active="request()->routeIs('dashboard')">
                        {{ __('Dashboard') }}
                    </x-nav-link>
                </div>

                <div class="hidden space-x-8 sm:-my-px sm:ml-10 sm:flex">
                    <x-nav-link :href="route('bugreport')" :active="request()->routeIs('bugreport')">
                        {{ __('Issue report') }}
                    </x-nav-link>
                </div>

                <div class="hidden space-x-8 sm:-my-px sm:ml-10 sm:flex">
                    <x-nav-link :href="route('news')" :active="request()->routeIs('news')">
                        {{ __('News and updates') }}
                    </x-nav-link>
                </div>

                <div class="hidden space-x-8 sm:-my-px sm:ml-10 sm:flex">
                    <x-nav-link :href="route('admin.releasemanager')" :active="request()->routeIs('admin.releasemanager')">
                        {{ __('Release management') }}
                    </x-nav-link>
                </div>

            </div>

            <!-- Settings Dropdown -->
            <div class="hidden sm:flex sm:items-center sm:ml-6">
                <x-dropdown align="right" width="48">
                    <x-slot name="trigger">
                        <button class="inline-flex items-center px-3 py-2 border border-transparent text-sm leading-4 font-medium rounded-md text-gray-500 dark:text-gray-400 bg-white dark:bg-gray-800 hover:text-gray-700 dark:hover:text-gray-300 focus:outline-none transition ease-in-out duration-150">
                            <div>{{ Auth::user()->name }}</div>

                            <div class="ml-1">
                                <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                                </svg>
                            </div>
                        </button>
                    </x-slot>

                    <x-slot name="content">
                        <x-dropdown-link :href="route('profile.edit')">
                            {{ __('Profile') }}
                        </x-dropdown-link>

                        <!-- Authentication -->
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf

                            <x-dropdown-link :href="route('logout')"
                                    onclick="event.preventDefault();
                                                this.closest('form').submit();">
                                {{ __('Log Out') }}
                            </x-dropdown-link>
                        </form>
                    </x-slot>
                </x-dropdown>
            </div>

            <!-- Hamburger -->
            <div class="-mr-2 flex items-center sm:hidden">
                <button @click="open = ! open" class="inline-flex items-center justify-center p-2 rounded-md text-gray-400 dark:text-gray-500 hover:text-gray-500 dark:hover:text-gray-400 hover:bg-gray-100 dark:hover:bg-gray-900 focus:outline-none focus:bg-gray-100 dark:focus:bg-gray-900 focus:text-gray-500 dark:focus:text-gray-400 transition duration-150 ease-in-out">
                    <svg class="h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                        <path :class="{'hidden': open, 'inline-flex': ! open }" class="inline-flex" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                        <path :class="{'hidden': ! open, 'inline-flex': open }" class="hidden" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>
        </div>
    </div>

    <!-- Responsive Navigation Menu -->
    <div :class="{'block': open, 'hidden': ! open}" class="hidden sm:hidden">
        <div class="pt-2 pb-3 space-y-1">
            <x-responsive-nav-link :href="route('dashboard')" :active="request()->routeIs('dashboard')">
                {{ __('Dashboard') }}
            </x-responsive-nav-link>
        </div>

        <!-- Responsive Settings Options -->
        <div class="pt-4 pb-1 border-t border-gray-200 dark:border-gray-600">
            <div class="px-4">
                <div class="font-medium text-base text-gray-800 dark:text-gray-200">{{ Auth::user()->name }}</div>
                <div class="font-medium text-sm text-gray-500">{{ Auth::user()->email }}</div>
            </div>

            <div class="mt-3 space-y-1">
                <x-responsive-nav-link :href="route('profile.edit')">
                    {{ __('Profile') }}
                </x-responsive-nav-link>

                <!-- Authentication -->
                <form method="POST" action="{{ route('logout') }}">
                    @csrf

                    <x-responsive-nav-link :href="route('logout')"
                            onclick="event.preventDefault();
                                        this.closest('form').submit();">
                        {{ __('Log Out') }}
                    </x-responsive-nav-link>
                </form>
            </div>
        </div>
    </div>
</nav>
