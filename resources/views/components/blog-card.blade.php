@props(['blog'])


<div class="bg-white shadow rounded overflow-hidden">
          <img
            src="https://creativecoder.s3.ap-southeast-1.amazonaws.com/blogs/GOLwpsybfhxH0DW8O6tRvpm4jCR6MZvDtGOFgjq0.jpg"
            alt="Blog"
            class="w-full h-48 object-cover"
          />
          <div class="p-4">
            <h3 class="text-xl font-semibold"> {{$blog->title}} </h3>
            <p class="text-sm text-gray-500 mt-1">
            <a href="/?username={{$blog->author->username}}">{{$blog->author->name}}</a>
               - <span> {{$blog->created_at->diffForHumans()}}  </span>
            </p>
            <div class="flex flex-wrap gap-1 mt-3 justify-center ">
              <span class="bg-red-600 text-white text-xs px-2 py-1 rounded  ">
                <a href="/?category={{$blog->category->slug}}">{{$blog->category->name}} </a>
                
              </span>
            
            </div>
            <p class="text-sm mt-3">
              {{$blog->intro}}
            </p>
            <a   href="/blogs/{{$blog->slug}}" class="inline-block mt-4 bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700">Read More</a>
          </div>


          
</div>
      