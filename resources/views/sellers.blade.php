 @extends('layouts.admin')

@section('content')


<meta name="csrf-token" content="{{ csrf_token() }}">

    <main id="main">


        <!-- Список пользователей -->
        <div class="spisok_polz">
            <h1 class="zag">Список пользователей</h1>

            <div class="panel2">
                <h3>Все пользователи</h3>
                <table class="table_spisok_polz">
@foreach($data['users'] as $user) 
                    <tr>
                        <td class="one">#</td>
                        <td class="two">Имя пользователя</td>

                        <td class="three">Дата окончания</td>

<form method="POST" action="{{ route('user.update', $user->id) }}">

{!! csrf_field() !!}
                        <td class="four" rowspan="2"><input type="text" name="password" style="width:80px"></td>
			<td class="four" rowspan="2"><button type="submit">изменить пароль</button></form>

</td>
                        <td class="five" rowspan="2"><a href="{{ route('user.delete', $user->id) }}" onclick="return confirm('Are you sure to delete this user?');">удалить пользователя</a></td>
                    </tr>
                    <tr>
                        <td class="six">{{ $user->id }}</td>
                        <td class="seven">{{ $user->name }}</td>
                        <td class="eight">{{ $user->created_at }}</td>
                    </tr>
@endforeach
<tr>
<form method="GET" action="">
                        <td class="four" rowspan="2"><input type="text" placeholder="введите имя" name="name" style="width:500px"></td>
			<td class="four" rowspan="2"><button type="submit">найти</button><button type="submit">сбросить</button></form>
</tr>

                </table>
            </div>

@endsection

