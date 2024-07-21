@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            @if (auth()->user()->role == 'globaladmin')
            <div class="mb-3">
                <a href="{{ url('/establishments/create') }}" class="btn btn-primary">{{ __('Add New Establishment') }}</a>
            </div>
            @endif
            <div class="card">
                <div class="card-header">{{ __('List of Establishments') }}</div>
                <div class="card-body">                    
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col">Id</th>                                    
                                    <th scope="col">Name</th>
                                    <th scope="col">Identification</th>
                                    <th scope="col">View</th>
                                    @if(auth()->user()->role == 'globaladmin' || auth()->user()->role == 'localadmin')
                                        <th scope="col">Edit</th>
                                    @endif
                                    @if(auth()->user()->role == 'globaladmin')
                                        <th scope="col">Archive</th>
                                    @endif
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($establishments as $establishment)
                                <tr>
                                    <td>{{ $establishment->id }}</td>
                                    <td>{{ $establishment->name }}</td>
                                    <td>{{ $establishment->identification }}</td>
                                    <td><a href="{{ url('/establishments/' . $establishment->id) }}" class="btn btn-sm btn-primary">{{ __('View') }}</a></td>
                                    @if(auth()->user()->role == 'globaladmin' || auth()->user()->role == 'localadmin')
                                        <td><a href="{{ url('/establishments/' . $establishment->id . '/edit') }}" class="btn btn-sm btn-secondary">{{ __('Edit') }}</a></td>
                                    @endif
                                    @if(auth()->user()->role == 'globaladmin')
                                        <td><a href="{{ url('/establishments/' . $establishment->id . '/delete') }}" class="btn btn-sm btn-danger">{{ __('Archive') }}</a></td>
                                    @endif
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                        <div class="pagination-wrapper" style="width: 100%; overflow-x: auto;">
                            {{ $establishments->links() }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
