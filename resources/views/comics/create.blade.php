@extends('layouts.app')

@section('title', 'Home')

@section('content')
<section class="container">
    <h1>Crea</h1>

    <form action="{{route('comics.store')}}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="thumb" class="form-label">Inserisci url immagine</label>
            <input type="text" class="form-control" id="thumb" aria-describedby="thumbHelp" name="thumb" required>
            <div id="titleHelp" class="form-text">bhooo</div>
          </div>
          <div class="mb-3">
            <label for="price" class="form-label">Prerzzo</label>
            <input type="text" class="form-control" id="price"  name="price">
          </div>
          <div class="mb-3">
            <label for="series" class="form-label">Nome serie</label>
            <input type="text" class="form-control" id="series"  name="series" required>
          </div>
          <div class="mb-3">
            <label for="type" class="form-label">Tipo</label>
            <input type="text" class="form-control" id="type"  name="type" required>
          </div>
        <button type="submit" class="btn btn-primary">Crea</button>
        <button type="reset" class="btn btn-danger">Annulla</button>
    </form>
@endsection
