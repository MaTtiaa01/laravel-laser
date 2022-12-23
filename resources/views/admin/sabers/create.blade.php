@extends('layouts.app')


@section('content')
<div class="container py-5">

    <form action="{{route('sabers.store')}}" method="post">
        @csrf

        <div class="mb-3">
            <label for="name" class="form-label">Name</label>
            <input type="text" name="name" id="name" class="form-control" placeholder="name" aria-describedby="helpId">
            <small id="helpId" class="text-muted">Help text</small>
        </div>
        <div class="mb-3">
            <label for="" class="form-label">description</label>
            <input type="text" name="description" id="description" class="form-control" placeholder="description" aria-describedby="helpId">
            <small id="helpId" class="text-muted">Help text</small>
        </div>
        <div class="mb-3">
            <label for="" class="form-label">image</label>
            <input type="text" name="image" id="image" class="form-control" placeholder="image" aria-describedby="helpId">
            <small id="helpId" class="text-muted">Help text</small>
        </div>
        <div class="mb-3">
            <label for="" class="form-label">price</label>
            <input type="text" name="price" id="price" class="form-control" placeholder="price" aria-describedby="helpId">
            <small id="helpId" class="text-muted">Help text</small>
        </div>

        <button type="submit" class="btn btn-primary">Add</button>
    </form>
</div>

@endsection