@extends('layouts.app')

@section('content')
  <div class="container">

    <form method="POST" action="/pagedr/{{ $pagedr->id }}">

      <div class="clearfix">
        <div class="pull-left">
          <div class="lead">
            <strong>Редактировать Турнир</strong><br>
            <small>{{ $pagedr->title }}</small>
          </div>
        </div>
        <div class="pull-right">
          <button type="submit" class="btn btn-success">Сохранить</button>
          <a href="/pagedr" class="btn btn-default">Назад к списку</a>
        </div>
      </div>
      <hr>

      {!! method_field('PUT') !!}
      @include('pagedr.form')
    </form>

  </div>
@endsection
