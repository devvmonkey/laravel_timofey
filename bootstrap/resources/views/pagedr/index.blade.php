@extends('layouts.app')

@section('content')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
  <div class="container" style="margin-top:3rem;">

    <div class="clearfix">
      <div class="pull-left">
        <div class="lead">Розыграши</div>
      </div>
      <div class="pull-right">
        <a href="/pagedr/add" class="btn btn-success">Добавить новый</a>
      </div>
    </div>

    <hr>

    <table class="table table-bordered table-hover table-striped">
      <thead>
      <tr>
        <th class="col-xs-1">
          ID
          <div class="pull-right">
            <a href="?sortby=id&sortdir=ASC"
               class="btn btn-xs {{ is_active_sorter('id', 'ASC') ? 'btn-primary' : 'btn-default' }}">
              <i class="fa fa-arrow-up"></i>
            </a>
            <a href="?sortby=id&sortdir=DESC"
               class="btn btn-xs {{ is_active_sorter('id', 'DESC') ? 'btn-primary' : 'btn-default' }}">
              <i class="fa fa-arrow-down"></i>
            </a>
          </div>
        </th>
        <th class="col-xs-3">
          Название Розыграша
          <div class="pull-right">
            <a href="?sortby=title&sortdir=ASC"
               class="btn btn-xs {{ is_active_sorter('title', 'ASC') ? 'btn-primary' : 'btn-default' }}">
              <i class="fa fa-arrow-up"></i>
            </a>
            <a href="?sortby=title&sortdir=DESC"
               class="btn btn-xs {{ is_active_sorter('title', 'DESC') ? 'btn-primary' : 'btn-default' }}">
              <i class="fa fa-arrow-down"></i>
            </a>
          </div>
        </th>
	<th class="col-xs-2">
          Дисциплина
          <div class="pull-right">
            <a href="?sortby=title&sortdir=ASC"
               class="btn btn-xs {{ is_active_sorter('title', 'ASC') ? 'btn-primary' : 'btn-default' }}">
              <i class="fa fa-arrow-up"></i>
            </a>
            <a href="?sortby=title&sortdir=DESC"
               class="btn btn-xs {{ is_active_sorter('title', 'DESC') ? 'btn-primary' : 'btn-default' }}">
              <i class="fa fa-arrow-down"></i>
            </a>
          </div>
        </th>
	<th class="col-xs-2">
          Статус 
          <div class="pull-right">
            <a href="?sortby=title&sortdir=ASC"
               class="btn btn-xs {{ is_active_sorter('title', 'ASC') ? 'btn-primary' : 'btn-default' }}">
              <i class="fa fa-arrow-up"></i>
            </a>
            <a href="?sortby=title&sortdir=DESC"
               class="btn btn-xs {{ is_active_sorter('title', 'DESC') ? 'btn-primary' : 'btn-default' }}">
              <i class="fa fa-arrow-down"></i>
            </a>
          </div>
        </th>
        <th class="col-xs-2">
          Изменен
          <div class="pull-right">
            <a href="?sortby=updated_at&sortdir=ASC"
               class="btn btn-xs {{ is_active_sorter('updated_at', 'ASC') ? 'btn-primary' : 'btn-default' }}">
              <i class="fa fa-arrow-up"></i>
            </a>
            <a href="?sortby=updated_at&sortdir=DESC"
               class="btn btn-xs {{ is_active_sorter('updated_at', 'DESC') ? 'btn-primary' : 'btn-default' }}">
              <i class="fa fa-arrow-down"></i>
            </a>
          </div>
        </th>
        <th class="col-xs-2">
          Изменен Пользователем
          <div class="pull-right">
            <a href="?sortby=updated_at&sortdir=ASC"
               class="btn btn-xs {{ is_active_sorter('updated_at', 'ASC') ? 'btn-primary' : 'btn-default' }}">
              <i class="fa fa-arrow-up"></i>
            </a>
            <a href="?sortby=updated_at&sortdir=DESC"
               class="btn btn-xs {{ is_active_sorter('updated_at', 'DESC') ? 'btn-primary' : 'btn-default' }}">
              <i class="fa fa-arrow-down"></i>
            </a>
          </div>
        </th>
        <th class="col-xs-2">
          Действие
        </th>
      </tr>
      </thead>
      <tbody>
      @foreach($pages as $page)
        <tr>
          <td>{{ $page->id }}</td>
          <td>
            <a href="/pagedr/{{ $page->id }}">{{ $page->title }}</a>
          </td>
          <td>
            {{ $page->game }}
          </td>
          <td>
            {{ $page->status }}
          </td>
          <td>
            <time class="timeago" datetime="{{ $page->updated_at->toIso8601String() }}"
                  title="{{ $page->updated_at->toDayDateTimeString() }}">
              {{ $page->updated_at->diffForHumans() }}
            </time>
          </td>
          <td>
            {{ $page->changed_by }}
          </td>
          <td>
            <div class="input-group-btn">
              <a href="{{ route('pagedr.edit', $page->id) }}" class="btn btn-primary">Редактировать</a>
              <a href="{{ route('pagedr.delete', $page->id) }}" class="btn btn-danger"
                 onclick="return confirm('Are you sure to delete this page?');">
                Удалить
              </a>
            </div>
          </td>
        </tr>
      @endforeach
      </tbody>
    </table>

    <div class="text-center">
      {!! $pages->appends(request()->except('page'))->links() !!}
    </div>

  </div>
@endsection
