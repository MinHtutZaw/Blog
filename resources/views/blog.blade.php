<x-layout>
    <x-slot name="title">
        <title>{{$blog->title}}</title>
    </x-slot>

    
    <h1>{{$blog->title}} </h1>

    <p>{{$blog->body}}</p>

    <a href="/blogs">Back</a>

</x-layout>