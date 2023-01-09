<div class="modal fade" id="editar_usuario{{$registro->id}}" tabindex="-1" role="dialog" aria-labelledby="editar_usuarioLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="editar_usuarioLabel">Editar Usuário</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="{{route('usuario.editar', $registro->id)}}" method="post" enctype="multipart/form-data">
                    {{csrf_field()}}

                    <div class="col-md-12" >
                        <div class="form-group">
                            <label for="product">Nome</label>
                            <input type="text" name="name" autocomplete="off" required placeholder="Nome" class="form-control" value="{{isset($registro->name)? $registro->name : ''}}"/>
                        </div>
                    </div>
                    <div class="col-md-12" >
                        <div class="form-group">
                            <label for="product">E-mail</label>
                            <input type="text" name="email" autocomplete="off" required placeholder="E-mail" class="form-control" value="{{isset($registro->email)? $registro->email : ''}}"/>
                        </div>
                    </div>
                    <div class="col-md-12" >
                        <div class="form-group">
                            <label for="product">Senha</label>
                            <input type="password" name="password" autocomplete="off" required placeholder="Senha" class="form-control" value="{{isset($registro->password)? $registro->password : ''}}"/>
                        </div>
                    </div>

                    <div class="col-md-12" >
                        <div class="form-check">

                            @if ($registro->admin == "Sim")
                                <input class="form-check-input" type="checkbox" id="defaultCheck1" name="admin" value="{{isset($registro->admin)? $registro->admin : ''}}" checked>
                                <label class="form-check-label" for="defaultCheck1" _msthash="1496846" _msttexthash="550082"> Administrador</label>
                            @else
                                <input class="form-check-input" type="checkbox" id="defaultCheck1" name="admin" value="{{isset($registro->admin)? $registro->admin : ''}}">
                                <label class="form-check-label" for="defaultCheck1" _msthash="1496846" _msttexthash="550082"> Administrador </label>
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
