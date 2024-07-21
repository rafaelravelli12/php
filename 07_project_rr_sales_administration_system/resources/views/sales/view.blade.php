@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="mb-3">
                <a href="{{ url('/sales') }}" class="btn btn-secondary" disabled>{{ __('Return to Sales list') }}</a>
            </div>
            <div class="card mb-3">
                <div class="card-header">{{ __('View Sale') }}</div>
                <div class="card-body">
                    <div class="form-group row mb-3">
                        <label for="establishment_id" class="col-md-4 col-form-label text-md-right">{{ __('Establishment Name') }}</label>
                        <div class="col-md-6">
                            <input id="establishment_name" type="text" class="form-control" value="{{ $sales->establishment->name }}" disabled>
                        </div>
                    </div>

                    <div class="form-group row mb-3">
                        <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Client Name') }}</label>
                        <div class="col-md-6">
                            <input id="name" type="text" class="form-control" name="name" required value="{{ $sales->clients->name }}" disabled>
                        </div>
                    </div>

                    <div class="form-group row mb-3">
                        <label for="status" class="col-md-4 col-form-label text-md-right">{{ __('Status') }}</label>
                        <div class="col-md-6">
                            <input id="state" type="text" class="form-control" name="state" required value="{{ $sales->status }}" disabled>
                        </div>
                    </div>

                    <div class="form-group row mb-3">
                        <label for="price_real" class="col-md-4 col-form-label text-md-right">{{ __('Price Real') }}</label>
                        <div class="col-md-6">
                            <input id="price_real" type="text" class="form-control" name="price_real" required value="{{ $sales->price_real }}" disabled>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
