@props(['blogs','categories', 'currentCategory'])

<section class="max-w-7xl mx-auto px-4 " id="blogs">
  <h2 class="text-3xl font-bold text-center mb-8">Blogs</h2>

  <div class="max-w-4xl mx-auto mb-6 flex flex-wrap justify-center gap-4 items-start">
    <!-- Category Filter Dropdown -->
    <details class="relative">
      <summary
        class="cursor-pointer w-fit px-4 py-2 border border-blue-500 text-blue-500 rounded-md hover:bg-blue-50 focus:outline-none focus:ring-2 focus:ring-blue-300">
        {{ isset($currentCategory) ? $currentCategory->name : 'Filter By Category' }}
      </summary>
      <ul
        class="absolute mt-2 left-0 w-40 bg-white border border-gray-200 rounded shadow-md z-10">
        @foreach ($categories as $category)
        <li>
          <a
            href="/categories/{{ $category->slug }}"
            class="block px-4 py-2 hover:bg-gray-100 text-gray-700">
            {{ $category->name }}
          </a>
        </li>
        @endforeach
      </ul>
    </details>

  </div>
    <form class="max-w-md mx-auto mb-6" action=" ">
      <div class="flex">
        <input
          type="text"
          name="search"
          value="{{ request('search') }}"
          placeholder="Search Blogs..."
          class="w-full px-4 py-2 border border-gray-300 rounded-l focus:outline-none" />
        <button
          type="submit"
          class="bg-blue-600 text-white px-4 rounded-r">
          Search
        </button>
      </div>
    </form>

    <!-- Blog Cards -->
    <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
      @forelse ($blogs as $blog)
      <x-blog-card :blog="$blog" />
      @empty
        
        <p class="text-center text-gray-500 justify-center">No blogs found.</p>
      @endforelse 
      
    </div>
</section>