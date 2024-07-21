@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="mb-3">
                <a href="{{ url('/establishments') }}" class="btn btn-secondary" disabled>{{ __('Return to Establishments list') }}</a>
            </div>
            <div class="card mb-3">
                <div class="card-header">{{ __('Archive Establishment') }}</div>
                <div class="card-body">
                    <form method="POST" action="{{ url('/establishments/' . $establishment->id) }}">
                    @csrf
                    @method('DELETE')                       

                        <div class="form-group row mb-3">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>
                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control" name="name" required value="{{ $establishment->name }}" disabled>
                            </div>
                        </div>

                        <div class="form-group row mb-3">
                            <label for="cnpj" class="col-md-4 col-form-label text-md-right">{{ __('Identification') }}</label>
                            <div class="col-md-6">
                                <input id="identification" type="text" class="form-control" name="identification" required value="{{ $establishment->identification }}" disabled>
                            </div>
                        </div>

                        <div class="form-group row mb-3">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Zip Code') }}</label>
                            <div class="col-md-6">
                                <input id="zip_code" type="text" class="form-control" name="zip_code" required value="{{ $establishment->zip_code }}" disabled>
                            </div>
                        </div>

                        <div class="form-group row mb-3">
                            <label for="address" class="col-md-4 col-form-label text-md-right">{{ __('Address') }}</label>
                            <div class="col-md-6">
                                <input id="address" type="text" class="form-control" name="address" required value="{{ $establishment->address }}" disabled>
                            </div>
                        </div>

                        <div class="form-group row mb-3">
                            <label for="city" class="col-md-4 col-form-label text-md-right">{{ __('City') }}</label>
                            <div class="col-md-6">
                                <input id="city" type="text" class="form-control" name="city" required value="{{ $establishment->city }}" disabled>
                            </div>
                        </div>

                        <div class="form-group row mb-3">
                            <label for="state" class="col-md-4 col-form-label text-md-right">{{ __('State') }}</label>
                            <div class="col-md-6">
                                <input id="state" type="text" class="form-control" name="state" required value="{{ $establishment->state }}" disabled>
                            </div>
                        </div>

                        <div class="form-group row mb-3">
                            <label for="country" class="col-md-4 col-form-label text-md-right">{{ __('Country') }}</label>
                            <div class="col-md-6">
                                <input id="country" type="text" class="form-control" name="country" required value="{{ $establishment->country }}" disabled>
                            </div>
                        </div>

                        <div class="form-group row mb-3">
                            <label for="country" class="col-md-4 col-form-label text-md-right">{{ __('Created At') }}</label>
                            <div class="col-md-6">
                                <input id="coucreated_atntry" type="text" class="form-control" name="created_at" required value="{{ $establishment->created_at }}" disabled>
                            </div>
                        </div>

                        <div class="form-group row mb-3">
                            <label for="country" class="col-md-4 col-form-label text-md-right">{{ __('Updated At') }}</label>
                            <div class="col-md-6">
                                <input id="updated_at" type="text" class="form-control" name="updated_at" required value="{{ $establishment->updated_at }}" disabled>
                            </div>
                        </div>

                        <div class="form-group row mb-3 justify-content-center">
                            <div class="col-md-6 text-center">
                                <button type="submit" class="btn btn-danger">{{ __('Archive') }}</button>
                            </div>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
