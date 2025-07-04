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
            </div>    
        </div>
    @if (Auth::user()->role === 0)
        <div class="container">
            <h1 class="name-sect">Ближайшие записи</h1>
            <div class="card-container">
                @foreach ($orders as $o)
                    @if(Auth::user()->id === $o->user_id)
                        <div class="card">
                            <p class="card-header">
                                {{$o->stuff_specialization->user->name}}
                                {{mb_substr($o->stuff_specialization->user->surname, 0, 1);}}. 
                                — 
                                {{$o->stuff_specialization->specialization->name}}</p>
                            <p class="card-detail"><span class="card-label">Время:</span>{{date('H:i', strtotime($o->order_time))}}</p>
                            <p class="card-detail"><span class="card-label">Услуга:</span>
                                {{$o->service->subcategory->name}}
                                @if(isset($o->service->length))
                                    {{$o->service->length->name}}
                                @endif</p>
                            <p class="card-detail"><span class="card-label">Дата:</span>{{date('d.m.Y', strtotime($o->order_date))}}</p>
                        </div>
                    {{-- @else
                        <p>Пока нет доступных записей. Вы можете <a href="/create">записаться</a></p> --}}
                    @endif
                @endforeach
            </div>
        </div>
    @else 
        <div class="container">
            <h1 class="name-sect">Записи к сотруднику <span class="card-label">{{Auth::user()->surname . " " . Auth::user()->name}}</span></h1>
            <div class="card-container">
                @foreach ($orders as $o)

                    @if(Auth::user()->id === $o->stuff_specialization->user->id)
                        <div class="card">
                            <p class="card-header">
                                <span class="card-label">{{$o->service->subcategory->name}}
                                @if(isset($o->service->length))
                                    {{$o->service->length->name}}
                                @endif</span>
                            </p>
                            <p class="card-detail"><span class="card-label">Клиент:</span> {{$o->user->name}} {{$o->user->surname}} </p>
                            <p class="card-detail">{{$o->user->phone}}</p>
                            <p class="card-detail"><span class="card-label">Время:</span>{{date('H:i', strtotime($o->order_time))}}</p>
                            <p class="card-detail"><span class="card-label">Дата:</span>{{date('d.m.Y', strtotime($o->order_date))}}</p>
                        </div>
                    @endif
                @endforeach
            </div>
        </div>
    @endif

@endsection