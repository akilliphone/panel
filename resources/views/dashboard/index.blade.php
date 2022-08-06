@extends('layouts.app')

@section('title', 'Panel - Akıllıphone')

@section('content')
    burası dashboard content.
    {{Auth::user()}}
@endsection
