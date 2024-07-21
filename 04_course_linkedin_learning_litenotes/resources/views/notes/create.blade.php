<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Notes') }}
        </h2>
    </x-slot>
	<div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="my-6 p-6 bg-white border-b border-gray-200 shadow-sm sm:rounded-lg">
                <form action="{{ route('notes.store') }}" method="post">
                    @csrf
                    <x-text-input type="text" name="title" field="title" placeholder="Title" class="w-full mt-2" autocomplete="off" :value="@old('title')"></x-text-input>
					<!-- <textarea name="text" rows="10" placeholder="Start typing here..." class="peer block min-h-[auto] w-full mt-2 rounded border-0 bg-transparent px-3 py-[0.32rem] leading-[1.6] outline-none transition-all duration-200 ease-linear focus:placeholder:opacity-100 data-[te-input-state-active]:placeholder:opacity-100 motion-reduce:transition-none dark:text-neutral-200 dark:placeholder:text-neutral-200 [&:not([data-te-input-placeholder-active])]:placeholder:opacity-0 border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm" 
					id="exampleFormControlTextarea1"></textarea> -->
					<x-textarea name="text" rows="10" field="text" placeholder="Start typing here..." class="w-full mt-2" :value="@old('text')"></x-textarea>
                    <x-primary-button class="mt-2">Save Note</x-primary-button>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>
