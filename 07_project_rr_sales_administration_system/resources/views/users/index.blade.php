@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            @if (auth()->user()->role == 'globaladmin' || auth()->user()->role == 'localadmin')
            <div class="mb-3">
                <a href="{{ url('/users/create') }}" class="btn btn-primary">{{ __('Add New User') }}</a>
            </div>
            @endif
            <div class="card">
                <div class="card-header">{{ __('List of Users') }}</div>
                <div class="card-body">                    
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col">Id</th>
                                    <th scope="col">Name</th>
                                    <th scope="col">Email</th>
                                    <th scope="col">Establishment</th>
                                    <th scope="col">Role</th>
                                    <th scope="col">View</th>
                                    @if(auth()->user()->role == 'globaladmin' || auth()->user()->role == 'localadmin')
                                        <th scope="col">Edit</th>
                                        <th scope="col">Delete</th>
                                    @endif
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($users as $user)
                                <tr>
                                    <td>{{ $user->id }}</td>
                                    <td>{{ $user->name }}</td>
                                    <td>{{ $user->email }}</td>
                                    <td>{{ $user->establishment->name }}</td>
                                    <td>{{ $user->role }}</td>
                                    <td><a href="{{ url('/users/' . $user->id) }}" class="btn btn-sm btn-primary">{{ __('View') }}</a></td>
                                    @if(auth()->user()->role == 'globaladmin' || auth()->user()->role == 'localadmin')
                                        <td><a href="{{ url('/users/' . $user->id . '/edit') }}" class="btn btn-sm btn-secondary">{{ __('Edit') }}</a></td>
                                        <td><a href="{{ url('/users/' . $user->id . '/delete') }}" class="btn btn-sm btn-danger">{{ __('Delete') }}</a></td>
                                    @endif
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                        <div class="pagination-wrapper" style="width: 100%; overflow-x: auto;">
                            {{ $users->links() }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
