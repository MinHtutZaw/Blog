@props(['comments'])


<section class="max-w-2xl mx-auto px-4">

    <h5 class="my-4 text-gray-600 text-lg font-semibold">Comments ({{$comments->count()}})</h5>

     @foreach ($comments as $comment)
        <x-single-comment :comment="$comment" />
    @endforeach

</section>