<head>
    @vite(['resources/scss/auth/dashboard.scss', 'resources/css/auth/dashboard.css'])
</head>

<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="button-container">
        <div class="button-subcontainer bg-white dark:bg-gray-800 shadow-sm sm:rounded-lg">
            <div class="p-6 text-gray-900 dark:text-gray-100">
                {{ __("Je bent ingelogd!") }}
            </div>
        </div>
    </div>

    <div class="button-container">
        <div class="button-subcontainer bg-white dark:bg-gray-800 shadow-sm sm:rounded-lg grid grid-cols-1 md:grid-cols-2">
            <div class="button-linkContainer hover:bg-slate-100 dark:hover:bg-sky-950">
                <a href="#">
                    <div class="menu p-6 text-gray-900 dark:text-gray-100">
                        {{ __("Verander het menu") }}
                    </div>
                </a>
            </div>
            <div class="button-linkContainer hover:bg-slate-100 dark:hover:bg-sky-950">
                <a href="#">
                    <div class="reservation text-gray-900 dark:text-gray-100">
                        {{ __("Bekijk & verander reserveringen") }}
                    </div>
                </a>
            </div>
        </div>
    </div>

</x-app-layout>