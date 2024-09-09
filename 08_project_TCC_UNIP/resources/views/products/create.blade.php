@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="mb-3">
                <a href="{{ url('/products') }}" class="btn btn-secondary" disabled>{{ __('Return to Products List') }}</a>
            </div>
            <div class="card mb-3">
                <div class="card-header">{{ __('Add Product') }}</div>
                <div class="card-body">
                    <form method="POST" action="{{ url('/products/store') }}">
                    @csrf
                        <div class="form-group row mb-3">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>
                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control" name="name" required>
                            </div>
                        </div>
                        <div class="form-group row mb-3">
                            <label for="product_type_id" class="col-md-4 col-form-label text-md-right">{{ __('Product Type id') }}</label>
                            <div class="col-md-6">
                                <input id="product_type_id" type="number" class="form-control" name="product_type_id" required>
                            </div>
                        </div>
                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Add Product') }}
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
