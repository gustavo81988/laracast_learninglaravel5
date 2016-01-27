@extends('app')

@section('content')

    <h1>Write a New Article</h1>

    <hr/>

    <form class="" action="{{url('articles')}}" method="POST">{{csrf_field()}}

        <div class="form-group">
            <label for="title">Title:</label>
            <input type="text" name="title" class="form-control">
        </div>

        <div class="form-group">
            <label for="body">Body:</label>
            <textarea name="body" rows="8" cols="40" class="form-control"></textarea>
        </div>

        <div class="form-group">
            <input type="submit" value="Add Article" class="btn btn-primary form-control">
        </div>

    </form>

@stop
