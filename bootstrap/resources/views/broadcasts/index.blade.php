@extends('layouts.app')

@section('content')

    <main class="page">
        <div class="breadcrumbs">
            <div class="container-fluid">
                <ul>
                    <li><a href="index-1.html">Главная</a></li>
                    <li><span>Трансляции</span></li>
                </ul>
            </div>
        </div>
        <section class="broadcast">
            <div class="container-fluid">
                <h1>Трансляции</h1>
                <p>Список актуальных трансляций</p>
                <div class="broadcast-wrap">
                    <div class="broadcast-line">
                        <div class="broadcast-line-live">
                            <p>Live</p>   
                        </div>
                        <div class="broadcast-line-text">
                            <img src="img/cs.svg" alt="">
                            <h4>FastCup <br> Tournament #23</h4>
                        </div>
                    </div>
                    <div class="broadcast-line-img">
                        <img src="img/2.png" alt="">
                    </div>
                    <div class="broadcast-line-play">
                        <a href="#">
                            <svg width="140" height="140" viewBox="0 0 140 140" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <circle cx="70" cy="70" r="70" fill="#455B66"/>
                                <path d="M93 68.2679C94.3333 69.0378 94.3333 70.9622 93 71.732L60 90.7846C58.6667 91.5544 57 90.5922 57 89.0526L57 50.9474C57 49.4078 58.6667 48.4456 60 49.2154L93 68.2679Z" fill="white"/>
                            </svg> 
                        </a>
                    </div>
                </div>
            </div>
        </section>
    </main>
    <footer class="site-footer">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-3 order-md-0 order-2">
                    <a href="/" class="logo-footer">
                        <img src="img/logo-footer.svg" alt="">
                    </a>
                    <ul class="social-footer">
                        <li><a href="#">
                            <svg width="22" height="23" viewBox="0 0 22 23" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M16 1.48486H6C3.23858 1.48486 1 3.71731 1 6.47116V16.4438C1 19.1976 3.23858 21.4301 6 21.4301H16C18.7614 21.4301 21 19.1976 21 16.4438V6.47116C21 3.71731 18.7614 1.48486 16 1.48486Z" stroke="#617E8C" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                <path d="M14.9999 10.8292C15.1234 11.6592 14.9812 12.5068 14.5937 13.2516C14.2062 13.9963 13.5931 14.6003 12.8416 14.9775C12.0901 15.3547 11.2384 15.486 10.4077 15.3527C9.57707 15.2194 8.80971 14.8283 8.21479 14.235C7.61987 13.6417 7.22768 12.8765 7.09402 12.0481C6.96035 11.2197 7.09202 10.3704 7.47028 9.62091C7.84854 8.87145 8.45414 8.26001 9.20093 7.87357C9.94773 7.48714 10.7977 7.34537 11.6299 7.46844C12.4789 7.59398 13.2648 7.98848 13.8716 8.59366C14.4785 9.19884 14.8741 9.98262 14.9999 10.8292Z" stroke="#617E8C" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                <path d="M16.5 5.97266H16.51" stroke="#617E8C" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                        </a></li>
                        <li><a href="#">
                            <svg width="13" height="23" viewBox="0 0 13 23" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M12 1.48486H9C7.67392 1.48486 6.40215 2.0102 5.46447 2.94532C4.52678 3.88043 4 5.14872 4 6.47116V9.46295H1V13.452H4V21.4301H8V13.452H11L12 9.46295H8V6.47116C8 6.20667 8.10536 5.95302 8.29289 5.766C8.48043 5.57897 8.73478 5.4739 9 5.4739H12V1.48486Z" stroke="#E65425" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                        </a></li>
                        <li><a href="#">
                            <svg width="25" height="18" viewBox="0 0 25 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M22.5406 3.88725C22.4218 3.41396 22.1798 2.98031 21.8392 2.63011C21.4986 2.2799 21.0713 2.02555 20.6006 1.89273C18.8806 1.47388 12.0006 1.47388 12.0006 1.47388C12.0006 1.47388 5.12057 1.47388 3.40057 1.93262C2.92982 2.06544 2.50255 2.31979 2.16192 2.67C1.82129 3.0202 1.57936 3.45385 1.46057 3.92714C1.14579 5.66791 0.991808 7.43381 1.00057 9.20264C0.989351 10.9848 1.14334 12.7642 1.46057 14.518C1.59153 14.9766 1.83888 15.3938 2.17871 15.7292C2.51855 16.0646 2.93939 16.3069 3.40057 16.4328C5.12057 16.8915 12.0006 16.8915 12.0006 16.8915C12.0006 16.8915 18.8806 16.8915 20.6006 16.4328C21.0713 16.3 21.4986 16.0456 21.8392 15.6954C22.1798 15.3452 22.4218 14.9115 22.5406 14.4383C22.8529 12.7106 23.0069 10.9581 23.0006 9.20264C23.0118 7.42049 22.8578 5.64112 22.5406 3.88725V3.88725Z" stroke="#617E8C" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                <path d="M9.75055 12.4637L15.5005 9.20268L9.75055 5.94165V12.4637Z" stroke="#617E8C" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                        </a></li>
                    </ul>
                </div>
                <div class="col-md-6 order-md-0 order-1">
                    <div class="row no-gutters footer-mnu">
                        <div class="col-md-4">
                            <h4>Информация</h4>
                            <ul>
                                <li><a href="#">Правила</a></li>
                                <li><a href="#">О нас</a></li>
                            </ul>
                        </div>
                        <div class="col-md-4">
                            <h4>Помощь проекту</h4>
                            <ul>
                                <li><a href="#">Поддержать</a></li>
                            </ul>
                        </div>
                        <div class="col-md-4">
                            <h4>Контакты</h4>
                            <ul>
                                <li><a href="#">Обратная связь</a></li>
                            </ul>	
                        </div>
                    </div>
                </div>
                <div class="col-md-3 order-md-0 order-0">
                    <a href="/" class="mobile-none form-img">
                        <img src="img/logo-footer.svg" class="img-responsive" alt="">
                    </a>
                    <form class="follow">
                        <h4>Подпишись на новости</h4>
                        <input type="email" placeholder="Адрес электронной почты">
                        <button type="button">Подписаться</button>
                    </form>
                </div>
            </div>
        </div>
        <div class="footer-line-text">
            <p style="margin-bottom: 20px;">WTFgamers организация любительских киберспортивных турниров. Всё для Вас, все для фана!</p>
            <p>Copyright © WTFgamers 2019 все права защищены</p>
        </div>
    </footer>
    <div class="overlay"></div>
    <div class="modal">
        <div class="modal-wrap">
            <div class="modal-wrap-tabs">
                <div class="modal-wrap-tab modal-wrap-tab-1 active">Вход в аккаунт</div>
                <div class="modal-wrap-tab modal-wrap-tab-2">Регистрация</div>
            </div>
            <div class="modal-item-tab modal-item-tab-1" style="display: block;">
                <form>
                    <input type="email" placeholder="Ваш текущий e-mail адрес">
                    <input type="password" placeholder="Пароль">
                    <button type="submit">Войти</button>
                </form>
                <div class="text-center">
                    <a href="#">Забыли пароль ?</a>
                    <p>Или войдите с помощью</p>
                    <div class="social">
                        <div class="social-item">
                            <svg width="40" height="40" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <circle cx="20" cy="20" r="20" fill="#C5331E"/>
                                <path d="M20.3417 18.4417V22.4H25.725C24.9333 24.5375 22.875 25.9625 20.5 25.9625C17.4125 25.9625 14.9583 23.5083 14.9583 20.4208C14.9583 17.3333 17.4125 14.8792 20.5 14.8792C21.6875 14.8792 22.7958 15.275 23.7458 15.9083L24.0625 16.1458L26.4375 13.0583L26.1208 12.8208C24.4583 11.6333 22.5583 11 20.5 11C15.275 11 11 15.275 11 20.5C11 25.725 15.275 30 20.5 30C25.725 30 30 25.725 30 20.5V18.5208H20.3417V18.4417Z" fill="white"/>
                            </svg>			
                        </div>
                        <div class="social-item">
                            <svg width="40" height="40" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <circle cx="20" cy="20" r="20" fill="#4E6297"/>
                                <path d="M29 13.8186C29 12.3212 27.6788 11 26.1813 11H14.8186C13.3212 11 12 12.3212 12 13.8186V25.1813C12 26.6787 13.3212 28 14.8186 28H20.544V21.5699H18.4301V18.7513H20.544V17.6062C20.544 15.6684 21.9534 13.9948 23.715 13.9948H26.0052V16.8135H23.715C23.4508 16.8135 23.1865 17.0777 23.1865 17.6062V18.7513H26.0052V21.5699H23.1865V28H26.1813C27.6788 28 29 26.6787 29 25.1813V13.8186Z" fill="white"/>
                            </svg>			
                        </div>
                        <div class="social-item">
                            <svg width="40" height="40" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <circle cx="20" cy="20" r="20" fill="#7294C7"/>
                                <path d="M29.8063 25.1153C29.8063 25.0323 29.7232 25.0323 29.7232 24.9493C29.3911 24.2851 28.6439 23.4549 27.6477 22.5416C27.1495 22.1265 26.9004 21.7944 26.7344 21.6284C26.4853 21.2963 26.4853 21.0472 26.5684 20.7151C26.6514 20.466 26.9835 20.0509 27.5646 19.3037C27.8967 18.8886 28.0628 18.6395 28.3118 18.3905C29.5572 16.73 30.1383 15.6507 29.9723 15.1526L29.8893 15.0695C29.8063 14.9865 29.7232 14.9035 29.5572 14.9035C29.3911 14.8205 29.1421 14.8205 28.893 14.9035H25.7381C25.6551 14.9035 25.6551 14.9035 25.4891 14.9035C25.406 14.9035 25.323 14.9035 25.323 14.9035H25.24H25.157L25.0739 14.9865C24.9909 15.0695 24.9909 15.0695 24.9909 15.1526C24.6588 16.0658 24.2437 16.813 23.8286 17.6433C23.5795 18.0584 23.3305 18.4735 23.0814 18.8056C22.8323 19.1377 22.6663 19.3867 22.5002 19.5528C22.3342 19.7188 22.1681 19.8018 22.0851 19.9679C22.0021 20.0509 21.8361 20.1339 21.8361 20.0509C21.753 20.0509 21.67 20.0509 21.67 19.9679C21.587 19.8849 21.504 19.8018 21.4209 19.7188C21.3379 19.6358 21.3379 19.4698 21.2549 19.3037C21.2549 19.1377 21.2549 18.9716 21.2549 18.8886C21.2549 18.8056 21.2549 18.5565 21.2549 18.3905C21.2549 18.1414 21.2549 17.9753 21.2549 17.8923C21.2549 17.6433 21.2549 17.3112 21.2549 16.9791C21.2549 16.647 21.2549 16.3979 21.2549 16.2319C21.2549 16.0658 21.2549 15.8168 21.2549 15.6507C21.2549 15.4016 21.2549 15.2356 21.2549 15.1526C21.2549 15.0695 21.1719 14.9035 21.1719 14.8205C21.0889 14.7375 21.0058 14.6544 20.9228 14.5714C20.8398 14.4884 20.6737 14.4884 20.5907 14.4054C20.1756 14.3223 19.6775 14.2393 19.0963 14.2393C17.7679 14.2393 16.8547 14.3223 16.5226 14.4884C16.3565 14.5714 16.1905 14.6544 16.1075 14.8205C15.9414 14.9865 15.9414 15.0695 16.0245 15.0695C16.4396 15.1526 16.7717 15.3186 16.9377 15.5677L17.0207 15.7337C17.1038 15.8168 17.1037 15.9828 17.1868 16.2319C17.2698 16.4809 17.2698 16.73 17.2698 17.0621C17.2698 17.5602 17.2698 18.0584 17.2698 18.3905C17.2698 18.8056 17.1868 19.0546 17.1868 19.3037C17.1868 19.5528 17.1038 19.7188 17.0207 19.8019C16.9377 19.9679 16.9377 20.0509 16.8547 20.0509C16.8547 20.0509 16.8547 20.1339 16.7717 20.1339C16.6886 20.1339 16.6056 20.217 16.4396 20.217C16.3565 20.217 16.1905 20.1339 16.1075 20.0509C15.9414 19.9679 15.7754 19.8019 15.6924 19.6358C15.5263 19.4698 15.3603 19.2207 15.1942 18.8886C15.0282 18.5565 14.7791 18.2244 14.6131 17.7263L14.447 17.3942C14.364 17.2281 14.198 16.896 14.0319 16.4809C13.8659 16.0658 13.6998 15.7337 13.5338 15.3186C13.4507 15.1526 13.3677 15.0695 13.2847 14.9865H13.2017C13.2017 14.9865 13.1186 14.9035 13.0356 14.9035C12.9526 14.9035 12.8696 14.8205 12.7866 14.8205H9.79773C9.46564 14.8205 9.2996 14.9035 9.21657 14.9865L9.13354 15.0695C9.13354 15.0695 9.13354 15.1526 9.13354 15.2356C9.13354 15.3186 9.13355 15.4016 9.21657 15.5677C9.63169 16.564 10.1298 17.5602 10.628 18.5565C11.1261 19.4698 11.6242 20.3 11.9563 20.8812C12.3714 21.4623 12.7035 22.0435 13.1186 22.5416C13.5338 23.0397 13.7828 23.3718 13.8658 23.5379C14.0319 23.7039 14.1149 23.7869 14.1979 23.87L14.447 24.119C14.6131 24.2851 14.8621 24.5342 15.1942 24.7832C15.5263 25.0323 15.9414 25.2814 16.3565 25.5304C16.7717 25.7795 17.2698 25.9456 17.7679 26.1116C18.3491 26.2776 18.8472 26.3607 19.3454 26.2776H20.5907C20.8398 26.2776 21.0058 26.1946 21.1719 26.0286L21.2549 25.9455C21.2549 25.8625 21.3379 25.8625 21.3379 25.7795C21.3379 25.6965 21.3379 25.6135 21.3379 25.4474C21.3379 25.1153 21.3379 24.8663 21.4209 24.6172C21.504 24.3681 21.504 24.2021 21.587 24.036C21.67 23.87 21.753 23.787 21.8361 23.7039C21.9191 23.6209 22.0021 23.5379 22.0021 23.5379H22.0851C22.2512 23.4549 22.5002 23.5379 22.6663 23.7039C22.9154 23.87 23.1644 24.119 23.3305 24.3681C23.4965 24.6172 23.7456 24.8663 24.0777 25.1983C24.4098 25.5304 24.6588 25.7795 24.8249 25.8625L25.0739 26.0286C25.24 26.1116 25.406 26.1946 25.6551 26.2776C25.9042 26.3607 26.0702 26.3607 26.2363 26.3607L29.0591 26.2776C29.3081 26.2776 29.5572 26.1946 29.7232 26.1116C29.8893 26.0286 29.9723 25.9455 29.9723 25.7795C29.9723 25.6965 29.9723 25.5304 29.9723 25.4474C29.8062 25.2814 29.8063 25.1983 29.8063 25.1153Z" fill="white"/>
                            </svg>		
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-item-tab modal-item-tab-2" style="display: none;">
                    <form>
                        <input type="email" placeholder="Ваш текущий e-mail адрес">
                        <input type="password" placeholder="Введите пароль">
                        <input type="password" placeholder="Повторите пароль">
                        <button type="submit">Войти</button>
                        <p>Регистрируясь, я подтверждаю своё согласие с условиями пользовательского соглашения и политикой конфеденциальности</p>
                    </form>
                    <div class="text-center">
                        <p>Или войдите с помощью</p>
                        <div class="social">
                            <div class="social-item">
                                <svg width="40" height="40" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <circle cx="20" cy="20" r="20" fill="#C5331E"/>
                                    <path d="M20.3417 18.4417V22.4H25.725C24.9333 24.5375 22.875 25.9625 20.5 25.9625C17.4125 25.9625 14.9583 23.5083 14.9583 20.4208C14.9583 17.3333 17.4125 14.8792 20.5 14.8792C21.6875 14.8792 22.7958 15.275 23.7458 15.9083L24.0625 16.1458L26.4375 13.0583L26.1208 12.8208C24.4583 11.6333 22.5583 11 20.5 11C15.275 11 11 15.275 11 20.5C11 25.725 15.275 30 20.5 30C25.725 30 30 25.725 30 20.5V18.5208H20.3417V18.4417Z" fill="white"/>
                                </svg>			
                            </div>
                            <div class="social-item">
                                <svg width="40" height="40" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <circle cx="20" cy="20" r="20" fill="#4E6297"/>
                                    <path d="M29 13.8186C29 12.3212 27.6788 11 26.1813 11H14.8186C13.3212 11 12 12.3212 12 13.8186V25.1813C12 26.6787 13.3212 28 14.8186 28H20.544V21.5699H18.4301V18.7513H20.544V17.6062C20.544 15.6684 21.9534 13.9948 23.715 13.9948H26.0052V16.8135H23.715C23.4508 16.8135 23.1865 17.0777 23.1865 17.6062V18.7513H26.0052V21.5699H23.1865V28H26.1813C27.6788 28 29 26.6787 29 25.1813V13.8186Z" fill="white"/>
                                </svg>			
                            </div>
                            <div class="social-item">
                                <svg width="40" height="40" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <circle cx="20" cy="20" r="20" fill="#7294C7"/>
                                    <path d="M29.8063 25.1153C29.8063 25.0323 29.7232 25.0323 29.7232 24.9493C29.3911 24.2851 28.6439 23.4549 27.6477 22.5416C27.1495 22.1265 26.9004 21.7944 26.7344 21.6284C26.4853 21.2963 26.4853 21.0472 26.5684 20.7151C26.6514 20.466 26.9835 20.0509 27.5646 19.3037C27.8967 18.8886 28.0628 18.6395 28.3118 18.3905C29.5572 16.73 30.1383 15.6507 29.9723 15.1526L29.8893 15.0695C29.8063 14.9865 29.7232 14.9035 29.5572 14.9035C29.3911 14.8205 29.1421 14.8205 28.893 14.9035H25.7381C25.6551 14.9035 25.6551 14.9035 25.4891 14.9035C25.406 14.9035 25.323 14.9035 25.323 14.9035H25.24H25.157L25.0739 14.9865C24.9909 15.0695 24.9909 15.0695 24.9909 15.1526C24.6588 16.0658 24.2437 16.813 23.8286 17.6433C23.5795 18.0584 23.3305 18.4735 23.0814 18.8056C22.8323 19.1377 22.6663 19.3867 22.5002 19.5528C22.3342 19.7188 22.1681 19.8018 22.0851 19.9679C22.0021 20.0509 21.8361 20.1339 21.8361 20.0509C21.753 20.0509 21.67 20.0509 21.67 19.9679C21.587 19.8849 21.504 19.8018 21.4209 19.7188C21.3379 19.6358 21.3379 19.4698 21.2549 19.3037C21.2549 19.1377 21.2549 18.9716 21.2549 18.8886C21.2549 18.8056 21.2549 18.5565 21.2549 18.3905C21.2549 18.1414 21.2549 17.9753 21.2549 17.8923C21.2549 17.6433 21.2549 17.3112 21.2549 16.9791C21.2549 16.647 21.2549 16.3979 21.2549 16.2319C21.2549 16.0658 21.2549 15.8168 21.2549 15.6507C21.2549 15.4016 21.2549 15.2356 21.2549 15.1526C21.2549 15.0695 21.1719 14.9035 21.1719 14.8205C21.0889 14.7375 21.0058 14.6544 20.9228 14.5714C20.8398 14.4884 20.6737 14.4884 20.5907 14.4054C20.1756 14.3223 19.6775 14.2393 19.0963 14.2393C17.7679 14.2393 16.8547 14.3223 16.5226 14.4884C16.3565 14.5714 16.1905 14.6544 16.1075 14.8205C15.9414 14.9865 15.9414 15.0695 16.0245 15.0695C16.4396 15.1526 16.7717 15.3186 16.9377 15.5677L17.0207 15.7337C17.1038 15.8168 17.1037 15.9828 17.1868 16.2319C17.2698 16.4809 17.2698 16.73 17.2698 17.0621C17.2698 17.5602 17.2698 18.0584 17.2698 18.3905C17.2698 18.8056 17.1868 19.0546 17.1868 19.3037C17.1868 19.5528 17.1038 19.7188 17.0207 19.8019C16.9377 19.9679 16.9377 20.0509 16.8547 20.0509C16.8547 20.0509 16.8547 20.1339 16.7717 20.1339C16.6886 20.1339 16.6056 20.217 16.4396 20.217C16.3565 20.217 16.1905 20.1339 16.1075 20.0509C15.9414 19.9679 15.7754 19.8019 15.6924 19.6358C15.5263 19.4698 15.3603 19.2207 15.1942 18.8886C15.0282 18.5565 14.7791 18.2244 14.6131 17.7263L14.447 17.3942C14.364 17.2281 14.198 16.896 14.0319 16.4809C13.8659 16.0658 13.6998 15.7337 13.5338 15.3186C13.4507 15.1526 13.3677 15.0695 13.2847 14.9865H13.2017C13.2017 14.9865 13.1186 14.9035 13.0356 14.9035C12.9526 14.9035 12.8696 14.8205 12.7866 14.8205H9.79773C9.46564 14.8205 9.2996 14.9035 9.21657 14.9865L9.13354 15.0695C9.13354 15.0695 9.13354 15.1526 9.13354 15.2356C9.13354 15.3186 9.13355 15.4016 9.21657 15.5677C9.63169 16.564 10.1298 17.5602 10.628 18.5565C11.1261 19.4698 11.6242 20.3 11.9563 20.8812C12.3714 21.4623 12.7035 22.0435 13.1186 22.5416C13.5338 23.0397 13.7828 23.3718 13.8658 23.5379C14.0319 23.7039 14.1149 23.7869 14.1979 23.87L14.447 24.119C14.6131 24.2851 14.8621 24.5342 15.1942 24.7832C15.5263 25.0323 15.9414 25.2814 16.3565 25.5304C16.7717 25.7795 17.2698 25.9456 17.7679 26.1116C18.3491 26.2776 18.8472 26.3607 19.3454 26.2776H20.5907C20.8398 26.2776 21.0058 26.1946 21.1719 26.0286L21.2549 25.9455C21.2549 25.8625 21.3379 25.8625 21.3379 25.7795C21.3379 25.6965 21.3379 25.6135 21.3379 25.4474C21.3379 25.1153 21.3379 24.8663 21.4209 24.6172C21.504 24.3681 21.504 24.2021 21.587 24.036C21.67 23.87 21.753 23.787 21.8361 23.7039C21.9191 23.6209 22.0021 23.5379 22.0021 23.5379H22.0851C22.2512 23.4549 22.5002 23.5379 22.6663 23.7039C22.9154 23.87 23.1644 24.119 23.3305 24.3681C23.4965 24.6172 23.7456 24.8663 24.0777 25.1983C24.4098 25.5304 24.6588 25.7795 24.8249 25.8625L25.0739 26.0286C25.24 26.1116 25.406 26.1946 25.6551 26.2776C25.9042 26.3607 26.0702 26.3607 26.2363 26.3607L29.0591 26.2776C29.3081 26.2776 29.5572 26.1946 29.7232 26.1116C29.8893 26.0286 29.9723 25.9455 29.9723 25.7795C29.9723 25.6965 29.9723 25.5304 29.9723 25.4474C29.8062 25.2814 29.8063 25.1983 29.8063 25.1153Z" fill="white"/>
                                </svg>		
                            </div>
                        </div>
                    </div>
                </div>
        </div>
    </div>
    <div class="modal-1" id="modal-1">
        <div class="modal-1-wrap">
            <div class="modal-1-close"><svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M18 6L6 18" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                <path d="M6 6L18 18" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                </svg>
                </div>
            <h2>Добавить участника</h2>
            <p>Пригласите нового участника в Вашу команду</p>
            <form>
                <label>Пригласить по никнэйму</label>
                <input type="text" placeholder="Введите никнэйм">
                <span>или</span>
                <label>Пригласить с помощью электронной почты</label>
                <input type="email" placeholder="Введи e-mail адрес">
                <div class="modal-1-wrap-buttons">
                    <div class="modal-1-wrap-button modal-1-wrap-button-1">
                        <button type="submit">+ Добавить</button>
                    </div>
                    <div class="modal-1-wrap-button modal-1-wrap-button-2">
                        <button>Отмена</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <div class="modal-1" id="modal-2">
        <div class="modal-1-wrap">
            <div class="modal-1-close"><svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M18 6L6 18" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                <path d="M6 6L18 18" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                </svg>
                </div>
            <h2>Создать команду</h2>
            <form>
                <div class="img-upload">
                    <div class="img-upload-item">
                        <img src="img/upload.png" alt="">
                        <input type="file">
                    </div>
                    <div class="img-upload-text">
                        <p><strong>Загрузите логотип</strong><br>
                            Рекомендуемый размер логотипа: <br>
                            500х500px
                        </p>
                    </div>
                </div>
                <label>Название команды</label>
                <input type="text" class="input-v2">
                <label>Тег команды</label>
                <input type="email" class="input-v2">
                <div class="modal-1-wrap-buttons" style="margin-top: 10px;">
                    <div class="modal-1-wrap-button modal-1-wrap-button-1">
                        <button type="submit">Создать команду</button>
                    </div>
                    <div class="modal-1-wrap-button modal-1-wrap-button-2">
                        <button>Отмена</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
<script src="https://code.jquery.com/jquery-2.2.4.min.js"></script>
<script src="owl/owl.carousel.min.js"></script>
<script src="js/main.js"></script>
<script src="js/scripts.min.js"></script>

</body>
</html>

@endsection
