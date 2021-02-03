@extends('layouts.app')

@section('content')
                    <form class="form-horizontal" role="form" method="POST" action="{{ url('/login') }}">
                        {!! csrf_field() !!}
<div class="row">
<div class="col-sm-4"></div>
<div class="col-sm-4" style="padding:2rem;">
<div class="row">
<div class="col-sm-3"></div>
       <div class="col-sm-3"> <h1 style="font-size:30px !important; color:white! important; text-align:center;">Вход</h1></div>
<div class="col-sm-3"></div>
</div>
<div class="row">
        <div class="col-sm-2"><h2 style="margin: 0; margin-top: 9px; font-size:18px !important; color:white! important">Логин</h2></div>
        <div class="col-sm-8"><input type="text" name="email"></div>
</div>
<div class="row">
        <div class="col-sm-2"><h2 style="margin: 0; margin-top: 9px; font-size:18px !important; color:white! important">Пароль</h2></div>
        <div class="col-sm-8"><input type="text" name="password"></div>
</div>
<div class="row">
<div class="col-sm-4"></div>
      <div class="col-sm-4">  <button style="margin-top:2rem;" type="submit">
                                     Войти
                                </button></div>
<div class="col-sm-4"></div>
</div>
</div>

<div class="col-sm-4"></div>
           
        
    </div>
@endsection
 