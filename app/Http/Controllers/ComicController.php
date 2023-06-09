<?php

namespace App\Http\Controllers;

use App\Models\Comic;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Http\Requests\StoreComicRequest;
use App\Http\Requests\UpdateComicRequest;


class ComicController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     */
    public function index()
    {
        $comics = Comic::all();
        $database = config("db_partials");
        return view("comics.index", compact("comics", "database"));
    }

    /**
     * Show the form for creating a new resource.
     *
     */
    public function create()
    {
        $database = config("db_partials");
        return view("comics.create", compact("database"));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     */
    public function store(StoreComicRequest $request)
    {
        $data = $request->validated();

        // $newComic = new Comic();
        // $newComic->title = $comic["title"];
        // $newComic->description = $comic["description"];
        // $newComic->thumb = $comic["thumb"];
        // $newComic->price = $comic["price"];
        // $newComic->artists = $comic["artists"];
        // $newComic->writers = $comic["writers"];
        // $newComic->series = $comic["series"];
        // $newComic->sale_date = $comic["sale_date"];
        // $newComic->type = $comic["type"];
        // $newComic->save();
        $newComic = Comic::create($data);
        return redirect()->route("comic.show", $newComic->id);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Comic  $comic
     */
    public function show(Comic $comic)
    {
        $database = config("db_partials");
        return view("comics.show", compact("comic", "database"));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Comic  $comic
     */
    public function edit(Comic $comic)
    {
        $database = config("db_partials");
        return view("comics.edit", compact("comic", "database"));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Comic  $comic
     */
    public function update(UpdateComicRequest $request, Comic $comic)
    {
        $data = $request->validated();
        $comic->update($data);
        return redirect()->route("comic.show", $comic->id);
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
        return redirect()->route("comic.index");
    }
}
