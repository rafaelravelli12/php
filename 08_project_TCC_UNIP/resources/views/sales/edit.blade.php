@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="mb-3">
                <a href="{{ url('/sales') }}" class="btn btn-secondary">{{ __('Return to Sales list') }}</a>
            </div>
            <div class="card mb-3">
                <div class="card-header">{{ __('Edit Sales') }}</div>
                <div class="card-body">
                    <form method="POST" action="{{ url('/sales/' . $sales->id) }}">
                    @csrf
                    @method('PUT')
                        <div class="form-group row mb-3">
                            <label for="establishment_id" class="col-md-4 col-form-label text-md-right">{{ __('Establishment Name') }}</label>
                            <div class="col-md-6">
                                <select id="establishment_id" class="form-control" name="establishment_id" required autofocus>
                                    @foreach($establishments as $establishment)
                                        <option value="{{ $establishment->id }}" {{ $sales->establishment_id == $establishment->id ? 'selected' : '' }}>{{ $establishment->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        
                        @method('PUT')
                        <div class="form-group row mb-3">
                            <label for="client_id" class="col-md-4 col-form-label text-md-right">{{ __('Client Name') }}</label>
                            <div class="col-md-6">
                                <select id="client_id" class="form-control" name="client_id" required autofocus>
                                    @foreach($clients as $client)
                                        <option value="{{ $client->id }}" {{ $sales->client_id == $client->id ? 'selected' : '' }}>{{ $client->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        

                        <div class="form-group row mb-3">
                            <label for="status" class="col-md-4 col-form-label text-md-right">{{ __('Status') }}</label>
                            <div class="col-md-6">
                                <select name="status" id="status" class="form-control" required>
                                    @foreach(['Nova', 'Em análise', 'Cancelado', 'Efetivada'] as $status)
                                        <option value="{{ $status }}" {{ $sales->status === $status ? 'selected' : '' }}>{{ $status }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>


                        <div class="form-group row mb-3">
                            <label for="price_real" class="col-md-4 col-form-label text-md-right">{{ __('Price Real') }}</label>
                            <div class="col-md-6">
                                <input id="price_real" type="text" class="form-control" name="price_real" required value="{{ $sales->price_real }}">
                            </div>
                        </div>

                        <div class="form-group row mb-3 justify-content-center">
                            <div class="col-md-6 text-center">
                                <button type="submit" class="btn btn-primary">{{ __('update') }}</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
