@extends('theme')
@section('title') Админ-панель @endsection
@section('style')admin-services-style.css @endsection

@section('admin')
        <div class="table">
            @include('admin.sidebar')
            <main class="dflex table">
                <div class="cont">
                    <section class="sect">
                        <div class="admin-head">
                            <h1 class="name-sect">Услуги</h1>
                            <a href="/admin/services/create" class="add-btn">
                                <button>Добавить услугу</button>
                            </a>
                        </div>
                        <table>
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Услуга</th>
                                    <th>Длина</th>
                                    <th>Категория</th>
                                    <th>Специализация</th>
                                    <th>Цена</th>
                                    <th>Действия</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($servicetypes as $st)
                                    @foreach ($st->subcategories as $subs)
                                        @foreach ($subs->services as $s)
                                            <tr>
                                                <td>{{$s->id}}</td>
                                                <td>{{$s->subcategory->name}}</td>
                                                <td>
                                                    @if(isset($s->length))
                                                        {{$s->length->name}}
                                                    @endif
                                                </td>
                                                <td>{{$st->name}}</td>
                                                <td>{{$s->specialization->name}}</td>
                                                <td>{{$s->price}}</td>
                                                <td>
                                                    <input type="submit" class="change-btn" style="background: #fbfbfb; color: black; border: 1px solid #f4f6f8;" value="Изменить">
                                                    <input type="submit" value="Удалить">
                                                </td>
                                            </tr>
                                        @endforeach
                                        
                                    @endforeach
                                @endforeach
                                
                            </tbody>
                        </table>
                        
                    </section>
                </div>
            </main>
            
        </div>
        
@endsection
