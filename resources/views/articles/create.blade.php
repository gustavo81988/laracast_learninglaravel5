@extends('app')

@section('content')

    <h1>Write a New Article</h1>

    <hr/>

    <form class="" action="{{url('articles')}}" method="POST">{{csrf_field()}}

        @include('articles._form',[
            'submitButtomText'=>'Create Article',
        ])

    </form>

    @include('errors.list')

@stop
