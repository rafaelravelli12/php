@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="mb-3">
                <a href="{{ url('/sales/create') }}" class="btn btn-primary">{{ __('Add New Sales') }}</a>
            </div>
            <div class="card">
                <div class="card-header">{{ __('List of Sales') }}</div>
                <div class="card-body">                    
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col">Id</th>
                                    <th scope="col">Establishment Name</th>
                                    <th scope="col">Client Name</th>
                                    <th scope="col">Status</th>
                                    <th scope="col">Price in Reais</th>
                                    <th scope="col">Informations</th>
                                    <th scope="col">View</th>                                    
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($sales as $sale)
                                <tr>
                                    <td>{{ $sale->id }}</td>
                                    <td>{{ $sale->establishment->name }}</td>
                                    <td>{{ $sale->clients->name }}</td>
                                    <td>{{ $sale->status }}</td>
                                    <td>{{ $sale->price_real }}</td>
                                    @if($sale->status == "New")
                                        <td><a href="{{ url('/sales/' . $sale->id . '/qrcode') }}" class="btn btn-sm btn-primary">{{ __('Pay QrCode') }}</a></td>
                                    @else
                                        <td><a href="" class="btn btn-sm btn-dark">{{ __('Print Voucher') }}</a></td>
                                    @endif
                                    <td><a href="{{ url('/sales/' . $sale->id) }}" class="btn btn-sm btn-primary">{{ __('View') }}</a></td>                                    
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                        <div class="pagination-wrapper" style="width: 100%; overflow-x: auto;">
                            {{ $sales->links() }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
