<x-layout>
  <x-slot name="title">
    <title>All Blogs</title>
  </x-slot>


  @foreach ($blogs as $blog)

  <h2>
    {{$blog->title}}
  </h2>

  <div>
    <p>Author is -
      <a href="/users/{{$blog->author->id}} ">{{$blog->author->username}}</a>
    </p>
    <p>{{$blog->intro}}</p>

    <p>Created at {{$blog->created_at->diffForHumans()}} </p>
    <p>Category - <a href="/categories/{{$blog->category->slug}}">{{$blog->category->name}} </p></a>

    <a href="/blogs/{{$blog->slug}}  "> More details</a>
  </div>
  @endforeach



</x-layout>