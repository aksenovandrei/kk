@extends('layout.layout')
@include('includes.sub-menu')
@include('includes.footer')
@section('title', 'Услуги')
<!-- Menu -->
@yield('sub-menu')
<!-- end: Menu -->
@section('services')
    <article id="services" class="section-wrapper clearfix" data-custom-background-img="{{asset('img/bg2.jpg')}}">
        <div class="content-wrapper mid-vertical-positioning clearfix" >
            <div class="col-sm-10 col-md-9 pull-right">

                <h1 id="services"  class="section-title">Наши услуги</h1>
                <h6 class="text-left">Как мы можем быть полезны Вашему бизнесу?</h6>

                <div  class="tabpanel styled-tabs uniform-height" role="tabpanel">

                    <!-- Nav tabs -->
                    <ul class="nav nav-tabs" role="tablist" id="accordion">
                        <li class="card">
                            <a href="javascript:void(0)" class="card-header" id="headingOne">
                                <i class="icon fab fa-accusoft"></i><span class="btn" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                    Контент
                                </span>
                            </a>
                            <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordion">
                                <div class="card-body">
                                    <ul>
                                        <li>Ведение блогов (личных и компаний)</li>
                                        <li>Ведение страниц в соцсетях (личных и компаний)</li>
                                        <li>Написание репутационных статей</li>
                                        <li>Внедрение контент-маркетинга в Ваш бизнес “под ключ”</li>
                                    </ul>
                                </div>
                            </div>
                        </li>

                        <li class="card">
                            <a href="javascript:void(0)" class="card-header" id="headingTwo">
                                    <i class="icon fas fa-edit"></i><span class="btn" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
                                    Продающий копирайтинг
                                </span>
                            </a>
                            <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
                                <div class="card-body">
                                    <ul>
                                        <li>Написание текстов на лендинги, посадочные страницы, страницы лид-магнитов</li>
                                        <li>Написание коммерческих предложений</li>
                                        <li>Написание писем в email-рассылки и чат-бот рассылки</li>
                                        <li>Тексты для корпоративных сайтов и другие копирайтинг-задачи</li>
                                    </ul>
                                </div>
                            </div>
                        </li>

                        <li class="card">
                            <a href="javascript:void(0)" class="card-header" id="headingThree">
                                    <i class="icon fas fa-chart-bar"></i><span class="btn" data-toggle="collapse" data-target="#collapseThree" aria-expanded="true" aria-controls="collapseThree">
                                    Маркетинг
                                </span>
                            </a>
                            <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
                                <div class="card-body">
                                    <ul>
                                        <li>Разработка контент-стратегий</li>
                                        <li>Разработка стратегий под запуск</li>
                                        <li>Разработка маркетинг-стратегий</li>
                                        <li>Разработка воронок писем</li>
                                    </ul>
                                </div>
                            </div>
                        </li>
                    </ul>


                    <ul class="nav nav-tabs" role="tablist" id="accordion">
                        <li class="card">
                            <a href="javascript:void(0)" class="card-header" id="headingFour">
                                <i class="icon fas fa-bullhorn"></i><span class="btn" data-toggle="collapse" data-target="#collapseFour" aria-expanded="true" aria-controls="collapseOne">
                                    Реклама
                                </span>
                            </a>
                            <div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-parent="#accordion">
                                <div class="card-body">
                                    <ul>
                                        <li>Ведение блогов (личных и компаний)</li>
                                        <li>Ведение страниц в соцсетях (личных и компаний)</li>
                                        <li>Написание репутационных статей</li>
                                        <li>Внедрение контент-маркетинга в Ваш бизнес “под ключ”</li>
                                    </ul>
                                </div>
                            </div>
                        </li>

                        <li class="card">
                            <a href="javascript:void(0)" class="card-header" id="headingFive">
                                <i class="icon fas fa-laptop"></i><span class="btn" data-toggle="collapse" data-target="#collapseFive" aria-expanded="true" aria-controls="collapseFive">
                                    Технические услуги
                                </span>
                            </a>
                            <div id="collapseFive" class="collapse" aria-labelledby="headingFive" data-parent="#accordion">
                                <div class="card-body">
                                    <ul>
                                        <li>Написание текстов на лендинги, посадочные страницы, страницы лид-магнитов</li>
                                        <li>Написание коммерческих предложений</li>
                                        <li>Написание писем в email-рассылки и чат-бот рассылки</li>
                                        <li>Тексты для корпоративных сайтов и другие копирайтинг-задачи</li>
                                    </ul>
                                </div>
                            </div>
                        </li>

                        <li class="card">
                            <a href="javascript:void(0)" class="card-header" id="headingSix">
                                <i class="icon far fa-object-group"></i><span class="btn" data-toggle="collapse" data-target="#collapseSix" aria-expanded="true" aria-controls="collapseSix">
                                    Дизайн
                                </span>
                            </a>
                            <div id="collapseSix" class="collapse" aria-labelledby="headingSix" data-parent="#accordion">
                                <div class="card-body">
                                    <ul>
                                        <li>Разработка контент-стратегий</li>
                                        <li>Разработка стратегий под запуск</li>
                                        <li>Разработка маркетинг-стратегий</li>
                                        <li>Разработка воронок писем</li>
                                    </ul>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div><!-- .tabpanel -->

            </div><!-- .col-sm-10 -->
        </div><!-- .content-wrapper -->
    </article><!-- .section-wrapper -->

@stop