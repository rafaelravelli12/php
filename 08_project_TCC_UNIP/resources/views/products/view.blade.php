@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="mb-3">
                <a href="{{ url('/products') }}" class="btn btn-secondary" disabled>{{ __('Return to Products List') }}</a>
            </div>
            <div class="card mb-3">
                <div class="card-header">{{ __('View Product') }}</div>
                <div class="card-body">
                    <div class="form-group row mb-3">
                        <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>
                        <div class="col-md-6">
                            <input id="name" type="text" class="form-control" name="name" required value="{{ $products->name }}" disabled>
                        </div>
                    </div>
                    <div class="form-group row mb-3">
                        <label for="product_type_name" class="col-md-4 col-form-label text-md-right">{{ __('Product Type Name') }}</label>
                        <div class="col-md-6">
                            <input id="product_type_name" type="text" class="form-control" name="product_type_name" required value="{{ $products->producttype->product_type_name }}" disabled>
                        </div>
                    </div>
                    <div class="form-group row mb-3">
                        <label for="random_value" class="col-md-4 col-form-label text-md-right">{{ __('Random Value') }}</label>
                        <div class="col-md-6">
                            <input id="random_value" type="text" class="form-control" name="random_value" required value="{{ $products->producttype->random_value }}" disabled>
                        </div>
                    </div>  
                    <div class="form-group row mb-3">
                        <label for="description" class="col-md-4 col-form-label text-md-right">{{ __('Description') }}</label>
                        <div class="col-md-6">
                            <textarea id="description" class="form-control" name="description" rows="5" disabled>{{ $products->producttype->description }}</textarea>
                        </div>
                    </div>
                    <div class="form-group row mb-3">
                        <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Created At') }}</label>
                        <div class="col-md-6">
                            <input id="created_at" type="text" class="form-control" name="created_at" required value="{{ $products->created_at }}" disabled>
                        </div>
                    </div>
                    <div class="form-group row mb-3">
                        <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Updated At') }}</label>
                        <div class="col-md-6">
                            <input id="updated_at" type="text" class="form-control" name="updated_at" required value="{{ $products->updated_at }}" disabled>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
