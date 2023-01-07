<div class="modal fade" id="editar_promocao" tabindex="-1" role="dialog" aria-labelledby="editar_promocaoLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="editar_promocaoLabel">Editar Promoção</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="{{route('usuarios.add')}}" method="post" enctype="multipart/form-data">
                    {{csrf_field()}}

                    <div class="col-md-12" >
                        <div class="form-group">
                            <label for="product">Título Promoção</label>
                            <input type="text" name="titulo" autocomplete="off" required placeholder="Título Promoção" class="form-control"/>
                        </div>
                    </div>

                    <div class="col-md-12" >
                        <label class="col-form-label" _msthash="2855450" _msttexthash="193947">Descrição</label>
                        <textarea id="maxlength-textarea" maxlength="100" rows="2" placeholder="Digite aqui todas informações da Promoção" class="form-control" _mstplaceholder="1495351"></textarea>
                    </div>
                    <br>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
                        <input type="submit" class="btn btn-primary">Salvar</input>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
