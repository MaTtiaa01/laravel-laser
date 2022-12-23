@extends('layouts.app')

@section('content')

<div class="container">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <h1>{{$saber->name}}</h1>
            </div>
            <div class="card-body">
                <img src="{{$saber->image}}" alt="">

            </div>
        </div>
    </div>
</div>

@endsection