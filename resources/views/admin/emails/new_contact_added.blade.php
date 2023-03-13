@extends('layouts.admin')
@section('content')
<p>
    name: {{$contact->name}}
    surname: {{$contact->surname}}
    email: {{$contact->email}}
</p>
@endsection