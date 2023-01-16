@extends('layout.master')

@section('content')

<div class="card-body">
    <h4 class="card-title" _msthash="1771757" _msttexthash="77545">Conectar WhatsApp</h4>
    <button type="button" class="btn btn-success" data-toggle="modal" data-target="#nova_conexao">Nova Conexão</button>
    <br><br>
    <div class="table-responsive">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th _msthash="3901040" _msttexthash="139581"> Nome </th>
                    <th _msthash="3901170" _msttexthash="153218"> Departamento </th>
                    <th _msthash="3900910" _msttexthash="208377"> Conectar-se</th>
                    <th _msthash="3900910" _msttexthash="208377"> Editar | Excluir </th>
                </tr>
            </thead>
            <tbody>
                @foreach ($registros as $registro)
                    <tr>
                        <td class="font-weight-medium" _msthash="3901040" _msttexthash="139581">{{$registro->nome}}
                            <input value="{{$registro->nome}}" hidden type="text" id="client-id">
                        </td>

                        <td class="font-weight-medium departamento" _msthash="3901170" _msttexthash="153218">{{$registro->departamento}}
                            <input value="{{$registro->departamento}}" hidden type="text" id="client-token">
                        </td>

                        <td>
                            <div class="check">
                                <button class="add-client-btn" type="button" data-toggle="modal" data-target="#cria_conexao{{$registro->id}}" value="{{$registro->nome}}">
                                    <img src="{{ asset('assets/images/faces/qrcode.jpg')}}" id="img" data-valor="{{$registro->nome}}"/>
                                </button>
                            </div>
                        </td>
                        @include('pages.conectar._modalConectar')

                        <td class="align-middle text-end">
                            <div class="editar-eliminar">
                                <button type="button" class="btn btn-inverse-dark btn-sm ml-2" _msthash="3900910" _msttexthash="208377" id="editar" data-toggle="modal" data-target="#editar_conexao{{$registro->id}}">Editar</button>
                                <button type="button" class="btn btn-inverse-danger btn-sm ml-2" _msthash="3900910" _msttexthash="208377" id="eliminar" data-toggle="modal" data-target="#excluir_conexao{{$registro->id}}">Excluir</button>
                            </div>
                                @include('pages.conectar._modalEditar')
                                @include('pages.conectar._modalEliminar')
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>

@include('pages.conectar._modalAdd')

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/socket.io/2.3.0/socket.io.js"></script>

