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
                            <h1 class="name-sect">Сотрудники</h1>
                            <a href="/admin/staff/create" class="add-btn">
                                <button>Добавить сотрудника</button>
                            </a>
                        </div>
                        <table>
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Фамилия</th>
                                    <th>Имя</th>
                                    <th>Отчество</th>
                                    <th>Специализация</th>
                                    <th>Стаж работы</th>
                                    <th>Действия</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($stuffs as $s)
                                    <tr>
                                        <td>{{$s->id}}</td>
                                        <td>{{$s->surname}}</td>
                                        <td>{{$s->name}}</td>
                                        <td>{{$s->patronymic}}</td>
                                        <td>{{$s->stuff_specialization[0]->specialization->name}}</td>
                                        <td>{{$s->work_exp}} года/год/лет</td>
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
