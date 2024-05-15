@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="table-responsive">
            <table class="table table-primary">
                <thead>
                    <tr>
                        <th scope="col">Id</th>
                        <th scope="col">Title</th>
                        <th scope="col">Image</th>
                        <th scope="col">Price</th>
                        <th scope="col">Series</th>
                        <th scope="col">Sale_Date</th>
                        <th scope="col">Type</th>
                        <th scope="col">Action</th>




                    </tr>
                </thead>
                <tbody>
                    @forelse ($comics as $comic)
                        <tr class="">
                            <td scope="row">{{$comic->id}}</td>
                            <td>{{$comic->title}}</td>
                            <td><img width="60" src="{{$comic->thumb}}" alt=""></td>
                            <td>{{$comic->price}}</td>
                            <td>{{$comic->series}}</td>
                            <td>{{$comic->sale_date}}</td>
                            <td>{{$comic->type}}</td>
                            <td>
                                <a href="{{route('comics.show', $comic)}}"><i class="fa-solid fa-eye fa-sm fa-fw"></i></a>
                                /Edit/Delete</td>

                        </tr>
                    @empty
                        <tr class="">
                            <td scope="row">Nothing Comics</td>

                        </tr>
                    @endforelse


                </tbody>
            </table>
        </div>

    </div>
@endsection