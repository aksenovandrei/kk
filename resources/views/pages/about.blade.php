@extends('layout.layout')
@include('icludes.menu')
@include('icludes.footer')
@section('title', 'О проекте')
@section('about')
    <article id="text" class="section-wrapper clearfix" data-custom-background-img="{{asset('img/bg1.jpg')}}">
        <div class="content-wrapper clearfix">
            <div class="col-sm-10 col-md-9 pull-right">
                <h2 class="section-title">
                    Кто такие проект<br>
                    Контент Квартира</h2>
                <p class="feature-paragraph">
                <ul class="list">
                    <li>Команда из 18 контент-маркетологов, таргетологов, дизайнеров и технических специалистов</li>
                    <li>11520+ часов практического опыта продающего копирайтинга и контент-маркетинга</li>
                    <li>Десятки успешно внедренных в бизнесы клиентов Контент Квартиры стратегий по работе с контентом</li>
                    <li>Проекты для рынков Польши, Германии, Италии</li>
                    <li>Работа с лучшими: GeniusMarketing, Игорь Обуховский, Бегущий Банкир Андрей Онистрат, Роман Шляхов, Ицхак Пинтосевич, Первая мужская конференция в Украине, Группа строительных компаний Delmar, Павел Авдонькин, Vinzer Home, Эдвард Дубинский и другими</li>
                </ul>
                </p>
                <p><a href="#text" class="link-scroll btn btn-outline-inverse btn-lg">Познакомиться</a></p>
            </div><!-- .col-sm-10 -->
        </div><!-- .content-wrapper -->
    </article><!-- .section-wrapper -->
@stop