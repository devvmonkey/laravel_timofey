@extends('layouts.app')

@section('content')
	<link rel="stylesheet" href="{{ URL::asset('css/styles.min.css') }}">
  <div class="container" style="margin-top:3rem">

    <form method="POST" action="/page/{{ $page->id }}">

      <div class="clearfix">
        <div class="pull-left">
          <div class="lead">
            <strong>Редактировать Турнир</strong><br>
            <small>{{ $page->title }}</small>
          </div>
        </div>
        <div class="pull-right">
          <button type="submit" class="btn btn-success">Сохранить</button>
          <a href="/page" class="btn btn-default">Назад к списку</a>
        </div>
      </div>
      <hr>

      {!! method_field('PUT') !!}
      @include('page.form')
    </form>

  </div>
@endsection
