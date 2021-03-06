@extends('layouts.app')

@section('title')
    Add todo
@endsection

@section('content')
    <h1 class="text-center my-5">Create Todo</h1>
    <div class="row justify-content-center">
        <div class="col-md-8 offset-md-1">
            <div class="card">
                <div class="card-header">Create New Todo</div>

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
                    <form action="{{route('todos.store')}}" method="POST">
                        @csrf
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Name" name="name" value="{{ old('name') }}">
                        </div>

                        <div class="form-group">
                        <textarea class="form-control" name="description" placeholder="Description" cols="30" rows="5" >{{old('description')}}</textarea>
                        </div>

                        <div class="form-group text-center">
                            <button type="submit" class="btn btn-success">Create Todo</button>
                        </div>
                    </form>


                </div>
            </div>

            
        </div>
    </div>
@endsection