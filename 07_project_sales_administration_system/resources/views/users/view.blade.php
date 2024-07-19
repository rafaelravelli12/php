@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="mb-3">
                <a href="{{ url('/users') }}" class="btn btn-secondary" disabled>{{ __('Return to Users list') }}</a>
            </div>
            <div class="card mb-3">
                <div class="card-header">{{ __('View User') }}</div>
                <div class="card-body">
                    
                    <div class="form-group row mb-3">
                        <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>
                        <div class="col-md-6">
                            <input id="name" type="text" class="form-control" name="name" required value="{{ $user->name }}" disabled>
                        </div>
                    </div>

                    <div class="form-group row mb-3">
                        <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Email') }}</label>
                        <div class="col-md-6">
                            <input id="email" type="email" class="form-control" name="email" required value="{{ $user->email }}" disabled>
                        </div>
                    </div>

                    <div class="form-group row mb-3">
                        <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>
                        <div class="col-md-6">
                            <input id="password" type="password" class="form-control" name="password" required value="{{ $user->password }}" disabled>
                        </div>
                    </div>

                    <div class="form-group row mb-3">
                        <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Establishment') }}</label>
                        <div class="col-md-6">
                            <input id="role" type="text" class="form-control" name="role" required value="{{ $user->establishment->name }}" disabled>
                        </div>
                    </div>

                    <div class="form-group row mb-3">
                        <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Role') }}</label>
                        <div class="col-md-6">
                            <input id="role" type="text" class="form-control" name="role" required value="{{ $user->role }}" disabled>
                        </div>
                    </div>

                    <div class="form-group row mb-3">
                        <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Created At') }}</label>
                        <div class="col-md-6">
                            <input id="created_at" type="text" class="form-control" name="created_at" required value="{{ $user->created_at }}" disabled>
                        </div>
                    </div>

                    <div class="form-group row mb-3">
                        <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Updated At') }}</label>
                        <div class="col-md-6">
                            <input id="updated_at" type="text" class="form-control" name="updated_at" required value="{{ $user->updated_at }}" disabled>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
