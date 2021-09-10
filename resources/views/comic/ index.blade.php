

@extends('layouts.app')

@section('title', 'nome titolo')

@section('content')

    <div>
     
        <table class="table">
        
            <caption>List of users</caption>
        
            <thead>
    
                <tr>
        
                    <th scope="col">#</th>
        
                    <th scope="col">Titolo</th>
        
                    <th scope="col">Tipo</th>
        
                    <th scope="col">Action</th>
        
                </tr>
    
            </thead>
        
            <tbody>
                
                @foreach($comics as $comic)

                    <tr>
            
                        <th scope="row">{{ $comic->id }}</th>
            
                        <td>{{ $comic->title }}</td>
            
                        <td>{{ $comic->type }}</td>
            
                        <td>
                            
                            <a href="{{route('comics.show', $comic->id)}}" class="btn btn-primary">Show</a>
                            <a href="" class="btn btn-success">Edit</a>
                            <a href="" class="btn btn-danger">Delete</a>

                        </td>
            
                    </tr>

                @endforeach
        
            </tbody>
        
        </table>

        <div>
            {{ $comics->links() }}
        </div>

    </div>

@endsection