<?php

namespace App\Http\Controllers;

use App\Http\Requests\ComicStoreRequest;
use App\Models\Comic;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class ComicController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // dd(Comic::all());
        return view('comics.index', ['comics' => Comic::orderByDesc('id')->paginate(6)]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('comics.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(ComicStoreRequest $request): RedirectResponse
    {
        // dd($request->all());
        $data = $request->all();
        $validated = $request->validated();
        // dd($validated);


        $comic = new Comic();
        // $comic->title = $data['title'];
        // $comic->Series = $data['Series'];
        // $comic->price = $data['price'];
        // $comic->thumb = $data['thumb'];
        // $comic->sale_date = $data['sale_date'];
        // $comic->Description = $data['Description'];
        // $comic->save();

        Comic::create($data);

        // $val_data = $request->validate([

        //     'title' => 'required|min:3|max:50',
        //     'thumb' => 'required|max:255',
        //     'Series' => 'nullable|max:50',
        //     'price' => 'nullable|max:20',
        //     'sale_date' => 'nullable|max:50',
        //     'description' => 'nullable|max:500',

        // ]);
        // dd($val_data);



        return to_route('comics.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Comic $comic)
    {
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
        $comic->update($request->all());


        return to_route('comics.show', $comic);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Comic $comic)
    {
        $comic->delete();
        return to_route('comics.index');
    }
}
