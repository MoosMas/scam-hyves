<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Profile') }}
        </h2>
        <a class="text-primary" href="{{route('profile.show', Auth::id())}}">Profile page</a>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">
            <div class="p-4 sm:p-8 bg-white shadow sm:rounded-lg">
                <div class="max-w-xl">
                    <form class="row g-3">
                        <div class="mb-6 col-md-8">
                            <label for="name" class="block mb-2 text-sm font-medium text-gray-900">Name</label>
                            <input type="text" id="name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5">
                        </div>
                        <div class="mb-6 col-md-6">
                            <label for="profilePicture" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Profile Picture</label>
                            <input type="image" id="profilePicture" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5">
                        </div>
                        <div class="mb-6 col-md-6">
                            <label for="backgroundColor" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Background Color</label>
                            <input type="color" class="form-control form-control-color" id="exampleBackgroundColorInput" value="#563d7c" title="Choose your color">
                        </div>
                        <div class="col-md-6">
                            <label for="font" class="block mb-2 text-sm font-medium text-gray-900">Font</label>
                            <select id="countries" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5">
                                <option selected>Choose a font...</option>
                                <option>Comic Sans</option>
                                <option>Sans Serif</option>
                                <option>Arial</option>
                                <option>Roboto</option>
                            </select>
                        </div>
                        <div class="col-md-4 mb-6">
                            <label for="fontColor" class="block mb-2 text-sm font-medium text-gray-900">Font Color</label>
                            <input type="color" class="form-control form-control-color" id="exampleFontColorInput" value="#563d7c" title="Choose your color">
                        </div>

                        <div class="col-12">
                            <button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center">Save</button>
                        </div>
                    </form>
                </div>
            </div>
            <div class="p-4 sm:p-8 bg-white shadow sm:rounded-lg">
                <div class="max-w-xl">
                    @include('profile.partials.update-profile-information-form')
                </div>
            </div>

            <div class="p-4 sm:p-8 bg-white shadow sm:rounded-lg">
                <div class="max-w-xl">
                    @include('profile.partials.update-password-form')
                </div>
            </div>

            <div class="p-4 sm:p-8 bg-white shadow sm:rounded-lg">
                <div class="max-w-xl">
                    @include('profile.partials.delete-user-form')
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
