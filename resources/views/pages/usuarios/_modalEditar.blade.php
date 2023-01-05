<div class="modalEditar fade" id="editar_usuario" tabindex="-1" role="dialog" aria-labelledby="editar_usuarioLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="editar_usuarioLabel">Novo Usuário</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="{{route('usuarios.add')}}" method="post" enctype="multipart/form-data">
                    {{csrf_field()}}

                    <div class="col-md-12" >
                        <div class="form-group">
                            <label for="product">Nome do Usuário</label>
                            <input type="text" name="nome" autocomplete="off" required placeholder="Nome Usuário" class="form-control"/>
                        </div>
                    </div>

                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="product">E-mail</label>
                            <input type="text" name="email" autocomplete="off" required placeholder="E-mail" class="form-control money2"  />
                        </div>
                    </div>

                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="code">Senha</label>
                            <input type="text" name="senha" autocomplete="off" required placeholder="Senha" class="form-control"  />
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
