  @extends('layouts.app')

@section('content')

           <div class="container">
@foreach ($data['panell'] as $panel)
    <h2 style="color:white; text-align:center;" >Панель : {{ $panel->title }}</h2>
@endforeach 

		<div class="row"><div class="col-sm-4"></div><div class="col-sm-4"><h3 style="text-align:center;  font-size:33px !important;" class="styled_text">Ключи</h3></div><div class="col-sm-4"></div></div>
		<div class="outer-container">
                <div class="row"><div class="col-sm-3"><h3 style="text-align:center; margin-top:2rem !important;" class="styled_text">Генерация ключей</h3></div></div>
		<div class="inner-container">
		<div class="row" style="margin-bottom:2rem;">
<div class="col-sm-6" id="keys_div">

        <!-- Активные подписки -->
                <h2>Количество дней</h2>
                <input type="" class="wwod">
                <h2>Количество ключей</h2>
                <input type="" class="wwod">
</div>
<div class="col-sm-6"></div>
</div>
<div class="row">
               <div class="col-sm-3"></div><div class="col-sm-3"><button class="" ><p>генерировать</p></button></div>
                        
                   <div class="col-sm-3"><button ><p>Скачать ключ</p></button></div><div class=col-sm-3"></div>
                    

</div>
                
</div>
<div class="row"><div class="col-sm-3"><h3 style="text-align:center; margin-top:2rem !important;" class="styled_text">Неактивированные ключи</h3></div></div>


		<div class="inner-container">
                    <div class="row row_padded" >
                        <div class="col-sm-3"><p class="styled_text">Ключ</p></div>
			<div class="col-sm-3"><p class="styled_text">Кол-во дней | часов</p></div>
			<div class="col-sm-3"><p class="styled_text">Дата создания</p></div>
		</div>
                    
@foreach ($data['keyss_not_active'] as $key_not_active)
			<div class="row row_padded" >
                        <div class="col-sm-3"><p class="styled_text">{{ $key_not_active->key_id }}</p></div>
			<div class="col-sm-3"><p class="styled_text">10 дней 24 часа</p></div>
			<div class="col-sm-3"><p class="styled_text">{{ $key_not_active->start }}</p></div>
			<div class="col-sm-3"><a class="styled_text" href="{{ route('keyss.delete', $key_not_active->k_id) }}" class="delete">удалить</a></div>
</div>
@endforeach

</div>

<div class="row"><div class="col-sm-3"><h3 style="text-align:center; margin-top:2rem !important;" class="styled_text">Активированные ключи</h3></div></div>


		<div class="inner-container">
                    <div class="row row_padded" >

                        <div class="col-sm-1"><p class="styled_text">Ключ</p></div>
			<div class="col-sm-2"><p class="styled_text">HWID</p></div>
			<div class="col-sm-1"><p class="styled_text">Активации</p></div>
                        <div class="col-sm-1"><p class="styled_text">Конец</p></div>
			<div class="col-sm-2"><p class="styled_text">Кол-во дней | часов</p></div>
			<div class="col-sm-1"><p class="styled_text">Создание</p></div>
			<div class="col-sm-2"><p class="styled_text">Автор</p></div>
			<div class="col-sm-2"><p class="styled_text">Действия</p></div>
</div>

@foreach ($data['keyss'] as $key)

                    <div class="row row_padded" >
                        <div class="col-sm-1"><p class=" styled_text_14">{{ $key->k_id }}</p></div>
			<div class="col-sm-2"><p class=" styled_text_14">{{ $key->key_id }}</p></div>
			<div class="col-sm-1"><p class=" styled_text_14">{{ $key->start }}</p></div>
                        <div class="col-sm-1"><p class=" styled_text_14">{{ $key->finish }}</p></div>
			<div class="col-sm-2"><p class=" styled_text_14">10 дней 24 часа</p></div>
			<div class="col-sm-1"><p class=" styled_text_14">{{ $key->start }}</p></div>
			<div class="col-sm-2"><p class=" styled_text_14">{{ $key->name }}</p></div>
			<div class="col-sm-2">

                        <a class=" styled_text_14 href="">&#8635;</a>
                        <a class=" styled_text_14 href="">&#10000;</a>
                        <a class=" styled_text_14 href="">&#10052;</a>
                        <a class=" styled_text_14 href="{{ route('keyss.delete', $key->k_id) }}">&#128465;</a></div>
