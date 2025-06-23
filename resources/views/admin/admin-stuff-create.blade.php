@extends('theme')
@section('title') Админ-панель @endsection
@section('style')admin-stuff-style.css @endsection

@section('admin')
        <div class="table">
            <main class="dflex table">
                @include('admin.sidebar')
                <div class="cont">
                    <section class="sect">
                        <a class="back" href="/admin/staff">< Назад</a>
                        <div class="admin-head">
                            <h1 class="name-sect">Добавить сотрудника</h1>
                        </div>
                        <form action="/admin/staff/create" method="post">
                            <div class="grid-form">
                                <div class="full-row">
                                    <label for="surname">Фамилия</label>
                                    <input type="text" name="surname" id="surname">
                                </div>
                                <div class="full-row">
                                    <label for="name">Имя</label>
                                    <input type="text" name="name" id="name">
                                </div>
                                <div class="full-row">
                                    <label for="patronymic">Отчество</label>
                                    <input type="text" name="patronymic" id="patronymic">
                                </div>
                                <select name="specializations[]" multiple="multiple" class="js-example-basic-multiple" id="specializations">
                                    @foreach($specializations as $s)
                                        <option value="{{$s->id}}">{{$s->name}}</option>
                                    @endforeach
                                </select>
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
