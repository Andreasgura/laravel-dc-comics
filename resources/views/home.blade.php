@extends('layouts.app')

@section('title', 'Home')

@section('content')
<main>
<div class="container cards">
            <div class="btn btn-primary text-uppercase">current series</div>
            <div class="row">
                @foreach ($comics as $comic)
                <div class="col-12 col-md-6 col-lg-2 mb-3 ">
                    <div class="mb-3">
                    <img class="w-100 img-card"
                     src= "{{ $comic['thumb'] }}" alt="{{ $comic['series'] }}">
                    </div>
        <div class="text-uppercase ">
            {{ $comic['series'] }}
        </div>
    </div>
                @endforeach
                
            </div>
            <div class="d-flex justify-content-center">
                <div class="btn btn-primary text-uppercase mt-5 px-5 ">Load More</div>
            </div>
        </div>
</main>

@endsection
