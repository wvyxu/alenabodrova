@extends('theme')
@section('title') Регистрация @endsection
@section('style')reg-style.css @endsection
@section('content')
    <section class="menu">
        <div class="menu-window">
            <div class="contact-info-container">
                <form action="/sign-in" method="POST">
                    @csrf
                    @method('post')
                    <div class="grid-form">
                        <h1 class="name-sect">Авторизация</h1>
                        
                        <div class="full-row">
                            <label for="phone">Номер телефона</label>
                            <input type="text" name="phone" class="mask-phone" id="phone" placeholder="+7(___) ___-__-__">
                            <p class="phoneError"></p>
                        </div>
                        <div class="full-row">
                            <label for="password">Пароль</label>
                            <input type="password" name="password" id="password" placeholder="******">
                            <p class="passError"></p>
                        </div>
                        @if($errors->any())
                            @foreach($errors->all() as $er)
                                <div class="alert alert-danger">{{$er}}</div>
                            @endforeach
                        @endif     
                        <input type="submit" class="reg" value="Войти">
                    </div>
                </form>	
                
            </div>
        </div>
    </section>
    
    <script src="https://snipp.ru/cdn/jquery/2.1.1/jquery.min.js"></script>
    <script src="https://snipp.ru/cdn/maskedinput/jquery.maskedinput.min.js"></script>

    <script src="js/input-mask.js"></script>

@endsection