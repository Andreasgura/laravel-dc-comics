<?php

namespace App\Http\Controllers;

use App\Models\Comic;
use Illuminate\Http\Request;
use App\Http\Requests\StoreComicRequest;

class ComicController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $comics = Comic::all();
        return view('comics.index', compact('comics'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('comics.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreComicRequest $request, Comic $comic)
    {
        /*
         VALIDATION, LONG WAY
        $request->validate([
            'thumb' => 'required|max:255',
            'price' => 'required|max:20',
            'series'=> 'required|max:50',
            'type'=> 'required|max:50',
        ]);
        */
        
        // VALIDATION, SHORT WAY
        $data = $request->validated();

        /*short way to create and save new comic;
        fillable or guarded needen in model
        */
        // $data = $request->all();
        $comic->create($data);

        /*
        LONG WAY TO CREATE AND SAVE NEW COMIC
        
        $comic = new Comic();
        $comic->thumb = $request->thumb;
        $comic->price = $request->price;
        $comic->series = $request->series;
        $comic->type = $request->type; 
        $comic->save();
        */
        return redirect()->route('comics.index')->with('message', 'Fumetto aggiunto correttamente');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Comic  $comic
     * @return \Illuminate\Http\Response
     */
    public function show(Comic $comic)
    {
        return view('comics.show', compact('comic'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Comic  $comic
     * @return \Illuminate\Http\Response
     */
    public function edit(Comic $comic)
    {
        return view('comics.edit', compact('comic'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Comic  $comic
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Comic $comic)
    {
        $data = $request->all();
        $comic->update($data);
        return redirect()->route('comics.show', $comic->id)->with('message', 'Fumetto {{ $comic->thumb }} aggiornato correttamente');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Comic  $comic
     * @return \Illuminate\Http\Response
     */
    public function destroy(Comic $comic)
    {   
        $deleted = $comic->thumb;
        $comic->delete();
        return redirect()->route('comics.index', $deleted )->with('message', 'Fumetto {{ $deleted }} eliminato correttamente');
    }
}
