@extends('layout.master')

@section('content')

<div class="row">
    @foreach ($registros as $registro)
            @if ($registro->status == "Inicial")
                <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 grid-margin stretch-card">
                    <div class="card card-statistics">
                        <div class="card-body">
                            <div
                                class="d-flex flex-md-column flex-xl-row flex-wrap justify-content-between align-items-md-center justify-content-xl-between">
                                <div class="float-left"><i class="mdi mdi-receipt text-success icon-lg"></i></div>
                                <div class="float-right">
                                    <div class="fluid-container">
                                        <a href="{{route('pedidos.detalhar', $registro->id)}}">
                                        <button type="button" class="btn btn-secondary btn-rounded btn-fw" _msthash="3450447" _msttexthash="76817">Detalhes</button>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <p class="text-muted mt-3 mb-0 text-left text-md-center text-xl-left"><i aria-hidden="true"
                                class="mdi mdi-bookmark-outline mr-1"></i>
                                <font _mstmutation="1" _msthash="1712633" _msttexthash="584818"> Código do Pedido: {{$registro->id}} </font>
                            </p>
                        </div>
                    </div>
                </div>
            @endif
            @if ($registro->status == "Preparando")
                <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 grid-margin stretch-card">
                    <div class="card card-statistics">
                        <div class="card-body">
                            <div
                                class="d-flex flex-md-column flex-xl-row flex-wrap justify-content-between align-items-md-center justify-content-xl-between">
                                <div class="float-left"><i class="mdi mdi-receipt text-warning icon-lg"></i></div>
                                <div class="float-right">
                                    <div class="fluid-container">
                                        <button type="button" class="btn btn-secondary btn-rounded btn-fw" _msthash="3450447" _msttexthash="76817" data-toggle="modal" data-target="#pedido_preparando">Detalhes</button>
                                        @include('pages.pedidos._modalDetalhesPre')
                                    </div>
                                </div>
                            </div>
                            <p class="text-muted mt-3 mb-0 text-left text-md-center text-xl-left"><i aria-hidden="true"
                                    class="mdi mdi-bookmark-outline mr-1"></i>
                                <font _mstmutation="1" _msthash="1712633" _msttexthash="584818"> Código do Pedido: {{$registro->id}} </font>
                            </p>
                        </div>
                    </div>
                </div>
            @endif
    @endforeach
</div>
@endsection
