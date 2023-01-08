<div class="modal fade" id="editar_frete{{$registro->id}}" tabindex="-1" role="dialog" aria-labelledby="editar_freteLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="editar_freteLabel">Editar Frete</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="{{route('fretes.editar',$registro->id)}}" method="post" enctype="multipart/form-data">
                    {{csrf_field()}}

                    <div class="col-md-12" >
                        <div class="form-group">
                            <label for="frete">Nome Frete</label>
                            <input type="text" name="nome" autocomplete="off" required placeholder="Nome" class="form-control" value="{{isset($registro->nome)? $registro->nome : ''}}"/>
                        </div>
                    </div>

                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="frete">Valor</label>
                            <input type="text" name="valor" autocomplete="off" required placeholder="Valor" class="form-control money2" value="{{isset($registro->valor)? $registro->valor : ''}}"/>
                        </div>
                    </div>

                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
                        <button type="submit" class="btn btn-primary" value="Salvar">Salvar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
