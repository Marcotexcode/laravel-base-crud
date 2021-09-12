

@extends('layouts.app')

@section('title', 'nome titolo')

@section('content')

<div class="container">

    <h2 class="text-center">MODIFICA PRODOTTO</h2>

    {{-- @dd($comics); --}}

    <form action="{{ route('comics.update', $comics->id) }}" method="post">
        
        @csrf

        @method('PUT')

        <div class="form-group">
    
            <label for="title">Titolo</label>
    
            <input type="text" name="title" class="form-control" id="title" value="{{ $comics->title }}">
        
        </div>

        <div class="form-group">
    
            <label for="thumb">Immagine</label>
    
            <input type="text" name="thumb" class="form-control" id="thumb" value="{{ $comics->thumb }}">
        
        </div>

        <div class="form-group">
    
            <label for="price">Prezzo</label>
    
            <input type="text" name="price" class="form-control" id="price" value="{{ $comics->price }}">
        
        </div>

        <div class="form-group">
    
            <label for="series">Serie</label>
    
            <input type="text" name="series" class="form-control" id="series" value="{{ $comics->series }}">
        
        </div>

        <div class="form-group">
    
            <label for="sale_date">Data es.(2021-09-10)</label>
    
            <input type="text" name="sale_date" class="form-control" id="sale_date" value="{{ $comics->sale_date }}">
        
        </div>

        <div class="form-group">
    
            <label for="type">Tipo</label>
    
            <input type="text" name="type" class="form-control" id="type" value="{{ $comics->type }}">
        
        </div>

        <div class="form-group my-3">
    
            <label for="description">Descrizione</label>

            <textarea name="description" class="form-control" id="description" cols="30" rows="10"> {{ $comics->description }} </textarea>
            
        </div>
    
        <button type="submit" class="btn btn-primary">Submit</button>
    
    </form>
    
</div>





@endsection
