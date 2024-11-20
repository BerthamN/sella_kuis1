<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight text-center">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12 bg-gradient-to-b from-blue-50 to-blue-100 dark:from-gray-800 dark:to-gray-900">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-xl sm:rounded-lg border border-gray-200 dark:border-gray-700">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <div class="flex flex-col items-center">
                        <h3 class="text-2xl font-bold text-blue-600 dark:text-blue-300 mb-4">
                            {{ __("Welcome Back!") }}
                        </h3>
                        <p class="text-gray-700 dark:text-gray-400 text-center">
                            {{ __("You're logged in!") }}
                        </p>
                        <a href="#" class="mt-6 bg-blue-600 text-white px-4 py-2 rounded shadow hover:bg-blue-700 dark:bg-blue-500 dark:hover:bg-blue-600">
                            {{ __("Explore Features") }}
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
