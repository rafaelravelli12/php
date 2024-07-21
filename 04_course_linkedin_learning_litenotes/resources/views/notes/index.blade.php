<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ request()->routeIs('notes.index') ? __('Notes') : __('Trash') }}
        </h2>
    </x-slot>

	<div class="py-6">
		<div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
			<x-alert-success>
				{{ session('success') }}
			</x-alert-success>
			@if(request()->routeIs('notes.index'))
				<x-primary-button>
					<a href="{{ route('notes.create') }}">Add New Note</a>
				</x-primary-button>
			@endif
			@forelse ($notes as $note)
				<div class="mt-6 p-6 bg-white border-b border-gray-200 shadow-sm sm:rounded-lg">					
					<h2 class="font-semibold text-xl">
						<a 
							@if(request()->routeIs('notes.index'))
								href="{{ route('notes.show', $note) }}"
							@else
                            	href="{{ route('trashed.show', $note) }}"
							@endif
							>
							{{ $note->title }}
						</a>						
					</h2>
					<p class="mt-2">{{ Str::limit($note->text, 200) }}</p>
					<span class="block mt-4 text-sm opacity-70">{{ $note->updated_at->diffForHumans() }}</span>
				</div>
			@empty
				@if(request()->routeIs('notes.index'))
					<p class="mt-2">You have no notes yet.</p>
				@else
					<p class="mt-2">No item in the Trash.</p>
				@endif
			@endforelse
			{{ $notes->links()}}
		</div>
	</div>

</x-app-layout>
