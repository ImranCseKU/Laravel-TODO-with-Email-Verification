@extends('layouts.app')

@section('title')
    Todo list
@endsection

@section('title')
    Todo list
@endsection

@section('top-nav')
    <li class="nav-item active">
        <a class="nav-link" href="{{route('todos.index')}}">Todos <span class="sr-only">(current)</span></a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="{{route('todos.create')}}">Add Todo</a>
    </li>
@endsection


@section('content')
    <h1 class="text-center my-5">Todo Page</h1>

    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Todo</div>
                
                <div class="card-body">
                    <ul class="list-group">
                        @foreach( $todos as $todo )
                            <li class="list-group-item">
                                {{ $todo->name }}

                            <a href="{{route('todos.show', $todo->id)}}" class="btn btn-primary btn-sm float-right">View</a>
                            </li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
    </div>

@endsection

