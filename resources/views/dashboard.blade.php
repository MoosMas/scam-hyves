<x-app-layout>
	
	<div class="w-75 py-12 mx-auto">
		<div class="flex justify-content-between">
			<div class="w-50">
				<h2>Post a message</h2>
				<form method="POST" action="{{route("post.store")}}">
					@csrf

					<div class="form-group mb-3">
						<input name="title" type="text" id="title" placeholder="Title"
						       class="w-100 block p-2 mb-3 text-gray-900 border border-gray-300 rounded-lg">
					</div>

					<div class="form-group mb-3">
					<textarea name="message" id="message" rows="3"
					          class="w-100 block p-2.5 text-sm text-gray-900  rounded-lg border border-gray-300"
					          placeholder="Write your thoughts here..."></textarea>
					</div>

					<input type="submit" class="btn btn-primary">

				</form>
			</div>

			<div class="w-40">

			</div>
		</div>

		<hr>

		<div class="feed">
			@foreach($posts as $post)
				<livewire:post :post="$post" :wire:key="$post->id">
			@endforeach
		</div>
	</div>

</x-app-layout>
