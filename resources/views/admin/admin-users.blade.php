@extends('theme')
@section('title') Админ-панель @endsection
@section('style')admin-stuff-style.css @endsection

@section('admin')
        <div class="table">
            <main class="dflex table">
                @include('admin.sidebar')

                <div class="cont">
                    <section class="sect">
                        <div class="admin-head">
                            <h1 class="name-sect">Пользователи</h1>
                            <p class="add-btn">
                                <button>{{count($users)}} пользователей</button>
                            </p>
                        </div>
                        <table>
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Фамилия</th>
                                    <th>Имя</th>
                                    <th>Отчество</th>
                                    <th>Номер телефона</th>
                                    <th>Действия</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($users as $u)
                                    <tr>
                                        <td>{{$u->id}}</td>
                                        <td>{{$u->surname}}</td>
                                        <td>{{$u->name}}</td>
                                        <td>{{$u->patronymic}}</td>
                                        <td>{{$u->phone}}</td>
                                        <td>
                                            <input type="submit" class="change-btn" style="background: #fbfbfb; color: black; border: 1px solid #f4f6f8;" value="Изменить">
                                            <input type="submit" value="Удалить">
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                        
                    </section>
                </div>
            </main>
            
        </div>
@endsection
