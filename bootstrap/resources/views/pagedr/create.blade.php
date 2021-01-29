@extends('layouts.app')

@section('content')
  <div class="container">

    <form method="POST" action="/pagedr">

      <div class="clearfix">
        <div class="pull-left">
          <div class="lead">
            <strong>Add new page</strong>
          </div>
        </div>
        <div class="pull-right">
          <button type="submit" class="btn btn-success">Save</button>
          <a href="/pagedr" class="btn btn-default">Back to list</a>
        </div>
      </div>
      <hr>

      @include('pagedr.form')
    </form>

  </div>
@endsection
