@extends('layout.layout')

@yield('title','personajes')

@section('body')

<h2> <br>{{$character->name}} <br>{{$character->age}}<br> {{$character->gender}}<br>{{$character->role}}<br>
    {{$character->description}}</h2>
    <br>
    <a href="{{route('characters.index')}}"> Volver al listado</h2></a>

@endsection
