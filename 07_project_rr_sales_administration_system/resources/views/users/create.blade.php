@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="mb-3">
                <a href="{{ url('/users') }}" class="btn btn-secondary" disabled>{{ __('Return to Users list') }}</a>
            </div>
            <div class="card mb-3">
                <div class="card-header">{{ __('Add User') }}</div>
                <div class="card-body">
                    <form method="POST" action="{{ url('/users/store') }}">
                    @csrf
                        <div class="form-group row mb-3">
                            <label for="cnpj" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>
                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control" name="name" required autofocus>
                            </div>
                        </div>

                        <div class="form-group row mb-3">   
                            <label for="cnpj" class="col-md-4 col-form-label text-md-right">{{ __('Email') }}</label>
                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control" name="email" required>
                            </div>
                        </div>

                        <div class="form-group row mb-3">
                            <label for="cnpj" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>
                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control" name="password" required minlength="8">
                                <input id="establishment_id" value = "{{auth()->user()->establishment_id}}" type="hidden" class="form-control" name="establishment_id" required minlength="8">
                            </div>
                        </div>

                        @if (auth()->user()->role == "globaladmin")
                            <div class="form-group row mb-3">
                                    <label for="nome" class="col-md-4 col-form-label text-md-right">Establishment</label>
                                    <div class="col-md-6">
                                    <select class="form-select" name="establishment_id" required>
                                        <option value="" selected disabled>Select User Establishment</option>
                                        @foreach ($establishments as $establishment)
                                            @if ($establishment->id !== 1)
                                                <option value="{{ $establishment->id }}">{{ $establishment->name }}</option>
                                            @endif
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                        @else
                            <div class="form-group row mb-3">
                                <label for="nome" class="col-md-4 col-form-label text-md-right">Establishment</label>
                                <div class="col-md-6">
                                    <input type="hidden" name="establishment_id" value="{{ auth()->user()->establishment->id }}">
                                    <input type="text" class="form-control" value="{{ auth()->user()->establishment->name }}" disabled>
                                </div>
                            </div>
                        @endif

                        <div class="form-group row mt-3 mb-3">
                            <label for="role" class="col-md-4 col-form-label text-md-right">{{ __('Role') }}</label>
                            <div class="col-md-6">
                                <select name="role" id="role" class="form-select mt-1" required>
                                    <option value="" selected disabled>Select Role</option>
                                    @foreach(['localadmin', 'operational'] as $status)
                                        <option value="{{ $status }}">{{ $status }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>                      

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Add User') }}
                                </button>
                            </div>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
