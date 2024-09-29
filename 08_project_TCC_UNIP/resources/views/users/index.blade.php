@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="mb-3">
                <a href="{{ url('/users/create') }}" class="btn btn-primary">{{ __('Add New User') }}</a>
            </div>
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
                                    <th scope="col">Placa do Carro</th>
                                    <th scope="col">Update</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($users as $user)
                                <tr>
                                    <td>{{ $user->id }}</td>
                                    <td>{{ $user->name }}</td>
                                    <td>{{ $user->email }}</td>
                                    <td>{{ $user->placa_do_carro }}</td>
                                    <td>
                                        @if($user->carro_estacionado)
                                            <a href="{{ url('/users/' . $user->id . '/edit') }}" class="btn btn-sm btn-success">
                                                <i class="fas fa-check"></i> Carro Estacionado
                                            </a>
                                        @else
                                            <a href="{{ url('/users/' . $user->id . '/edit') }}" class="btn btn-sm btn-danger">
                                                <i class="fas fa-times"></i> Carro Não Estacionado
                                            </a>
                                        @endif
                                    </td>
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
