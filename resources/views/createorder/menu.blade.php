@extends('theme')
@section('title') Услуги и цены @endsection
@section('style')menu-style.css @endsection
@section('content')
                <section class="menu">
                    <div class="menu-window">
                        <div class="about-company">
                            <h1 class="name-sect">Студия красоты Алёны Бодровой</h1>
                            <p class="address">ул. Лермонтова, 21</p>
                        </div>
                        <div class="nav-menu">
                            <a class="menu-item" href="/createbyspecialist">
                                <div class="menu-item-name">
                                    <img src="" alt="" srcset="">
                                    <h2>Выбрать специалиста</h2>
                                </div>
                                <img src="img/grey-arrow-right.svg" alt="" srcset="">
                            </a>
                            <hr class="menu-hr">
                            <a class="menu-item" href="/createbyservice">
                                <div class="menu-item-name">
                                    <img src="" alt="" srcset="">
                                    <h2>Выбрать услугу</h2>
                                </div>
                                <img src="img/grey-arrow-right.svg" alt="" srcset="">
                            </a>
                        </div>
                    </div>
                </section>

@endsection