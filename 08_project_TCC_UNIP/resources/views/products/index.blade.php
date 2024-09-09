@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="mb-3">
                <a href="{{ url('/products/create') }}" class="btn btn-primary">{{ __('Add New Product') }}</a>
            </div>
            <div class="card">
                <div class="card-header">{{ __('List of Products') }}</div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col">id</th>
                                    <th scope="col">Name</th>
                                    <th scope="col">Product Type Name</th>
                                    <th scope="col">Random Value</th>
                                    <th scope="col">Description</th>
                                    <th scope="col">View</th>
                                    <th scope="col">Edit</th>
                                    <th scope="col">Delete</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($products as $product)
                                    <tr>
                                        <td>{{ $product->id }}</td>
                                        <td>{{ $product->name }}</td>
                                        <td>{{ $product->producttype->product_type_name }}</td>
                                        <td>{{ $product->producttype->random_value }}</td>
                                        <td>{{ $product->producttype->description }}</td>
                                        <td><a href="{{ url('/products/' . $product->id) }}" class="btn btn-sm btn-primary">{{ __('View') }}</a></td>
                                        @if(auth()->user()->role == 'globaladmin' || auth()->user()->role == 'localadmin')
                                            <td><a href="{{ url('/products/' . $product->id . '/edit') }}" class="btn btn-sm btn-secondary">{{ __('Edit') }}</a></td>
                                            <td><a href="{{ url('/products/' . $product->id . '/delete') }}"class="btn btn-sm btn-danger">{{ __('Delete') }}</a></td>
                                        @endif
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                        <div class="pagination-wrapper" style="width: 100%; overflow-x: auto;">
                            {{ $products->links() }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
