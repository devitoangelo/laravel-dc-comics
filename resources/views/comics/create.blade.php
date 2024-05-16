@extends('layouts.app')


@section('content')
    <div class="container">
        <h1>Add new Comic</h1>
        @include('partials.validation-errors')


        <form action="{{ route('comics.store') }}" method="post">
            @csrf

            <div class="mb-3">
                <label for="title" class="form-label">Title</label>
                <input type="text" class="form-control" name="title" id="title" aria-describedby="titleHelper"
                    placeholder="Comic Title" />
                <small id="titleHelper" class="form-text text-muted">Type a title for the comic</small>
            </div>

            <div class="mb-3">
                <label for="Series" class="form-label">Series</label>
                <input type="text" class="form-control" name="Series" id="Series" aria-describedby="SeriesHelper"
                    placeholder="Comic Series" />
                <small id="SeriesHelper" class="form-text text-muted">Type a Series for the comic</small>
            </div>
            <div class="mb-3">
                <label for="type" class="form-label">Type</label>
                <input type="text" class="form-control" name="type" id="type" aria-describedby="typeHelper"
                    placeholder="Comic type" />
                <small id="typeHelper" class="form-text text-muted">Type a type for the comic</small>
            </div>
            <div class="mb-3">
                <label for="price" class="form-label">Price</label>
                <input type="text" class="form-control" name="price" id="price" aria-describedby="priceHelper"
                    placeholder="Comic price" />
                <small id="priceHelper" class="form-text text-muted">Type a price for the comic</small>
            </div>
            <div class="mb-3">
                <label for="thumb" class="form-label">thumb</label>
                <input type="text" class="form-control" name="thumb" id="thumb" aria-describedby="thumbHelper"
                    placeholder="http//" />
                <small id="thumbHelper" class="form-text text-muted">Type an image for the comic</small>
            </div>

            <div class="mb-3">
                <label for="sale_date" class="form-label">Sale_date</label>
                <input type="text" class="form-control" name="sale_date" id="sale_date" aria-describedby="sale_dateHelper"
                    placeholder=sale_date />
                <small id="sale_dateHelper" class="form-text text-muted">Type an sale_date for the comic</small>
            </div>

            <div class="mb-3">
                <label for="" class="form-label">Description</label>
                <textarea class="form-control" name="Description" id="Description" rows="6"></textarea>
            </div>

            <button type="submit" class="btn btn-primary">
                Create
            </button>




        </form>

    </div>
@endsection
