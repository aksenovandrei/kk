@extends('layout.layout')
@include('icludes.menu')
@include('icludes.footer')
@section('title', 'Услуги')
@section('services')
    <article id="grid" class="section-wrapper clearfix" data-custom-background-img="{{asset('img/bg2.jpg')}}">
        <div class="content-wrapper clearfix">
            <div class="col-sm-11 col-md-10 pull-right">

                <h1 class="section-title">Наши услуги</h1>

                <!-- grid -->
                <section class="grid row clearfix clearfix-for-2cols">

                    <!-- grid item -->
                    <div class="grid-item col-md-6">
                        <div class="item-content clearfix">
                            <div class="text-content">
                                <h5>Контент</h5>
                                <p>Ведение блогов (личных и компаний)<br>
                                    Ведение страниц в соцсетях (личных и компаний)<br>
                                    Написание репутационных статей<br>
                                    Внедрение контент-маркетинга в Ваш бизнес “под ключ”
                                </p>
                            </div>
                        </div><!-- end: .item-content -->
                    </div><!-- end: .grid-item -->

                    <!-- grid item -->
                    <div class="grid-item col-md-6">
                        <div class="item-content clearfix">
                            <div class="text-content">
                                <h5>Продающий копирайтинг</h5>
                                <p>Написание текстов на лендинги, посадочные страницы, страницы лид-магнитов<br>
                                    Написание коммерческих предложений<br>
                                    Написание писем в email-рассылки и чат-бот рассылки<br>
                                    Тексты для корпоративных сайтов и другие копирайтинг-задачи
                                </p>
                            </div>
                        </div><!-- end: .item-content -->
                    </div><!-- end: .grid-item -->

                    <!-- grid item -->
                    <div class="grid-item col-md-6">
                        <div class="item-content clearfix">
                            <div class="text-content">
                                <h5>Маркетинг</h5>
                                <p>Разработка контент-стратегий<br>
                                    Разработка стратегий под запуск<br>
                                    Разработка маркетинг-стратегий<br>
                                    Разработка воронок писем
                                </p>
                            </div>
                        </div><!-- end: .item-content -->
                    </div><!-- end: .grid-item -->

                    <!-- grid item -->
                    <div class="grid-item col-md-6">
                        <div class="item-content clearfix">
                            <div class="text-content">
                                <h5>Реклама</h5>
                                <p>Сбор участников на онлайн и живые события<br>
                                    Сбор заявок на покупку продуктов<br>
                                    Продвижение сообществ в соцсетях<br>
                                    Комплексное продвижение в соцсетях
                                </p>
                            </div>
                        </div><!-- end: .item-content -->
                    </div><!-- end: .grid-item -->

                    <div class="grid-item col-md-6">
                        <div class="item-content clearfix">
                            <div class="text-content">
                                <h5>Технические услуги</h5>
                                <p>Создание сайтов и блогов<br>
                                    Создание лендингов, посадочных страниц “под ключ”<br>
                                    Создание чат-ботов<br>
                                    Реализация технических задач любой сложности
                                </p>
                            </div>
                        </div><!-- end: .item-content -->
                    </div><!-- end: .grid-item -->

                    <div class="grid-item col-md-6">
                        <div class="item-content clearfix">
                            <div class="text-content">
                                <h5>Дизайн</h5>
                                <p>Дизайн продающих страниц<br>
                                    Дизайн корпоративных сайтов и блогов<br>
                                    Оформление коммерческих предложений<br>
                                    Решение других дизайн-задач для Вашего бизнеса

                                </p>
                            </div>
                        </div><!-- end: .item-content -->
                    </div><!-- end: .grid-item -->
                </section><!-- end: grid -->

            </div><!-- .col-sm-11 -->
        </div><!-- .content-wrapper -->
    </article><!-- .section-wrapper -->
@stop