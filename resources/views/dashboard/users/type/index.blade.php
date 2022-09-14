@extends('layouts.app')

@section('title', 'Kullanıcılar - Akıllıphone')

@section('content')
    <a href="{{ route('panel.users') }}" class="btn btn-primary">
        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-left" viewBox="0 0 16 16">
            <path fill-rule="evenodd" d="M15 8a.5.5 0 0 0-.5-.5H2.707l3.147-3.146a.5.5 0 1 0-.708-.708l-4 4a.5.5 0 0 0 0 .708l4 4a.5.5 0 0 0 .708-.708L2.707 8.5H14.5A.5.5 0 0 0 15 8z"/>
        </svg>
        Geri Dön
    </a>
    <a href="{{ route('panel.users.types.new') }}" class="btn btn-warning">
        Yekti Ekle
    </a>
    <a href="{{ route('panel.roles.types') }}" class="btn btn-success">
        Roller
    </a>
    <a href="{{ route('panel.services.roles') }}" class="btn btn-danger">
        Servisler
    </a>

    {!! $datatable['html'] !!}
@endsection

@section('scripts')
    {!! $datatable['js'] !!}
@endsection