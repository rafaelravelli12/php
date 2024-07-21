@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="mb-3">
                <a href="{{ url('/clients/create') }}" class="btn btn-primary">{{ __('Add New Client') }}</a>
            </div>
            <div class="card">
                <div class="card-header">{{ __('List of Clients') }}</div>
                <div class="card-body">                    
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col">Id</th>
                                    <th scope="col">Name</th>
                                    <th scope="col">Identification</th>
                                    <th scope="col">Establishment</th>
                                    <th scope="col">View</th>
                                    <th scope="col">Edit</th>
                                    <th scope="col">Delete</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($clients as $client)
                                <tr>
                                    <td>{{ $client->id }}</td>
                                    <td>{{ $client->establishment->name }}</td>
                                    <td>{{ $client->name }}</td>
                                    <td>{{ $client->identification }}</td>
                                    <td><a href="{{ url('/clients/' . $client->id) }}" class="btn btn-sm btn-primary">{{ __('View') }}</a></td>
                                    @if(auth()->user()->role == 'globaladmin' || auth()->user()->role == 'localadmin')
                                        <td><a href="{{ url('/clients/' . $client->id . '/edit') }}" class="btn btn-sm btn-secondary">{{ __('Edit') }}</a></td>
                                        <td><a href="{{ url('/clients/' . $client->id . '/delete') }}" class="btn btn-sm btn-danger">{{ __('Delete') }}</a></td>
                                    @endif
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                        <div class="pagination-wrapper" style="width: 100%; overflow-x: auto;">
                            {{ $clients->links() }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
