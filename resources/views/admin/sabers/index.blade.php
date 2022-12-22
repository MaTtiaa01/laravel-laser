@extends('layouts.app')

@section('content')

<div class="conatiner">

    <a href="{{route('sabers.create')}}" class="btn btn-primary">
        Add
    </a>
    <div class="row">
        <div class="col-12">
            <div class="table-responsive">

                <table class="table table-primary">
                    <thead>
                        <tr>
                            <th scope="col">id </th>
                            <th scope="col">name </th>
                            <th scope="col">image </th>
                            <th scope="col">description</th>
                            <th scope="col">price</th>
                            <th scope="col">actions</th>

                        </tr>
                    </thead>
                    <tbody>
                        @forelse($sabers as $saber)
                        <tr class="">
                            <td scope="row">{{$saber->id}}</td>
                            <td>{{$saber->name}}</td>
                            <td>{{$saber->image}}</td>
                            <td>{{$saber->description}}</td>
                            <td>{{$saber->price}}</td>
                            <td>
                                <a href="#">view</a>
                                <a href="{{route('sabers.edit',$saber->id)}}">edit</a>
                                <a href="#">delete</a>
                            </td>
                        </tr>
                        @empty
                        <tr>
                            Ops! no sabers available yet!
                        </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

@endsection