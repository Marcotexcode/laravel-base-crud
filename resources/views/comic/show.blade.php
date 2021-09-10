


@extends('layouts.app')

@section('title', 'nome titolo')

@section('content')

    <!-- <div class="container">
            
        <div class="row">

            <div class="col">

                <h1>{{ $comics->title }}</h1>

            </div>

            <div class="row">

                <div class="col-md-6">

                    <img class="p-5" src="{{ $comics->thumb }}" alt="">

                </div>

                <div class="col-md-6 p-5">
                
                    <p>{{ $comics->description }}</p>

                </div>

            </div>

        </div>

    </div> -->

    <div class="card text-center">
  
        <div class="card-header">
  
            {{ $comics->series }}
  
        </div>
  
        <div class="card-body">
  
            <img src="{{ $comics->thumb }}" alt="">
  
            <h5 class="card-title m-5">{{ $comics->title }}</h5>
  
            <p class="card-text">{{ $comics->description }}</p>
  
            <a href="{{ route('comics.index')}}" class="btn btn-primary">Return</a>
  
        </div>
  
    </div>

@endsection
