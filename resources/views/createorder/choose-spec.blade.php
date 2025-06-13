@extends('theme')
@section('title') Услуги и цены @endsection
@section('style')choose-spec-style.css @endsection
@section('content')
                <section class="menu">
                    <div class="menu-window">
                        <div class="about-company">
                            <h1 class="name-sect">Выбрать специалиста</h1>
                        </div>
                        <div class="nav-menu">
                        @if (!isset($_GET['subcategory_id']))
                        {{-- без параметра --}}
                            @foreach ($stuffs as $spec)
                                @if ($spec!=$stuffs->last())
                                    <a class="menu-item" href="{{route('createbyservice', ['stuff_id' => $spec->id])}}">
                                        <div class="">
                                            <h2>{{$spec->name}} 
                                                {{mb_substr($spec->surname, 0, 1);}}. (
                                                @foreach ($stuffspec as $ss)
                                                    @if($ss->user_id == $spec->id)
                                                        {{$ss->specialization->name }}
                                                    @endif
                                                @endforeach
                                                )
                                                </h2>
                                        </div>
                                        <img src="img/grey-arrow-right.svg" alt="" srcset="">
                                    </a>
                                    <hr class="menu-hr">
                                @else
                                    <a class="menu-item" href="{{route('createbyservice', ['stuff_id' => $spec->id])}}">
                                        <div class="">
                                            <h2>
                                                {{$spec->name}} 
                                                {{mb_substr($spec->surname, 0, 1);}}. 
                                                (
                                                @foreach ($stuffspec as $ss)
                                                    @if($ss->user_id == $spec->id)
                                                        {{$ss->specialization->name}}
                                                    @endif
                                                @endforeach
                                                )
                                            </h2>
                                        </div>
                                        <img src="img/grey-arrow-right.svg" alt="" srcset="">
                                    </a>
                                @endif
                            @endforeach
                        @else
                        {{-- с параметром --}}
                            @foreach ($stuff_ids as $v)
                                @foreach ($stuffs as $s)
                                    @if($s->id == $v)
                                        @if ($s!=$stuffspec->last())
                                            <a class="menu-item" href="{{route('createorder', ['service_id' => $service_id, 'stuff_id' => $s->id])}}">
                                                <div class="">
                                                    <h2>{{$s->name}} {{mb_substr($s->surname, 0, 1);}}. (
                                                        @foreach ($stuffspec as $ss)
                                                            @if($s->id == $ss->user_id)
                                                                {{$ss->specialization->name}}
                                                            @endif
                                                        @endforeach
                                                            
                                                        )</h2>
                                                </div>
                                                <img src="img/grey-arrow-right.svg" alt="" srcset="">
                                            </a>
                                            <hr class="menu-hr">
                                        @else
                                            <a class="menu-item" href="{{route('createorder', ['service_id' => $service_id, 'stuff_id' => $s->id])}}">
                                                <div class="">
                                                    <h2>
                                                        {{$stuffs[$s]->name}} 
                                                        {{mb_substr($stuffs[$s]->surname, 0, 1);}}. (
                                                            @dd($stuffspec)
                                                            @foreach ($stuffspec as $ss)
                                                                @if($ss->user_id == $stuffs[$s]->id)
                                                                    {{$ss->specialization->name}}
                                                                @endif
                                                            @endforeach
                                                            )</h2>
                                                </div>
                                                <img src="img/grey-arrow-right.svg" alt="" srcset="">
                                            </a>
                                        @endif
                                    @endif      
                                @endforeach
                            @endforeach
                        
                        @endif
                        </div>
                </section>
             <script src="js/overflow.js"></script>   
                
@endsection