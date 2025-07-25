<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="title" content="Студия красоты Алены Бодровой, ул. Лермонтова, 21"/>
    <meta name="description" content="Студия красоты — это всегда уютная атмосфера, доброжелательное отношение к гостям, высокая квалификация всей команды!
Нам нравится заботится о вас."/>
    <meta name="keywords" content="салон красоты"/>
    <meta name="keywords" content="студия красоты"/>
    <meta name="keywords" content="студия красоты бодровой"/>
    <meta name="keywords" content="салон красоты бодровой"/>
    <meta name="keywords" content="салон красоты абакан"/>
    <meta name="keywords" content="парикмахерская"/>
    <meta name="keywords" content="парикмахерская абакан"/>
    
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Manrope:wght@200..800&display=swap" rel="stylesheet">
    
    <link rel="shortcut icon" href="/img/favicon.jpg" type="image/x-icon">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:ital,wght@0,100..700;1,100..700&display=swap" rel="stylesheet">
    
        <!-- Yandex.Metrika counter -->
    <script type="text/javascript" >
       (function(m,e,t,r,i,k,a){m[i]=m[i]||function(){(m[i].a=m[i].a||[]).push(arguments)};
       m[i].l=1*new Date();
       for (var j = 0; j < document.scripts.length; j++) {if (document.scripts[j].src === r) { return; }}
       k=e.createElement(t),a=e.getElementsByTagName(t)[0],k.async=1,k.src=r,a.parentNode.insertBefore(k,a)})
       (window, document, "script", "https://mc.yandex.ru/metrika/tag.js", "ym");
    
       ym(102890317, "init", {
            clickmap:true,
            trackLinks:true,
            accurateTrackBounce:true
       });
    </script>
    <noscript><div><img src="https://mc.yandex.ru/watch/102890317" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
    <!-- /Yandex.Metrika counter -->
    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>

    {{-- <script src="https://api-maps.yandex.ru/v3/?apikey=d8058bcb-be2c-43e2-9163-6323ee779be2&lang=ru_RU"></script> --}}
    <script src="https://api-maps.yandex.ru/2.1/?lang=ru_RU" type="text/javascript"></script>
    <link rel="stylesheet" href="/css/sty.css">
    <link rel="stylesheet" href="/css/@yield('style')">
    <link rel="stylesheet" href="/main-style.css">
    <title>@yield('title')</title>
</head>
<body>    
    <div class="body-container">
        <header class="dflex">
            <div class="cont">
                <div class="header">
                    <div class="logo">
                        <a href="/">
                            <img src="/logo.png" class="main-logo-img" alt="logo" srcset="">
                        </a>
                    
                        <nav>
                            <ul class="header-nav">
                                <li><a class="header-nav-link" href="/services">Услуги и цены</a></li>
                                <li><a class="header-nav-link" href="/stuff">Специалисты</a></li>
                                <li><a class="header-nav-link" href="/#about">О нас</a></li>
                            </ul>
                            <hr class="nav-underline">
                        </nav>
                    </div>
                    <div class="reg">
                        @if(Auth::user() && Auth::user()->role==2) 
                            <a href="/admin" class="admin">Админ панель</a>
                        @endif
                        @if(!Auth::user())
                            <a href="/reg">
                                <button>Регистрация</button>
                            </a>
                            <a href="/sign-in">
                                <button class="">Войти</button>
                            </a>
                        @else 
                            <a href="/profile">
                                <button class="">Личный кабинет</button>
                            </a>
                            <a href="/create">
                                <button class="">Записаться</button>
                            </a>
                        @endif 
                    </div>
                </div>
    
            </div>
        </header>
        @yield('admin')
        <main class="dflex">
            <div class="cont">
                @yield('content')
            </div>
        </main>
    
        <footer class="dflex">
            <div class="cont">
                <div class="footer">
                    <div class="icons">
                        <a href="">
                            <div class="icon">
                                <img src="/img/vk.png" alt="" srcset="">
                            </div>
                        </a>
                        <a href="">
                            <div class="icon">
                                <img src="/img/2gis.png" alt="" srcset="">
                            </div>
                        </a>
                        <a href="">
                            <div class="icon">
                                <img src="/img/telegram.png" alt="" srcset="">
                            </div>
                        </a>
                        <a href="">
                            <div class="icon">
                                <img src="/img/vk.png" alt="" srcset="">
                            </div>
                        </a>
                    </div>
                    <hr class="line-footer">
                    <div class="logo logo-footer">
                        <a href="/">
                            <img src="/img/white_logo.png" alt="logo" class="footer-white-logo" srcset="">
                        </a>
                        <div class="footer-info">
                            <div class="search">
                                <img src="/img/search.png" alt="" srcset="">
                                <input class="search-input" type="text" name="" id="">
                            </div>
                            <div>
                                <ul class="footer-nav">
                                    <li class="nav-li"><a href="/services">Услуги и цены</a></li>
                                    <li class="nav-li"><a href="/stuff">Специалисты</a></li>
                                    <li class="nav-li"><a href="/#about">О нас</a></li>
                                </ul>
                            </div>
                            <p class="footer-address">г. Абакан, ул. Лермонтова, 21</p>
                        </div>
                    </div>
                    <p class="copyright">© Бодрова А.В., 2016—2025</p>
                    
                </div>
            </div>
        </footer>
    
    </div>

    <script
    src="https://code.jquery.com/jquery-2.2.4.js"
    integrity="sha256-iT6Q9iMJYuQiMWNd9lDyBUStIq/8PuOW33aOqmvFpqI="
    crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script> 
    <script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.6.0.min.js"></script>
    <script>
        $(function() {   // меняется цвет шапки 
            $(window).scroll(function() {
                var scroll = $(window).scrollTop();
                if (scroll >= 97) {
                    $("header").addClass('shrink');
                } else {
                    $("header").removeClass("shrink");
                }
            });
        });
    </script>
</body>
</html>