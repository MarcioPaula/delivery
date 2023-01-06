<div class="modal fade" id="novo_pagamentos" tabindex="-1" role="dialog" aria-labelledby="novo_pagamentosLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="novo_pagamentosLabel">Novo Pagamento</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="{{route('usuarios.add')}}" method="post" enctype="multipart/form-data">
                    {{csrf_field()}}

                    <div class="col-md-12" >
                        <div class="form-group">
                            <label for="product">Nome Forma Pagamento</label>
                            <input type="text" name="nome" autocomplete="off" required placeholder="Nome Forma Pagamento" class="form-control"/>
                        </div>
                    </div>

                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="product">Valor Taxa</label>
                            <input type="text" name="valor" autocomplete="off" required placeholder="Valor Taxa" class="form-control money2"  />
                        </div>
                    </div>

                    <div class="col-12">
                        <div class="form-check">
                          <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault1" required>
                          <label class="form-check-label" for="flexCheckDefault1">
                            Matercard
                          </label>
                        </div>
                    </div>

                    <div class="col-12">
                        <div class="form-check">
                          <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault2" required>
                          <label class="form-check-label" for="flexCheckDefault2">
                            Visa
                          </label>
                        </div>
                    </div>

                    <div class="col-12">
                        <div class="form-check">
                          <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault3" required>
                          <label class="form-check-label" for="flexCheckDefault3">
                            Elo
                          </label>
                        </div>
                    </div>

                    <div class="col-12">
                        <div class="form-check">
                          <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault4" required>
                          <label class="form-check-label" for="flexCheckDefault4">
                            Ourocard
                          </label>
                        </div>
                    </div>

                    <div class="col-12">
                        <div class="form-check">
                          <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault5" required>
                          <label class="form-check-label" for="flexCheckDefault5">
                            Pan
                          </label>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
                        <button type="button" class="btn btn-primary">Salvar</button>
                    </div>
                </form>
            </div>
    </div>
</div>
