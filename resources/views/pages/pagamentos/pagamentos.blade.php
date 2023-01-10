@extends('layout.master')
@section('content')

<div class="card-body">
    <h4 class="card-title" _msthash="1771757" _msttexthash="77545">Pagamentos</h4>
    <button type="button" class="btn btn-success" data-toggle="modal" data-target="#novo_pagamento">Incluir Pagamento</button>
    <br><br>
    <div class="table-responsive">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th _msthash="3901040" _msttexthash="139581"> Status </th>
                    <th _msthash="3901170" _msttexthash="153218"> Meio de Pagamento </th>
                    <th _msthash="3900910" _msttexthash="208377"> Editar | Excluir </th>
                </tr>
            </thead>
            <tbody>
                @foreach ($registros as $registro)
                    <tr>

                        <td class="font-weight-medium" _msthash="3901040" _msttexthash="139581"> {{$registro->status}} </td>

                        <td class="font-weight-medium" _msthash="3901170" _msttexthash="153218">{{$registro->nome}}</td>

                        <td class="align-middle text-end">
                            <button type="button" class="btn btn-inverse-dark btn-sm ml-2" _msthash="3900910" _msttexthash="208377" data-toggle="modal" data-target="#editar_pagamento{{$registro->id}}">Editar</button>
                            <button type="button" class="btn btn-inverse-danger btn-sm ml-2" _msthash="3900910" _msttexthash="208377" data-toggle="modal" data-target="#excluir_pagamento{{$registro->id}}">Excluir</button>

                            @include('pages.pagamentos._modalEditar')
                            @include('pages.pagamentos._modalEliminar')
                        </td>

                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>

@include('pages.pagamentos._modalAdd')

@endsection
