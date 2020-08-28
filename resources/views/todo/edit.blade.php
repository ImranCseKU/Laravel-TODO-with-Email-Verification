@extends('layouts.app')

@section('title')
    Update Todo    
@endsection

@section('content')
    <h1 class="text-center my-5"> Update Todo</h1>
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Edit</div>

                <div class="card-body">
                    @if( $errors->any() )
                        <div class="alert alert-danger">
                            <ul>
                                @foreach( $errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    <form action="{{route('todos.update', $todo->id)}}" method="POST">
                        @csrf
                        @method('PUT')
                        
                        <div class="form-group">
                        <input type="text" class="form-control" name="name" value="{{ $todo->name }}">
                        </div>
                        <div class="form-group">
                        <textarea class="form-control" name="description" cols="30" rows="5"> {{ $todo->description }} </textarea>
                        </div>
        
                        <div class="form-group text-center">
                            <button type="submit" class="btn btn-success">Update</button>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>
@endsection