<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="@container py-12">
        <div class="relative grid min-h-screen grid-cols-[1fr_2.5rem_auto_2.5rem_1fr] grid-rows-[1fr_1px_auto_1px_1fr]">
            <div class="max-w-xl flex col-start-3 row-start-3 sm:w-2xl mx-auto bg-white dark:bg-gray-800">
                <ul class="nav nav-tabs p-6 text-gray-900 dark:text-gray-100">
                    <li class="nav-item">
                        <a class="nav-link active" href="">{{ __('Home') }}</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="">Create a Posts</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('profile.edit') }}">Profile</a>
                    </li>
                </ul> 
            </div>
        
        <div class="max-w-lg flex mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    {{ __("You're logged in!") }}
                </div>
            </div>
        </div></div>
    </div>
</x-app-layout>
