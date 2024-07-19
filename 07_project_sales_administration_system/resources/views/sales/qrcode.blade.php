@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="mb-3">
                <a href="{{ url('/sales') }}" class="btn btn-secondary" disabled>{{ __('Return to Sales list') }}</a>
            </div>
            <div class="card mb-3">
                <div class="card-header">{{ __('View QRCode') }}</div>
                <div class="card-body">
                    <div class="col-12">
                        <h3 class="fw-bold">Pagamento da Venda</h3>
                        <h5 class="text-secondary"> Leia o QR Code para realizar a venda</h5>
                    </div>                    
                    <div class="d-flex justify-content-center">
                        {!! $image !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
