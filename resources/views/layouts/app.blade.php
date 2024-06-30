<!DOCTYPE html>

<html :class="{ 'theme-dark': dark }" x-data="data()" lang="en">

<head>

    <meta charset="UTF-8" />

    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <title>Windmill Dashboard</title>

    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap" rel="stylesheet" />

    <link rel="stylesheet" href="{{ asset('assets/css/tailwind.output.css') }}" />

    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js"></script>

    <script src="{{ asset('assets/js/init-alpine.js') }}"></script>

    {{-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.3/Chart.min.css" /> --}}

    {{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.3/Chart.min.js"></script> --}}

    {{-- <script src="{{ asset('assets/js/charts-lines.js') }}"></script> --}}

    {{-- <script src="{{ asset('assets/js/charts-pie.js') }}"></script> --}}

    <script src="{{ asset('assets/js/focus-trap.js') }}"></script>

    @livewireStyles

</head>

<body>

    <div class="flex h-screen bg-gray-50 dark:bg-gray-900" :class="{ 'overflow-hidden': isSideMenuOpen }">

        <x-common.sidebar />

        <div class="flex flex-col flex-1 w-full">

            <x-common.header />

            <main class="h-full overflow-y-auto">

                {{ $slot }}

            </main>

        </div>

    </div>

</body>

</html>