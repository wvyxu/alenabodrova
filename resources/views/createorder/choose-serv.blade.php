@extends('theme')
@section('title') Услуги и цены @endsection
@section('style')choose-serv-style.css @endsection
@section('content')
        <section class="menu">
            <div class="menu-window">
                <div class="about-company">
                    <h1 class="name-sect">Выбрать услугу</h1>
                </div>
                <div class="nav-menu">
                    @if (!isset($_GET['stuff_id']))
                        @foreach($servicetypes as $st)
                            @foreach ($st->subcategories as $subs)
                                @foreach ($subs->servs() as $s)
                                    @if ($s!=$subs->last)
                                        @if (isset($s->length))
                                            <a class="menu-item" href="{{route('createbyspecialist', ['subcategory_id' => $subs->id, 'length_id' => $s->length->id])}}">
                                        @else
                                            <a class="menu-item" href="{{route('createbyspecialist', ['subcategory_id' => $subs->id])}}">
                                        @endif
                                            <h2>{{$s->subcategory->name}}
                                                @if ($s->length)
                                                    {{$s->length->name}}
                                                @endif
                                                ({{$st->name}})</h2>
                                            <img src="img/grey-arrow-right.svg" alt="" srcset="">
                                        </a>
                                        <hr class="menu-hr">
                                    @else
                                        <a class="menu-item" href="{{route('createbyspecialist', ['service_id' => $s->id])}}">
                                            <h2>{{$s->name}} ({{$st->name}})</h2>
                                            <img src="img/grey-arrow-right.svg" class="arrow" alt="" srcset="">
                                        </a>
                                    @endif
                                @endforeach
                            @endforeach
                        @endforeach
                    @else
                        @foreach($servicetypes as $st)
                            @foreach ($st->subcategories as $s)
                                @foreach ($s->services as $p)
                                    {{-- @if ($p->specialization_id == $stuffspec[$_GET['stuff_id']]->specialization_id) --}}
                                    @if ($p->specialization_id == $stuffspec[0]->specialization_id)
                                        @if ($s!=$st->last)
                                            <a class="menu-item" href="{{route('createorder', ['service_id' => $p->id, 'stuff_id' => $_GET['stuff_id']])}}">
                                                <h2>{{$s->name}} 
                                                    @if (isset($p->length))
                                                    {{$p->length->name}} 
                                                    @endif
                                                    ({{$st->name}}) </h2>
                                                <img src="img/grey-arrow-right.svg" alt="" srcset="">
                                            </a>
                                            <hr class="menu-hr">
                                        @else
                                            <a class="menu-item" href="{{route('createorder', ['service_id' => $p->id, 'stuff_id' => $_GET['stuff_id']])}}">
                                                <h2>{{$s->name}} ({{$st->name}})</h2>
                                                <img src="img/grey-arrow-right.svg" class="arrow" alt="" srcset="">
                                            </a>
                                        @endif
                                    @endif
                                
                                @endforeach
                                
                            @endforeach
                        @endforeach





                        {{-- @foreach($servicetypes as $st)
                            @foreach ($st->subcategories as $s)
                                @if($s == $subs)
                                    @foreach ($s->specs() as $p)
                                        @foreach ($s->catserv($p->specialization_id) as $cs)
                                            <p>{{$cs}}</p>
                                        @endforeach
                                    @endforeach
                                @endif
                            @endforeach    
                            
                                @if (!$st->last)
                                    <a class="menu-item" href="/createbyspecialist/{{$s->id}}">
                                        <h2>{{$s->name}} ({{$st->name}})</h2>
                                        <img src="img/grey-arrow-right.svg" alt="" srcset="">
                                    </a>
                                    <hr class="menu-hr">
                                @else
                                    <a class="menu-item" href="/createbyspecialist/{{$s->id}}">
                                        <h2>{{$s->name}} ({{$st->name}})</h2>
                                        <img src="img/grey-arrow-right.svg" class="arrow" alt="" srcset="">
                                    </a>
                                @endif
                        @endforeach --}}
                                    

                    @endif
                    
                    
                </div>

            </div>
        </section>

@endsection