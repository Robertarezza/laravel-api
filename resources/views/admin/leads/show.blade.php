@extends('layouts.admin')

@section('content')
<div class="container mt-5">
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
</div>
@endsection