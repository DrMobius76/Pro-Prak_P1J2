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
        <!-- <div id="button-subcontainer"> -->
        <div class="button-subcontainer bg-white dark:bg-gray-800 shadow-sm sm:rounded-lg">
            <div class="p-6 text-gray-900 dark:text-gray-100">
                {{ __("Je bent ingelogd!") }}
            </div>
        </div>
        <!-- </div> -->
    </div>

    <div class="button-container">
        <div class="button-subcontainer bg-white dark:bg-gray-800 shadow-sm sm:rounded-lg">
            @if (Auth::user()->isAdmin == 1)
            <a href="#">
                <div class="menu p-6 text-gray-900 dark:text-gray-100">
                    {{ __("Verander het menu") }}
                </div>
            </a>
            <a href="#">
                <div class="reservation text-gray-900 dark:text-gray-100">
                    {{ __("Bekijk & verander reserveringen") }}
                </div>
            </a>
            @endif
        </div>
    </div>
    <div class="button-container">
        <div class="button-subcontainer bg-white dark:bg-gray-800 shadow-sm sm:rounded-lg">
            @if (Auth::user()->isAdmin == 1)
            <a href="#">
                <div class="menu p-6 text-gray-900 dark:text-gray-100">
                    {{ __("Verander de homepage") }}
                </div>
            </a>
            <a href="#">
                <div class="menu p-6 text-gray-900 dark:text-gray-100">
                    {{ __("Verander de over ons pagina") }}
                </div>
            </a>
            @endif
        </div>
    </div>

</x-app-layout>