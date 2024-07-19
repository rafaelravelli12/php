@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="mb-3">
                <a href="{{ url('/users') }}" class="btn btn-secondary">{{ __('Return to users list') }}</a>
            </div>
            <div class="card mb-3">
                <div class="card-header">{{ __('Edit user') }}</div>
                <div class="card-body">
                    <form method="POST" action="{{ url('/users/' . $user->id) }}">
                    @csrf
                    @method('PUT')

                        <div class="form-group row mb-3">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>
                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control" name="name" required value="{{ $user->name }}" autofocus>
                            </div>
                        </div>

                        <div class="form-group row mb-3">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('Email') }}</label>
                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control" name="email" required value="{{ $user->email }}">
                            </div>
                        </div>                  

                        <div class="form-group row mb-3">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>
                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control" name="password" required value="{{ $user->password }}">
                            </div>
                        </div>

                        @if (auth()->user()->role == "globaladmin")
                            <div class="form-group row mb-3">
                                <label for="establishment_id" class="col-md-4 col-form-label text-md-right">{{ __('Establishment') }}</label>
                                <div class="col-md-6">
                                    <select id="establishment_id" class="form-control" name="establishment_id" required>
                                        @foreach($establishments as $establishment)
                                            @if ($establishment->id !== 1)
                                                <option value="{{ $establishment->id }}" {{ $user->establishment_id == $establishment->id ? 'selected' : '' }}>{{ $establishment->name }}</option>
                                            @endif
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                        @else
                            <div class="form-group row mb-3">
                                <label for="nome" class="col-md-4 col-form-label text-md-right">{{ __('Establishment') }}</label>
                                <div class="col-md-6">
                                    <input type="hidden" name="establishment_id" value="{{ auth()->user()->establishment->id }}">
                                    <input type="text" class="form-control" value="{{ auth()->user()->establishment->name }}" disabled>
                                </div>
                            </div>
                        @endif

                        <div class="form-group row mb-3">
                            <label for="role" class="col-md-4 col-form-label text-md-right">{{ __('Role') }}</label>
                            <div class="col-md-6">
                                <select name="role" id="role" class="form-control" required>
                                    <option value="localadmin" {{ $user->role == 'localadmin' ? 'selected' : '' }}>localadmin</option>
                                    <option value="operational" {{ $user->role == 'operational' ? 'selected' : '' }}>operational</option>
                                </select>
                            </div>
                        </div>

                        <div class="form-group row mb-3">
                            <label for="country" class="col-md-4 col-form-label text-md-right">{{ __('Created At') }}</label>
                            <div class="col-md-6">
                                <input id="created_at" type="text" class="form-control" name="created_at" required value="{{ $user->created_at }}" disabled>
                            </div>
                        </div>

                        <div class="form-group row mb-3">
                            <label for="country" class="col-md-4 col-form-label text-md-right">{{ __('Updated At') }}</label>
                            <div class="col-md-6">
                                <input id="updated_at" type="text" class="form-control" name="updated_at" required value="{{ now()->toDateTimeString() }}" disabled>
                            </div>
                        </div>

                        <div class="form-group row mb-3 justify-content-center">
                            <div class="col-md-6 text-center">
                                <button type="submit" class="btn btn-primary">{{ __('Update') }}</button>
                            </div>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
