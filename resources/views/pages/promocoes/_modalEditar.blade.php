<div class="modal1 fade" id="editar_promocao" tabindex="-1" role="dialog" aria-labelledby="editar_promocaoLabel" aria-hidden="true">
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
                            <input type="text" name="titulo" autocomplete="off" required placeholder="Nome Promoção" class="form-control"/>
                        </div>
                    </div>

                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="product">Nome Promoção</label>
                            <input type="text" name="nome" autocomplete="off" required placeholder="Nome Promoção" class="form-control money2"  />
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
