@extends('layouts.app')

@section('content')

<h1>All users</h1>

@foreach($user as $person)

<li> {{ $person->name }}</li>
<li> {{ $person->email }}</li>

@endforeach

@endsection
