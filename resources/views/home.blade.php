@extends('layouts.app')

@section('content')




    <main id="main">

            <div class="panel2">
                <h3>Панели пользователя</h3>
                <table class="table_spisok_polz">
@foreach($data['panels'] as $panel) 
                    <tr>
                        <td class="one">#</td>
                        <td class="two">Номер панели</td>

                        <td class="three">Имя панели</td>

			<td class="four" rowspan="2"><a href="/panel/{{ $panel->id }}" type="submit">перейти к панели</a></td>
                       
                    </tr>
                    <tr>
                        <td class="six">{{ $panel->id }}</td>
                        <td class="seven">{{ $panel->title }}</td>
                        <td class="eight"></td>
                    </tr>
@endforeach
<tr>
<form method="GET" action="">
                        <td class="four" rowspan="2"><input type="text" placeholder="введите имя" name="panel_name" style="width:500px"></td>
			<td class="four" rowspan="2"><button type="submit">найти</button><button type="submit">сбросить</button></form>
</tr>

                </table>
            </div>

        <!-- Активные подписки -->
        <div class="key_generation">
            <h1 class="zag">Ключи</h1>

            <div class="panel3">
                <h3>Генерация ключей</h3>
                <h2>Количество дней</h2>
                <input type="" class="wwod">
                <h2>Количество ключей</h2>
                <input type="" class="wwod">
                <div> <a class="gen" href="#">
                        <p>генерировать</p>
                    </a>
                    <a class="gen1" href="#">
                        <p>Скачать ключ</p>
                    </a>
                </div>

                <h3>Неактивированные ключи</h3>
                <table class="table_key_generation">
@foreach ($data['keyss_not_active'] as $key_not_active)
                    <tr>
                        <td class="one">Ключ</td>
                        <td class="one">Кол-во дней | часов</td>
                        <td class="one">Дата создания</td>
                        <td class="two" rowspan="2"><a href="{{ route('keyss.delete', $key_not_active->k_id) }}" class="delete">удалить</a></td>
                    </tr>
                    <tr>
                        <td class="three">{{ $key_not_active->key_id }}</td>
                        <td class="three">10 дней 24 часа</td>
                        <td class="three">{{ $key_not_active->start }}</td>
                    </tr>
@endforeach
                </table>
                <h3>Активные ключи</h3>
                <table class="table_key_generation_activ">
                    <tr>
                        <td class="one">Ключ</td>
                        <td class="one">HWID</td>
                        <td class="one">Активации</td>
                        <td class="one">Конец</td>
                        <td class="one">Кол-во дней | часов</td>
                        <td class="one">Создание</td>
                        <td class="one">Автор</td>
                        <td class="two" colspan="4">Действия</td>
                    </tr>
@foreach ($data['keyss'] as $key)
                    <tr>
                        <td class="three">{{ $key->key_id }}</td>
                        <td class="three">NULL</td>
                        <td class="three">{{ $key->start }}</td>
                        <td class="three">{{ $key->finish }}</td>
                        <td class="three">10 дней 24 часа</td>
                        <td class="three">01.13.20</td>
                        <td class="three">{{ $key->name }}</td>
                        <td class="four"><a href="">&#8635;</a></td>
                        <td class="four"><a href="">&#10000;</a></td>
                        <td class="four"><a href="">&#10052;</a></td>
                        <td class="four"><a href="{{ route('keyss.delete', $key->k_id) }}">&#128465;</a></td>
                    </tr>
@endforeach

                </table>
            </div>
        </div>
        <!-- Активные подписки -->


    </main>


</body>

</html>
@endsection
