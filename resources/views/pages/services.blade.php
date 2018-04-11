@extends('layout.layout')
@include('includes.sub-menu')
@include('includes.footer')
@section('title', 'Услуги')
<!-- Menu -->
@yield('sub-menu')
<!-- end: Menu -->
@section('services')

    <article id="services" class="service-tab section-wrapper clearfix" data-custom-background-img="{{asset('img/bg4.jpg')}}">
        <div class="content-wrapper mid-vertical-positioning clearfix  active" style="position: relative">
            <div class="col-sm-10 col-md-9 pull-right">

                <h1 id="services"  class="section-title">Наши услуги</h1>
                <h6 class="text-left">Как мы можем быть полезны Вашему бизнесу?</h6>

                <div  class="tabpanel styled-tabs uniform-height" role="tabpanel">

                    <!-- Nav tabs -->
                    <ul class="nav nav-tabs" role="tablist" text-hidden-xs="true">
                        <li role="presentation" class="active"><a href="#tabs-tab1" aria-controls="tabs-tab1"
                                                                  role="tab" data-toggle="tab"><i
                                        class="icon fab fa-accusoft"></i><span>Контент</span></a></li>
                        <li role="presentation"><a href="#tabs-tab2" aria-controls="tabs-tab2" role="tab"
                                                   data-toggle="tab"><i
                                        class="icon fas fa-edit"></i><span>Продающий копирайтинг</span></a></li>
                        <li role="presentation"><a href="#tabs-tab3" aria-controls="tabs-tab3" role="tab"
                                                   data-toggle="tab"><i
                                        class="icon fas fa-chart-bar"></i><span>Маркетинг</span></a></li>
                        <li role="presentation"><a href="#tabs-tab4" aria-controls="tabs-tab4" role="tab"
                                                   data-toggle="tab"><i
                                        class="icon fas fa-bullhorn"></i><span>Реклама</span></a></li>
                        <li role="presentation"><a href="#tabs-tab5" aria-controls="tabs-tab4" role="tab"
                                                   data-toggle="tab"><i
                                        class="icon fas fa-laptop"></i><span>Технические услуги</span></a></li>
                        <li role="presentation"><a href="#tabs-tab6" aria-controls="tabs-tab4" role="tab"
                                                   data-toggle="tab"><i
                                        class="icon far fa-object-group"></i><span>Дизайн</span></a></li>
                    </ul>

                    <!-- Tab panes -->
                    <div class="tab-content">

                        <div role="tabpanel" class="tab-pane fade in active" id="tabs-tab1">
                            <h4>Контент</h4>
                            <ul>
                                <li>
                                    <label>
                                        <input name="service[]" type="checkbox" id="num1" value="Ведение блогов (личных и компаний)">
                                        <span class="checkmark"></span>
                                        Ведение блогов (личных и компаний)
                                    </label>
                                </li>
                                <li>
                                    <label>
                                        <input name="service[]" type="checkbox" id="num2" value="Ведение страниц в соцсетях (личных и компаний)">
                                        <span class="checkmark"></span>
                                        Ведение страниц в соцсетях (личных и компаний)
                                    </label>
                                </li>
                                <li>
                                    <label>
                                        <input name="service[]" type="checkbox" id="num3" value="Написание репутационных статей">
                                        <span class="checkmark"></span>
                                        Написание репутационных статей
                                    </label>
                                </li>
                                <li>
                                    <label>
                                        <input name="service[]" type="checkbox" id="num4" value="Внедрение контент-маркетинга в Ваш бизнес “под ключ”">
                                        <span class="checkmark"></span>
                                        Внедрение контент-маркетинга в Ваш бизнес “под ключ”
                                    </label>
                                </li>
                            </ul>
                        </div>

                        <div role="tabpanel" class="tab-pane fade" id="tabs-tab2">
                            <h4>Продающий копирайтинг</h4>
                            <ul>
                                <li>
                                    <label>
                                        <input name="service[]" type="checkbox" id="num5" value="Написание текстов на лендинги, посадочные страницы, страницы лид-магнитов">
                                        <span class="checkmark"></span>
                                        Написание текстов на лендинги, посадочные страницы, страницы лид-магнитов
                                    </label>
                                </li>
                                <li>
                                    <label>
                                        <input name="service[]" type="checkbox" id="num6" value="Написание коммерческих предложений">
                                        <span class="checkmark"></span>
                                        Написание коммерческих предложений
                                    </label>
                                </li>
                                <li>
                                    <label>
                                        <input name="service[]" type="checkbox" id="num7" value="Написание писем в email-рассылки и чат-бот рассылки">
                                        <span class="checkmark"></span>
                                        Написание писем в email-рассылки и чат-бот рассылки
                                    </label>
                                </li>
                                <li>
                                    <label>
                                        <input name="service[]" type="checkbox" id="num8" value="Тексты для корпоративных сайтов и другие копирайтинг-задачи">
                                        <span class="checkmark"></span>
                                        Тексты для корпоративных сайтов и другие копирайтинг-задачи
                                    </label>
                                </li>
                            </ul>
                        </div>

                        <div role="tabpanel" class="tab-pane fade" id="tabs-tab3">
                            <h4>Маркетинг</h4>
                            <ul>
                                <li>
                                    <label>
                                        <input name="service[]" type="checkbox" id="num9" value="Разработка контент-стратегий">
                                        <span class="checkmark"></span>
                                        Разработка контент-стратегий
                                    </label>
                                </li>
                                <li>
                                    <label>
                                        <input name="service[]" type="checkbox" id="num10" value="Разработка стратегий под запуск">
                                        <span class="checkmark"></span>
                                        Разработка стратегий под запуск
                                    </label>
                                </li>
                                <li>
                                    <label>
                                        <input name="service[]" type="checkbox" id="num11" value="Разработка маркетинг-стратегий">
                                        <span class="checkmark"></span>
                                        Разработка маркетинг-стратегий
                                    </label>
                                </li>
                                <li>
                                    <label>
                                        <input name="service[]" type="checkbox" id="num12" value="Разработка воронок писем">
                                        <span class="checkmark"></span>
                                        Разработка воронок писем
                                    </label>
                                </li>
                            </ul>
                        </div>

                        <div role="tabpanel" class="tab-pane fade" id="tabs-tab4">
                            <h4>Реклама</h4>
                            <ul>
                                <li>
                                    <label>
                                        <input name="service[]" type="checkbox" id="num13" value="Сбор участников на онлайн и живые события">
                                        <span class="checkmark"></span>
                                        Сбор участников на онлайн и живые события
                                    </label>
                                </li>
                                <li>
                                    <label>
                                        <input name="service[]" type="checkbox" id="num14" value="Сбор заявок на покупку продуктов">
                                        <span class="checkmark"></span>
                                        Сбор заявок на покупку продуктов
                                    </label>
                                </li>
                                <li>
                                    <label>
                                        <input name="service[]" type="checkbox" id="num15" value="Продвижение сообществ в соцсетях">
                                        <span class="checkmark"></span>
                                        Продвижение сообществ в соцсетях
                                    </label>
                                </li>
                                <li>
                                    <label>
                                        <input name="service[]" type="checkbox" id="num16" value="Комплексное продвижение в соцсетях">
                                        <span class="checkmark"></span>
                                        Комплексное продвижение в соцсетях
                                    </label>
                                </li>
                            </ul>
                        </div>

                        <div role="tabpanel" class="tab-pane fade" id="tabs-tab5">
                            <h4>Технические услуги</h4>
                            <ul>
                                <li>
                                    <label>
                                        <input name="service[]" type="checkbox" id="num17" value="Создание сайтов и блогов">
                                        <span class="checkmark"></span>
                                        Создание сайтов и блогов
                                    </label>
                                </li>
                                <li>
                                    <label>
                                        <input name="service[]" type="checkbox" id="num18" value="Создание лендингов, посадочных страниц “под ключ”">
                                        <span class="checkmark"></span>
                                        Создание лендингов, посадочных страниц “под ключ”
                                    </label>
                                </li>
                                <li>
                                    <label>
                                        <input name="service[]" type="checkbox" id="num19" value="Создание чат-ботов">
                                        <span class="checkmark"></span>
                                        Создание чат-ботов
                                    </label>
                                </li>
                                <li>
                                    <label>
                                        <input name="service[]" type="checkbox" id="num20" value="Реализация технических задач любой сложности">
                                        <span class="checkmark"></span>
                                        Реализация технических задач любой сложности
                                    </label>
                                </li>
                            </ul>
                        </div>

                        <div role="tabpanel" class="tab-pane fade" id="tabs-tab6">
                            <h4>Дизайн</h4>
                            <ul>
                                <li>
                                    <label>
                                        <input name="service[]" type="checkbox" id="num21" value="Дизайн продающих страниц">
                                        <span class="checkmark"></span>
                                        Дизайн продающих страниц
                                    </label>
                                </li>
                                <li>
                                    <label>
                                        <input name="service[]" type="checkbox" id="num22" value="Дизайн корпоративных сайтов и блогов">
                                        <span class="checkmark"></span>
                                        Дизайн корпоративных сайтов и блогов
                                    </label>
                                </li>
                                <li>
                                    <label>
                                        <input name="service[]" type="checkbox" id="num23" value="Оформление коммерческих предложений">
                                        <span class="checkmark"></span>
                                        Оформление коммерческих предложений
                                    </label>
                                </li>
                                <li>
                                    <label>
                                        <input name="service[]" type="checkbox" id="num24" value="Решение других дизайн-задач для Вашего бизнеса">
                                        <span class="checkmark"></span>
                                        Решение других дизайн-задач для Вашего бизнеса
                                    </label>
                                </li>
                            </ul>
                        </div>

                    </div><!-- .tab-content -->
                    <p class="{{--btn-inrow--}}"><a href="javascript.void(0);" class="chart link-scroll btn btn-outline-inverse btn-lg" data-toggle="modal" data-target="#exampleModalCenter">Подробнее</a>
                    </p>
                </div><!-- .tabpanel -->

            </div><!-- .col-sm-10 -->
        </div><!-- .content-wrapper -->
    </article><!-- .section-wrapper -->

    <article id="services" class="section-wrapper clearfix" data-custom-background-img="{{asset('img/bg4.jpg')}}">
        <div class="content-wrapper clearfix">
            <h3 class="section-title">Хотите задать вопрос? Заполните форму и мы ответим Вам в ближайшее время</h3>
            <!-- CONTACT DETAILS -->
            <div class="contact-details col-sm-5 col-md-3">
            </div>
            <!-- END: CONTACT DETAILS -->

            <!-- CONTACT FORM -->
            <div class="col-sm-7 col-md-9">
                <!-- IMPORTANT: change the email address at the top of the assets/php/mail.php file to the email address that you want this form to send to -->

                <form class="form-style clearfix form-val" action="{{route('main')}}" method="POST"
                      role="form" name="form_name"> <!-- убрал класс validate-form-->
                {{ csrf_field() }}
                <!-- form left col -->
                    <div class="col-md-6">
                        <div class="form-group">
                            <input type="text" class="text-field form-control required"
                                   data-validation-type="string" id="form-name" placeholder="Ваше имя" name="name"
                                   value="{{old('name')}}">
                        </div>
                        <div class="form-group">
                            <input type="email" class="text-field form-control"
                                   data-validation-type="email" id="form-email" placeholder="Ваш email"
                                   name="email" value="{{old('email')}}">
                        </div>
                        <div class="form-group">
                            <input type="tel" class="text-field form-control phone"
                                   data-validation-type="phone" id="form-contact-number"
                                   placeholder="Ваш телефон" name="contact_number" value="{{old('contact_number')}}"
                                   data-bv-live="disabled">
                        </div>
                    </div><!-- end: form left col -->

                    <!-- form right col -->
                    <div class="col-md-6">
                        <div class="form-group">
                                <textarea placeholder="Ваше сообщение" class="form-control validate-field"
                                          name="message">{{old('message')}}</textarea>
                        </div>
                        <div class="form-group">
                            <img src="{{asset('img/loader-form.GIF')}}" class="form-loader">
                            <button id="sub-btn" type="submit" class="btn btn-sm btn-outline-inverse">Отправить</button>
                        </div>
                        <div class="form-group form-general-error-container"></div>
                    </div><!-- end: form right col -->

                </form>
            </div><!-- end: CONTACT FORM -->

        </div><!-- .content-wrapper -->
    </article><!-- .section-wrapper -->

@stop