<x-layout>
  <x-slot name="title">
    <title>All Blogs</title>
  </x-slot>

  
    @foreach ($blogs as $blog)

    <h2>
      {{$blog->title}}
    </h2>

    <div>
      <p>{{$blog->intro}}</p>

      <p>Created at {{$blog->created_at->diffForHumans()}} </p>
      <a href="/blogs/{{$blog->slug}}  "> More details</a>
    </div>
    @endforeach
  


</x-layout>