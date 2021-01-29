@extends('layouts.app')

@section('content')
                    <form class="form-horizontal" role="form" method="POST" action="{{ url('/login') }}">
                        {!! csrf_field() !!}
    <div class="vhod">
        <h1>Вход</h1>
        <h2>Логин</h2>
        <input type="text" name="email">
        <h2>Пароль</h2>
        <input type="text" name="password">
        <button type="submit" margin="3rem" class="btn btn-primary">
                                     Войти
                                </button>
           
        
    </div>
@endsection
 