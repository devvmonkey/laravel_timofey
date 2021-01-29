@extends('layouts.app')
@section('content')
<meta name="csrf-token" content="{{ csrf_token() }}">

    <div id=app></div>
    <script src="js/app.js">
</script>

@endsection
