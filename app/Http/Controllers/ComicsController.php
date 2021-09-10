<?php

namespace App\Http\Controllers;

use App\Comic;

use Illuminate\Http\Request;

class ComicsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $comics = Comic::paginate(4);

        return view('comic. index',compact('comics'));
         
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('comic.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd($request->all());

        $data = $request->all();

        $newComics = new Comic();  


        // $newComics->title = $data['title'];
        // $newComics->description = $data['description'];
        // $newComics->thumb = $data['thumb'];
        // $newComics->price = $data['price'];
        // $newComics->series = $data['series'];
        // $newComics->sale_date = $data['sale_date'];
        // $newComics->type = $data['type'];

        $newComics->fill($data);

        $newComics->save();


        // return  view('comics. index',compact('comics'));
        return redirect()->route('comics.show', $newComics->id);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        
        $comics = Comic::find($id);
        
        //dd($comics);
        if ($comics) {

            return view('comic.show', compact('comics'));

        }
        
        abort('404');
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
