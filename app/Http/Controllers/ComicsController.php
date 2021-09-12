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

        $newComics->fill($data);

        $newComics->save();


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

        // $comics = Comic::findOrFail($id);
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

        $comics = Comic::find($id);

        return view('comic.edit',compact('comics'));

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

        //dd($request->all()); 
        
        $data = $request->all(); 
        
        $comic->update($data);

        return redirect()->route('comics.index', $comic->id  )->with('modifica', 'Hai modificato l\' id: '. $comic->id );

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Comic $comic )
    {
        
        $comic->delete();

        return redirect()->route('comics.index')->with('deleted', 'Hai cancellato l\' id: '. $comic->id );
    
    }
}
