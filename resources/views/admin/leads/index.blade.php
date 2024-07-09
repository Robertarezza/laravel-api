@extends('layouts.admin')

@section('content')

<div class="container mt-4">
    <h1>Lista di richieste di contatti</h1>
    <table class="table mt-5">
        <thead>

            <tr>
                <th scope="col">Id</th>
                <th scope="col">Nome</th>
                <th scope="col">Email</th>
                <th scope="col">Data</th>
                <th scope="col">Stato</th>
                <th scope="col">Azioni</th>
            </tr>

        </thead>
        <tbody>
            @foreach($leads as $lead)
            <tr>
                <th scope="col">{{$lead->id}}</th>
                <td scope="col">{{$lead->name}} {{$lead->lasname}}</td>
                <td>{{$lead->email}}</td>
                <td>{{$lead->created_at}}</td>
                <td>
                    <form action="{{ route('admin.leads.update', ['lead' => $lead->id]) }}" method="POST">
                        @csrf
                        @method('PATCH')
                        <select name="status" aria-label="Seleziona lo status">
                            <option @selected($lead->status === 'pending') value="pending">In attesa</option>
                            <option @selected($lead->status === 'closed') value="closed">Risposto</option>
                        </select>
                        <button type="submit" class="btn btn-primary">Salva</button>
                    </form>
                </td>
                <td class="d-flex gap-2">

                    <a href="{{route('admin.leads.show', ['lead' => $lead->id]) }}" class="btn btn-outline-info" title="Dettagli">
                        <i class="fa-solid fa-circle-info"></i>
                    </a>

                    <form action="{{route('admin.leads.destroy',  ['lead' => $lead->id] )}}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-outline-danger" title="Elimina" onclick="return confirm('Sei sicuro di volerlo eliminare {{$lead->name}}? ')"><i class="fa-solid fa-trash-can "></i></button>

                    </form>
                </td>
                <!-- //<th scope="col">Azioni</th> -->
            </tr>
            @endforeach
        </tbody>
    </table>
    {{ $leads->links() }}
</div>


@endsection