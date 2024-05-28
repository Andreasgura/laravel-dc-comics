@extends('layouts.app')

@section('title', 'Home')

@section('content')
<main>
    <div class="container cards">
        @if(session()->has('message'))
        <div class="alert alert-success" role="alert">
            {{ session()->get('message') }}
        </div>
        @endif
        <div class="btn btn-primary text-uppercase translate">current series</div>
        <div class="row">
            @foreach ($comics as $comic)
            <div class="col-12 col-md-6 col-lg-2 mb-3 ">
                <div class="mb-3">
                    <img class="w-100 img-card" src="{{ $comic->thumb }}" alt="{{ $comic->series }}">
                </div>
                <div class="text-uppercase ">
                    <a href="{{ route('comics.show', $comic) }}">{{ $comic->series }}</a>

                </div>
                <div>
                    <a class="btn btn-primary" href="{{route('comics.edit', $comic)}}" id="deleteBtn">Modifica</a>
                </div>
            </div>
            @endforeach

        </div>
        <div class="d-flex justify-content-center">
            <a href="{{ route('comics.create') }}" id="add-comic">
                <div class="btn btn-primary text-uppercase mt-5 px-5 translate">Aggiungi nuova serie</div>
            </a>
        </div>

    </div>
    @include('partials.ceckModal')

</main>

@endsection