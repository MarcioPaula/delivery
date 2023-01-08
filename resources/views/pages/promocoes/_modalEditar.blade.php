<div class="modal fade" id="editar_promocao{{$registro->id}}" tabindex="-1" role="dialog" aria-labelledby="editar_promocaoLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="editar_promocaoLabel">Editar Promoção</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="{{route('promocoes.editar', $registro->id)}}" method="post" enctype="multipart/form-data">
                    {{csrf_field()}}

                    <div class="col-md-12" >
                        <div class="form-group">
                            <label for="product">Título</label>
                            <input type="text" name="titulo" autocomplete="off" required placeholder="Título" class="form-control" value="{{isset($registro->titulo)? $registro->titulo : ''}}"/>
                        </div>
                    </div>

                    <div class="col-md-12" >
                        <label for="product">Descrição</label>
                        <input type="text" name="descricao"  autocomplete="off" required placeholder="Digite aqui todas as Informações da Promoção" class="form-control"  value="{{isset($registro->descricao)? $registro->descricao : ''}}">
                    </div>
                    <br>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
                        <button type="submit" class="btn btn-primary">Salvar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
