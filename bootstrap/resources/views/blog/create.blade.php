@extends('layouts.app')

@section('content')
  <div class="container">

    <form method="POST" action="/blog">

      <div class="clearfix">
        <div class="pull-left">
          <div class="lead">
            <strong>Add new page</strong>
          </div>
        </div>
        <div class="pull-right">
          <button type="submit" class="btn btn-success">Save</button>
          <a href="/blog_edit" class="btn btn-default">Back to list</a>
        </div>
      </div>
      <hr>

      @include('blog.form')
    </form>

  </div>
@endsection
