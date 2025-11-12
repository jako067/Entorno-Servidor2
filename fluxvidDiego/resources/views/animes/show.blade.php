@extends('layout.layout')

@yield('title','personajes')

@section('body')

Este es el show de los animes

<h2> <br>{{$anime->title}} <br>{{$anime->year}}<br>{{$anime->release_year}}<br>
    {{$anime->episodes}}<br>{{$anime->rating}}<br>{{$anime->has_manga}}<br>{{$anime->synopsis}}<br>{{$anime->tag}}<br>{{$anime->studio_id}}</h2>
    <br>
    <a href="{{route('animes.index')}}"> Volver al listado</h2></a>

@endsection

