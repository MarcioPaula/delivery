<div class="modal fade" id="pedido_preparando{{$peditem[0]->id_pedido}}" tabindex="-1" role="dialog" aria-labelledby="pedido_preparandoLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="pedido_preparandoLabel">Rejeitar Pedido</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="{{route('pedidos.cancelar', $peditem[0]->id_pedido)}}" method="get" enctype="multipart/form-data">
                    {{csrf_field()}}

                    <div class="form-group">
                        <label for="exampleTextarea1" _msthash="3668379" _msttexthash="193947">Escreva o Motivo</label>
                        <textarea class="form-control" name="motivo" id="exampleTextarea1" rows="2" required></textarea>
                    </div>

                    Ao confirmar a rejeição deste pedido, seu cliente será informado automaticamente pelo WhatsApp, que o pedido foi rejeitado pelo(s) motivos descritos acima. Tem certeza que deseja continuar?

                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
                        <button type="submit" class="btn btn-primary">Continuar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
