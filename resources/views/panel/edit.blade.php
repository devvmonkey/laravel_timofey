@extends('layouts.admin')

@section('content')
  <div class="container">

    <form method="POST" action="/panel/{{ $panel->id }}">

      <div class="clearfix">
        <div class="pull-left">
          <div class="lead">
            <strong>Редактировать Панель</strong><br>
            <small>{{ $panel->title }}</small>
          </div>
        </div>
        <div class="pull-right">
          <button type="submit" class="btn btn-success">Сохранить</button>
          <a href="/panel" class="btn btn-default">Назад к списку</a>
        </div>
      </div>
      <hr>

      {!! method_field('PUT') !!}
      @include('panel.form')
    </form>

  </div>
@endsection
 