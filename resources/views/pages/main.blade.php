@extends('layout.layout')
@section('title', 'Главная')
@include('includes.menu')
@include('includes.footer')
@section('intro')
    <div id="main" class="section-wrapper clearfix section active fp-auto-height-responsive" data-custom-background-img="{{asset('img/bg9.jpg')}}">
        <div class="content-wrapper clearfix">
            <div class="col-sm-10 col-md-9 pull-right">
                <section class="feature-text">
                    <h1 class="main-title"><span class="yellow">[</span>Контент<span class="yellow">]</span> <span
                                class="ending">Квартира</span></h1>
                    <p class="bold">Решаем любую задачу присутствия<br>Вашего бизнеса в сети</p>
                    <p class="sub-title">Стратегия. Копирайтинг. SMM. Реклама. Дизайн. Технические задачи любой
                        сложности.
                    </p><br>
                    <p class="btn-inrow"><a href="{{route('services')}}"
                                            class="link-scroll btn btn-outline-inverse btn-yellow btn-lg">Заказать
                            услугу</a></p>
                    <p class="btn-inrow"><a href="javascript.void(0);" class="link-scroll btn btn-outline-inverse btn-lg">Узнать
                            больше</a></p>
                </section>

            </div><!-- .col-sm-10 -->
        </div><!-- .content-wrapper -->
    </div><!-- .section-wrapper -->
@stop
@section('about')
    <div id="about" class="section-wrapper clearfix section fp-auto-height-responsive" data-custom-background-img="{{asset('img/bg9.jpg')}}"
         data-centered="false">
        <div class="content-wrapper clearfix">
            <div class="col-sm-10 col-md-9 pull-right">
                <h2 class="section-title" id="about-title">Контент Квартира - это:</h2>
                <p class="feature-paragraph">
                <ul class="list">
                    <li>Команда из 18 контент-маркетологов, таргетологов, дизайнеров и технических специалистов</li>
                    <li>11520+ часов практического опыта продающего копирайтинга и контент-маркетинга</li>
                    <li>Десятки успешно внедренных в бизнесы клиентов Контент Квартиры стратегий по работе с контентом
                    </li>
                    <li>Проекты для рынков Польши, Германии, Италии</li>
                    <li>Работа с лучшими: GeniusMarketing, Игорь Обуховский, Бегущий Банкир Андрей Онистрат, Роман
                        Шляхов, Ицхак Пинтосевич, Первая мужская конференция в Украине, Группа строительных компаний
                        Delmar, Павел Авдонькин, Vinzer Home, Эдвард Дубинский и другими
                    </li>
                </ul>
                </p>
                <p><a href="{{route('about')}}" class="link-scroll btn btn-yellow btn-outline-inverse btn-lg">Познакомиться</a>
                </p>
            </div><!-- .col-sm-10 -->
        </div><!-- .content-wrapper -->
    </div><!-- .section-wrapper -->
