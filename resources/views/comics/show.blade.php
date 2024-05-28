@extends('layouts.app')

@section('title', 'Home')

@section('content')
    
 <h1>{{ $comic->series }}</h1>
<div>
    <a class="btn btn-primary" href="{{route('comics.edit', $comic)}}">Modifica</a>
</div>
@endsection