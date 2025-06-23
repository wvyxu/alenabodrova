@extends('theme')
@section('title') Админ-панель @endsection
@section('style')admin-services-style.css @endsection

@section('admin')
        <div class="table">
            <main class="dflex table">
                @include('admin.sidebar')
                <div class="cont">
                    <section class="sect">
                        <a class="back" href="/admin/orders">< Назад</a>
                        <div class="admin-head">
                            <h1 class="name-sect">Новая запись</h1>
                        </div>
                        <form action="/admin/orders/create" method="post">
                            <div class="grid-form">
                                <div class="full-row">
                                    <label for="servicetype">Клиент</label>
                                    <select name="servicetype" id="servicetype">
                                        @foreach($users as $u)
                                            <option value="{{$u->id}}">{{$u->name}}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="full-row">
                                    <label for="servicetype">Услуга</label>
                                    <select name="servicetype" id="servicetype">
                                        @foreach($services as $s)
                                            <option value="{{$s->id}}">{{$s->name}}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="full-row">
                                    <label for="servicetype">Мастер</label>
                                    <select name="servicetype" id="servicetype">
                                        @foreach($stuffs as $s)
                                            <option value="{{$s->id}}">{{$s->name}}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="full-row">
                                    <label for="order_date">Дата</label>
                                    <input type="date" name="order_date" id="order_date">
                                </div>
                                <div class="full-row">
                                    <label for="time">Время</label>
                                    <input type="time" name="order_time" id="order_time">
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
