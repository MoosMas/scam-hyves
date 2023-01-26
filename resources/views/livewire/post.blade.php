<div class="max-w-2xl px-8 py-4 bg-white rounded-lg shadow-md my-3">
	<div class="flex items-center justify-between">
		<span class="text-sm font-light text-gray-600">{{$post->created_at}}</span>
	</div>

	<div class="mt-2">
		<span class="text-2xl font-bold text-gray-700">{{$post->title}}</span>
		<p class="mt-2 text-gray-600">{{$post->message}}</p>
	</div>

	<div class="flex justify-content-between items-center">
		<div class="flex items-center">
			<img class="hidden object-cover w-10 h-10 mx-4 rounded-full sm:block"
			     src="https://images.unsplash.com/photo-1502980426475-b83966705988?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=40&q=80"
			     alt="avatar">
			<a class="font-bold text-gray-700 cursor-pointer" tabindex="0" role="link">{{$post->poster->name}}</a>
		</div>
		
{{--		<div class="border border-gray-300 rounded-lg px-3">--}}
{{--			@foreach(auth()->user()->inventory as $item)--}}
{{--				<span wire:click="toggleLike({{$item->id}})">{{$item->name}}</span>--}}
{{--			@endforeach--}}
{{--		</div>--}}

	</div>
</div>
