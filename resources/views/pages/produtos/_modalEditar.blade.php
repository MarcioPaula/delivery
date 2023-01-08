<div class="modal fade" id="editar_produtos{{$registro->id}}" tabindex="-1" role="dialog" aria-labelledby="editar_produtosLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="editar_produtosLabel">Editar Produtos</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="{{route('produtos.editar', $registro->id)}}" method="post" enctype="multipart/form-data">
                    {{csrf_field()}}

                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="produtos">Nome</label>
                            <input type="text" name="nome" autocomplete="off" required placeholder="Nome" class="form-control money2"  />
                        </div>
                    </div>

                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="produtos">Descrição</label>
                            <input type="text" name="descricao" autocomplete="off" required placeholder="Descrição" class="form-control money2"  />
                        </div>
                    </div>

                    <div class="col-md-12" >
                        <div class="form-group">
                            <label for="produtos">Valor Unitário</label>
                            <input type="text" name="valor_unitario" autocomplete="off" required placeholder="Valor Unitario" class="form-control"/>
                        </div>
                    </div>

                    <div class="col-md-12">
                        <label class="my-1 mr-2" for="inlineFormCustomSelectPref">Categorias</label>
                        <select class="custom-select my-1 mr-sm-2" id="inlineFormCustomSelectPref" name="id_categoria">
                            <option selected>{{$registro->id_categoria}}</option>
                        </select>
                    </div>

                    <br>
                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="exampleFormControlFile1">Escolher Imagem</label>
                            <input type="file" class="form-control-file" id="exampleFormControlFile1" name="imagem">
                        </div>
                    </div>

                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
                        <button type="submit" class="btn btn-primary">Salvar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
