@extends('layout.master')

@push('plugin-styles')
  <!-- {!! Html::style('/assets/plugins/plugin.css') !!} -->
@endpush

@section('content')

<style>
    .client {
        border: 1px solid #ccc;
        padding: 20px;
        box-sizing: border-box;
        display: inline-block;
        margin: 10px;
    }
    .hide {
        display: none;
    }
</style>

<div id="app">
    <div class="row">
        <center>
            <div class="col">
                <div class="form-group mb-3">
                    <h4>Criar Conexão</h4>
                    <label for="client-idd"></label><br>
                    <input type="text" id="client-id" placeholder="Nome Usuário">
                </div>
                <div class="form-group mb-3 ">
                    <label for="client-token"></label><br>
                    <input rows="3" id="client-token" placeholder="Nome Departamento">
                    <br><br>
                    <button class="add-client-btn btn-primary">Gerar QRCode</button>
                </div>
            </div>
        </center>
        <center>
            <div class="col">
                <div class="form-group mb-3">
                    <h4>Eliminar Conexão</h4>
                    <label for="client-id"></label><br>
                    <input type="text" id="client-idd" placeholder="Nome Usuário">
                </div>
                <div class="form-group mb-3">
                    <label for="client-tokenn"></label><br>
                    <input rows="3" id="client-tokenn" placeholder="Nome Departamento">
                    <br><br>

                    <button class="destroy-client-btn btn-danger">Eliminar QRCode</button>
                </div>
            </div>
        </center>
    </div>

    <hr>
    <div class="client-container">
        <div class="client hide">
            <h3 class="title"></h3>
            <p class="token"></p>
            <img src="" alt="QR Code" id="qrcode">
            <h3>Status:</h3>
            <ul class="logs"></ul>
            <br>
        </div>
    </div>
</div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/socket.io/2.3.0/socket.io.js"></script>

<script>

    $(document).ready(function() {

        var socket = io('https://api.alavancaweb.com.br/');

        $('.add-client-btn').click(function() {
            var clientId = $('#client-id').val();
            var clientToken = $('#client-token').val();

            var clientClass = 'client-' + clientId;
            var template = $('.client').first().clone()
                                       .removeClass('hide')
                                       .addClass(clientClass);

            template.find('.title').html(clientId);
            template.find('.token').html(clientToken);
            $('.client-container').append(template);

            socket.emit('create-session', {
                id: clientId,
                token: clientToken
            });
        });

        socket.on('init', function(data) {
            $('.client-container .client').not(':first').remove();
                for (var i = 0; i < data.length; i++) {
                    var session = data[i];

                    var clientId = session.id;
                    var clientToken = session.token;

                    var clientClass = 'client-' + clientId;
                    var template = $('.client').first().clone()
                                            .removeClass('hide')
                                            .addClass(clientClass);

                    template.find('.title').html(clientId);
                    template.find('.token').html(clientToken);
                    $('.client-container').append(template);

                    if (session.ready) {
                        $(`.client.${clientClass} .logs`).append($('<li>').text('Dispositivo está pronto!'));
                    } else {
                        $(`.client.${clientClass} .logs`).append($('<li>').text('Conectando...'));
                    }
                }
        });

        socket.on('remove-session', function(id) {
            $(`.client.client-${id}`).remove();
        });

        socket.on('message', function(data) {
            $(`.client.client-${data.id} .logs`).append($('<li>').text(data.text));
        });

        socket.on('message-group', function(data) {
            $(`.client.client-${data.id} .logs-group`).append($('<li>').text(data.text));
        });

        socket.on('qr', function(data) {
            $(`.client.client-${data.id} #qrcode`).attr('src', data.src);
            $(`.client.client-${data.id} #qrcode`).show();
        });

        socket.on('ready', function(data) {
            $(`.client.client-${data.id} #qrcode`).hide();
        });

        socket.on('authenticated', function(data) {
            $(`.client.client-${data.id} #qrcode`).hide();
        });

        $('.destroy-client-btn').click(function() {
            var clientId = $('#client-idd').val();
            var clientToken = $('#client-tokenn').val();

            socket.emit('destroy-session',{
                id: clientId,
                token: clientToken
            });

            document.location.reload(true);
        });
    });
</script>

@endsection

@push('plugin-scripts')
  {!! Html::script('/assets/plugins/chartjs/chart.min.js') !!}
  {!! Html::script('/assets/plugins/jquery-sparkline/jquery.sparkline.min.js') !!}
@endpush

@push('custom-scripts')
  {!! Html::script('/assets/js/dashboard.js') !!}
@endpush
