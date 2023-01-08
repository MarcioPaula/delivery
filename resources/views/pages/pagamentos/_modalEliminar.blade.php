<div class="modal fade" id="excluir_pagamento{{$registro->id}}" tabindex="-1" role="dialog" aria-labelledby="excluir_pagamentoLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="excluir_pagamentoaLabel">Excluir Pagamento</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">

                Tem certeza que deja Excluir o Pagamento: {{$registro->nome}}?

                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
                    <a href="{{route('pagamentos.delete',$registro->id)}}" class="btn btn-danger">Excluir</a>
                </div>
            </div>
        </div>
    </div>
</div>
