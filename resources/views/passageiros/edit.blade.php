@extends('layout.app')
@section('content')
    <h1 class="mb-3">Editar Passageiro - {{$passageiro->nome}}</h1>
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            {{$message}}
        </div>
    @endif
    @if (count($errors) > 0)
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                <li>{{$error}}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <form id="form-passageiro" method="POST" action="{{action('PassageirosController@update',$id)}}">
        @csrf
        <input type="hidden" name="_method" value="PATCH"/>
		<div class="row">
            <div class="col">
                <div class="form-group mb-3">
                    <label for="nome">Nome</label>
                    <input type="text" class="form-control" id="nome" name="nome" value="{{$passageiro->nome}}" placeholder="Digite o Nome do Passageiro" required>
                 </div>
            </div>
        </div>

        <div class="row">
            <div class="col">
                <div class="form-group mb-3">
                    <label for="telefone">Telefone</label>
                    <input type="text" class="form-control" id="telefone" name="telefone" value="{{$passageiro->telefone}}" placeholder="Digite o Telefone do Passageiro..." required>
                 </div>
            </div>
            <div class="col">
                <div class="form-group mb-3">
                    <label for="email">E-mail</label>
                    <input type="email" class="form-control" id="email" name="email" value="{{$passageiro->email}}" placeholder="Digite o E-mail do Passageiro..." required></input>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col">
                <label for="origem">Origem</label>
                <select class="form-control" name="origem" id="origem" value="{{$passageiro->origem}}">
                    <option value="">Selecione</option>
                    @foreach ($aeroportos as $k => $v)
                        <option value="{{$k}}" {{$k == $passageiro->origem ? 'selected' : '' }} >{{$v}}</option>
                    @endforeach
                </select>
            </div>
            <div class="col">
                <label for="destino">Destino</label>
                <select class="form-control" name="destino" id="destino" value="{{$passageiro->destino}}">
                    <option value="">Selecione</option>
                    @foreach ($aeroportos as $k => $v)
                        <option value="{{$k}}" {{$k == $passageiro->destino ? 'selected' : '' }}>{{$v}}</option>
                    @endforeach
                </select>
            </div>
            <div class="col">
                <div class="form-group mb-3">
                    <label for="num_voo">Número Voo</label>
                    <input type="text" class="form-control" id="num_voo" name="num_voo" value="{{$passageiro->num_voo}}" placeholder="Digite o Número do Voo..." required></input>
                </div>
            </div>
        </div>
         <button type="submit" class="btn btn-primary">Atualizar Passageiro</button>
         <a href="{{ url('/') }}" class="btn btn-secondary">Voltar</a>
	</form>
@endsection


