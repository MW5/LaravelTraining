@extends('pages.layout')

@section('title')
<title>{{$cat->name}}</title>
@stop

@section('nav')
<div id='nav'>
    <a href="/">Link to home</a>
    <a href="/cats">Link to cats</a>
    <a href="/about">Link to about</a>
</div>
@stop

@section('content')

<p id="cat_{{$cat->id}}" class="oneCat">
    <p>{{$cat->name}}<p>
    <img src="/{{$cat->imgPath}}" alt="{{$cat->name}}_retard">
</p>
@stop