@extends('pages.layout')

@section('title')
<title>Cats</title>
@stop

@section('nav')
<div id='nav'>
    <a href="/">Link to home</a>
    <a href="about">Link to about</a>
</div>
@stop

@section('content')


<div id="catList">
    @foreach($cats as $cat)
    <div id="cat_{{$cat->id}}" class="catListElement">
        <p>{{$cat->name}}<p>
            <a href='cats/{{$cat->id}}'><img src="{{$cat->imgPath}}" alt="{{$cat->name}}_retard"></a>
    </div>
    @endforeach
@stop