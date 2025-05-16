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


    <section class="container mx-auto px-4">
        <div class="max-w-2xl mx-auto">
            @auth
            <x-card-wrapper>
                <form
                    action="/blogs/{{$blog->slug}}/comments"
                    method="POST">
                    @csrf
                    <div class="mb-4">
                        <textarea
                            name="body"
                            cols="10"
                            rows="5"
                            placeholder="say something..."
                            class="w-full border-0 rounded p-3 focus:outline-none focus:ring focus:ring-blue-300 resize-none">
                        </textarea>
                        <x-error name="body"/>
                    </div>
                    <div class="flex justify-end">
                        <button
                            type="submit"
                            class="bg-blue-600 text-white px-5 py-2 rounded hover:bg-blue-700 transition">Submit</button>
                    </div>
                </form>
            </x-card-wrapper>
            @else
            <p class="text-center">please <a href="/login" class="underline text-blue-500">login</a> to participate in this discussion.</p>
            @endauth
        </div>
    </section>

    <x-comments :comments="$blog->comments" />
    

   



</x-layout>