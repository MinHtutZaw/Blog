
  <!-- Blogs You May Like -->
  <section class="container mx-auto px-4 my-10">
      <h3 class="text-2xl font-bold text-center mb-8">Blogs You May Like</h3>
      <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
        <!-- Blog Card -->
        @foreach ($randomBlogs as $blog)
          <x-blog-card :blog="$blog" />
        @endforeach
      </div>
    </section>

    