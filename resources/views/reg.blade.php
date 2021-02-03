@extends('layouts.admin')
@section('content')

<form class="form-horizontal" role="form" method="POST" action="{{ url('/register') }}">
                        {!! csrf_field() !!}
            <div class="container" style="margin-top:0!important;">
				<div class="outer-container" style="margin-top:0!important;">
                <div class="row"><div class="col-sm-3"><h3 style="text-align:center; margin-top:2rem !important;" class="styled_text">Добавить продавца</h3></div></div>
		<div class="inner-container">
                    <div class="row row_padded1" >

            <div class="col-sm-3"><h2 class="styled_text">Логин</h2></div>
            <div class="col-sm-9"><input type="text" name="email"></div>  

                    </div>
                    <div class="row row_padded1" >

            <div class="col-sm-3"><h2 class="styled_text">Пароль</h2></div>
            <div class="col-sm-9"><input type="text" name="password"></div>  

                    </div>

                    <div class="row row_padded1" >

            <div class="col-sm-3"><h2 class="styled_text">Повт. Пароль</h2></div>
            <div class="col-sm-9"><input type="text" name="password_confirmation"></div>  

                    </div>

                    <div class="row row_padded1" >

            <div class="col-sm-3"><h2 class="styled_text">Почта</h2></div>
            <div class="col-sm-9"><input type="text" name="name"></div>  

                    </div>

                    <div class="row row_padded1" >
		<div class="col-sm-4"></div>
            <div class="col-sm-4"><h2 class="styled_text">Контакты</h2></div>
            <div class="col-sm-4"></div>  

                    </div>
                   <div class="row row_padded1" >
		<div class="col-sm-4"><input class="input_social" style="padding-left:15px !important" type="text" placeholder="telegram" name="telegram"></div>
            <div class="col-sm-4"><input class="input_social" style="padding-left:15px !important" type="text" placeholder="discord" name="discord"></div>
            <div class="col-sm-4"><input class="input_social" style="padding-left:15px !important" type="text" placeholder="vk" name="vk"></div>  

                    </div>

            </div>
                    <div class="row row_padded1" >
 
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.1/css/bootstrap-select.css" />
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.bundle.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.1/js/bootstrap-select.min.js"></script>   

            <div class="col-sm-4"><h2 class="styled_text">Права на панель</h2></div>
            <div class="col-sm-6">
<select class="selectpicker " name="rights_select" multiple>
@foreach($panels as $panel)
  <option>{{ $panel->title }}</option>
@endforeach
</select>
</div>  
<div class="col-sm-2">
            
<a href="#" id="prsv">присвоить</a>
</div>
</div>
<script>
$('select').selectpicker();
$( "#prsv" ).click(function(event) {
event.preventDefault();
var  vall= $( ".filter-option-inner-inner" ).text();
$("#rh").val(vall);
alert(vall);
}); 
</script>
<input name="rights_hidden" id="rh" type="hidden" value="" />

                    <div class="row row_padded1" >

            <div class="col-sm-3"><h2 class="styled_text">Функции</h2></div>
            <div class="col-sm-3">
	<input type="checkbox" id="checkbox17" class="css-checkbox" checked="checked"/>
	<label for="checkbox17" name="checkbox17_lbl" class="css-label dark-check-cyan">Создать Ключ</label>
</div>
            <div class="col-sm-3">
	<input type="checkbox" id="checkbox18" class="css-checkbox" checked="checked"/>
	<label for="checkbox18" name="checkbox17_lbl" class="css-label dark-check-cyan">Сбросить HWID</label>
</div>
            <div class="col-sm-3">
	<input type="checkbox" id="checkbox19" class="css-checkbox" checked="checked"/>
	<label for="checkbox19" name="checkbox17_lbl" class="css-label dark-check-cyan">Заморозить Ключ</label>
</div>
 

                    </div>

                    <div class="row row_padded1" >

            <div class="col-sm-4"></div>
            <div class="col-sm-4"></div>  
		<div class="col-sm-4">                <button style="border-radius: 9px" type="submit" class="sbm">
                                    Добавить пользователя
                                </button> 
</div>  

                    </div>   


            </div>
        </div>
</form>
    </div>
@endsection