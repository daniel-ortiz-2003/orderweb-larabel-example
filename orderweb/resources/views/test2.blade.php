@extends('templates.base')
@section('title', 'test2')
@section('content')

    <h1>Test</h1>
    <q>En la vida existen 3 tipos de personas, las que saben contar y no</q>
    <small>Homero J. Simpson</small>
    <button onclick="show_alert()">Click!</button>
@endsection

@section('scripts') 
    <script src="{{ asset('js/test.js') }}"></script>
@endsection
