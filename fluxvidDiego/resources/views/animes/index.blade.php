@extends('layout.layout')

@yield('title','animes')

@section('body')

Este es el indice de las pelis

@forelse ($animesDesc as $anime)

    <a href="{{route('animes.show',$anime)}}"> <h2>{{$anime->title}}</h2></a>
    <h2>{{$anime->year}}</h2>
    <h2>{{$anime->rating}}</h2>
    <h2>{{$anime->has_manga}}</h2>
    <h2>{{$anime->release_year}}</h2>

    @empty
    No hay animes;

@endforelse
@endsection
