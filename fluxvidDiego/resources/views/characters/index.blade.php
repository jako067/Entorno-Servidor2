@extends('layout.layout')

@section('title','personajes')

@section('body')

Este es el indice de los personajes

@forelse ($characters as $character)

    <a href="{{route('characters.show',$character)}}"> <h2>{{$character->name}}</h2></a>

    @empty
    No hay personajes;

@endforelse

@endsection
