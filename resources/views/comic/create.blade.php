

@extends('layouts.app')

@section('title', 'nome titolo')

@section('content')

<div class="container">

    <h2 class="text-center">INSERIMENTO PRODOTTO</h2>

    <form action=" {{ route('comics.store') }} " method="post">
        
        @csrf

        <div class="form-group">
    
            <label for="title">Titolo</label>
    
            <input type="text" name="title" class="form-control" id="title">
        
        </div>

        <div class="form-group">
    
            <label for="thumb">Immagine</label>
    
            <input type="text" name="thumb" class="form-control" id="thumb">
        
        </div>

        <div class="form-group">
    
            <label for="price">Prezzo</label>
    
            <input type="text" name="price" class="form-control" id="price">
        
        </div>

        <div class="form-group">
    
            <label for="series">Serie</label>
    
            <input type="text" name="series" class="form-control" id="series">
        
        </div>

        <div class="form-group">
    
            <label for="sale_date">Data es.(2021-09-10)</label>
    
            <input type="text" name="sale_date" class="form-control" id="sale_date">
        
        </div>

        <div class="form-group">
    
            <label for="type">Tipo</label>
    
            <input type="text" name="type" class="form-control" id="type">
        
        </div>

        <div class="form-group my-3">
    
            <label for="description">Descrizione</label>

            <textarea name="description" class="form-control" id="description" cols="30" rows="10"></textarea>
            
        </div>
    

    
        <button type="submit" class="btn btn-primary">Submit</button>
    
    </form>
    
</div>






@endsection
