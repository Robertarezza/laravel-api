<h1>Ciao Admin</h1>
<p>hai ricevito una nuova richiesta contatto</p>

<dl>
    <dt>Da</dt>
    <dd>{{$lead->name}} {{$lead->lastname}}</dd>
    <dt>Email</dt>
    <dd>{{$lead->email}}</dd>
    <dt>Telefono</dt>
    <dd>{{$lead->phone_number}}</dd>
    <dt>Messaggio</dt>
    <dd>{{$lead->message}}</dd>
</dl>