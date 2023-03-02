<?php

namespace App\Http\Controllers;

use App\Models\Comic;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class ComicController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $query = Comic::query();
        $comics = $query->get();
        return view('comics', compact('comics'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $comic = new Comic();
        return view('comics.create', compact('comic'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|unique:teams',
            'description' => 'required|string',
            'price' => 'required|numeric|min:0',
        ],[
            'title.unique' => "il nome $request->title è già presente",
            'description.required' => 'il campo descrizzione è obbligatorio',
            'price.required' => 'il campo del prezzo è obbligatorio',
            'price.min' => 'il minimo è :min',
        ]);

        $data = $request->all();
        
        $comic = new Comic();

        $comic->fill($data);

        $comic->save();

        return to_route('comics.show', $comic->id);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $comic = Comic::findOrFail($id);

        return view('comics.show', compact('comic'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Comic $comic)
    {
        return view('comics.edit', compact('comic'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Comic $comic)
    {
        $data = $request->all();

        $request->validate([
            'title' => ['required', 'string', Rule::unique('comics')->ignore($comic->id)],
            'description' => 'required|string',
            'price' => 'required|numeric|min:0',
        ],[
            'title.unique' => "il nome $request->title è già presente",
            'description.required' => 'il campo descrizzione è obbligatorio',
            'price.required' => 'il campo del prezzo è obbligatorio',
            'price.min' => 'il minimo è :min',
        ]);

        $comic->update($data);

        return to_route('comics.show', $comic->id);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
