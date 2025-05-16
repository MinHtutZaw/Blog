<x-layout>
    @if (session('success'))
    <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded text-center" role="alert">
        @auth
        Welcome, {{ auth()->user()->name }}!
        @else
        {{ session('success') }}
        @endauth
    </div>
    @endif
    <x-hero />
    <x-blogs_you_may_like :randomBlogs="$randomBlogs" />

</x-layout>