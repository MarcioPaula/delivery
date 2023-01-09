<div class="modal fade" id="editar_categoria{{$registro->id}}" tabindex="-1" role="dialog" aria-labelledby="editar_categoriaLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="editar_categoriaLabel">Editar Categoria</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="{{route('categoria.editar', $registro->id)}}" method="post" enctype="multipart/form-data">
                    {{csrf_field()}}

                    <div class="col-md-12" >
                        <div class="form-group">
                            <label for="product">Categoria</label>
                            <input type="text" name="nome_categoria" autocomplete="off" required placeholder="Categoria" class="form-control" value="{{isset($registro->nome_categoria)? $registro->nome_categoria : ''}}"/>
                        </div>
                    </div>

                    <div class="col-md-12" >
                        <div class="form-check">

                            @if ($registro->status == "Ativo")
                                <input class="form-check-input" type="checkbox" id="defaultCheck1" name="status" value="{{isset($registro->status)? $registro->status : ''}}" checked>
                                <label class="form-check-label" for="defaultCheck1" _msthash="1496846" _msttexthash="550082"> Status da Categoria</label>
                            @else
                                <input class="form-check-input" type="checkbox" id="defaultCheck1" name="status" value="{{isset($registro->status)? $registro->status : ''}}">
                                <label class="form-check-label" for="defaultCheck1" _msthash="1496846" _msttexthash="550082"> Status da Categoria </label>
                            @endif
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
</div>
