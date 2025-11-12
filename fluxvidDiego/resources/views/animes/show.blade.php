@extends('layout.layout')

@section('title','personajes')

@section('body')

Este es el show de los animes

<h2> <br>Titulo: {{$anime->title}}<br> Año: {{$anime->release_year}}<br>
    Episodios: {{$anime->episodes}} <br>Puntuacion: {{$anime->rating}}<br>El anime tiene manga?
    @if($anime->has_manga==1)Sipi

    @else Nopi
    @endif
    <br>Synopsis: {{$anime->synopsis}}<br> Categorias:{{$anime->tag}}<br>Estudio: {{$anime->studio_id}}</h2>
    <br>
    <a href="{{route('animes.index')}}"> Volver al listado</h2></a>

@endsection

