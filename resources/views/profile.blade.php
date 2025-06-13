@extends('theme')
@section('title') Личный кабинет @endsection
@section('style')profile-style.css @endsection
@section('content')
        @if(session('success'))
            <div class="alert alert-success">
                
            </div>
            <label>
                <input type="checkbox" class="alertCheckbox" autocomplete="off" />
                <div class="alert success">
                    <span class="alertClose">x</span>
                    <span class="alertText">{{ session('success') }}
                    <br class="clear"/></span>
                </div>
            </label>
        @endif
        <h1 class="name-sect">Личный кабинет</h1>
        <div class="container container-main-info">
            <div class="account-info">
                <div class="account-appearance">
                    <div class="foto-profile">
                        <img class="" src="https://baggage.minisklad-spb.ru/assets/baggage/review_icon.jpg" alt="Фото профиля" srcset="">
                    </div>
                    <h1>{{Auth::user()->name}} {{Auth::user()->surname}}</h1>
                    <div class="username">
                        <a href="/logout">
                            <button>Выйти</button>
                        </a>
                    </div>
                </div>
                <div class="main-info">
                    <h1 class="sect-name">Общая информация</h1>
                    <div class="grid-main-info">
                        <p>Имя</p>
                        <input type="text" name="name" id="name" placeholder="{{Auth::user()->name}}" disabled>
                        <p>Фамилия</p>
                        <input type="text" name="last_name" id="last_name" placeholder="{{Auth::user()->surname}}" disabled>
                        <p>Отчество</p>
                        <input type="text" name="patronymic" id="patronymic" placeholder="{{Auth::user()->patronymic}}" disabled>
                        <p>Телефон</p>
                        <input type="text" name="dateBirth" id="dateBirth" placeholder="{{Auth::user()->phone}}" disabled>
                    </div>
                </div>
                <div class="">

                </div>

            </div>
            
        </div>
        <div class="container">
            <h1 class="name-sect">Текущие записи</h1>
            <div class="card-container">

                <div class="card">
                    <p class="card-header">Анна П. — Парикмахер</p>
                    <p class="card-detail"><span class="card-label">Время:</span> 14:30</p>
                    <p class="card-detail"><span class="card-label">Услуга:</span> Стрижка</p>
                    <p class="card-detail"><span class="card-label">Дата:</span> 2024-06-10</p>
                </div>

                <div class="card">
                    <p class="card-header">Игорь С. — Косметолог</p>
                    <p class="card-detail">
                        <span class="card-label">Услуга:</span> Чистка лица
                    </p>
                    <p class="card-detail"><span class="card-label">Дата:</span> 2024-06-12</p>
                    <p class="card-detail"><span class="card-label">Время:</span> 10:00</p>
                </div>

                <div class="card">
                    <p class="card-header">Елена К. — Мастер маникюра</p>
                    <p class="card-detail"><span class="card-label">Услуга:</span> Маникюр</p>
                    <p class="card-detail"><span class="card-label">Дата:</span> 2024-06-15</p>
                    <p class="card-detail"><span class="card-label">Время:</span> 16:00</p>
                </div>
            </div>
        </div>
@endsection