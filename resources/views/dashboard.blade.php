    <x-app-layout>
    <x-slot name="header">
    </x-slot>
</x-app-layout>
    
{{--The grid is bootstrap--}}
            <div class="row">
                <div class="col-sm-8"><h2>Post a message</h2>
                    <form method="POST" action="{{route("post.store")}}">
                        @csrf
                            <input name="title" type="text" id="title" placeholder="Title" class="block w-50 p-2 mb-3 text-gray-900 border border-gray-300 rounded-lg">
                            <textarea name="message" id="message" rows="4" class="block p-2.5 w-50  text-sm text-gray-900  rounded-lg border border-gray-300" placeholder="Write your thoughts here..."></textarea>
                        <input type="submit">
                </form>
            </div>

                <div class="col-sm-4">
                    <div id="accordion-collapse" data-accordion="collapse">
                        <h5 id="accordion-collapse-heading-1">
                            <button type="button" class="flex items-center justify-between w-75 p-2 font-medium text-center" data-accordion-target="#accordion-collapse-body-1" aria-expanded="true" aria-controls="accordion-collapse-body-1">
                                <span>What is Flowbite?</span>
                                <svg data-accordion-icon class="w-2 h-2 rotate-180 shrink-0" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                            </button>
                        </h5>

                        <div id="accordion-collapse-body-1" class="hidden" aria-labelledby="accordion-collapse-heading-1">
                            <div class="p-1 font-light border border-b-0 border-gray-200 w-75">
                                <img src="public/img/KoopGEmsKnopBetter.jpg" alt="test" class="mb-2 w-100">
                        </div>
                    </div>

                    <div id="accordion-collapse" data-accordion="collapse">
                        <h5 id="accordion-collapse-heading-1">
                            <button type="button" class="flex items-center justify-between w-75 p-2 font-medium text-center" data-accordion-target="#accordion-collapse-body-1" aria-expanded="true" aria-controls="accordion-collapse-body-1">
                                <span>What is Flowbite?</span>
                                <svg data-accordion-icon class="w-2 h-2 rotate-180 shrink-0" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                            </button>
                        </h5>
                    </div>
                </div>
        </div>








