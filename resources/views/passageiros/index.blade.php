@extends('layout.app')
@section('content')
    <h1>Lista de Passageiros</h1>
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            {{$message}}
        </div>
    @endif
    <div class="row">
        <div class="col">
            <a class="btn btn-primary mb-3" href="{{ url('passageiros/create') }}">
                {{ __('Inserir Passairos') }}
            </a>
        </div>
    </div>
    <div class="row">
        <div class="col">
                <table class="table table-striped table-dark">
                        <thead>
                            <tr>
                            <th scope="col">ID</th>
                            <th scope="col">Nome</th>
                            <th scope="col">Telefone</th>
                            <th scope="col">E-mail</th>
                            <th scope="col" class="text-center">Origem</th>
                            <th scope="col" class="text-center">Destino</th>
                            <th scope="col" class="text-center">Num. Voo</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($passageiros as $passageiro)
                                <tr>
                                    <th scope="row">{{$passageiro->id}}</th>
                                    <td>{{$passageiro->nome}}</td>
                                    <td>{{$passageiro->telefone}}</td>
                                    <td>{{$passageiro->email}}</td>
                                    <td class="text-center">{{$passageiro->origem}}</td>
                                    <td class="text-center">{{$passageiro->destino}}</td>
                                    <td class="text-center">{{$passageiro->num_voo}}</td>
                                    <td>
                                        <form method="POST" action="{{action('PassageirosController@destroy',$passageiro->id)}}">
                                            @csrf
                                            <input type="hidden" name="_method" value="DELETE"/>
                                            <a href="{{URL::to('passageiros/'.$passageiro->id.'/edit')}}" class="btn btn-primary"> Editar</a>
                                            <button class="btn btn-danger" onclick="confirm('Tem certeza que deseja excluir o {{$passageiro->nome}} ?')" >Excluir</button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach

                        </tbody>
                    </table>
        </div>


    </div>
    {{$passageiros->links()}}
@endsection


