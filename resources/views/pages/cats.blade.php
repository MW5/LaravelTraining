@extends('pages.layout')

@section('title')
<title>Cats</title>
@stop

@section('content')
<a href="/">Link to home</a>
<a href="about">Link to about</a>

<div id="catList">
    @foreach($cats as $cat)
    <div id="cat_{{$cat->id}}", class="catListElement">
        <p>{{$cat->name}}<p>
        <img src="{{$cat->imgPath}}" alt="{{$cat->name}}_retard">
    </div>
    @endforeach
@stop