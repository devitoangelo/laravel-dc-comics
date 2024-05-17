@extends('layouts.app')


@section('content')
    <div class="container">
        <h1>Add new Comic</h1>



        <form action="{{ route('comics.update', $comic) }}" method="post">
            @csrf
            @method('PUT')

            <div class="mb-3">
                <label for="title" class="form-label">Title</label>
                <input type="text" class="form-control" name="title" id="title" aria-describedby="titleHelper"
                    placeholder="Comic Title" value="{{ $comic->title }}" />
                <small id="titleHelper" class="form-text text-muted">Type a title for the comic</small>
            </div>

            <div class="mb-3">
                <label for="Series" class="form-label">Series</label>
                <input type="text" class="form-control" name="Series" id="Series" aria-describedby="SeriesHelper"
                    placeholder="Comic Series" value="{{ $comic->series }}" />
                <small id="SeriesHelper" class="form-text text-muted">Type a Series for the comic</small>
            </div>
            <div class="mb-3">
                <label for="type" class="form-label">Type</label>
                <input type="text" class="form-control" name="type" id="type" aria-describedby="typeHelper"
                    placeholder="Comic type" value="{{ $comic->type }}" />
                <small id="typeHelper" class="form-text text-muted">Type a type for the comic</small>
            </div>
            <div class="mb-3">
                <label for="price" class="form-label">Price</label>
                <input type="text" class="form-control" name="price" id="price" aria-describedby="priceHelper"
                    placeholder="Comic price" value="{{ $comic->price }}" />
                <small id="priceHelper" class="form-text text-muted">Type a price for the comic</small>
            </div>

            <div class="d-flex gap-2">
                <img height="100" src="{{ $comic->thumb }}" alt="">

                <div class="mb-3 w-100">
                    <label for="thumb" class="form-label">thumb</label>
                    <input type="text" class="form-control" name="thumb" id="thumb" aria-describedby="thumbHelper"
                        placeholder="http//" value="{{$comic->thumb}}" />
                    <small id="thumbHelper" class="form-text text-muted">Type an image for the comic</small>
                </div>
            </div>


            <div class="mb-3">
                <label for="sale_date" class="form-label">Sale_date</label>
                <input type="text" class="form-control" name="sale_date" id="sale_date"
                    aria-describedby="sale_dateHelper" placeholder=sale_date value="{{ $comic->sale_date }}" />
                <small id="sale_dateHelper" class="form-text text-muted">Type an sale_date for the comic</small>
            </div>

            <div class="mb-3">
                <label for="" class="form-label">Description</label>
                <textarea class="form-control" name="Description" id="Description" rows="6" {{ $comic->description }}></textarea>
            </div>

            <button type="submit" class="btn btn-primary">
                Save
            </button>




        </form>

    </div>
@endsection
