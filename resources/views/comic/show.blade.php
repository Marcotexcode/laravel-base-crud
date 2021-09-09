


@extends('layouts.app')

@section('title', 'nome titolo')

@section('content')

    <div class="container">
            
        <div class="row">

            <div class="col">

                <h1>{{ $comics->title }}</h1>

            </div>

            <div class="row">

                <div class="col-md-6">

                    <img src="{{ $comics->thumb }}" alt="">

                </div>

                <div class="col-md-6">
                
                    <p>{{ $comics->description }}</p>

                </div>

            </div>

        </div>

    </div>




@endsection
