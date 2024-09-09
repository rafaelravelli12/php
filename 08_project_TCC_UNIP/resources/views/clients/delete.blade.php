@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="mb-3">
                <a href="{{ url('/clients') }}" class="btn btn-secondary" disabled>{{ __('Return to Clients list') }}</a>
            </div>
            <div class="card mb-3">
                <div class="card-header">{{ __('Delete Client') }}</div>
                <div class="card-body">
                    <form method="POST" action="{{ url('/clients/' . $client->id) }}">
                    @csrf
                    @method('DELETE')
                        <div class="form-group row mb-3">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>
                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control" name="name" required value="{{ $client->name }}" disabled>
                            </div>
                        </div>
                        
                        <div class="form-group row mb-3">
                            <label for="cnpj" class="col-md-4 col-form-label text-md-right">{{ __('Indentification') }}</label>
                            <div class="col-md-6">
                                <input id="identification" type="text" class="form-control" name="identification" required value="{{ $client->identification }}" disabled>
                            </div>
                        </div>
                        
                        <div class="form-group row mb-3">
                            <label for="establishment_id" class="col-md-4 col-form-label text-md-right">{{ __('Establishment Owner') }}</label>
                            <div class="col-md-6">
                                <input id="establishment_name" type="text" class="form-control" value="{{ $client->establishment->name }}" disabled>
                            </div>
                        </div>

                        <div class="form-group row mb-3">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Zip Code') }}</label>
                            <div class="col-md-6">
                                <input id="zip_code" type="text" class="form-control" name="zip_code" required value="{{ $client->zip_code }}" disabled>
                            </div>
                        </div>

                        <div class="form-group row mb-3">
                            <label for="address" class="col-md-4 col-form-label text-md-right">{{ __('Address') }}</label>
                            <div class="col-md-6">
                                <input id="address" type="text" class="form-control" name="address" required value="{{ $client->address }}" disabled>
                            </div>
                        </div>

                        <div class="form-group row mb-3">
                            <label for="city" class="col-md-4 col-form-label text-md-right">{{ __('City') }}</label>
                            <div class="col-md-6">
                                <input id="city" type="text" class="form-control" name="city" required value="{{ $client->city }}" disabled>
                            </div>
                        </div>

                        <div class="form-group row mb-3">
                            <label for="state" class="col-md-4 col-form-label text-md-right">{{ __('State') }}</label>
                            <div class="col-md-6">
                                <input id="state" type="text" class="form-control" name="state" required value="{{ $client->state }}" disabled>
                            </div>
                        </div>

                        <div class="form-group row mb-3">
                            <label for="country" class="col-md-4 col-form-label text-md-right">{{ __('Country') }}</label>
                            <div class="col-md-6">
                                <input id="country" type="text" class="form-control" name="country" required value="{{ $client->country }}" disabled>
                            </div>
                        </div>

                        <div class="form-group row mb-3 justify-content-center">
                            <div class="col-md-6 text-center">
                                <button type="submit" class="btn btn-danger">{{ __('Delete') }}</button>
                            </div>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
