@extends('layouts.app')

@section('content')
    <h1 class="text-center">Clients</h1>
    <hr/>

    <table class="table table-striped table-hover table-bordered">
        <thead>
            <tr>
                <th class="text-center">ID</th>
                <th class="text-center">Nome</th>
                <th class="text-center">E-mail</th>
                <th class="text-center">Ações</th>
            </tr>
        </thead>

        <tbody>
            @forelse($clients as $client)
                <tr>
                    <td class="text-center">{{ $client->id }}</td>
                    <td class="text-center">{{ $client->name }}</td>
                    <td class="text-center">{{ $client->email }}</td>
                    <td class="text-center">
                        &nbsp;
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="4">Não Há Dados</td>
                </tr>
            @endforelse
        </tbody>
    </table>

    <div class="paginate">
        {{ $clients->links() }}
    </div>
@stop
