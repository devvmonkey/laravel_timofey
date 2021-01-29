@extends('layouts.admin')

@section('content')

    <form method="POST" action="/panel">

      @include('panel.form')

    </form>

@endsection