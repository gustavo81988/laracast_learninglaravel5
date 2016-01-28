@extends('app')

@section('content')

    <h1>Edit: {!! $article->title!!}</h1>

    <hr/>

    <form action="{{url('articles',$article->id)}}" method="POST"> {{ method_field('PATCH') }} {{csrf_field()}}

        @include('articles._form',[
            'submitButtomText'=>'Update Article',
            'article'=>$article
        ])

    </form>

    @include('errors.list')

@stop
