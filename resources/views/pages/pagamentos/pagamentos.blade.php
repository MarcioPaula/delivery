@extends('layout.master')
@section('content')

<div class="row mt-4 mx-4">
    <div class="col-12">
        <div class="card mb-4">
            <div class="card-header pb-0">
                <h6>Meios de Pagamentos</h6>
                <br>
                <button type="button" class="btn btn-success" data-toggle="modal" data-target="#novo_pagamento">Incluir Pagamento</button>
                @include('pages.pagamentos._modalAdd')
            </div>
            <div class="card-body px-0 pt-0 pb-2">
                <br class="table-responsive p-0">
                <table class="table align-items-center mb-0">
                    <thead>
                        <tr>
                            <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Status</th>
                            <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Meio de Pagamento</th>
                            <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Editar | Excluir</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($registros as $registro)
                            <tr>
                                <td>
                                    <P class="text-sm font-weight-bold mb-0">{{$registro->status}}</P>
                                </td>
                                <td>
                                    <P class="text-sm font-weight-bold mb-0">{{$registro->nome}}</P>
                                </td>
                                <td class="align-middle text-end">
                                    <div class="d-flex px-3 py-1 justify-content-center align-items-center">
                                        <button type="button" class="btn btn-inverse-dark btn-sm ml-2" _msthash="812760" _msttexthash="176644" data-toggle="modal" data-target="#editar_pagamento{{$registro->id}}">Editar</button>
                                        <button type="button" class="btn btn-inverse-danger btn-sm ml-2" _msthash="812760" _msttexthash="176644" data-toggle="modal" data-target="#excluir_pagamento{{$registro->id}}">Excluir</button>
                                    </div>
                                    @include('pages.pagamentos._modalEditar')
                                    @include('pages.pagamentos._modalEliminar')
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

@endsection
