<div class="modal fade" id="excluir_promocao{{$registro->id}}" tabindex="-1" role="dialog" aria-labelledby="excluir_promocaoLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="excluir_promocaoLabel">Excluir Promoção</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">

                Tem certeza que deja Excluir a Promoção: {{$registro->titulo}}?

                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
                    <a href="{{route('promocoes.delete',$registro->id)}}" class="btn btn-danger">Excluir</a>
                </div>
            </div>
        </div>
    </div>
</div>
