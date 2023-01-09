@extends('layout.master')
@section('content')

<div class="row mt-4 mx-4">
    <div class="col-12">
        <div class="card mb-4">
            <div class="card-header pb-0">
                <h6>Produtos</h6>
                <br>
                <button type="button" class="btn btn-success" data-toggle="modal" data-target="#novo_produtos">Incluir Produto</button>
                @include('pages.produtos._modalAdd')
            </div>
            <div class="card-body px-0 pt-0 pb-2">
                <br class="table-responsive p-0">
                <table class="table align-items-center mb-0">
                    <thead>
                    <tr>
                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Imagem</th>
                        <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Descrição</th>
                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Preço</th>
                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Categoria</th>
                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Status</th>
                        <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Editar | Excluir</th>
                    </tr>
                    </thead>
                    <tbody>
                        @foreach($registros as $registro)
                            <tr>
                                <td>
                                    <div class="d-flex px-3 py-1">
                                        <div>
                                            <img src="{{$registro->imagem}}" class="avatar me-3" alt="image">
                                        </div>
                                        <div class="d-flex flex-column justify-content-center">
                                            <h6 class="mb-0 text-sm">{{$registro->nome}}</h6>
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    <p class="text-sm font-weight-bold mb-0">{{$registro->descricao}}</p>
                                </td>
                                <td>
                                    <p class="text-sm font-weight-bold mb-0">{{$registro->valor_unitario}}</p>
                                </td>
                                <td>
                                    <p class="text-sm font-weight-bold mb-0">{{$registro->id_categoria}}</p>
                                </td>
                                <td>
                                    <p class="text-sm font-weight-bold mb-0">{{$registro->status}}</p>
                                </td>
                                <td class="align-middle text-end">
                                    <div class="d-flex px-3 py-1 justify-content-center align-items-center">
                                        <button type="button" class="btn btn-inverse-dark btn-sm ml-2" _msthash="812760" _msttexthash="176644" data-toggle="modal" data-target="#editar_produtos{{$registro->id}}">Editar</button>
                                        <button type="button" class="btn btn-inverse-danger btn-sm ml-2" _msthash="812760" _msttexthash="176644" data-toggle="modal" data-target="#excluir_produtos{{$registro->id}}">Excluir</button>
                                    </div>
                                    @include('pages.produtos._modalEditar')
                                    @include('pages.produtos._modalEliminar')
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
