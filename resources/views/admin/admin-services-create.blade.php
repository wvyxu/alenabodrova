@extends('theme')
@section('title') Админ-панель @endsection
@section('style')admin-services-style.css @endsection

@section('admin')
        <div class="table">
            <main class="dflex table">
                @include('admin.sidebar')
                <div class="cont">
                    <section class="sect">
                        <a class="back" href="/admin/services">< Назад</a>
                        <div class="admin-head">
                            <h1 class="name-sect">Добавить услугу</h1>
                        </div>
                        <form action="/admin/services/create" method="post">
                            <div class="grid-form">
                                <div class="full-row">
                                    <label for="servicetype">Категория</label>
                                    <select name="servicetype" id="servicetype">
                                        @foreach($servicetypes as $s)
                                            <option value="{{$s->id}}">{{$s->name}}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="full-row">
                                    <label for="name">Название услуги</label>
                                    <input type="text" name="name" id="name">
                                </div>
                                <div class="full-row">
                                    <label for="name">Специализация</label>
                                    <select name="servicetype" id="servicetype">
                                        @foreach($specializations as $s)
                                            <option value="{{$s->id}}">{{$s->name}}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="full-row">
                                    <label for="lengths">Длина волос</label>
                                    <select name="lengths" id="lengths">
                                        <option value="">Не выбрано</option>
                                        @foreach($lengths as $l)
                                            <option value="{{$l->id}}">{{$l->name}}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="full-row">
                                    <label for="price">Цена</label>
                                    <input type="text" name="price" id="price">
                                </div>
                                
                                <input type="submit"  name="" id="submit" value="Добавить">
                            </div>
                            
                        </form>
                        
                        
                    </section>
                </div>
            </main>
        </div>

    <script src="https://code.jquery.com/jquery-2.2.4.js"
    integrity="sha256-iT6Q9iMJYuQiMWNd9lDyBUStIq/8PuOW33aOqmvFpqI="
    crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script> 
    <script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.6.0.min.js"></script>
        <script src="/js/sel2.js"></script>
@endsection
