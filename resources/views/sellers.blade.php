 @extends('layouts.admin')

@section('content')


<meta name="csrf-token" content="{{ csrf_token() }}">

    <main id="main">


        <!-- Список пользователей -->

           <div class="row"> <div class="col-sm"><h1 style="margin:2rem; margin-top:0; text-align:center;" >Список пользователей</h1></div></div> 

        <div class="spisok_polz">

            <div class="panel2">
                <h3>Все пользователи</h3>
<div class="row row_padded" style="сolor:white !important;">

                        <div class="col-sm-1"><p class="users_caption">#</p></div>
                        <div class="col-sm-2"><p class="users_caption">Имя пользователя</p></div>
			<div class="col-sm-2"><p class="users_caption">Дата начала</p></div>

</div>



@foreach($data['users'] as $user) 
<div class="row row_padded">

                        <div class="col-sm-1"><p class="users_caption">{{ $user->id }}</p></div>
                        <div class="col-sm-2"><p class="users_caption">{{ $user->email }}</p></div>
                        <div class="col-sm-2"><p class="users_caption">{{ $user->created_at }}</p></div>



<form method="POST" action="{{ route('user.update', $user->id) }}">

{!! csrf_field() !!}
                        <div class="col-sm-2"> <input type="text" placeholder="новый пароль" name="password""></div>			
			<div class="col-sm-1" ><button type="submit" style="padding:0; font-size:10px">изменить </button></div></form>
			<div class="col-sm-1"><a class="users_caption" href="#">Выдать ключ</a></div>
			<div class="col-sm-1"><a class="users_caption" href="#">Выдать бан</a></div>

                        <div class="col-sm-1"> <a class="users_caption" href="{{ route('user.delete', $user->id) }}" onclick="return confirm('Are you sure to delete this user?');">удалить пользователя</a></div>
</div>

@endforeach



<form method="GET" action="">
<div class="row row_padded">
                        <div class="col-sm-6" ><input class="element_padded" type="text" placeholder="введите имя" name="name" style="width:500px"></div>
			<div class="col-sm-2" ><button class="element_padded" style="width:100%" type="submit" >найти</button></div><div class="col-sm-2"><button style="width:100%;" class="element_padded" type="submit">сбросить</button></div></form>

</div>
            </div>
</div>

@endsection

