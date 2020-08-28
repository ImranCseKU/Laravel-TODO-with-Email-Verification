@extends('layouts.app')

@section('title')
    single todo:{{ $todo->name }}
@endsection


@section('content')
    <h1 class="text-center my-5">{{$todo->name}}</h1>
    <div class="row justify-content-center">
        <div class="col-md-8">

            <div class="card">
                <div class="card-header">Details</div>

                <div class="card-body">
                    {{$todo->description}}
                </div>

            </div>

            <a href="" class="btn btn-info my-2">Edit</a>
            <a href="" class="btn btn-danger my-2">Delete</a>

        </div>
    </div>
@endsection