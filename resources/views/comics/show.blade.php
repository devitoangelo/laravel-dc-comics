@extends('layouts.app')


@section('content')


    <div class="container">
        <div class="row">
            <div class="col">
                <img src="{{$comic->thumb}}" alt="">
            </div>
            <div class="col">
             <h2>{{$comic->title}}</h2>
             <p>{{$comic->description}}</è>
                <hr>
                <div class="metadata">
                    <strong>Price</strong> {{$comic->price}} <br>
                    <strong>series</strong> {{$comic->series}} <br>
                    <strong>type</strong> {{$comic->type}} <br>


                </div>

            </div>
        </div>
    </div>
    
@endsection