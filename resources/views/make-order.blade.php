<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Manrope:wght@200..800&display=swap" rel="stylesheet">
    
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:ital,wght@0,100..700;1,100..700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="sty.css">
    <link rel="stylesheet" href="make-order-style.css">
    <link rel="stylesheet" href="bootstrap/bootstrap.min.css">
    <title>@yield('title')</title>
</head>
<body>    
    <div class="body-container">
        <header class="dflex">
            <div class="cont">
                <div class="header">
                    <div class="logo">
                        <a href="">
                            <img src="logo.png" class="main-logo-img" alt="logo" srcset="">
                        </a>
                    
                        <nav>
                            <ul class="header-nav">
                                <li><a class="header-nav-link" href="">Услуги и цены</a></li>
                                <li><a class="header-nav-link" href="">Специалисты</a></li>
                                <li><a class="header-nav-link" href="">О нас</a></li>
                            </ul>
                            <hr class="nav-underline">
                        </nav>
                    </div>
                    <div class="reg">
                    
                        <a href="/reg">
                            <button class="redbtn">Регистрация</button>
                        </a>
                        <a href="/sign-in">
                            <button class="redbtn">Войти</button>
                        </a>
                    </div>
                </div>
    
            </div>
        </header>

        <main class="dflex">
            <div class="cont">
                <div class="welcome">
                    <form action="/create-order" method="POST">
                        <h3>Заказать услугу</h3>
                        <select name="services" id="service" class="form-select mb-3">
                            <option value="">Жарклв</option>
                            
                        </select>
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="basic-addon1">Удобная дата</span>
                            <input type="date" name="order_date" class="form-control" aria-label="Username" aria-describedby="basic-addon1">
                        </div>
                        <select name="order_time" id="order_time" class="form-select time-select mb-3" >
                            
                            <option value="">Жарклв</option>
                        </select>
                        
                        <select name="payment" id="payment" class="form-select mb-3">
                            <option value="">Жарклв</option>
                        </select>
                        <input type="hidden" name="user_id" value="{{Auth::user()->id}}">
                        
                        <input type="submit" value="Оставить заявку">
                        <p class="mt-3">Статус заявки можно посмотреть в личном кабинете</p>
                    </form>
                    <div class="order-form-photo" style="margin-right: 180px;">
                    </div>

                </div>
            </div>
        </main>
    
        <script src="bootstrap/bootstrap.bundle.min.js"></script>
    
    <script src="https://code.jquery.com/jquery-3.6.3.js"
    integrity="sha256-nQLuAZGRRcILA+6dMBOvcRh5Pe310sBpanc6+QBmyVM="
    crossorigin="anonymous">
    </script>

    <script>
        $(function() {
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
              