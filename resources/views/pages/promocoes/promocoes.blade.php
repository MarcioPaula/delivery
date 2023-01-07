@extends('layout.master')
@section('content')

<div class="row mt-4 mx-4">
    <div class="col-12">

        <div class="card mb-4">
            <div class="card-header pb-0">
                <h6>Promoção</h6>
                <br>
                <button type="button" class="btn btn-success" data-toggle="modal" data-target="#nova_promocao">Nova Promoção</button>
                @include('pages.promocoes._modalAdd')
            </div>
            <div class="card-body px-0 pt-0 pb-2">
                <br class="table-responsive p-0">
                <table class="table align-items-center mb-0">
                    <thead>
                    <tr>
                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">ID</th>
                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Nome</th>
                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">CEP</th>
                        <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Valor</th>
                        <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Editar | Excluir</th>
                    </tr>
                    </thead>
                    <tbody>
                    {{-- @foreach($registros as $registro) --}}
                        <tr>
                            <td>
                                <P class="mb-0 text-sm">f</P>
                            </td>
                            <td>
                                <p class="text-sm font-weight-bold mb-0">f</p>
                            </td>
                            <td>
                                <p class="text-sm font-weight-bold mb-0">f</p>
                            </td>
                            <td class="align-middle text-center text-sm">
                                <p class="text-sm text-uppercase font-weight-bold mb-0">f</p>
                            </td>
                            <td class="align-middle text-end">
                                <div class="d-flex px-3 py-1 justify-content-center align-items-center">
                                    <button type="button" class="btn btn-inverse-dark btn-sm ml-2" _msthash="812760" _msttexthash="176644" data-toggle="modal" data-target="#editar_promocao">Editar</button>
                                    <button type="button" class="btn btn-inverse-danger btn-sm ml-2" _msthash="812760" _msttexthash="176644" data-toggle="modal" data-target="#excluir_promocao">Excluir</button>
                                </div>
                            </td>
                        </tr>
                        @include('pages.promocoes._modalEditar')
                        @include('pages.promocoes._modalEliminar')
                    {{-- @endforeach --}}
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
</div>
{{-- <div class="row">
    <div class="col-12">
        <div class="table-responsive">
            <div id="order-listing_wrapper" class="dataTables_wrapper dt-bootstrap4 no-footer">
                <div class="row">
                    <div class="col-sm-12">
                        <table id="order-listing" class="table dataTable no-footer" role="grid" aria-describedby="order-listing_info">
                            <thead>
                                <tr role="row">
                                    <th class="sorting_asc" tabindex="0" aria-controls="order-listing" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Número da ordem: ativar para classificar a coluna decrescente" _mstaria-label="2400463" _msthash="849043" _msttexthash="64922" style="width: 113px;">Ordem #</th>
                                    <th class="sorting" tabindex="0" aria-controls="order-listing" rowspan="1" colspan="1" aria-label="Cliente: ativar para classificar a coluna crescente" _mstaria-label="1784601" _msthash="849044" _msttexthash="93639" style="width: 137.703px;">Cliente</th>
                                    <th class="sorting" tabindex="0" aria-controls="order-listing" rowspan="1" colspan="1" aria-label="Enviar para: ativar para classificar a coluna ascendente" _mstaria-label="2070107" _msthash="849045" _msttexthash="155818" style="width: 124.422px;">Enviar para</th><th class="sorting" tabindex="0" aria-controls="order-listing" rowspan="1" colspan="1" aria-label="Preço Base: ativar para classificar a coluna ascendente" _mstaria-label="2005549" _msthash="849046" _msttexthash="144170" style="width: 147.562px;">Preço Base</th>
                                    <th class="sorting" tabindex="0" aria-controls="order-listing" rowspan="1" colspan="1" aria-label="Preço comprado: ativar para classificar a coluna ascendente" _mstaria-label="2321722" _msthash="849047" _msttexthash="241423" style="width: 208.969px;">Preço de Compra</th>
                                    <th class="sorting" tabindex="0" aria-controls="order-listing" rowspan="1" colspan="1" aria-label="Status: ativar para classificar a coluna ascendente" _mstaria-label="1783366" _msthash="849048" _msttexthash="76037" style="width: 108.422px;">Estado</th>
                                    <th class="sorting" tabindex="0" aria-controls="order-listing" rowspan="1" colspan="1" aria-label="Ações: ativar para classificar a coluna ascendente" _mstaria-label="1737918" _msthash="849049" _msttexthash="88179" style="width: 333.641px;">Ações</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr role="row" class="odd">
                                    <td class="sorting_1" _msthash="896857" _msttexthash="34281">WD-61</td>
                                    <td _msthash="896987" _msttexthash="135057">Edimburgo</td>
                                     <td _msthash="897117" _msttexthash="156468">Nova Iorque</td>
                                     <td _msthash="897247" _msttexthash="1310933">$1500 •</td>
                                     <td _msthash="897377" _msttexthash="27534">$3200</td>
                                     <td>
                                        <label class="badge badge-info" _msthash="1298453" _msttexthash="113074">Em espera</label>
                                    </td>
                                     <td class="text-right">
                                        <button type="button" class="btn btn-inverse-dark btn-sm ml-2" _msthash="812760" _msttexthash="176644" data-toggle="modal" data-target="#editar_promocao">Editar</button>
                                        <button type="button" class="btn btn-inverse-danger btn-sm ml-2" _msthash="812760" _msttexthash="176644" data-toggle="modal" data-target="#excluir_promocao">Excluir</button>
                                         @include('pages.promocoes._modalEditar')
                                         @include('pages.promocoes._modalEliminar')

                                    </td>
                                    </tr>
                                    <tr role="row" class="even">
                                        <td class="sorting_1" _msthash="896858" _msttexthash="34424">WD-62</td>
                                        <td _msthash="896988" _msttexthash="74880">Corça</td>
                                        <td _msthash="897118" _msttexthash="76024">Brasil</td>
                                         <td _msthash="897248" _msttexthash="27248">4500 $</td>
                                         <td _msthash="897378" _msttexthash="1311557">$7500 •</td>
                                          <td>
                                            <label class="badge badge-danger" _msthash="1298454" _msttexthash="113243">Pendente</label>
                                        </td>
                                        <td class="text-right">
                                            <button type="button" class="btn btn-inverse-dark btn-sm ml-2" _msthash="812760" _msttexthash="176644" data-toggle="modal" data-target="#editar_promocao">Editar</button>
                                            <button type="button" class="btn btn-inverse-danger btn-sm ml-2" _msthash="812760" _msttexthash="176644" data-toggle="modal" data-target="#excluir_promocao">Excluir</button>
                                             @include('pages.promocoes._modalEditar')
                                             @include('pages.promocoes._modalEliminar')

                                        </td>
                                        </tr>
                                        <tr role="row" class="odd">
                                            <td class="sorting_1" _msthash="896859" _msttexthash="34567">WD-63</td>
                                            <td _msthash="896989" _msttexthash="30394">Sam</td>
                                            <td _msthash="897119" _msttexthash="93678">Tóquio</td>
                                            <td _msthash="897249" _msttexthash="27313">$2100</td>
                                            <td _msthash="897379" _msttexthash="1311219">$6300 •</td>
                                            <td>
                                                <label class="badge badge-success" _msthash="1298455" _msttexthash="90207">Fechado</label>
                                            </td>
                                            <td class="text-right">
                                                <button type="button" class="btn btn-inverse-dark btn-sm ml-2" _msthash="812760" _msttexthash="176644" data-toggle="modal" data-target="#editar_promocao">Editar</button>
                                                <button type="button" class="btn btn-inverse-danger btn-sm ml-2" _msthash="812760" _msttexthash="176644" data-toggle="modal" data-target="#excluir_promocao">Excluir</button>
                                                 @include('pages.promocoes._modalEditar')
                                                 @include('pages.promocoes._modalEliminar')

                                            </td>
                                        </tr>
                                        <tr role="row" class="even">
                                            <td class="sorting_1" _msthash="896860" _msttexthash="34710">WD-64</td>
                                            <td _msthash="896990" _msttexthash="30095">Joe</td>
                                            <td _msthash="897120" _msttexthash="218114">Países Baixos</td>
                                            <td _msthash="897250" _msttexthash="1310465">$1100 •</td>
                                            <td _msthash="897380" _msttexthash="1311323">$7300 •</td>
                                            <td>
                                                <label class="badge badge-warning" _msthash="1298456" _msttexthash="59397">Abrir</label>
                                            </td>
                                            <td class="text-right">
                                                <button type="button" class="btn btn-inverse-dark btn-sm ml-2" _msthash="812760" _msttexthash="176644" data-toggle="modal" data-target="#editar_promocao">Editar</button>
                                                <button type="button" class="btn btn-inverse-danger btn-sm ml-2" _msthash="812760" _msttexthash="176644" data-toggle="modal" data-target="#excluir_promocao">Excluir</button>
                                                 @include('pages.promocoes._modalEditar')
                                                 @include('pages.promocoes._modalEliminar')

                                            </td>
                                        </tr>
                                        <tr role="row" class="odd">
                                            <td class="sorting_1" _msthash="896861" _msttexthash="34853">WD-65</td>
                                            <td _msthash="896991" _msttexthash="75114">Edward</td>
                                            <td _msthash="897121" _msttexthash="153751">Indonésia</td>
                                            <td _msthash="897251" _msttexthash="1311258">$3600 •</td>
                                            <td _msthash="897381" _msttexthash="1311596">$4800 •</td>
                                            <td>
                                                <label class="badge badge-success" _msthash="1298457" _msttexthash="90207">Fechado</label>
                                            </td>
                                            <td class="text-right">
                                                <button type="button" class="btn btn-inverse-dark btn-sm ml-2" _msthash="812760" _msttexthash="176644" data-toggle="modal" data-target="#editar_promocao">Editar</button>
                                                <button type="button" class="btn btn-inverse-danger btn-sm ml-2" _msthash="812760" _msttexthash="176644" data-toggle="modal" data-target="#excluir_promocao">Excluir</button>
                                                 @include('pages.promocoes._modalEditar')
                                                 @include('pages.promocoes._modalEliminar')

                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> --}}
@endsection
