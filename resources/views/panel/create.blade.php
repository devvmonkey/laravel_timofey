@extends('layouts.admin')

@section('content')
<div class="container" style="margin-top:0!important;">
    <form method="POST" action="/panel">

      @include('panel.form')

    </form>
</div>

@endsection