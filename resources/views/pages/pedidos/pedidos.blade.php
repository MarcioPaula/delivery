@extends('layout.master')
@section('content')

<div class="container">
    <form class="form-inline" action="/home" method="POST">
        {{ csrf_field() }}
        <div class="form-group mb-2">
            <label>Data Inicial:    </label>
            <input type="date" class="form-control" name="fdate">
        </div>
        <div class="form-group mx-sm-3 mb-2">
            <label>Data Final:    </label>
            <input type="date" class="form-control" name="sdate">
        </div>
        <input type="submit" value="Filtrar" class="btn btn-primary mb-2">
    </form>
</div>


<div class="card-body">
    <div class="row grid-margin"><div class="col-12">
    </div>
</div>
<div class="row">
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
                                        <button type="button" class="btn btn-success btn-fw" _msthash="4230018" _msttexthash="74100" value="1" onclick="atualizar(this)">Atualizar</button>
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
                                            <button type="button" class="btn btn-success btn-fw" _msthash="4230018" _msttexthash="74100" value="1" onclick="atualizar(this)">Atualizar</button>
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
                                                <button type="button" class="btn btn-success btn-fw" _msthash="4230018" _msttexthash="74100" value="1" onclick="atualizar(this)">Atualizar</button>
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
                                                <button type="button" class="btn btn-success btn-fw" _msthash="4230018" _msttexthash="74100" value="1" onclick="atualizar(this)">Atualizar</button>
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
                                                <button type="button" class="btn btn-success btn-fw" _msthash="4230018" _msttexthash="74100" value="1" onclick="atualizar(this)">Atualizar</button>
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
    </div>

{{-- <br>

<div class="card-body">
    <table class="table">
      <thead>
        <tr>
          <th _msthash="4133090" _msttexthash="76245">Nro Pedido</th>
          <th _msthash="4133220" _msttexthash="98839">Data Emissão</th>
          <th _msthash="4133350" _msttexthash="74464">Total Pedido</th>
          <th _msthash="4133480" _msttexthash="76037">Nome Cliente</th>
          <th _msthash="4133480" _msttexthash="76037">Contato Cliente</th>
          <th _msthash="4133480" _msttexthash="76037">Feedback</th>
          <th _msthash="4133480" _msttexthash="76037">Status</th>
          <th _msthash="4133480" _msttexthash="76037">Atualizar Status</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td _msthash="4140552" _msttexthash="56849">Jacob</td>
          <td _msthash="4140682" _msttexthash="56511">53275531</td>
          <td _msthash="4140812" _msttexthash="101790">Excelente</td>
          <td _msthash="4140552" _msttexthash="56849">Jacob</td>
          <td _msthash="4140682" _msttexthash="56511">53275531</td>
          <td _msthash="4140812" _msttexthash="101790">Bom</td>
          <td>
            <label class="badge badge-danger" _msthash="4951193" _msttexthash="113243">Inicial</label>
          </td>
          <td _msthash="4140812" _msttexthash="101790">
            <button type="button" class="btn btn-success btn-fw" _msthash="4230018" _msttexthash="74100" value="1" onclick="atualizar(this)">Atualizar</button>
          </td>
        </td>
        </tr>
        <tr>
          <td _msthash="4140747" _msttexthash="97201">Confuso</td>
          <td _msthash="4140877" _msttexthash="56693">53275532</td>
          <td _msthash="4141007" _msttexthash="102102">Ruim</td>
          <td _msthash="4140747" _msttexthash="97201">Confuso</td>
          <td _msthash="4140877" _msttexthash="56693">53275532</td>
          <td _msthash="4141007" _msttexthash="102102">Bom</td>
          <td>
            <label class="badge badge-warning" _msthash="4951492" _msttexthash="179608">Preprando</label>
          </td>
          <td _msthash="4140812" _msttexthash="101790">
            <button type="button" class="btn btn-success btn-fw" _msthash="4230018" _msttexthash="74100" value="1" onclick="atualizar(this)">Atualizar</button>
          </td>
        </tr>
        <tr>
          <td _msthash="4140942" _msttexthash="44746">John</td>
          <td _msthash="4141072" _msttexthash="56875">53275533</td>
          <td _msthash="4141202" _msttexthash="101998">Bom</td>
          <td _msthash="4140942" _msttexthash="44746">John</td>
          <td _msthash="4141072" _msttexthash="56875">53275533</td>
          <td _msthash="4141202" _msttexthash="101998">Excelente</td>
          <td>
            <label class="badge badge-success" _msthash="4952090" _msttexthash="179608">Finalizado</label>
          </td>
          <td _msthash="4140812" _msttexthash="101790">
            <button type="button" class="btn btn-success btn-fw" _msthash="4230018" _msttexthash="74100" value="1" onclick="atualizar(this)">Atualizar</button>
          </td>
        </tr>
        <tr>
          <td _msthash="4141137" _msttexthash="60177">Pedro</td>
          <td _msthash="4141267" _msttexthash="57057">53275534</td>
          <td _msthash="4141397" _msttexthash="102206">16 Maio 2017</td>
          <td _msthash="4141137" _msttexthash="60177">Pedro</td>
          <td _msthash="4141267" _msttexthash="57057">53275534</td>
          <td _msthash="4141397" _msttexthash="102206">16 Maio 2017</td>
          <td>
            <label class="badge badge-success" _msthash="4952090" _msttexthash="179608">Finalizado</label>
          </td>
          <td _msthash="4140812" _msttexthash="101790">
            <button type="button" class="btn btn-success btn-fw" _msthash="4230018" _msttexthash="74100" value="1" onclick="atualizar(this)">Atualizar</button>
          </td>
        </tr>
        <tr>
          <td _msthash="4141332" _msttexthash="43212">Dave</td>
          <td _msthash="4141462" _msttexthash="57239">53275535</td>
          <td _msthash="4141592" _msttexthash="101673">20 Maio 2017</td>
          <td _msthash="4141332" _msttexthash="43212">Dave</td>
          <td _msthash="4141462" _msttexthash="57239">53275535</td>
          <td _msthash="4141592" _msttexthash="101673">20 Maio 2017</td>
          <td>
            <label class="badge badge-danger" _msthash="4951193" _msttexthash="113243">Inicial</label>
          </td>
          <td _msthash="4140812" _msttexthash="101790">
            <button type="button" class="btn btn-success btn-fw" _msthash="4230018" _msttexthash="74100" value="1" onclick="atualizar(this)">Atualizar</button>
          </td>
        </tr>
      </tbody>
    </table>
  </div>

  <script>
    function atualizar(id){
        alert(id.value)
    }
  </script> --}}
@endsection
