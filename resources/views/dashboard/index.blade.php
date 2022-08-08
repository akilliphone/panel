@extends('layouts.app')

@section('title', 'Panel - Akıllıphone')

@section('content')
    <small>burası dashboard content.</small>
    <br>
   <h1>Merhaba! {{Auth::user()->name}}</h1>
@endsection

@section('scripts')
    @include('components.notifyFade')
@endsection
