@extends('layout.master')
@section('content')

<div class="card-body">
    <h4 class="card-title" _msthash="1771757" _msttexthash="77545">Categorias</h4>
    <button type="button" class="btn btn-success" data-toggle="modal" data-target="#nova_categoria">Incluir Categoria</button>
    <br><br>
    <div class="table-responsive">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th _msthash="3901040" _msttexthash="139581"> Status </th>
                    <th _msthash="3901170" _msttexthash="153218"> Nome Categoria </th>
                    <th _msthash="3900910" _msttexthash="208377"> Editar | Excluir </th>
                </tr>
            </thead>
            <tbody>
                @foreach ($registros as $registro)
                    <tr>

                        <td class="font-weight-medium" _msthash="3901040" _msttexthash="139581"> {{$registro->status}} </td>

                        <td class="font-weight-medium" _msthash="3901170" _msttexthash="153218">{{$registro->nome_categoria}}</td>

                        <td class="align-middle text-end">
                            <button type="button" class="btn btn-inverse-dark btn-sm ml-2" _msthash="3900910" _msttexthash="208377" data-toggle="modal" data-target="#editar_categoria{{$registro->id}}">Editar</button>
                            <button type="button" class="btn btn-inverse-danger btn-sm ml-2" _msthash="3900910" _msttexthash="208377" data-toggle="modal" data-target="#excluir_categoria{{$registro->id}}">Excluir</button>

                            @include('pages.categoria._modalEditar')
                            @include('pages.categoria._modalEliminar')
                        </td>

                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>

@include('pages.categoria._modalAdd')

@endsection
