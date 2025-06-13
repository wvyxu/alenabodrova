@extends('theme')
@section('title') Регистрация @endsection
@section('style')reg-style.css @endsection
@section('content')
    <section class="menu">
        <div class="menu-window">
            <div class="contact-info-container">
                <form action="/register" method="POST">
                    @csrf
                    @method('post')
                    <div class="grid-form">
                        <h1 class="name-sect">Регистрация</h1>
                        <div class="two-rows">
                            <div class="full-row">
                                <label for="name">Имя</label>
                                <input type="text" name="name" id="name" placeholder="Имя">
                                <p class="nameError"></p>
                            </div>
                            <div>
                                <label for="patronymic">Отчество</label>
                                <input type="text" name="patronymic" id="patronymic" placeholder="Отчество">
                                <p class="patronymicError"></p>
                            </div>
                        </div>
                        <div class="two-rows">
                            <div class="full-row">
                                <label for="surname">Фамилия</label>
                                <input type="text" name="surname" id="surname" placeholder="Фамилия">
                                <p class="surnameError"></p>
                            </div>
                            <div class="full-row">
                                <label for="phone">Номер телефона</label>
                                <input type="text" name="phone" class="mask-phone" id="phone" placeholder="+7(___) ___-__-__">
                                <p class="phoneError"></p>
                            </div>
                        </div>
                        <div class="full-row">
                            <label for="password">Пароль</label>
                            <input type="password" name="password" id="password" placeholder="******">
                            <p class="passError"></p>
                        </div>
                        <div class="full-row">
                            <label for="password_confirmation">Повторите пароль</label>
                            <input type="password" name="password_confirmation" id="password_confirmation" placeholder="******">
                            <p class="passconfError"></p>
                        </div>
                        <div class="row-checkbox">
                            <input type="checkbox" name="rules" id="rules">
                            <label for="rules">Я ознакомился с политикой конфиденциальности и даю согласие на обработку моих персональных данных</label>
                        </div>
                        
                            <p class="rulesError"></p>
                        <input type="submit" class="reg" value="Регистрация">
                    </div>
                </form>	
                
            </div>
        </div>
    </section>
    
    <script src="https://snipp.ru/cdn/jquery/2.1.1/jquery.min.js"></script>
    <script src="https://snipp.ru/cdn/maskedinput/jquery.maskedinput.min.js"></script>

    <script src="js/input-mask.js"></script>
    <script src="js/reg-validate.js"></script>

@endsection