@stop
@section('services')
    <div id="services" class="section-wrapper clearfix section fp-auto-height-responsive" data-custom-background-img="{{asset('img/bg2.jpg')}}"
    data-centered="false">
        <div class="content-wrapper clearfix">
            <div class="col-sm-10 col-md-9 pull-right">

                <h2 class="section-title">Наши услуги</h2>

                <div class="tabpanel styled-tabs uniform-height" role="tabpanel">

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
                        <li role="presentation"><a href="#tabs-tab5" aria-controls="tabs-tab5" role="tab"
                                                   data-toggle="tab"><i
                                        class="icon fas fa-laptop"></i><span>Технические услуги</span></a></li>
                        <li role="presentation"><a href="#tabs-tab6" aria-controls="tabs-tab6" role="tab"
                                                   data-toggle="tab"><i
                                        class="icon far fa-object-group"></i><span>Дизайн</span></a></li>
                    </ul>

                    <!-- Tab panes -->
                    <div class="tab-content">

                        <div role="tabpanel" class="tab-pane fade in active" id="tabs-tab1">
                            <h4>Контент</h4>
                            <ul>
                                <li>Ведение блогов (личных и компаний)</li>
                                <li>Ведение страниц в соцсетях (личных и компаний)</li>
                                <li>Написание репутационных статей</li>
                                <li>Внедрение контент-маркетинга в Ваш бизнес “под ключ”</li>
                            </ul>
                            <p class="btn-inrow"><a href="{{route('services')}}"
                                                    class="link-scroll btn btn-yellow btn-outline-inverse btn-lg">Подробнее</a>
                            </p>
                        </div>

                        <div role="tabpanel" class="tab-pane fade" id="tabs-tab2">
                            <h4>Продающий копирайтинг</h4>
                            <ul>
                                <li>Написание текстов на лендинги, посадочные страницы, страницы лид-магнитов</li>
                                <li>Написание коммерческих предложений</li>
                                <li>Написание писем в email-рассылки и чат-бот рассылки</li>
                                <li>Тексты для корпоративных сайтов и другие копирайтинг-задачи</li>
                            </ul>
                            <p class="btn-inrow"><a href="{{route('services')}}"
                                                    class="link-scroll btn btn-yellow btn-outline-inverse btn-lg">Подробнее</a>
                            </p>
                        </div>

                        <div role="tabpanel" class="tab-pane fade" id="tabs-tab3">
                            <h4>Маркетинг</h4>
                            <ul>
                                <li>Разработка контент-стратегий</li>
                                <li>Разработка стратегий под запуск</li>
                                <li>Разработка маркетинг-стратегий</li>
                                <li>Разработка воронок писем</li>
                            </ul>
                            <p class="btn-inrow"><a href="{{route('services')}}"
                                                    class="link-scroll btn btn-yellow btn-outline-inverse btn-lg">Подробнее</a>
                            </p>
                        </div>

                        <div role="tabpanel" class="tab-pane fade" id="tabs-tab4">
                            <h4>Реклама</h4>
                            <ul>
                                <li>Сбор участников на онлайн и живые события</li>
                                <li>Сбор заявок на покупку продуктов</li>
                                <li>Продвижение сообществ в соцсетях</li>
                                <li>Комплексное продвижение в соцсетях</li>
                            </ul>
                            <p class="btn-inrow"><a href="{{route('services')}}"
                                                    class="link-scroll btn btn-yellow btn-outline-inverse btn-lg">Подробнее</a>
                            </p>
                        </div>

                        <div role="tabpanel" class="tab-pane fade" id="tabs-tab5">
                            <h4>Технические услуги</h4>
                            <ul>
                                <li>Создание сайтов и блогов</li>
                                <li>Создание лендингов, посадочных страниц “под ключ”</li>
                                <li>Создание чат-ботов</li>
                                <li>Реализация технических задач любой сложности</li>
                            </ul>
                            <p class="btn-inrow"><a href="{{route('services')}}"
                                                    class="link-scroll btn btn-yellow btn-outline-inverse btn-lg">Подробнее</a>
                            </p>
                        </div>

                        <div role="tabpanel" class="tab-pane fade" id="tabs-tab6">
                            <h4>Дизайн</h4>
                            <ul>
                                <li>Дизайн продающих страниц</li>
                                <li>Дизайн корпоративных сайтов и блогов</li>
                                <li>Оформление коммерческих предложений</li>
                                <li>Решение других дизайн-задач для Вашего бизнеса</li>
                            </ul>
                            <p class="btn-inrow"><a href="{{route('services')}}"
                                                    class="link-scroll btn btn-yellow btn-outline-inverse btn-lg">Подробнее</a>
                            </p>
                        </div>
                    </div><!-- .tab-content -->
                </div><!-- .tabpanel -->

            </div><!-- .col-sm-10 -->
        </div><!-- .content-wrapper -->
    </div><!-- .section-wrapper -->
