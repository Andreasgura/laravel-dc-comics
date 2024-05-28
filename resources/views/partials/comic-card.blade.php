<div class="col-12 col-md-6 col-lg-2 mb-3 ">
    <div class="mb-3">
        <img class="w-100 img-card" src="{{ $comic->thumb }}" alt="{{ $comic->series }}">
    </div>
    <div class="text-uppercase ">
        <a href="{{ route('comics.show', $comic) }}">{{ $comic->series }}</a>

    </div>
    <form action="{{ route('comics.destroy', $comic) }}" method="POST" class="mt-3 d-inline">
        @csrf
        @method('DELETE')
        <button type="submit" class="btn btn-danger ">Elimina</button>
    </form>
</div>