<?php

namespace App\Http\Controllers;

use App\Models\Comic;
use Illuminate\Http\Request;

class ComicController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $comics = Comic::All();

        return view('pages.comics.index', compact('comics'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.comics.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $request->validate(
            [
                'title' => 'required|max:150|unique:comics',
                'type' => 'min:3'
            ],
            [
                'title.required' => 'Title can not be empty / Il titolo non può essere vuoto',
                'title.max' => 'Title can be max 150 characters / Il titolo non può superare i 150 caratteri',
                'title.unique' => 'Comic already in the database / Il fumetto è già presente nel database',
                'type.min' => 'Type must be longer than 2 characters / La tipologia deve essere più lunga di 2 caratteri'
            ]

        );


        $form_data = $request ->all();
        $newComic = new Comic();
        $newComic->fill($form_data);
        $newComic->save();

        return redirect()->route('comics.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Comic  $comic
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $comics = Comic::findOrFail($id);

        return view('pages.comics.show', compact('comics'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Comic  $comic
     * @return \Illuminate\Http\Response
     */
    public function edit(Comic $comic)
    {
        return view('pages.comics.edit', compact('comic'));
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

        $request->validate(
            [
                'title' => 'required|max:150|unique:comics',
                'type' => 'min:3'
            ],
            [
                'title.required' => 'Title can not be empty / Il titolo non può essere vuoto',
                'title.max' => 'Title can be max 150 characters / Il titolo non può superare i 150 caratteri',
                'title.unique' => 'Comic already in the database / Il fumetto è già presente nel database',
                'type.min' => 'Type must be longer than 2 characters / La tipologia deve essere più lunga di 2 caratteri'
            ]

        );

        $form_data = $request->all();
        $comic->update($form_data);

        return redirect()->route('comics.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Comic  $comic
     * @return \Illuminate\Http\Response
     */
    public function destroy(Comic $comic)
    {
        $comic->delete();

        return redirect()->route('comics.index');
    }
}
