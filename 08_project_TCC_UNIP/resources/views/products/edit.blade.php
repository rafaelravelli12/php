@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="mb-3">
                <a href="{{ url('/products') }}" class="btn btn-secondary">{{ __('Return to Products List') }}</a>
            </div>
            <div class="card mb-3">
                <div class="card-header">{{ __('Edit Product') }}</div>
                <div class="card-body">
                    <form method="POST" action="{{ url('/products/' . $products->id) }}">
                    @csrf
                    @method('PUT')
                        <div class="form-group row mb-3">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>
                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control" name="name" required value="{{ $products->name }}" autofocus>
                            </div>
                        </div>
                        <div class="form-group row mb-3">
                            <label for="product_type_id" class="col-md-4 col-form-label text-md-right">{{ __('Product Type id') }}</label>
                            <div class="col-md-6">
                                <input id="product_type_id" type="text" class="form-control" name="product_type_id" required value="{{ $products->product_type_id }}" autofocus>
                            </div>
                        </div>
                        <div class="form-group row mb-3">
                            <label for="country" class="col-md-4 col-form-label text-md-right">{{ __('Created At') }}</label>
                            <div class="col-md-6">
                                <input id="created_at" type="text" class="form-control" name="created_at" required value="{{ $products->created_at }}" disabled>
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
