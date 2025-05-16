<nav class="bg-yellow-500 text-white" x-data="{ open: false }">
  <div class="max-w-7xl mx-auto px-4 py-4 flex items-center justify-between">
    <!-- Left: Logo -->
    <div class="flex-shrink-0">
      <a href="/" class="text-xl font-bold">FoodFusion</a>
    </div>

    <!-- Center: Navigation Links -->
    <div class="hidden md:flex flex-grow justify-center space-x-4">
      <a href="/" class="hover:text-blue-500">Home</a>
      <a href="/about" class="hover:text-blue-500">About Us</a>
      <a href="/recipes" class="hover:text-blue-500">Recipes</a>
      <a href="/community" class="hover:text-blue-500">Community Cookbook</a>
      <a href="/culinary-resources" class="hover:text-blue-500">Culinary Resources</a>
      <a href="/educational-resources" class="hover:text-blue-500">Educational Resources</a>
      
    </div>

    <!-- Right: User Auth -->
    <div class="hidden md:flex items-center space-x-4 justify-end">
      @auth
      <span>{{ auth()->user()->name }}</span>
      <img src="{{ auth()->user()->avatar }}" alt="User avatar" class="rounded-full w-6 h-6">
      <form action="/logout" method="POST">
        @csrf
        <button type="submit" class="hover:text-blue-500">Logout</button>
      </form>
    
      @endauth
    </div>

    <!-- Hamburger Icon for Mobile -->
    <button @click="open = !open" class="md:hidden focus:outline-none">
      <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
          d="M4 6h16M4 12h16M4 18h16" />
      </svg>
    </button>
  </div>

  <!-- Mobile Menu -->
  <div x-show="open" class="md:hidden px-4 pb-4 space-y-2">
    <a href="/" class="block hover:text-blue-500">Home</a>
    <a href="/about" class="block hover:text-blue-500">About Us</a>
    <a href="/recipes" class="block hover:text-blue-500">Recipes</a>
    <a href="/community" class="block hover:text-blue-500">Community Cookbook</a>
    <a href="/culinary-resources" class="block hover:text-blue-500">Culinary Resources</a>
    <a href="/educational-resources" class="block hover:text-blue-500">Educational Resources</a>
    

    @auth
    <span class="block">{{ auth()->user()->name }}</span>
    <form action="/logout" method="POST">
      @csrf
      <button type="submit" class="block hover:text-blue-500">Logout</button>
    </form>
    
    @endauth
  </div>
</nav>
