@extends('theme')
@section('title') Студия красоты А. Бодровой @endsection
@section('style')stuff-style.css @endsection
@section('content')
    <section class="stuff">
        <h1 class="name-sect">Специалисты</h1>
        <div class="stuff-cont">
            @foreach($stuffs as $i => $s)
            <div class="stuff-elem">
                <div class="stuff-number-name ">
                    <h1 class="stuff-number">{{$i+1}}</h1>
                    <div class="stuff-main-inf ">
                        <h1 class="stuff-name">
                            {{$s->surname}} 
                            {{mb_substr($s->name, 0, 1);}}. 
                            {{mb_substr($s->patronymic, 0, 1);}}. 
                        </h1>
                        <p class="exp">Стаж: {{$s->work_exp}} г.</p>
                    </div>
                </div>
                @if (count($s->stuff_specialization) > 1)
                    <p class="role">
                        @foreach ($s->stuff_specialization as $specs)
                        @if ($specs!=$s->stuff_specialization->last())
                            {{$specs->specialization->name}} /
                        @else
                            {{$specs->specialization->name}}
                        @endif
                        @endforeach
                    </p>
                @elseif(count($s->stuff_specialization) == 1)
                    <p class="role">
                        {{$s->stuff_specialization[0]->specialization->name}} 
                        {{--({{$servicetypes[$s->stuff_specialization[0]->specialization->servicetype_id-1]->name)--}}
                    </p>
                @endif
                    <button class="stuff-make-order">Записаться</button>
            </div>
            @endforeach
        </div>
    </section>
@endsection