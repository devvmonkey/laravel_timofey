 @extends('layouts.admin')

@section('content')
<style>
</style>




<div class="row" style="margin-bottom:2rem">

<div class="col-sm-8">
<div class="row">
<div class="col-sm-1"><p class="text_styled" style="color:white!important; font-size:18px !important">Поиск</p></div>
<form method="GET">
<div class="col-sm-5"><input type="text" class="input_social"></div>
<div class="col-sm-3"><button type="submit">Искать</div>
<div class="col-sm-3"><button type="submit">Сбросить</div>
</form>
</div>
</div>

</div>       
<div class="row">
@foreach($panels as $panel) 
	
			<div class="col-sm" style="margin-left:1rem; margin-right:1rem;">
			<div class="row" style="margin-bottom:2rem;">
			<div class="col-sm-2">
			<a class="main_a" href="/panel/{{ $panel->id }}">{{ $panel->title }}</a>
			</div>
                        
<form method="post" action="{{ route('panel1.update', $panel->id) }}">
{!! csrf_field() !!}
			<div class="col-sm-2">
			<input class="input_admin" placeholder="переименовать" type="text" name="name">
			</div>
			<div class="col-sm-2">
			<button class="btn" type="submit">Подтвердить</button>
			</div>
</form>
			<div class="col-sm-2">
			<button class="btn" type="submit" onclick="window.location.href='/panel/{{ $panel->id }}/delete'">Удалить</button>
			</div>
			</div>
			</div>
@endforeach
</div>



@endsection



 
