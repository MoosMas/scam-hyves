<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Profile') }}
        </h2>
        <a class="text-primary no-underline" href="{{route('profile.show', Auth::id())}}">Profile page</a>
    </x-slot>

    <div class="ms-5 mt-3 card-group w-50">
        <div class="max-w-xs bg-white border border-gray-200 shadow">
            <img class="" src="{{url('/img/1.png')}}" alt="" />
        </div>
        <div class="card">
            <div class="card-body">
                <p class="card-text">Naam:</p>
                <p class="card-text">Leeftijd:</p>
                <p class="card-text">Woonplaats:</p>
            </div>
        </div>
    </div>
</x-app-layout>
