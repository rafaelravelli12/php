<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ !$note->trashed() ? __('Notes') : __('Trash') }}
        </h2>
    </x-slot>

	<div class="py-6">
		<div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
			<x-alert-success>
				{{ session('success') }}
			</x-alert-success>
			<div class="flex">
				@if(!$note->trashed())
					<p class="opacity-70">
						<strong>Created: </strong> {{ $note->created_at->diffForHumans() }}
					</p>
					<p class="opacity-70 ml-2">
						<strong>Updated: </strong> {{ $note->updated_at->diffForHumans() }}
					</p>
					<x-primary-button style="margin-left: auto;">
						<a href="{{ route('notes.edit', $note) }}">Edit Note</a>
					</x-primary-button>
					<form action="{{ route('notes.destroy', $note) }}" method="post">
						@method('delete')
						@csrf
						<x-danger-button type="submit" style="margin-left: 6px;" 
							onclick="return confirm('Are you shure you wish to move this note to trash?')">Move to Trash</x-danger-button>
					</form>
				@else
					<p class="opacity-70">
						<strong>Deleted: </strong> {{ $note->deleted_at->diffForHumans() }}
					</p>
					<form action="{{ route('trashed.update', $note) }}" method="post" style="margin-left: auto;">
						@method('put')
						@csrf
						<x-primary-button type="submit">Restore Note</x-primary-button>
					</form>					
					<form action="{{ route('trashed.destroy', $note) }}" method="post">
						@method('delete')
						@csrf
						<x-danger-button type="submit" style="margin-left: 6px;" 
							onclick="return confirm('Are you shure you wish to delete this note forever? This action cannot be undone.')">Delete Forever</x-danger-button>
					</form>
				@endif
            </div>
			<div class="mt-6 p-6 bg-white border-b border-gray-200 shadow-sm sm:rounded-lg">					
				<h2 class="font-semibold text-xl">
					{{ $note->title }}
				</h2>
				<p class="mt-2">{!! nl2br(e($note->text)) !!}</p>
			</div>
		</div>
	</div>

</x-app-layout>
