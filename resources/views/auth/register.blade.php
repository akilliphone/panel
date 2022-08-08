@extends('layouts.mini')

@section('title', 'Kayıt Ol')

@section('form')
    <form method="POST" action="{{ route('register.post') }}">
        @csrf
        <div class="{{ $errors->all() ? "group alert" : "group" }}">
            <input class="dynPut" type="text" name="name" required>
            <label>Name</label>
        </div>

        <div class="{{ $errors->all() ? "group alert" : "group" }}">
            <input class="dynPut" type="mail" name="email" required>
            <label>Email</label>
        </div>

        <div class="{{ $errors->all() ? "group alert" : "group" }}">
            <input class="dynPut" type="password" name="password" required>
            <label>Parola</label>
        </div>

        <div class="group">
            <button class="submit-btn">KAYIT OL</button>
        </div>

    </form>
    <div class="footer">
        Zaten hesabın var mı? <a href="{{ route('login') }}">Giriş yap</a>
    </div>
@endsection

@section('scripts')
<script type="text/javascript">
    $(document).ready(function() {
        $(".inset-0").delay(2500).fadeOut(300);
    });
    </script>
@endsection