<script>

    //Inicia Logica Utilizando Jquery
    $(document).ready(function() {

        //Variaveis Globais Jqury
        var socket = io('http://localhost:8001'); //Conecta com API externa
        var check = 'img/check.svg';              //Salva imagem de check
        var index_nome = -0;                      //Salva valor da posição do array que o nome está

        //Evento quando clica no botão para conectar
        $('.add-client-btn').click(function() {

            //Variaveis do evento .add-client-btn
            var clientId = $('#client-id').val();
            var clientToken = $('#client-token').val();
            var clientClass = 'client-' + clientId;

            //Verifica se já existe conexão, caso exista não permite criar novamente obs.................ajustar essa parte ainda
            if($('.client').hasClass(clientClass)){
                //Não faz nada
            }else{
                //Clona template atual, alterando para gif de carregando(Está sendo tratado dentro do _modalConectar)
                var template = $('.client').first().clone()
                                       .attr('style', 'display: flex')
                                       .addClass(clientClass);
                $('.client-container').append(template);

                //Envia para API nome e dapartamento da conexão(estes dados ficam salvos em um array dentro da api)
                socket.emit('create-session', {
                    id: clientId,
                    token: clientToken
                });
            }
        });

        $('.editar-eliminar #editar').click(function(){
            alert("teste")
        })

        $('.editar-eliminar #eliminar').click(function(){
            alert("teste")
        })

        //Limpa conexão do array da API e desconecta aparelho( precisa de testes e revisões)
        // $('.modal-footer #desconectar-conexao').click(function() {

        //     var clientId = $('#client-id').val();
        //     var clientToken = $('#client-token').val();

        //     socket.emit('destroy-session',{
        //         id: clientId,
        //         token: clientToken
        //     });

        //     document.location.reload(true);
        // });

        //Recebe nome e departamento da conexão toda vez que a tela é atualizada
        socket.on('init', function(data) {

            //Contador para pegar as posições de cada conexão conectada no array da API
            for (var i = 0; i < data.length; i++) {

                //Variaveis do contador FOR
                var session = data[i];              //Salva todos os dados de cada posição do array
                var clientId = session.id;          //Salva apenas o nome
                var clientToken = session.token;    //Salva apenas o departamento

                //Evento para percorrer cada registro existente na tela e pegar sua posição no array(index)
                $(".font-weight-medium #client-id").each(function (index, value) {
                    if(clientId == value.value)
                    index_nome = index;
                });

                //Evento para percorrer cada imagem da tela e comparando o index do array de imagens com o index do array de nomes, altera a imagem do botão para check
                $(".check #img").each(function (index, value) {

                    if(index == index_nome){
                        value.src = 'img/check.svg';
                    }
                });
            }
        });

        //Ainda não sei muito bem o que essa função está fazendo na API
        socket.on('remove-session', function(id) {
            //Variaveis evento qrcode
            var index_nome = -0;        //Salva a posição que o index está no array, inicia com -0 para não dar erro

            //Evento para percorrer cada registro existente na tela e pegar sua posição no array(index)
            $(".font-weight-medium #client-id").each(function (index, value) {
                if(id == value.value)
                index_nome = index;
            });

            //Evento para percorrer cada imagem da tela e comparando o index do array de imagens com o index do array de nomes, altera a imagem do botão para check
            $(".check #img").each(function (index, value) {
                if(index == index_nome){

                    value.src = 'assets/images/faces/qrcode.jpg';
                }
            });
        });

        //Retorna mensagem vinda da API no momento não está retornada nada, mais futuramente poderemos utilizar
        socket.on('message', function(data) {
            console.log(data)
        });

        //Ainda não sei muito bem o que essa função está fazendo na API
        socket.on('message-group', function(data) {
        });

        //Recebe nome da conexão salva no array da api + imagem que será mostrada em tela para conexão
        socket.on('qr', function(data) {

            //Variaveis evento qrcode
            var index_nome = -0;        //Salva a posição que o index está no array, inicia com -0 para não dar erro

            //Altera imagem do gif carregando para imagem do qrcode vinda da API
            $(`.client #qrcode`).attr('src', data.src);
            $(`.client #qrcode`).show();

            //se a imagem vinda da API for check quer dizer que está conexão já está conectada, então faz a alteração da imagem para check
            if(data.src == "img/check.svg"){

                //Evento para percorrer cada registro existente na tela e pegar sua posição no array(index)
                $(".font-weight-medium #client-id").each(function (index, value) {
                    if(data.id == value.value)
                    index_nome = index;
                });

                //Evento para percorrer cada imagem da tela e comparando o index do array de imagens com o index do array de nomes, altera a imagem do botão para check
                $(".check #img").each(function (index, value) {
                    if(index == index_nome){

                        value.src = 'img/check.svg';
                    }
                });

                //Inicia Delay de 1 segundo para alterar imagem do qrcode para check
                let i = 0

                const timer = setInterval(function() {
                if (i >= 1) {
                    clearInterval(timer) //aborta a execução caso a condição seja atingida
                }

                i++
                    //Fecha o modal quando o tempo de 1 segundo seja atendido
                    $('#cria_conexao').modal('hide');
                }, 2000)
            }
        });

        //Recebe informações de conectado da API mais ainda não está sendo utilizado
        socket.on('ready', function(data) {
        });

        //Recebe informações de authenticado da API mais ainda não está sendo utilizado
        socket.on('authenticated', function(data) {
        });


    }); //Finaliza Logica Jquery

</script>

@endsection
