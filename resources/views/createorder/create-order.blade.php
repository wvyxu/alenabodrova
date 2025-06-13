@extends('theme')
@section('title') Услуги и цены @endsection
@section('style')create-order-style.css @endsection
@section('content')
    <section class="menu">
        <div class="menu-window">
            <div class="about-company">
                <form action="/makeorder" method="POST">
                    @csrf
                    @method('post')
                    <h1 class="name-sect">Записаться на услугу</h1>
                    <div class="styled-select">
                        <select name="service_id" id="service_id" disabled>
                            <option value="" selected>{{$service->subcategory->name}} ({{$service->subcategory->service_type->name}})</option>
                        </select>
                        <i class="fa fa-angle-right" aria-hidden="true"></i>
                    </div>
                    <div class="styled-select">
                        <select name="stuff_specialization_id" id="" disabled>
                            <option value="{{$stuffspec->id}}" selected>
                                {{$stuffspec->user->name}} 
                                ({{$stuffspec->specialization->name}})
                            </option>
                            {{-- <option value="{{$s->id}}">{{$s->name}} {{mb_substr($s->surname, 0, 1);}}. ({{$s->specialization->name}})</option> --}}
                        </select>
                        <i class="fa fa-angle-right" aria-hidden="true"></i>
                    </div>
                    <div class="input-group mb-3">
                        <span class="input-group-text" id="basic-addon1">Удобная дата</span>
                        <input type="date" name="order_date" id="order_date" class="form-control">
                        <p class="date-error"></p>
                    </div>
                    <div class="styled-select">
                        <select name="order_time" id="order_time">
                            @for ($i = 9; $i < 19; $i++)
                                <option value="{{$i}}:00">{{$i}}:00</option>
                                <option value="{{$i}}:30">{{$i}}:30</option>
                            @endfor
                        </select>
                    </div>
                    <input type="hidden" name="user_id" value="{{Auth::user()->id}}">
                    <input type="hidden" name="service_id" value="{{$service->id}}">
                    <input type="hidden" name="stuffspec_id" value="{{$stuffspec->id}}">
                    
                    <input type="submit" value="Записаться" class="create-btn">

                </form>
            </div>

        </div>
    </section>
                
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

        document.querySelector('create-btn').addEventListener("submit", 
            const input = document.getElementById('order_date').value;
            const result = document.querySelector('.date-error');
            if (!input) {
                result.textContent = 'Выберите дату записи';
                return;
            }

            const selectedDate = new Date(input);
            const today = new Date();

            // Убираем время для сравнения
            selectedDate.setHours(0,0,0,0);
            today.setHours(0,0,0,0);

            if (selectedDate < today) {
                result.textContent = 'Дата не может быть в прошлом.';
            } else {
                result.textContent = 'Дата валидна.';
            }
        );
        
    </script>
    
              
@endsection