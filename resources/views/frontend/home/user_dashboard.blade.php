@extends('frontend.index')
@section('main')

    <h1> hi {{ auth()->user()->username }} </h1>

@endsection
