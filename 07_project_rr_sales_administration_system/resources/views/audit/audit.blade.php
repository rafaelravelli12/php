<?php

use Illuminate\Support\Carbon;
?>
@extends('layouts.app')

@section('content')
<div class="container-fluid mt-7">
    <div class="d-flex flex-row row">
        <div class="col-12 dash z-1">
            <div class="row header mt-3">
                <div class="col-12 col-lg-4">
                    <h3 class="fw-bold">Tabela de Auditoria</h3>
                    <h5 class="text-secondary"> Visualize as ações mais recentes</h5>
                </div>
            </div>

            <div class="row mt-3">
                <div class="table-responsive rounded">
                    <table id="datatable" class="table-hover rounded dt-responsive nowrap table" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                        <thead>
                            <tr>
                                <th>Alterado Por</th>
                                <th>Rota Alterada</th>
                                <th>Hora/Data</th>
                                <th>Estabelecimento</th>
                                <th class="text-center">PayLoad</th>
                        </thead>
                        <tbody>
                            @foreach ($audit as $key => $item)
                            <tr>
                                <td scope="row">{{ $item->created_by }}</td>
                                <td><span class="badge text-bg-dark">{{ $item->action_route }}</span></td>
                                <td>{{Carbon::parse($item->created_at)->format('H:i:s | d/m/Y',);}}</td>
                                <td>{{ $item->establishment->name }}</td>
                                <td class="text-center"><a class="" data-bs-toggle="modal" data-bs-target="#viewpayload{{$item -> id}}" href="#"><i class="fa-regular fas fa-eye mx-2"></i></a></td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <!-- @foreach ($audit as $key => $item)
        @include('audit.modal.view_payload')
        @endforeach -->
    </div>
</div>
@endsection