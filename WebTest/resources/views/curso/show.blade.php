@extends('MasterBlade.master')

@section('title', 'Curso ' . $curso)
    
@section('body')
    <h1>Mostrar Curso</h1>
    <h3>Bienvenido al curso de: {{$curso}}</h3>
@endsection