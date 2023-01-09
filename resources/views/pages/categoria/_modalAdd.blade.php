<div class="modal fade" id="nova_categoria" tabindex="-1" role="dialog" aria-labelledby="nova_categoriaLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="nova_categoriaLabel">Nova Categoria</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="{{route('categoria.add')}}" method="post" enctype="multipart/form-data">
                    {{csrf_field()}}

                    <div class="col-md-12" >
                        <div class="form-group">
                            <label for="product">Categoria</label>
                            <input type="text" name="nome_categoria" autocomplete="off" required placeholder="Categoria" class="form-control"/>
                        </div>
                    </div>

                    <div class="col-md-12" >
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="true" id="defaultCheck1" name="status" checked>
                            <label class="form-check-label" for="defaultCheck1" _msthash="1496846" _msttexthash="550082"> Status da Categoria </label>
                        </div>
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
