@extends('layout.master')
@section('content')


{{-- <p>{{$dados->id}}</p>
<p>{{$dados->valor_total}}</p>
<p>{{$dados->meio_pagamento}}</p>
<p>{{$dados->status}}</p>
<p>{{$dados->nome}}</p>
<p>{{$dados->celular}}</p>
<p>{{$dados->rua}}</p>
<p>{{$dados->numero}}</p>
<p>{{$dados->cidade}}</p> --}}

<div class="card-body">
    <h4 class="card-title" _msthash="1771757" _msttexthash="77545">Dados do Item</h4>
    <div class="table-responsive">
        <a href="{{route('pedidos.atualizar', [$peditem[0]->id_pedido, $pedidos[0]->status])}}">
            <button type="button" class="btn btn-success">Atualizar</button>
        </a>
        <a href="{{route('pedidos.cancelar', $peditem[0]->id_pedido)}}">
            <button type="submit" class="btn btn-danger">Cancelar</button>
        </a>
        <br><br>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th _msthash="3901040" _msttexthash="139581"> Imagem </th>
                    <th _msthash="3901170" _msttexthash="153218"> Nome </th>
                    <th _msthash="3901170" _msttexthash="153218"> Descricao </th>
                    <th _msthash="3901170" _msttexthash="153218"> Valor Unitario </th>
                </tr>
            </thead>
            <tbody>
                @foreach ($peditem as $registro)
                    <tr>

                        <td>
                            <img src="{{ asset($registro->imagem)}}" class="avatar me-3" alt="image">
                        </td>

                        <td class="font-weight-medium" _msthash="3901170" _msttexthash="153218">{{$registro->nome_produto}}</td>

                        <td class="font-weight-medium" _msthash="3901170" _msttexthash="153218">{{$registro->descricao}}</td>

                        <td class="font-weight-medium" _msthash="3901170" _msttexthash="153218">{{$registro->valor_unitario}}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>

@endsection

