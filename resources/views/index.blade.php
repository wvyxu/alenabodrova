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
                <img src="img/haircut.jpg" class="grid-backgrd-img" alt="" srcset="">
                <h2 class="serv-name">Стрижки</h2>
            </a>
            <a href="" class="grid-item">
                <img src="img/coloring.jpg" class="grid-backgrd-img" alt="" srcset="">
                <h2 class="serv-name">Окрашивание волос</h2>
            </a>
            <a href="" class="grid-item">
                <img src="img/hairstyle.jpg" class="grid-backgrd-img" alt="" srcset="">
                <h2 class="serv-name">Укладки</h2>
            </a>
            <a href="" class="grid-item">
                <img src="img/hair_extention.jpg" class="grid-backgrd-img" alt="" srcset="">
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
                <img src="img/for_men.jpg" class="grid-backgrd-img" alt="" srcset="">
                <h2 class="serv-name">Для мужчин</h2>
            </a>
        </div>
    </section>
    <section class="stuff">
        <h1 class="name-sect">Специалисты</h1>
        <div class="stuff-cont">
            @foreach($stuffs as $i => $s)
            @if ($i >= 4)
                @break
            @endif
            <div class="stuff-elem">
                <div class="stuff-number-name ">
                    <h1 class="stuff-number">{{$i+1}}</h1>
                    <div class="stuff-main-inf ">
                        <h1 class="stuff-name">
                            {{$s->surname}} 
                            {{mb_substr($s->name, 0, 1);}}. 
                            {{mb_substr($s->patronymic, 0, 1);}}. 
                        </h1>
                        <p class="exp">Стаж: {{$s->work_exp}} г.</p>
                    </div>
                </div>
                @if (count($s->stuff_specialization) > 1)
                    <p class="role">
                        @foreach ($s->stuff_specialization as $specs)
                        @if ($specs!=$s->stuff_specialization->last())
                            {{$specs->specialization->name}} /
                        @else
                            {{$specs->specialization->name}}
                        @endif
                        @endforeach
                    </p>
                @elseif(count($s->stuff_specialization) == 1)
                    <p class="role">
                        {{$s->stuff_specialization[0]->specialization->name}} 
                        {{--({{$servicetypes[$s->stuff_specialization[0]->specialization->servicetype_id-1]->name)--}}
                    </p>
                @endif
                    <button class="stuff-make-order">Записаться</button>
            </div>
            
            @endforeach
        </div>
        <a name="about"></a>
    </section>

    <section class="aboutus">
        <h1 class="name-sect">О нас</h1>
        <div class="map">
            <div class="">
                <div id="map" style="width: 600px; height: 400px"></div>
            </div>
            <div class="about-company">
                <p class="about-company-text"><b>Адрес</b>: г. Абакан, ул. Лермонтова, 21</p>
                <p class="about-company-text"><b>Контакты</b>: 
                    <div class="about-company-text pad">
                        +7 (3902) 31‒32‒75<br>
                        +7‒963‒954‒62‒75<br>
                        Alena.v.bodrova@yandex.ru
                    </div>
                </p>
                <p class="about-company-text"></p>
            </div>
            
        </div>
        
    </section>

    <script src="js/map.js"></script>
@endsection