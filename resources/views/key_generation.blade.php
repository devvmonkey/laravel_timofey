<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Title</title>

    <link rel="stylesheet" href="/css/style.css">
    <link
        href="https://fonts.googleapis.com/css?family=Montserrat:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i&display=swap&subset=cyrillic,cyrillic-ext,latin-ext"
        rel="stylesheet">
</head>

<body class="body"> 

    <!-- Nav Panel -->
    <header id="header">

        <div class="topnav">
            <div class="logobar">
                <a href="index.html"><img class="logo" src="/img/logo.png" alt="Legion logo">
                    <p class="panel">панель</p>
                </a>
            </div>



            <ul class="menu">
                <li>
                    <a href="/reg.html">
                        <p>пользователи</p>
                    </a>
                </li>
                <li>
                    <a href="/avtorization.html">
                        <p>тесты</p>
                    </a>
                </li>
                <li>
                    <a href="create_key.html">
                        <p>выдать дней</p>
                    </a>
                </li>
                <li>
                    <a href="add_panel.html">
                        <p>все ключи</p>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <p>лог</p>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <p>баны</p>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <p>ключи</p>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <p>заморозить</p>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <p>выйти</p>
                    </a>
                </li>
            </ul>
        </div>
        <div style="clear: both;"></div>
    </header>
    <!-- End Nav Panel -->




    <main id="main">

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


    </main>


</body>

</html>