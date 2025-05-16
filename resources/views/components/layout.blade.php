<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Blogs</title>
  <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
  <script src="//unpkg.com/alpinejs" defer></script>

</head>

<body class="bg-white text-gray-800 scroll-smooth min-h-screen flex flex-col" id="home">

  <body>
    <x-navbar />
    <main class="flex-1">
      {{$slot}} <!-- Content will be added here -->
    </main>
    <x-footer />
  </body>

</html>