@extends('layout.master')
@section('content')

<div class="card-body">
    <h4 class="card-title" _msthash="1771757" _msttexthash="77545">Pedidos</h4>

    <div class="table-responsive">
        <button type="submit" class="btn btn-success">Aceitar</button>
        <button type="submit" class="btn btn-danger">Cancelar</button>
        <br>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th _msthash="3901040" _msttexthash="139581"> Imagem </th>
                    <th _msthash="3901170" _msttexthash="153218"> Nome </th>
                    <th _msthash="3901170" _msttexthash="153218"> Quantidade </th>
                    <th _msthash="3901170" _msttexthash="153218"> Pedido </th>
                    <th _msthash="3901170" _msttexthash="153218"> Forma Pagamento </th>
                    <th _msthash="3901170" _msttexthash="153218"> Valor Total </th>
                    <th _msthash="3901170" _msttexthash="153218"> Nome Cliente </th>
                    <th _msthash="3901170" _msttexthash="153218"> Celular </th>
                    <th _msthash="3901170" _msttexthash="153218"> Status </th>
                </tr>
            </thead>
            <tbody>
                @foreach ($registros as $registro)
                    <tr>

                        <td>
                            <img src="{{$registro->imagem}}" class="avatar me-3" alt="image">
                        </td>

                        <td class="font-weight-medium" _msthash="3901170" _msttexthash="153218">{{$registro->nome_cliente}}</td>

                        <td class="font-weight-medium" _msthash="3901170" _msttexthash="153218">{{$registro->status}}</td>

                        <td class="font-weight-medium" _msthash="3901170" _msttexthash="153218">{{$registro->id}}</td>

                        <td class="font-weight-medium" _msthash="3901170" _msttexthash="153218">{{$registro->meio_pagamento}}</td>

                        <td class="font-weight-medium" _msthash="3901170" _msttexthash="153218">{{$registro->valor_total}}</td>

                        <td class="font-weight-medium" _msthash="3901170" _msttexthash="153218">{{$registro->meio_pagamento}}</td>

                        <td class="font-weight-medium" _msthash="3901170" _msttexthash="153218">{{$registro->valor_total}}</td>

                        <td class="font-weight-medium" _msthash="3901170" _msttexthash="153218">{{$registro->valor_total}}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>

@endsection