@stop
@section('reviews')
    <div id="reviews" class="section-wrapper clearfix section fp-auto-height-responsive" data-custom-background-img="{{asset('img/bg6.jpg')}}">
        <div class="content-wrapper clearfix">
            <h2 class="section-title slider-title">Отзывы</h2>
            <div class="col-sm-10 col-md-9 pull-right slider">
                <div class="item slide">
                    <h4 class="title">Игорь Обуховский</h4>
                    <p>Экс-тренер проекта «Зваженi та щасливi», автор онлайн фитнес-игры «ЖирКиллер»</p>
                    <img src="{{asset('img/Obuhovskiy-wide.jpg')}}" alt="Obuhovskiy">
                    <p class="btn-inrow"><a href="{{route('reviews')}}"
                                            class="link-scroll btn btn-yellow btn-outline-inverse btn-lg">Все
                            отзывы</a>
                    </p>
                </div>
                <div class="item slide">
                    <h4 class="title">Границ.нет</h4>
                    <p>Обучающий проект для тех, кто хочет построить бизнес на любимом деле</p>
                    <img src="{{asset('img/Granytz-wide.jpg')}}" alt="Granyts-wide">
                    <p class="btn-inrow"><a href="{{route('reviews')}}"
                                            class="link-scroll btn btn-yellow btn-outline-inverse btn-lg">Все
                            отзывы</a>
                    </p>
                </div>
                <div class="item slide">
                    <h4 class="title">Роман Шляхов</h4>
                    <p>интернет-предприниматель, <br>продюсер, миллионер</p>
                    <img src="{{asset('img/Shlyahov-wide.jpg')}}" alt="Shlyahov">
                    <p class="btn-inrow"><a href="{{route('reviews')}}"
                                            class="link-scroll btn btn-yellow btn-outline-inverse btn-lg">Все
                            отзывы</a>
                    </p>
                </div>
                <div class="item slide">
                    <h4 class="title">Рик Астли</h4>
                    <p>певец, герой мемов<br>Ничего ему не делали, но и он нам, как бы, ничего не платил)))</p>
                    <div class="aspect-ratio">
                        <iframe id="rick" src="https://www.youtube.com/embed/dQw4w9WgXcQ" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
                    </div>
                    <p class="btn-inrow"><a href="{{route('reviews')}}"
                                            class="link-scroll btn btn-yellow btn-outline-inverse btn-lg">Все
                            отзывы</a>
                    </p>
                </div>
            </div><!-- .col-sm-10 -->
        </div><!-- .content-wrapper -->
    </div><!-- .section-wrapper -->

@stop
@section('portfolio')
    <div id="portfolio" class="section-wrapper clearfix section fp-auto-height-responsive" data-custom-background-img="{{asset('img/bg3.jpg')}}"
    data-centered="true">
        <div class="content-wrapper clearfix">
            <div class="col-sm-10 pull-right">

                <h2 class="section-title">Наши кейсы</h2>

                <!-- feature columns -->
                <section class="feature-columns row clearfix">

                    <!-- feature 1 -->
                    <article class="feature-col col-md-4">
                        <a href="" data="modal-content-0" class="modal-button thumbnail linked"
                           data-toggle="modal"
                           data-target="#common-modal">
                            <div class="image-container">
                                <img src="{{asset('img/mega-preview.jpg')}}" class="lazy item-thumbnail"
                                     alt="mega-preview">
                            </div>
                            <div class="caption">
                                <h6>Текст на лендинг Мегатренинга Ицхака Пинтосевича</h6>
                            </div><!-- .caption -->
                        </a><!-- .thumbnail -->
                    </article>

                    <!-- feature 2 -->
                    <article class="feature-col col-md-4">
                        <a href="" data="modal-content-1" class="modal-button thumbnail linked"
                           data-toggle="modal"
                           data-target="#common-modal">
                            <div class="image-container">
                                <img src="{{asset('img/kolesnikov-preview.jpg')}}" class="lazy item-thumbnail"
                                     alt="kolesnikov-preview">
                            </div>
                            <div class="caption">
                                <h6>Блог эксперта по Facebook из США</h6>
                            </div><!-- .caption -->
                        </a><!-- .thumbnail -->
                    </article>

                    <!-- feature 3 -->
                    <article class="feature-col col-md-4">
                        <a href="" data="modal-content-2" class="modal-button thumbnail linked"
                           data-toggle="modal"
                           data-target="#common-modal">
                            <div class="image-container">
                                <img src="{{asset('img/gayvan-preview.jpg')}}" class="lazy item-thumbnail"
                                     alt="Lorem Ipsum">
                            </div>
                            <div class="caption">
                                <h6>Страница в Instagram интернет-магазина чая из Германии</h6>
                            </div><!-- .caption -->
                        </a><!-- .thumbnail -->

                        <p class="btn-inrow"><a href="{{route('portfolio')}}"
                                                class="link-scroll btn btn-yellow btn-outline-inverse btn-lg">Больше
                                кейсов</a></p>
                    </article>
                </section><!-- end: .feature-columns -->

                <!-- End: Section content to edit -->

            </div><!-- .col-sm-10 -->
        </div><!-- .content-wrapper -->
    </div><!-- .section-wrapper -->
