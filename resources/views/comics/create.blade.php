@extends('layouts.app')

@section('title', 'Home')

@section('content')
<section class="container">
    <h1>Crea</h1>
    <!-- unique dive for all errors
    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif -->
    <form action="{{route('comics.store')}}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="thumb" class="form-label">Inserisci url immagine</label>
            <input type="text" class="form-control @error('thumb') is-invalid @enderror " id="thumb" aria-describedby="thumbHelp" name="thumb" value="{{ old('thumb') }}" >
            <div id="titleHelp" class="form-text">bhooo</div>
            @error('thumb')
            <div class="alert alert-danger">{{ $message }}</div>
            @enderror
          </div>
          <div class="mb-3">
            <label for="price" class="form-label">Prerzzo</label>
            <input type="text" class="form-control @error('price') is-invalid @enderror" id="price"  name="price" value="{{ old('price') }}" >
            @error('price')
            <div class="alert alert-danger">{{ $message }}</div>
            @enderror
          </div>
          <div class="mb-3">
            <label for="series" class="form-label ">Nome serie</label>
            <input type="text" class="form-control @error('series') is-invalid @enderror" id="series"  name="series" value="{{ old('series') }}" >
          @error('series')
          <div class="alert alert-danger">{{ $message }}</div>
          @enderror
          </div>
          <div class="mb-3">
            <label for="type" class="form-label ">Tipo</label>
            <input type="text" class="form-control @error('type') is-invalid @enderror" id="type"  name="type" value="{{ old('type') }}" >
          @error('type')
          <div class="alert alert-danger">{{ $message }}</div>
          @enderror
          </div>
        <button type="submit" class="btn btn-primary">Crea</button>
        <button type="reset" class="btn btn-danger">Annulla</button>
    </form>
@endsection
