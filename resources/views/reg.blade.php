@extends('layouts.admin')
@section('content')

<form class="form-horizontal" role="form" method="POST" action="{{ url('/register') }}">
                        {!! csrf_field() !!}

        <div class="dob_prod">
            <h1>Добавить продавца</h1>
            <div class="login">
                <h2>Логин</h2>
                <input type="text" name="email">
            </div>
            <div class="password">
                <h2>Пароль</h2>
                <input type="text" name="password">
            </div>
            <div class="password">
                <h2>Повторите Пароль</h2>
                <input type="text" name="password_confirmation">
            </div>

            <div class="mail">
                <h2>Почта</h2>
                <input type="text" name="name">
            </div>
            <div class="contact">
                <h2 class=""> Контакты</h2>

                <ul>


                    <li>
                            <input type="text" placeholder="telegram" name="telegram">

                        </li>

                    <li>
				<input type="text" placeholder="discord" name="discord">                            
                        </li>

                    <li>
                            <input type="text" placeholder="vk" name="vk"> 
                        </li>
                </ul>
            </div>
            <div class="rights">
                <h2 class="rights_">Права на панель</h2>
                <input type="text">
            </div>
            <div class="function">
                <h2>Функции</h2>
                <p>Создать ключ</p>
                <input type="checkbox" class="check" />
		<br>
                <button type="submit" class="add">
                                    Добавить пользователя
                                </button>
            </div>
        </div>
</form>
    </div>
@endsection