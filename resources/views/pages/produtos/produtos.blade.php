@extends('layout.master')
@section('content')

<div class="card-body">
    <h4 class="card-title" _msthash="1771757" _msttexthash="77545">Produtos</h4>
    <button type="button" class="btn btn-success" data-toggle="modal" data-target="#novo_produtos">Incluir Produto</button>
    <br><br>
    <div class="table-responsive">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th _msthash="3901040" _msttexthash="139581"> Imagem </th>
                    <th _msthash="3901170" _msttexthash="153218"> Nome </th>
                    <th _msthash="3901170" _msttexthash="153218"> Descrição </th>
                    <th _msthash="3901170" _msttexthash="153218"> Preço Unitario </th>
                    <th _msthash="3901170" _msttexthash="153218"> Categoria </th>
                    <th _msthash="3901170" _msttexthash="153218"> Status </th>
                    <th _msthash="3900910" _msttexthash="208377"> Editar | Excluir </th>
                </tr>
            </thead>
            <tbody>
                @foreach ($registros as $registro)
                    <tr>

                        <td>
                            <img src="{{$registro->imagem}}" class="avatar me-3" alt="image">
                        </td>

                        <td class="font-weight-medium" _msthash="3901170" _msttexthash="153218">{{$registro->nome}}</td>

                        <td class="font-weight-medium" _msthash="3901170" _msttexthash="153218">{{$registro->descricao}}</td>

                        <td class="font-weight-medium" _msthash="3901170" _msttexthash="153218">{{$registro->valor_unitario}}</td>

                        <td class="font-weight-medium" _msthash="3901170" _msttexthash="153218">{{$registro->id_categoria}}</td>

                        <td class="font-weight-medium" _msthash="3901170" _msttexthash="153218">{{$registro->status}}</td>

                        <td class="align-middle text-end">
                            <button type="button" class="btn btn-inverse-dark btn-sm ml-2" _msthash="3900910" _msttexthash="208377" data-toggle="modal" data-target="#editar_produtos{{$registro->id}}">Editar</button>
                            <button type="button" class="btn btn-inverse-danger btn-sm ml-2" _msthash="3900910" _msttexthash="208377" data-toggle="modal" data-target="#excluir_produtos{{$registro->id}}">Excluir</button>

                            @include('pages.produtos._modalEditar')
                            @include('pages.produtos._modalEliminar')
                        </td>

                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>

@include('pages.produtos._modalAdd')

@endsection
