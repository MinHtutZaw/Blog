@props(['comment'])
<x-card-wrapper>
 <div class="flex items-start">
        <img
            src="{{$comment->author->avatar}}"
            alt=""
            class="w-12 h-12 rounded-full">

        <div class="ml-4">
            <h6>{{$comment->author->name}}</h6>
            <p class="text-secondary">{{$comment->created_at->diffForHumans()}}</p>
        </div>
    </div>
    <p class="mt-3 text-gray-700">
        {{$comment->body}}
    </p>
</x-card-wrapper>

   