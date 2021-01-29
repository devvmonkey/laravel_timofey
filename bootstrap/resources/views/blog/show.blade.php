@extends('layouts.app')

@section('content')

  <div class="container">

    <h2>{{ $blog->title }}</h2>

    <div>
      Posted by {{ $blog->name }}
      <time class="timeago" datetime="{{ $blog->updated_at->toIso8601String() }}"
            title="{{ $blog->updated_at->toDayDateTimeString() }}">
        {{ $blog->updated_at->diffForHumans() }}
      </time>
    </div>

    <hr>

    <div>
      {!! $blog->content !!}
    </div>

  </div>

@endsection
