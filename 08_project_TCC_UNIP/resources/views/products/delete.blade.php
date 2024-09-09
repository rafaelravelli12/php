@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="mb-3">
                <a href="{{ url('/products') }}" class="btn btn-secondary" disabled>{{ __('Return to Products List') }}</a>
            </div>
            <div class="card mb-3">
                <div class="card-header">{{ __('Delete Product') }}</div>
                <div class="card-body">
                    <form method="POST" action="{{ url('/products/' . $products->id) }}">
                    @csrf
                    @method('DELETE')
                        <div class="form-group row mb-3">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>
                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control" name="name" required value="{{ $products->name }}" disabled>
                            </div>
                        </div>
                       <div class="form-group row mb-3">
                            <label for="product_type_name" class="col-md-4 col-form-label text-md-right">{{ __('product_type_name') }}</label>
                            <div class="col-md-6">
                                <input id="product_type_name" type="text" class="form-control" name="Product Type Name" required value="{{ $products->producttype->product_type_name }}" disabled>
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
                                <input id="description" type="text" class="form-control" name="value" required value="{{ $products->producttype->description }}" disabled>
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