@stop
{{--@section('partners')
    <div id="partners" class="section-wrapper clearfix section" data-custom-background-img="{{asset('img/bg3.jpg')}}"
         data-anchor="6thPage">
        <div class="content-wrapper clearfix">
            <div class="col-sm-11 pull-right">

                <h2 class="section-title">Наши партнеры</h2>

                <!-- feature columns -->
                <section class="feature-columns row clearfix">

                    <!-- feature 1 -->
                    <article class="feature-col col-md-4">
                        <a href="#"
                           class="thumbnail linked">
                            <div class="image-container">
                                <img data-img-src="{{asset('img/mega-preview.jpg')}}" class="lazy item-thumbnail"
                                     alt="mega-preview">
                            </div>
                            <div class="caption">
                                <h6>Текст на лендинг Мегатренинга Ицхака Пинтосевича</h6>
                            </div><!-- .caption -->
                        </a><!-- .thumbnail -->
                    </article>

                    <!-- feature 2 -->
                    <article class="feature-col col-md-4">
                        <a href="#"
                           class="thumbnail linked">
                            <div class="image-container">
                                <img data-img-src="{{asset('img/kolesnikov-preview.jpg')}}" class="lazy item-thumbnail"
                                     alt="kolesnikov-preview">
                            </div>
                            <div class="caption">
                                <h6>Блог эксперта по Facebook из США</h6>
                            </div><!-- .caption -->
                        </a><!-- .thumbnail -->
                    </article>

                    <!-- feature 3 -->
                    <article class="feature-col col-md-4">
                        <a href="#"
                           class="thumbnail linked">
                            <div class="image-container">
                                <img data-img-src="{{asset('img/gayvan-preview.jpg')}}" class="lazy item-thumbnail"
                                     alt="Lorem Ipsum">
                            </div>
                            <div class="caption">
                                <h6>Страница в Instagram интернет-магазина чая из Германии</h6>
                            </div><!-- .caption -->
                        </a><!-- .thumbnail -->
                    </article>
                </section><!-- end: .feature-columns -->

                <!-- End: Section content to edit -->

            </div><!-- .col-sm-10 -->
        </div><!-- .content-wrapper -->
    </div><!-- .section-wrapper -->
@stop
@section('vacancies')
    <div id="vacancies" class="section-wrapper clearfix section" data-custom-background-img="{{asset('img/bg5.jpg')}}">
        <div class="content-wrapper clearfix">
            <div class="col-sm-12 col-md-12">

                <h2 class="section-title">Ищем в команду</h2>

                <!-- grid -->
                <section class="grid row clearfix clearfix-for-3cols pull-right">

                    <!-- grid item -->
                    <div class="grid-item col-md-4 pull-right">
                        <div class="item-content clearfix">
                            <span class="icon fas fa-book"></span>
                            <div class="text-content">
                                <h5 class="text-center">Копирайтер</h5>
                            </div>
                        </div><!-- end: .item-content -->
                    </div><!-- end: .grid-item -->

                    <!-- grid item -->
                    <div class="grid-item col-md-4 pull-right">
                        <div class="item-content clearfix">
                            <span class="icon fas fa-cube"></span>
                            <div class="text-content">
                                <h5 class="text-center">SMM</h5>
                            </div>
                        </div><!-- end: .item-content -->
                    </div><!-- end: .grid-item -->

                    <!-- grid item -->
                    <div class="grid-item col-md-4 pull-right">
                        <div class="item-content clearfix">
                            <span class="icon fas fa-calendar-alt"></span>
                            <div class="text-content">
                                <h5 class="text-center">Project-менеджер</h5>
                            </div>
                        </div><!-- end: .item-content -->
                    </div><!-- end: .grid-item -->

                    <div class="grid-item col-md-6 pull-right">
                        <div class="item-content clearfix">
                            <div class="text-content">
                                <p class="btn-inrow"><a href="{{route('vacancies')}}" class="link-scroll btn btn-yellow btn-outline-inverse btn-lg">Подробнее</a>
                                </p>
                            </div>
                        </div><!-- end: .item-content -->
                    </div><!-- end: .grid-item -->

                </section><!-- end: grid -->

            </div><!-- .col-sm-11 -->
        </div><!-- .content-wrapper -->
    </div><!-- .section-wrapper -->
@stop--}}
@section('contact')
    <div id="contact" class="section-wrapper clearfix section fp-auto-height-responsive" data-custom-background-img="{{asset('img/bg4.jpg')}}">

        <div class="content-wrapper clearfix">

            <h2 class="section-title">Свяжитесь с нами</h2>
            <div class="col-sm-10 pull-right">


                <div class="contact-details col-sm-5 col-md-5">
                    <p>Tel: +7 (499) 677 24 11 <i class="fas fa-mobile-alt"></i></p>
                    <p>Tel: +38 (094) 711 70 66 <i class="fas fa-mobile-alt"></i></p>
                    <p><a href="mailto:content.kvartira@gmail.com">content.kvartira@gmail.com</a><i
                                class="far fa-envelope"></i></p>
                    <p>Мы в соцсетях
                        <a href="https://www.facebook.com/content.kvartira/" target="_blank" title="Facebook"><img
                                    src="{{asset('img/facebook.png')}}" alt="Facebook"></a>
                        <a href="https://vk.com/content_kvartira" target="_blank" title="Vk"><img
                                    src="{{asset('img/vk.png')}}" alt="Vk"></a>
                    </p>
                </div>

                <div class="col-sm-7 col-md-7 pull-right">
                    <!-- IMPORTANT: change the email address at the top of the assets/php/mail.php file to the email address that you want this form to send to -->
                    <form class="form-style clearfix form-val" action="{{route('main')}}" method="POST"
                          role="form" name="form_name"> <!-- убрал класс validate-form-->
                    {{ csrf_field() }}
                    <!-- form left col -->
                        <div class="col-md-12 pull-right">
                            <div class="form-group">
                                <input type="text" required class="text-field form-control required"
                                       data-validation-type="string" id="form-name" placeholder="Ваше имя" name="name"
                                       value="{{old('name')}}">
                            </div>
                            <div class="form-group">
                                <input type="email" required class="text-field form-control"
                                       data-validation-type="email" id="form-email" placeholder="Ваш email"
                                       name="email" value="{{old('email')}}">
                            </div>
                            <div class="form-group">
                                <input type="tel" required class="text-field form-control phone"
                                       data-validation-type="phone" id="form-contact-number"
                                       placeholder="Ваш телефон" name="contact_number" value="{{old('contact_number')}}"
                                       data-bv-live="disabled">
                            </div>
                        </div><!-- end: form left col -->

                        <!-- form right col -->
                        <div class="col-md-12 pull-right">
                            <div class="form-group">
                                <textarea placeholder="Ваше сообщение" class="form-control validate-field"
                                          name="message">{{old('message')}}</textarea>
                            </div>
                            <div class="form-group">
                                <img src="{{asset('img/loader-form.GIF')}}" class="form-loader">
                                <button id="sub-btn" type="submit" class="btn btn-sm btn-outline-inverse">Отправить
                                </button>
                            </div>
                            <div class="form-group form-general-error-container"></div>
                        </div><!-- end: form right col -->
                    </form>
                </div><!-- end: CONTACT FORM -->

            </div><!-- .col-sm-10 -->
        </div><!-- .content-wrapper -->
    </div><!-- .section-wrapper -->
@stop
