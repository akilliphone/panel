@extends('layouts.mini')

@section('form')
    <form method="POST" action="{{ route('login.post') }}">
        @csrf
        <div class="{{ $errors->all() ? "group alert" : "group" }}">
            <input class="dynPut" type="mail" name="email" required>
            <label>Email</label>
        </div>

        <div class="{{ $errors->all() ? "group alert" : "group" }}">
            <input class="dynPut" type="password" name="password" required>
            <label>Parola</label>
            <a class="forgot-pass" href="#">Şifremi unuttum</a>
        </div>

        <div class="group">
            <button class="submit-btn">GİRİŞ YAP</button>
        </div>

    </form>
    <div class="footer">
        Hesabın yok mu? <a href="#">Erişim iste</a>
    </div>
@endsection
