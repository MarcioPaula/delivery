@extends('layout.master')
@section('content')

<div class="row mt-4 mx-4">
    <div class="col-12">
        <div class="card mb-4">
            <div class="card-header pb-0">
                <h6>Meios de Pagamentos</h6>
            </div>
            <div class="card-body px-0 pt-0 pb-2">
                <table class="table align-items-center mb-0">
                    <thead>
                    <tr>
                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Ação</th>
                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Meio de Pagamento</th>
                    </tr>
                    </thead>
                    <tbody>
                        @foreach($pagamentos as $pagamento)
                            <tr>
                                <td>
                                    <div class="form-check">
                                        <input class="form-check-input position-static" type="checkbox" id="blankCheckbox" value="option1" aria-label="...">
                                    </div>
                                </td>
                                <td>
                                    <p class="text-sm font-weight-bold mb-0">{{$pagamento->nome}}</p>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                <button type="button" class="btn btn-success float-right" data-toggle="modal" data-target="#novo_frete">Salvar</button>
            </div>
        </div>
    </div>
</div>
@endsection
