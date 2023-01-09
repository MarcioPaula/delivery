@extends('layout.master')
@section('content')

<div class="row mt-4 mx-4">
    <div class="col-12">
        <div class="card mb-4">
            <div class="card-header pb-0">
                <h6>Fretes</h6>
                <br>
                <button type="button" class="btn btn-success" data-toggle="modal" data-target="#novo_frete">Incluir Frete</button>
                @include('pages.fretes._modalAdd')
            </div>
            <div class="card-body px-0 pt-0 pb-2">
                <br class="table-responsive p-0">
                <table class="table align-items-center mb-0">
                    <thead>
                    <tr>
                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Status</th>
                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Nome</th>
                        <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Valor</th>
                        <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Editar | Excluir</th>
                    </tr>
                    </thead>
                    <tbody>
                        @foreach($registros as $registro)
                            <tr>
                                <td>
                                    <p class="text-sm font-weight-bold mb-0">{{$registro->status}}</p>
                                </td>
                                <td>
                                    <p class="text-sm font-weight-bold mb-0">{{$registro->nome}}</p>
                                </td>
                                <td class="align-middle text-center text-sm">
                                    <p class="text-sm text-uppercase font-weight-bold mb-0">{{$registro->valor}}</p>
                                </td>
                                <td class="align-middle text-end">
                                    <div class="d-flex px-3 py-1 justify-content-center align-items-center">
                                        <button type="button" class="btn btn-inverse-dark btn-sm ml-2" _msthash="812760" _msttexthash="176644" data-toggle="modal" data-target="#editar_frete{{$registro->id}}">Editar</button>
                                        <button type="button" class="btn btn-inverse-danger btn-sm ml-2" _msthash="812760" _msttexthash="176644" data-toggle="modal" data-target="#excluir_frete{{$registro->id}}">Excluir</button>
                                    </div>
                                    @include('pages.fretes._modalEditar')
                                    @include('pages.fretes._modalEliminar')
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
