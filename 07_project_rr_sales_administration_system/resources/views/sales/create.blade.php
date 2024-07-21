@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="mb-3">
                <a href="{{ url('/sales') }}" class="btn btn-secondary" disabled>{{ __('Return to sales list') }}</a>
            </div>
            <div class="card mb-3">
                <div class="card-header">{{ __('Add sale') }}</div>
                <div class="card-body">
                    <form method="POST" action="{{ url('/sales/store') }}">
                    @csrf
                    
                        @if (auth()->user()->role == "globaladmin")
                            <div class="form-group row mb-3">
                                    <label for="nome" class="col-md-4 col-form-label text-md-right">Establishment</label>
                                    <div class="col-md-6">
                                    <select class="form-select" name="establishment_id" required>
                                        <option value="" selected disabled>Select User Establishment</option>
                                        @foreach ($establishments as $establishment)
                                            @if ($establishment->id !== 1)
                                                <option value="{{ $establishment->id }}">{{ $establishment->name }}</option>
                                            @endif
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                        @else
                            <div class="form-group row mb-3">
                                <label for="nome" class="col-md-4 col-form-label text-md-right">Establishment</label>
                                <div class="col-md-6">
                                    <input type="hidden" name="establishment_id" value="{{ auth()->user()->establishment->id }}">
                                    <input type="text" class="form-control" value="{{ auth()->user()->establishment->name }}" disabled>
                                </div>
                            </div>
                        @endif

                        <div class="form-group row mb-3">
                            <label for="client_id" class="col-md-4 col-form-label text-md-right">{{ __('Client') }}</label>
                            <div class="col-md-6">
                                <select id="client_id" class="form-control" name="client_id" required>
                                    <option value="" selected disabled>Select Client</option>
                                    @foreach($clients as $client)
                                        <option value="{{ $client->id }}">{{ $client->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>

                        <div class="form-group row mb-3">
                            <label for="status" class="col-md-4 col-form-label text-md-right">{{ __('Status') }}</label>
                            <div class="col-md-6">
                                    <input type="hidden" name="status" value="New">
                                    <input type="text" class="form-control" value="New" disabled>
                                </div>
                        </div>

                        <div class="form-group row mb-3">
                            <label for="price_real" class="col-md-4 col-form-label text-md-right">{{ __('Price Real') }}</label>
                            <div class="col-md-6">
                                <input id="price_real" type="text" class="form-control" name="price_real" required>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Add sale') }}
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
