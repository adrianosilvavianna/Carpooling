@extends('layouts.app')

@section('content')
<div class="col-md-6">
    <div class="panel panel-info ">
        <div class="panel-heading">
            Motorista
        </div>

        <div class="panel-body ">
                <table class="table table-hover">
                    <thead>
                    <tr>
                        <th>Motorista: </th>
                        <th>{{ $agenda->User->name }}</th>

                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td>Destino:</td>
                        <td>{{ $agenda->Destine->Location->address }}</td>
                    </tr>
                    <tr>
                        <td>Bairro:</td>
                        <td>{{ $agenda->Destine->Location->neighborhood }}</td>
                    </tr>
                    <tr>
                        <td>Cidade:</td>
                        <td>{{ $agenda->Destine->Location->city }}</td>

                    </tr>
                    <tr>
                        <td>CEP:</td>
                        <td>{{ $agenda->Destine->Location->cep }}</td>

                    </tr>
                    <tr>
                        <td>Complemento:</td>
                        <td>{{ $agenda->Destine->Location->complement }}</td>

                    </tr>
                    </tbody>
                </table>
            </div>


        </div>
</div>

@foreach($agenda->Users as $user)

<div class="col-md-6">
    <div class="panel panel-success">
        <div class="panel-heading">
            Participante 1
        </div>

        <div class="panel-body ">
            <table class="table table-hover">
                <thead>
                <tr>
                    <th>Participantes:</th>
                    <th></th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td>Nome: </td>
                    <td>{{ $user->name }}</td>
                </tr>
                <tr>
                    <td>Email: </td>
                    <td>{{ $user->email }}</td>
                </tr>
                <tr>
                    <td>Cidade:</td>
                    <td>{{ $user->Profile->city }}</td>
                </tr>
                <tr>
                    <td>CEP:</td>
                    <td>{{ $user->Profile->cep }}</td>
                </tr>
                <tr>
                    <td>Complemento:</td>
                    <td>{{ $user->Profile->complemento }}</td>
                </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>
@endforeach

@endsection
