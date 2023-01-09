@extends('layout.master')
@section('content')

<div>
<h4>Suporte ao Cliente</h4>
</div>
<br>
<div class="container">
    <div class="row">

        <div class="col-md-6 jumbotron mx-auto">
            <form action="{{ url('/suporte') }}" method="POST">
                {{ csrf_field() }}

                <div class="form-group">
                    <h3>Enviar E-mail</h3>
                </div>

                @if(count($errors) > 0)
                    <div class="alert alert-warning alert-dismissible fade show" role="alert">
                        <strong>Preencha os dados corretamente!</strong>
                        <ul>
                            @foreach($errors->all() as $error)
                                <li>
                                    {{$error}}
                                </li>
                            @endforeach
                        </ul>

                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                @endif

                @if($message = Session::get('success'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    <strong>Obrigado !</strong> {{$message}}
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                @endif

                @if($message =  Session::get('error'))
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    <strong>Oppsss! Ocorreu um erro inesperado, tente novamente</strong> {{$message}}
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                @endif

                <div class="form-group">
                    <label for="nome">Nome</label>
                    <input name="nome" type="text" class="form-control" placeholder="Nome">
                </div>

                <div class="form-group">
                    <label for="email">E-mail</label>
                    <input name="email" type="text" class="form-control" placeholder="E-mail">
                </div>

                <div class="form-group">
                    <label for="mensagem">Mensagem</label>
                    <textarea name="mensagem" class="form-control" cols="10" rows="5" placeholder="Digite sua Mensagem"></textarea>
                </div>
                <br>

                <button type="submite" class="btn btn-primary">Enviar</button>

            </form>
        </div>
    </div>
</div>


@endsection
