<div class="modal fade" id="novo_usuario" tabindex="-1" role="dialog" aria-labelledby="novo_usuarioLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="novo_usuarioLabel">Novo Usuário</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="{{route('usuario.add')}}" method="post" enctype="multipart/form-data">
                    {{csrf_field()}}

                    <div class="col-md-12" >
                        <div class="form-group">
                            <label for="usuario">Nome</label>
                            <input type="text" name="name" autocomplete="off" required placeholder="Nome" class="form-control"/>
                        </div>
                    </div>

                    <div class="col-md-12" >
                        <div class="form-group">
                            <label for="usuario">E-mail</label>
                            <input type="email" name="email" autocomplete="off" required placeholder="E-mail" class="form-control"/>
                        </div>
                    </div>

                    <div class="col-md-12" >
                        <div class="form-group">
                            <label for="usuario">Senha</label>
                            <input type="text" name="password" autocomplete="off" required placeholder="Senha" class="form-control"/>
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
