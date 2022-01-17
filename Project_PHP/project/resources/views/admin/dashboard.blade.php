<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Admin dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    Hello Admin! You're logged in!
                </div>
            </div>
        </div>
        <br>
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('users.index') }}">
                    <x-button class="ml-4">
                    {{ __('Users managment') }}
                    </x-button>
                </a>
        </div>
    </div>
</x-app-layout>