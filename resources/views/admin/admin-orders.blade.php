@extends('theme')
@section('title') Админ-панель @endsection
@section('style')admin-orders-style.css @endsection

@section('admin')
        <div class="table">
            @include('admin.sidebar')
            <main class="dflex table">
                <div class="cont">
                    <section class="sect">
                        <div class="admin-head">
                            <h1 class="name-sect">Записи</h1>
                            <a href="/admin/orders/create" class="add-btn">
                                <button>Новая запись</button>
                            </a>
                        </div>
                        <table>
                            <thead>
                                <tr>
                                    <th>Дата</th>
                                    <th>Время</th>
                                    <th>Услуга</th>
                                    <th>Мастер</th> <!--Специализация тут же-->
                                    <th>Клиент</th>
                                    <th>Цена</th>
                                    <th>Действия</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($orders as $o)
                                    <tr>
                                        <td>{{date('d.m.Y', strtotime($o->order_date))}}</td>
                                        <td>{{date('H:i', strtotime($o->order_time))}}</td>
                                        <td class="service-name">
                                            {{$o->service->subcategory->name}}
                                            @if(isset($o->service->length))
                                                {{$o->service->length->name}}
                                            @endif
                                        </td>
                                        <td>
                                            {{$o->stuff_specialization->user->name}}
                                            {{mb_substr($o->stuff_specialization->user->surname, 0, 1);}}.
                                            ({{$o->stuff_specialization->specialization->name}})
                                        </td>
                                        <td>{{$o->user->name}} {{$o->user->phone}}</td>
                                        <td>{{$o->service->price}} </td>
                                        <td>
                                            <input type="submit" class="change-btn" style="background: #fbfbfb; color: black; border: 1px solid #f4f6f8;" value="Изменить">
                                            <input type="submit" value="Удалить">
                                        </td>
                                    </tr>
                                @endforeach




                                {{-- @foreach ($servicetypes as $st)
                                    @foreach ($st->subcategories as $subs)
                                        @foreach ($subs->services as $s)
                                            <tr>
                                                <td>{{$s->id}}</td>
                                                <td>{{$s->subcategory->name}}</td>
                                                <td>{{$st->name}}</td>
                                                <td>{{$s->specialization->name}}</td>
                                                <td>
                                                    @if(isset($s->length))
                                                    {{$s->length->name}}
                                                    @endif
                                                </td>
                                                <td>{{$s->price}}</td>
                                                <td>
                                                    <input type="submit" class="change-btn" style="background: #fbfbfb; color: black; border: 1px solid #f4f6f8;" value="Изменить">
                                                    <input type="submit" value="Удалить">
                                                </td>
                                            </tr>
                                        @endforeach
                                        
                                    @endforeach
                                @endforeach --}}
                                
                            </tbody>
                        </table>
                        
                    </section>
                </div>
            </main>
            
        </div>
        
@endsection
