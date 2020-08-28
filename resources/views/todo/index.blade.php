@extends('layouts.app')


@section('title')
    Todo list
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
                                

                                @if ( $todo->completed)
                                    <del>{{ $todo->name }}</del> 
                                    <a href="{{route('todos.show', $todo->id)}}" class="btn btn-primary btn-sm float-right mr-2">View</a>
                                @else
                                    {{ $todo->name }}
                                    <a href="{{route('todos.complete', $todo->id)}}" class="btn btn-secondary btn-sm float-right text-white">complete</a>
                                    <a href="{{route('todos.show', $todo->id)}}" class="btn btn-primary btn-sm float-right mr-2">View</a>
                                @endif
                                
                            </li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
    </div>

@endsection