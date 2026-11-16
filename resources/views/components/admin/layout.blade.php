{{-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Layout</title>
    <!doctype html>
<html>
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <link href="https://cdn.jsdelivr.net/npm/flowbite@4.0.1/dist/flowbite.min.css" rel="stylesheet" />
    <script src="https://cdn.jsdelivr.net/npm/flowbite@4.0.1/dist/flowbite.min.js"></script>
    @vite('resources/css/app.css')


  </head>
  <body>
    <h1 class="text-3xl font-bold underline">
      Hello world!
    </h1>
  </body>
</html>
</head>
<body>
    <div class="antialiased bg-gray-50 dark:bg-gray-900">
    <x-admin.navbar />
    <x-admin.sidebar />

    <!-- Sidebar -->

    <main class="p-4 md:ml-64 h-auto pt-20">
      <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-4 mb-4">
        {{ $slot }}
      </div>
    </main>
  </div>
</body>
</html> --}}

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Layout</title>

    <link href="https://cdn.jsdelivr.net/npm/flowbite@4.0.1/dist/flowbite.min.css" rel="stylesheet" />
    <script src="https://cdn.jsdelivr.net/npm/flowbite@4.0.1/dist/flowbite.min.js"></script>

    @vite('resources/css/app.css')
</head>

<body>
    <div class="antialiased bg-gray-50 dark:bg-gray-900">

        <x-admin.navbar />
        <x-admin.sidebar />

        <!-- Sidebar -->

        <main class="p-4 md:ml-64 h-auto pt-20">
            {{ $slot }}
        </main>

    </div>
</body>
</html>
