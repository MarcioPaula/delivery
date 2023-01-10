@extends('layout.master')
@section('content')

<div class="card-body">
    <h4 class="card-title" _msthash="1771757" _msttexthash="77545">Fretes</h4>
    <button type="button" class="btn btn-success" data-toggle="modal" data-target="#novo_frete">Incluir Frete</button>
    <br><br>
    <div class="table-responsive">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th _msthash="3901040" _msttexthash="139581"> Status </th>
                    <th _msthash="3901170" _msttexthash="153218"> Nome </th>
                    <th _msthash="3901300" _msttexthash="58071"> Valor </th>
                    <th _msthash="3900910" _msttexthash="208377"> Editar | Excluir </th>
                </tr>
            </thead>
            <tbody>
                @foreach ($registros as $registro)
                    <tr>

                        <td class="font-weight-medium" _msthash="3901040" _msttexthash="139581"> {{$registro->status}} </td>

                        <td class="font-weight-medium" _msthash="3901170" _msttexthash="153218">{{$registro->nome}}</td>


                        <td class="font-weight-medium" _msthash="3901300" _msttexthash="58071">{{$registro->valor}}</td>

                        <td class="align-middle text-end">
                            <button type="button" class="btn btn-inverse-dark btn-sm ml-2" _msthash="3900910" _msttexthash="208377" data-toggle="modal" data-target="#editar_frete{{$registro->id}}">Editar</button>
                            <button type="button" class="btn btn-inverse-danger btn-sm ml-2" _msthash="3900910" _msttexthash="208377" data-toggle="modal" data-target="#excluir_frete{{$registro->id}}">Excluir</button>

                            @include('pages.fretes._modalEditar')
                            @include('pages.fretes._modalEliminar')
                        </td>

                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>

@include('pages.fretes._modalAdd')
@endsection
