@extends('theme')
@section('title') Студия красоты А. Бодровой @endsection
@section('style')index-style.css @endsection
@section('content')
    <section class="welcome">
        <div class="rect">
            <div class="gradient">
                <p class="welcome-main-text nocopy">На первое посещение скидка 20% на все услуги парикмахерского зала</p>
                <a href="/create"><button class="welcome-make-order">Записаться</button></a>
            </div>
            <img src="img/background-image.jpg" class="rect-img nocopy" alt="" srcset="">
            <h1 class="welcome-text top-rect-text nocopy">Приглашаем вас стать ярче и прекраснее вместе с нами.</h1>
            <div class="welcome-text bottom-rect-text">
                <p class="welcome-links"><a href="">+7 (963) 954-62-75</a></p>
                <p class="welcome-links"><a href="">@ studio_bodrova_ab</a></p>
            </div>
        </div>
    </section>
    <section class="service">
        <h1 class="name-sect">Услуги</h1>
        <div class="grid-3col">
            <a href="" class="grid-item">
                <img src="img/depilation.jpg" class="grid-backgrd-img" alt="" srcset="">
                <h2 class="serv-name">Стрижки</h2>
            </a>
            <a href="" class="grid-item">
                <img src="img/depilation.jpg" class="grid-backgrd-img" alt="" srcset="">
                <h2 class="serv-name">Окрашивание волос</h2>
            </a>
            <a href="" class="grid-item">
                <img src="img/hairstyle.jpg" class="grid-backgrd-img" alt="" srcset="">
                <h2 class="serv-name">Укладки</h2>
            </a>
            <a href="" class="grid-item">
                <img src="img/depilation.jpg" class="grid-backgrd-img" alt="" srcset="">
                <h2 class="serv-name">Наращивание волос</h2>
            </a>
            
            <a href="" class="grid-item">
                <img src="img/afrobraids.jpg" class="grid-backgrd-img" alt="" srcset="">
                <h2 class="serv-name">Афроплетение</h2>
            </a>
            <a href="" class="grid-item">
                <img src="img/depilation.jpg" class="grid-backgrd-img" alt="" srcset="">
                <h2 class="serv-name">Шугаринг/ваксинг</h2>
            </a>
            <a href="" class="grid-item">
                <img src="img/makeup.jpg" class="grid-backgrd-img" alt="" srcset="">
                <h2 class="serv-name">Брови</h2>
            </a>
            <a href="" class="grid-item">
                <img src="img/lashes.jpg" class="grid-backgrd-img" alt="" srcset="">
                <h2 class="serv-name">Наращивание ресниц</h2>
            </a>
            <a href="" class="grid-item">
                <img src="img/depilation.jpg" class="grid-backgrd-img" alt="" srcset="">
                <h2 class="serv-name">Для мужчин</h2>
            </a>
        </div>
    </section>
    <section class="stuff">
        <h1 class="name-sect">Специалисты</h1>
        <div class="stuff-cont">
            <div class="stuff-elem">
                <div class="stuff-number-name ">
                    <h1 class="stuff-number">1</h1>
                    <div class="stuff-main-inf ">
                        <h1 class="stuff-name">Марченко А.С.</h1>
                        <p class="exp">Стаж: от 1 года</p>
                    </div>
                </div>
                <p class="role">бровист / мастер маникюра</p>
                <button class="stuff-make-order">Записаться</button>
            </div>
            
            <div class="stuff-elem">
                <div class="stuff-number-name ">
                    <h1 class="stuff-number">1</h1>
                    <div class="stuff-main-inf ">
                        <h1 class="stuff-name">Марченко А.С.</h1>
                        <p class="exp">Стаж: от 1 года</p>
                    </div>
                </div>
                <p class="role">бровист / мастер маникюра</p>
                <button class="stuff-make-order">Записаться</button>
            </div>
            <div class="stuff-elem">
                <div class="stuff-number-name">
                    <h1 class="stuff-number">1</h1>
                    <div class="stuff-main-inf">
                        <h1 class="stuff-name">Марченко А.С.</h1>
                        <p class="exp">Стаж: от 1 года</p>
                    </div>
                </div>
                <p class="role">бровист / мастер маникюра</p>
                <button class="stuff-make-order">Записаться</button>
            </div>
            <div class="stuff-elem">
                <div class="stuff-number-name">
                    <h1 class="stuff-number">1</h1>
                    <div class="stuff-main-inf">
                        <h1 class="stuff-name">Марченко А.С.</h1>
                        <p class="exp">Стаж: от 1 года</p>
                    </div>
                </div>
                <p class="role">бровист / мастер маникюра</p>
                <button class="stuff-make-order">Записаться</button>
            </div>
            <div class="stuff-elem">
                <div class="stuff-number-name">
                    <h1 class="stuff-number">1</h1>
                    <div class="stuff-main-inf">
                        <h1 class="stuff-name">Марченко А.С.</h1>
                        <p class="exp">Стаж: от 1 года</p>
                    </div>
                </div>
                <p class="role">бровист / мастер маникюра</p>
                <button class="stuff-make-order">Записаться</button>
            </div>
            <div class="stuff-elem">
                <div class="stuff-number-name">
                    <h1 class="stuff-number">1</h1>
                    <div class="stuff-main-inf">
                        <h1 class="stuff-name">Марченко А.С.</h1>
                        <p class="exp">Стаж: от 1 года</p>
                    </div>
                </div>
                <p class="role">бровист / мастер маникюра</p>
                <button class="stuff-make-order">Записаться</button>
            </div>
            <div class="stuff-elem">
                <div class="stuff-number-name">
                    <h1 class="stuff-number">1</h1>
                    <div class="stuff-main-inf">
                        <h1 class="stuff-name">Марченко А.С.</h1>
                        <p class="exp">Стаж: от 1 года</p>
                    </div>
                </div>
                <p class="role">бровист / мастер маникюра</p>
                <button class="stuff-make-order">Записаться</button>
            </div>
        </div>
        <a name="about"></a>
    </section>

    <section class="aboutus">
        <h1 class="name-sect">О нас</h1>
        <div class="">
            <div id="map" style="width: 600px; height: 400px"></div>
        </div>
    </section>

    <script src="js/map.js"></script>
@endsection