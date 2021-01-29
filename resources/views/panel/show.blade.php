  @extends('layouts.app')

@section('content')


    <h2 style="color:white; text-align:center;" >Панель : {{ $panel->title }}</h2>

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
                    <tr>
                        <td class="one">Ключ</td>
                        <td class="one">Кол-во дней | часов</td>
                        <td class="one">Дата создания</td>
                        <td class="two" rowspan="2"><a href="" class="delete">удалить</a></td>
                    </tr>
                    <tr>
                        <td class="three">1111aaa111aaa1111aa11aa111</td>
                        <td class="three">10 дней 24 часа</td>
                        <td class="three">01.13.20</td>
                    </tr>
                    <tr>
                        <td class="one">Ключ</td>
                        <td class="one">Кол-во дней | часов</td>
                        <td class="one">Дата создания</td>
                        <td class="two" rowspan="2"><a href="" class="delete">удалить</a></td>
                    </tr>
                    <tr>
                        <td class="three">1111aaa111aaa1111aa11aa111</td>
                        <td class="three">10 дней 24 часа</td>
                        <td class="three">01.13.20</td>
                    </tr>
                    <tr>
                        <td class="one">Ключ</td>
                        <td class="one">Кол-во дней | часов</td>
                        <td class="one">Дата создания</td>
                        <td class="two" rowspan="2"><a href="" class="delete">удалить</a></td>
                    </tr>
                    <tr>
                        <td class="three">1111aaa111aaa1111aa11aa111</td>
                        <td class="three">10 дней 24 часа</td>
                        <td class="three">01.13.20</td>
                    </tr>
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
                    <tr>
                        <td class="three">1111aaa111aaa1111aa11aa111</td>
                        <td class="three">NULL</td>
                        <td class="three">01.13.20</td>
                        <td class="three">01.13.20</td>
                        <td class="three">10 дней 24 часа</td>
                        <td class="three">01.13.20</td>
                        <td class="three">ADMIN</td>
                        <td class="four"><a href="">&#8635;</a></td>
                        <td class="four"><a href="">&#10000;</a></td>
                        <td class="four"><a href="">&#10052;</a></td>
                        <td class="four"><a href="">&#128465;</a></td>
                    </tr>
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
                    <tr>
                        <td class="three">1111aaa111aaa1111aa11aa111</td>
                        <td class="three">NULL</td>
                        <td class="three">01.13.20</td>
                        <td class="three">01.13.20</td>
                        <td class="three">10 дней 24 часа</td>
                        <td class="three">01.13.20</td>
                        <td class="three">ADMIN</td>
                        <td class="four"><a href="">&#8635;</a></td>
                        <td class="four"><a href="">&#10000;</a></td>
                        <td class="four"><a href="">&#10052;</a></td>
                        <td class="four"><a href="">&#128465;</a></td>
                    </tr>
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
                    <tr>
                        <td class="three">1111aaa111aaa1111aa11aa111</td>
                        <td class="three">NULL</td>
                        <td class="three">01.13.20</td>
                        <td class="three">01.13.20</td>
                        <td class="three">10 дней 24 часа</td>
                        <td class="three">01.13.20</td>
                        <td class="three">ADMIN</td>
                        <td class="four"><a href="">&#8635;</a></td>
                        <td class="four"><a href="">&#10000;</a></td>
                        <td class="four"><a href="">&#10052;</a></td>
                        <td class="four"><a href="">&#128465;</a></td>
                    </tr>

                </table>
            </div>
        </div>
        <!-- Активные подписки -->

        <!-- Баны  -->
        <div class="bans">
            <h1 class="zag">Баны</h1>

            <div class="panel4">
                <h2>Забанить</h2>
                <h3>Введите hwid ключ или имя пользователя</h3>
                <input type="" class="wwod">
                <a class="find" href="#">
                    <p>Найти</p>
                </a>
                <table class="table_bans">
                    <tr>
                        <td class="one">HWID</td>
                        <td class="two" rowspan="2"><a href="#">забанить</a></td>
                    </tr>
                    <tr class="strok_">
                        <td class="three">NULL</td>
                    </tr>
                    <tr>
                        <td class="one">HWID</td>
                        <td class="two" rowspan="2"><a href="#">забанить</a></td>
                    </tr>
                    <tr>
                        <td class="three">NULL</td>
                    </tr>
                    <tr>
                        <td class="one">HWID</td>
                        <td class="two" rowspan="2"><a href="#">забанить</a></td>
                    </tr>
                    <tr>
                        <td class="three">NULL</td>
                    </tr>
                </table>
            </div>
        </div>
        <!-- Конец Баны  -->

        <!-- Лог  -->

        <div class="log">
            <h1 class="zag">Лог</h1>
            <div class="log_panel">
                <h2>Все использованные ключи</h2>
                <table class="table_log">
                    <tr>
                        <td class="one">Ключ</td>
                        <td class="two">HWID</td>
                        <td class="three">Дата активации</td>
                        <td class="three">Дата окончания</td>
                        <td class="three">Дата создания</td>
                        <td class="four">Автор</td>
                    </tr>
                    <tr>
                        <td class="five">1111aaa111aaa1111aa11aa111</td>
                        <td class="six">1111aaa111aaa1111aa11aa111</td>
                        <td class="seven">01.13.20</td>
                        <td class="seven">01.13.20</td>
                        <td class="seven">01.13.20</td>
                        <td class="eight">ADMIN</td>
                    </tr>
                </table>
            </div>
        </div>




        <!-- Конец Лог  -->





@endsection


