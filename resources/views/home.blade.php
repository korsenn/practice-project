@extends('layouts.app')

@section('title-block')Конференция@endsection

@section('content')
<div class="container">
    <div class="row justify-content-center">
            <h1>Добро пожаловать на конференцию!</h1>
            @guest
            <p>Чтобы стать участником конференции - <a href="{{ route('register') }}">зарегистрируйтесь</a>. Если Вы уже зарегистрированы, то <a href="{{ route('login') }}">войдите</a>.</p>
            @endguest
    </div>
</div>
@endsection
