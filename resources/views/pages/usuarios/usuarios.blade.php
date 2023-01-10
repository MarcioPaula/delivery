@extends('layout.master')
@section('content')

<div class="card-body">
    <h4 class="card-title" _msthash="1771757" _msttexthash="77545">Usuários</h4>
    <button type="button" class="btn btn-success" data-toggle="modal" data-target="#novo_usuario">Incluir Usuário</button>
    <br><br>
    <div class="table-responsive">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th _msthash="3901040" _msttexthash="139581"> Nome </th>
                    <th _msthash="3901170" _msttexthash="153218"> E-mail </th>
                    <th _msthash="3901170" _msttexthash="153218"> Admin </th>
                    <th _msthash="3900910" _msttexthash="208377"> Editar | Excluir </th>
                </tr>
            </thead>
            <tbody>
                @foreach ($registros as $registro)
                    <tr>


                        <td class="font-weight-medium" _msthash="3901170" _msttexthash="153218">{{$registro->name}}</td>

                        <td class="font-weight-medium" _msthash="3901170" _msttexthash="153218">{{$registro->email}}</td>

                        <td class="font-weight-medium" _msthash="3901170" _msttexthash="153218">{{$registro->admin}}</td>

                        <td class="align-middle text-end">
                            <button type="button" class="btn btn-inverse-dark btn-sm ml-2" _msthash="3900910" _msttexthash="208377" data-toggle="modal" data-target="#editar_usuario{{$registro->id}}">Editar</button>
                            <button type="button" class="btn btn-inverse-danger btn-sm ml-2" _msthash="3900910" _msttexthash="208377" data-toggle="modal" data-target="#excluir_usuario{{$registro->id}}">Excluir</button>

                            @include('pages.usuarios._modalEditar')
                            @include('pages.usuarios._modalEliminar')
                        </td>

                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>

@include('pages.usuarios._modalAdd')

@endsection
