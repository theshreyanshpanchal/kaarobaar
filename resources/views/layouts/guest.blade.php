<!DOCTYPE html>

<html :class="{ 'theme-dark': dark }" x-data="data()" lang="en">

<head>

    <meta charset="UTF-8" />

    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <title>Windmill Dashboard</title>

    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap" rel="stylesheet" />

    <link rel="stylesheet" href="./assets/css/tailwind.output.css" />

    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>

    <script src="./assets/js/init-alpine.js"></script>

    @livewireStyles

</head>

<body>

    <div class="flex items-center min-h-screen p-6 bg-gray-50 dark:bg-gray-900">

        {{ $slot }}

    </div>

  </body>

</html>
