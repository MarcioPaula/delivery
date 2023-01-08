<div class="modal fade" id="novo_produto" tabindex="-1" role="dialog" aria-labelledby="novo_produtoLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="novo_produtoLabel">Novo Produto</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="{{route('usuarios.add')}}" method="post" enctype="multipart/form-data">
                    {{csrf_field()}}

                    <div class="col-md-12" >
                        <div class="form-group">
                            <label for="product">Nome</label>
                            <input type="text" name="nome" autocomplete="off" required placeholder="Nome Categoria" class="form-control"/>
                        </div>
                    </div>

                    <div class="col-md-12" >
                    <div class="form-group">
                        <label for="exampleSelectPrimary" _msthash="2396810" _msttexthash="133497">Categoria</label>
                        <select id="exampleSelectPrimary" class="form-control border-primary">
                            <option _msthash="813384" _msttexthash="4459">Lanches</option>
                            <option _msthash="813566" _msttexthash="4550">Pizzas</option>
                            <option _msthash="813748" _msttexthash="4641">Doces</option>
                            <option _msthash="813930" _msttexthash="4732">Refrigerantes</option>
                            <option _msthash="814112" _msttexthash="4823">Frios</option>
                        </select>
                    </div>
                    </div>

                    <div class="col-md-12" >
                        <div class="form-group">
                            <label for="product">Preço</label>
                            <input type="text" name="preco" autocomplete="off" required placeholder="Preço" class="form-control"/>
                        </div>
                    </div>
                    <div class="col-md-12" >
                            <label class="col-form-label" _msthash="2855450" _msttexthash="193947">Descrição</label>
                            <textarea id="maxlength-textarea" maxlength="100" rows="2" placeholder="Digite neste campo todas as informações do Produto" class="form-control" _mstplaceholder="1495351"></textarea>
                    </div>

                    <br>
                    <div class="col-md-12" >
                        <div class="form-group">
                            {{-- <label _msthash="2944396" _msttexthash="325988">Upload de arquivos</label>
                            <input type="file" name="img[]" class="file-upload-default"> --}}
                            <div class="input-group col-xs-12">
                                <input type="text" disabled="disabled" placeholder="Carregar imagem" class="form-control file-upload-info" _mstplaceholder="253968">
                                <span class="input-group-append">
                                    <button type="button" class="file-upload-browse btn btn-info" _msthash="4207424" _msttexthash="111995">Carregar</button>
                                </span>
                            </div>
                        </div>
                    </div>

                    <br>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
                        <button type="button" class="btn btn-primary">Salvar</button>
                    </div>
                </form>
            </div>
    </div>
</div>
