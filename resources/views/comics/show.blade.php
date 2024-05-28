@extends('layouts.app')

@section('title', 'Home')

@section('content')

<h1>{{ $comic->series }}</h1>
<form action="{{ route('comics.destroy', $comic) }}" method="POST" class="mt-3 d-inline">
    @csrf
    @method('DELETE')
    <button type="submit" class="btn btn-danger" id="deleteBtn">Elimina</button>
</form>
@include('partials.ceckModal')
@endsection