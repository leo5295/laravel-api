@extends('layouts.admin')
@section('content')
<p>
    Titolo: {{$lead->title}}
    Slug: {{$lead->slug}}
    Contenuto: {{$lead->content}}
    Autore: {{$lead->author}}
</p>
@endsection