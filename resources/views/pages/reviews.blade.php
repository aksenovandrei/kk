@extends('layout.layout')
@include('includes.menu')
@include('includes.footer')
@section('title', 'Отзывы')
@section('reviews')
    <article id="carousel" class="section-wrapper clearfix" data-custom-background-img="{{asset('img/bg6.jpg')}}">
        <div class="content-wrapper clearfix">

            <div id="features-carousel" class="carousel slide with-title-indicators max-height"
                 data-height-percent="70" data-ride="carousel">
                <h1 class="section-title" style="margin-top: 10%">Отзывы</h1>

                <!-- Indicators - slide navigation -->
                <ol class="carousel-indicators title-indicators">
                    <li data-target="#features-carousel" data-slide-to="0" class="active">Игорь Обуховский</li>
                    <li data-target="#features-carousel" data-slide-to="1">Игорь Обуховский</li>
                    <li data-target="#features-carousel" data-slide-to="2">Игорь Обуховский</li>
                </ol>

                <!-- Wrapper for slides -->
                <div class="carousel-inner">

                    <div class="item active">
                        <div class="carousel-text-content">
                            <img onclick="populate_and_open_modal(event, 'modal-content-3');" src="{{asset('img/Obuhovskiy.jpg')}}" class="icon" alt="Lorem Ipsum">
                            <h2 class="title">Игорь Обуховский</h2>
                            <p>Дорабатывали лендинг и подготовили всю воронку писем от продаж до запуска.</p>
                            <p><a href="#" class="btn btn-outline-inverse btn-sm">Все отзывы</a></p>

                            <div class="content-to-populate-in-modal" id="modal-content-3">
                                <p><img data-img-src="{{asset('img/Obuhovskiy.jpg')}}"
                                        class="lazy rounded_border hover_effect pull-left" alt="Lorem Ipsum">
                                    Цель: через письма максимально вовлечь аудиторию и продать участие в Игре. Сложность задачи - письма должны были быть написаны от лица Игоря, которого уже знают миллионы телезрителей (то есть его потенциальных клиентов), у которого уже сформировано позиционирование и есть своя манера общения, свои фразочки и обороты.</p>
                            </div><!-- #modal-content-3 -->
                        </div>
                    </div><!-- .item -->

                    <div class="item">
                        <div class="carousel-text-content">
                            <img onclick="populate_and_open_modal(event, 'modal-content-3');" src="{{asset('img/Obuhovskiy.jpg')}}" class="icon" alt="Lorem Ipsum">
                            <h2 class="title">Игорь Обуховский</h2>
                            <p>Дорабатывали лендинг и подготовили всю воронку писем от продаж до запуска.</p>
                            <p><a href="#" class="btn btn-outline-inverse btn-sm">Все отзывы</a></p>

                            <div class="content-to-populate-in-modal" id="modal-content-3">
                                <p><img data-img-src="{{asset('img/Obuhovskiy.jpg')}}"
                                        class="lazy rounded_border hover_effect pull-left" alt="Lorem Ipsum">
                                    Цель: через письма максимально вовлечь аудиторию и продать участие в Игре. Сложность задачи - письма должны были быть написаны от лица Игоря, которого уже знают миллионы телезрителей (то есть его потенциальных клиентов), у которого уже сформировано позиционирование и есть своя манера общения, свои фразочки и обороты.</p>
                            </div><!-- #modal-content-3 -->
                        </div>
                    </div><!-- .item -->

                    <div class="item">
                        <div class="carousel-text-content">
                            <img onclick="populate_and_open_modal(event, 'modal-content-3');" src="{{asset('img/Obuhovskiy.jpg')}}" class="icon" alt="Lorem Ipsum">
                            <h2 class="title">Игорь Обуховский</h2>
                            <p>Дорабатывали лендинг и подготовили всю воронку писем от продаж до запуска.</p>
                            <p><a href="#" class="btn btn-outline-inverse btn-sm">Все отзывы</a></p>

                            <div class="content-to-populate-in-modal" id="modal-content-3">
                                <p><img data-img-src="{{asset('img/Obuhovskiy.jpg')}}"
                                        class="lazy rounded_border hover_effect pull-left" alt="Lorem Ipsum">
                                    Цель: через письма максимально вовлечь аудиторию и продать участие в Игре. Сложность задачи - письма должны были быть написаны от лица Игоря, которого уже знают миллионы телезрителей (то есть его потенциальных клиентов), у которого уже сформировано позиционирование и есть своя манера общения, свои фразочки и обороты.</p>
                            </div><!-- #modal-content-3 -->
                        </div>
                    </div><!-- .item -->

                </div><!-- .carousel-inner -->

                <!-- Controls -->
                <a class="left carousel-control" href="#features-carousel" data-slide="prev"></a>
                <a class="right carousel-control" href="#features-carousel" data-slide="next"></a>

            </div><!-- #about-carousel -->

        </div><!-- .content-wrapper -->
    </article><!-- .section-wrapper -->
@stop