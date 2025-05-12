<x-layout>


    <!-- Single Blog Section -->
    <div class="container mx-auto px-4 py-10">
        <div class="max-w-2xl mx-auto text-center">
            <img
                src="https://creativecoder.s3.ap-southeast-1.amazonaws.com/blogs/GOLwpsybfhxH0DW8O6tRvpm4jCR6MZvDtGOFgjq0.jpg"
                alt="..."
                class="w-full rounded shadow" />

            <h3 class="text-2xl font-semibold my-4">{{$blog->title}} </h3>
            <p class="text-md mt-1 mb-3 underline">
                <a href="/users/{{$blog->author->username}}">{{$blog->author->name}}</a>

            </p>
            <span class="bg-blue-600 text-white text-xs px-2 py-1 rounded mr-4 ">
                <a href="/categories/{{$blog->category->slug}}">{{$blog->category->name}} </a>
            </span>
            <span class="text-gray-600"> {{$blog->created_at->diffForHumans()}} </span>
            <p class="leading-relaxed text-justify">
                {{$blog->body}}

            </p>
        </div>
    </div>

    <x-subscribe />

    <x-blogs_you_may_like :randomBlogs="$randomBlogs" />


</x-layout>