</div>

@endforeach
<form method="GET" action="">
                        <div class="row" style="margin-bottom:2rem;"><input type="text" placeholder="введите имя ключа" name="key_name" style="width:500px"></div>
			<div class="row">
               <div class="col-sm-3"></div><div class="col-sm-3"><button type="submit" ><p>найти</p></button></div>
                        
                   <div class="col-sm-3"><button type="submit" ><p>сбросить</p></button></div><div class=col-sm-3"></div>
                    

</div>
</form>

            </div>
        </div>
</div>

           <div class="container" id="panels_div">
		<div class="row"><div class="col-sm-4"></div><div class="col-sm-4"><h3 style="text-align:center; font-size:33px !important;" class="styled_text">Доступные панели</h3></div><div class="col-sm-4"></div></div>
		<div class="outer-container">
                <div class="row"><div class="col-sm-3"><h3 style="text-align:center; margin-top:2rem !important;" class="styled_text">Все панели</h3></div></div>
		<div class="inner-container">
                    <div class="row row_padded" >
                        <div class="col-sm-6"><p class="styled_text">HWID</p></div>
                        <div class="col-sm-6"><p class="styled_text">Имя пользователя</p></div> 
                    </div>
		<hr>

              
                    <div class="row row_padded" >
                        <div class="col-sm-6"><p class="styled_text">wqwqwqeeqwds</p></div>
                        <div class="col-sm-6"><p class="styled_text">qwert@gmail.com</p></div>
	            </div>
		<hr>
<div class="row">
<form method="GET" action="">
                        <div class="row" style="padding:1rem"><div class="col-sm-6" ><input class="" type="text" placeholder="введите hwid" name="panel_name" style="width:500px"></div></div>
			<div class="row" style="padding:1rem"><div class="col-sm-3" ><button class="" type="submit" style="width:100%">найти</button></div><div class="col-sm-3"><button style="width:100%" class="" type="submit">сбросить</button></div></div></form>
</div>

                </div>
            </div> 
       </div>

        <!-- Конец Баны  -->

        <!-- Лог  -->
            <div class="container" id="log_div">
		<div class="row"><div class="col-sm-4"></div><div class="col-sm-4"><h3 style="text-align:center; font-size:33px !important;" class="styled_text">Лог</h3></div><div class="col-sm-4"></div></div>
		<div class="outer-container">
                <div class="row"><div class="col-sm-3"><h3 style="text-align:center; margin-top:2rem !important;" class="styled_text">Все использованные ключи</h3></div></div>
		<div class="inner-container">
                    <div class="row row_padded" >
                        <div class="col-sm-1"><p class=" styled_text_14">Ключ</p></div>
			<div class="col-sm-2"><p class=" styled_text_14">HWID</p></div>
			<div class="col-sm-2"><p class=" styled_text_14">Дата активации</p></div>
                        <div class="col-sm-2"><p class=" styled_text_14">Дата окончания</p></div>
			<div class="col-sm-2"><p class=" styled_text_14">Дата создания</p></div>
			<div class="col-sm-2"><p class=" styled_text_14">Автор</p></div>
			</div>
@foreach ($data['keyss'] as $key)
                    <div class="row row_padded" >
                        <div class="col-sm-1"><p class=" styled_text_14">{{ $key->k_id }}</p></div>
			<div class="col-sm-2"><p class=" styled_text_14">{{ $key->key_id }}</p></div>
			<div class="col-sm-2"><p class=" styled_text_14">{{ $key->start }}</p></div>
                        <div class="col-sm-2"><p class=" styled_text_14">{{ $key->finish }}</p></div>
			<div class="col-sm-2"><p class=" styled_text_14">{{ $key->start }}</p></div>
			<div class="col-sm-2"><p class=" styled_text_14">{{ $key->name }}</p></div>
			</div>
@endforeach

            </div>
        </div>
</div>
        <!-- Конец Лог  -->

@endsection


