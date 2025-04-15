@extends('layout')

@section('title')
 <title>All Blogs</title>
@endsection

@section('content')
    
@foreach ($blogs as $blog)

<h2>
       {{$blog->title}}
</h2>

<div>
    <p>{{$blog->intro}}</p>

  <p>Created at {{$blog->date}}  </p>
  <a href="/blogs/{{$blog->slug}}  "> See more</a>
</div>
@endforeach

@endsection