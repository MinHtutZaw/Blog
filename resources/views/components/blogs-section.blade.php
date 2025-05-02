@props(['blogs','categories', 'currentCategory'])

<section class="max-w-7xl mx-auto px-4" id="blogs">
  <h2 class="text-3xl font-bold text-center mb-8">Blogs</h2>
  <!-- <div class="flex justify-center mb-4">
        <select class="rounded-full px-4 py-1 border border-gray-300">
          <option>Filter by Category</option>
        </select>
        <select class="rounded-full px-4 py-1 border border-gray-300 mx-3">
          <option>Filter by Tag</option>
        </select>
      </div> -->

  <details class="relative inline-block justify-center">
    <summary
      class="cursor-pointer px-4 py-2 border border-blue-500 text-blue-500 rounded hover:bg-blue-50 focus:outline-none flex items-center gap-2">
      {{isset($currentCategory) ? $currentCategory->name : 'Filter By Category'}}
    </summary>

    <ul
      class="absolute mt-2 w-40 bg-white border border-gray-200 rounded shadow-md z-10">
      @foreach ($categories as $category)
      <li>
        <a
          href="/categories/{{$category->slug}}"
          class="block px-4 py-2 hover:bg-gray-100 text-gray-700">
          {{$category->name}}
        </a>
      </li>
      @endforeach




    </ul>

  </details>


  </div>
  <form class="max-w-md mx-auto mb-6" action=" " >
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
    @foreach ($blogs as $blog)
    <x-blog-card :blog="$blog" />
    @endforeach
  </div>
</section>