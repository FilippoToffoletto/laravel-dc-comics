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
        $comics = Comic::orderBy('id', 'desc')->paginate(4);
        return view('comics.index', compact('comics'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('comics.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //

        $form_input = $request->all();

        //dd($form_input);
        $new_item = new Comic();
        /*
        $new_item->title = $form_input['title'];
        $new_item->slug = Comic::generateSlug($new_item->title);
        $new_item->description = $form_input['description'];
        $new_item->thumb = $form_input['thumb'];
        $new_item->price = $form_input['price'];
        $new_item->series = $form_input['series'];
        $new_item->sale_date = $form_input['sale_date'];
        $new_item->type = $form_input['type'];
        */
        $form_input['slug'] = Comic::generateSlug($form_input['title']);
        //con fill vengono associate le chiavi presenti in fillable model
        $new_item -> fill($form_input);

        $new_item->save();

        return redirect(route('comics.show', $new_item));

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $comic = Comic::findOrFail($id);

        return view('comics.show', compact('comic'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
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
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Comic $comic)
    {
        $form_input = $request->all();

        if($form_input['title'] != $comic->title){
            $form_input['slug'] = Comic::generateSlug($form_input['title']);
        }else{
            $form_input['slug'] = $comic->slug;
        }
        $comic->update($form_input);

        return redirect()->route('comics.show', $comic);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Comic $comic)
    {
        //
        $comic->delete();

        return redirect()->route('comics.index');
    }
}
