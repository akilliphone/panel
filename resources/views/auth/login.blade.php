@extends('layouts.mini')

@section('title', 'Giriş yap')

@section('form')
    <form method="POST" action="{{ route('login.post') }}">
        @csrf
        @foreach($errors->all() as $error)
            <div>
                {{ $error }}
            </div>
        @endforeach

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

@section('scripts')
<script type="text/javascript">
    $(document).ready(function() {
        $(".inset-0").delay(2500).fadeOut(300);
    });
    </script>
@endsection
