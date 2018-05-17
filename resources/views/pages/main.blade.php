@extends('layout.layout')
@section('title', 'Главная')
@include('includes.menu')
@include('includes.footer')
<!-- Menu -->
@yield('menu')
<!-- end: Menu -->
@section('intro')
    <article id="main" class="section-wrapper clearfix" data-custom-background-img="{{asset('img/bg9.jpg')}}">
        <div class="content-wrapper clearfix wow fadeInDown" data-wow-delay="0.3s">
            <div class="col-sm-10 col-md-9 pull-right">

                <section class="feature-text">
                    <h1 class="main-title"><span class="yellow">[</span>Контент<span class="yellow">]</span> <span class="ending">Квартира</span></h1>
                    <p class="bold">Решаем любую задачу присутствия<br>Вашего бизнеса в сети</p>
                    <p class="sub-title">Стратегия. Копирайтинг. SMM. Реклама. Дизайн. Технические задачи любой сложности.
</p><br>
                    <p class="btn-inrow"><a href="{{route('services')}}" class="link-scroll btn btn-outline-inverse btn-yellow btn-lg">Заказать
                            услугу</a></p>
                    <p class="btn-inrow"><a href="#about-title" class="link-scroll btn btn-outline-inverse btn-lg">Узнать
                            больше</a></p>
                </section>

            </div><!-- .col-sm-10 -->
        </div><!-- .content-wrapper -->
    </article><!-- .section-wrapper -->
@stop
@section('about')
    <article id="about" class="section-wrapper clearfix" data-custom-background-img="{{asset('img/bg9.jpg')}}">
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
                <p><a href="{{route('about')}}" class="link-scroll btn btn-yellow btn-outline-inverse btn-lg">Познакомиться</a></p>
            </div><!-- .col-sm-10 -->
        </div><!-- .content-wrapper -->
    </article><!-- .section-wrapper -->
@stop
@section('services')
    <article id="services" class="section-wrapper clearfix" data-custom-background-img="{{asset('img/bg2.jpg')}}">
        <div class="content-wrapper mid-vertical-positioning clearfix" >
            <div class="col-sm-10 col-md-9 pull-right">

                <h2 id="services"  class="section-title">Наши услуги</h2>

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
                        <li role="presentation"><a href="#tabs-tab4" aria-controls="tabs-tab4" role="tab"
                                                   data-toggle="tab"><i
                                        class="icon fas fa-laptop"></i><span>Технические услуги</span></a></li>
                        <li role="presentation"><a href="#tabs-tab4" aria-controls="tabs-tab4" role="tab"
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
                            <p class="btn-inrow"><a href="{{route('services')}}" class="link-scroll btn btn-yellow btn-outline-inverse btn-lg">Подробнее</a>
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
                            <p class="btn-inrow"><a href="{{route('services')}}" class="link-scroll btn btn-yellow btn-outline-inverse btn-lg">Подробнее</a>
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
                            <p class="btn-inrow"><a href="{{route('services')}}" class="link-scroll btn btn-yellow btn-outline-inverse btn-lg">Подробнее</a>
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
                            <p class="btn-inrow"><a href="{{route('services')}}" class="link-scroll btn btn-yellow btn-outline-inverse btn-lg">Подробнее</a>
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
                            <p class="btn-inrow"><a href="{{route('services')}}" class="link-scroll btn btn-yellow btn-outline-inverse btn-lg">Подробнее</a>
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
                            <p class="btn-inrow"><a href="{{route('services')}}" class="link-scroll btn btn-yellow btn-outline-inverse btn-lg">Подробнее</a>
                        </p>
                        </div>
                    </div><!-- .tab-content -->
                </div><!-- .tabpanel -->

            </div><!-- .col-sm-10 -->
        </div><!-- .content-wrapper -->
    </article><!-- .section-wrapper -->
@stop
@section('reviews')
    <article id="reviews" class="section-wrapper clearfix" data-custom-background-img="{{asset('img/bg6.jpg')}}">
        <div class="content-wrapper clearfix">

            <div id="features-carousel" class="carousel slide with-title-indicators max-height"
                 data-height-percent="70" data-ride="carousel">
                <h2 class="section-title">Отзывы</h2>

                <!-- Wrapper for slides -->
                <div class="carousel-inner">

                    <div class="item active">
                        <div class="carousel-text-content">
                            <h4 class="title">Игорь Обуховский</h4>
                            <p>Экс-тренер проекта «Зваженi та щасливi», автор онлайн фитнес-игры «ЖирКиллер»</p>
                            <img src="{{asset('img/Obuhovskiy.jpg')}}" alt="Obuhovskiy">
                            <p class="btn-inrow"><a href="{{route('reviews')}}" class="link-scroll btn btn-yellow btn-outline-inverse btn-lg">Все отзывы</a>
                        </div>
                    </div><!-- .item -->

                    <div class="item">
                        <div class="carousel-text-content">
                            <h4 class="title">Границ.нет</h4>
                            <p>Обучающий проект для тех, кто хочет построить бизнес на любимом деле</p>
                            <img src="{{asset('img/Granyts1.png')}}" alt="Granyts1">
                            <img src="{{asset('img/Granyts2.png')}}" alt="Granyts2">
                            <p class="btn-inrow"><a href="{{route('reviews')}}" class="link-scroll btn btn-yellow btn-outline-inverse btn-lg">Все отзывы</a>
                        </div>
                    </div><!-- .item -->

                    <div class="item">
                        <div class="carousel-text-content">
                            <h4 class="title">Роман Шляхов</h4>
                            <p>интернет-предприниматель, продюсер, миллионер</p>
                            <img src="{{asset('img/Shlyahov.png')}}" alt="Shlyahov">
                            <p class="btn-inrow"><a href="{{route('reviews')}}" class="link-scroll btn btn-yellow btn-outline-inverse btn-lg">Все отзывы</a>
                        </div>
                    </div><!-- .item -->

                    <div class="item">
                        <div class="carousel-text-content">
                            <h4 class="title">Рик Астли</h4>
                            <p>певец, герой мемов</p>
                            <p>Ничего ему не делали, но и он нам, как бы, ничего не платил)))</p>
                            <iframe src="https://www.youtube.com/embed/dQw4w9WgXcQ" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
                            <p class="btn-inrow"><a href="{{route('reviews')}}" class="link-scroll btn btn-yellow btn-outline-inverse btn-lg">Все отзывы</a>
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
@section('portfolio')
    <article id="portfolio" class="section-wrapper clearfix" data-custom-background-img="{{asset('img/bg3.jpg')}}">
        <div class="content-wrapper clearfix">
            <div class="col-sm-11 pull-right">

                <h2 class="section-title">Наши кейсы</h2>

                <!-- feature columns -->
                <section class="feature-columns row clearfix">

                    <!-- feature 1 -->
                    <article class="feature-col col-md-4">
                        <a href="" onclick="populate_and_open_modal(event, 'modal-content-7');"
                           class="thumbnail linked">
                            <div class="image-container">
                                <img data-img-src="{{asset('img/mega-preview.jpg')}}" class="lazy item-thumbnail"
                                     alt="mega-preview">
                            </div>
                            <div class="caption">
                                <h6>Текст на лендинг Мегатренинга Ицхака Пинтосевича</h6>
                            </div><!-- .caption -->
                        </a><!-- .thumbnail -->

                        <div class="content-to-populate-in-modal" id="modal-content-7">
                            <img data-img-src="{{asset('img/megatraining.jpg')}}" class="lazy full-width"
                                 alt="megatraining">
                        </div><!-- #modal-content-7 -->
                    </article>

                    <!-- feature 2 -->
                    <article class="feature-col col-md-4">
                        <a href="" onclick="populate_and_open_modal(event, 'modal-content-8', '', 'full-size');"
                           class="thumbnail linked">
                            <div class="image-container">
                                <img data-img-src="{{asset('img/kolesnikov-preview.jpg')}}" class="lazy item-thumbnail"
                                     alt="kolesnikov-preview">
                            </div>
                            <div class="caption">
                                <h6>Блог эксперта по Facebook из США</h6>
                            </div><!-- .caption -->
                        </a><!-- .thumbnail -->

                        <div class="content-to-populate-in-modal" id="modal-content-8">
                            <h3 class="no-shadow">Личный блог эксперта по
                                Фейсбук-продвижению из США
                                Давида Колесникова</h3>
                            <h5 class="no-shadow">Краткое описание проекта</h5>
                            <p>Давид Колесников – эксперт по продвижению бизнеса в Facebook, интернет-маркетолог,
                                предприниматель из Америки, который только выходит на рынок СНГ и не является узнаваемой
                                для аудитории личностью.</p>
                            <h5 class="no-shadow">Цели</h5>
                            <p>
                            <ul>
                                <li>Формирование образа эксперта в своей нише (продвижение бизнеса через Facebook);</li>
                                <li>Повышение уровня доверия у аудитории, которая привлекается на события.</li>
                                <li>Активность по имени в сети.</li>
                            </ul>
                            </p>
                            <h5 class="no-shadow">Инструмент</h5>
                            <p>Блог.</p>
                            <h5 class="no-shadow">Вложения: точечное продвижение постов.</h5>
                            <p>При минимальных вложениях, за счет качества предоставляемой информации, уже на 3-м месяце
                                ведения блога (на первом запуске) клиент сделал продажи своего авторского онлайн-курса
                                по продвижению в Facebook при стоимости пакета участия от $200.</p>

                            <div id="unique-id-for-alt-image-slider" class="owl-carousel popup-alt-image-gallery">
                                <div class="item">
                                    <a href="https://www.davidkolesnikov.com/blog/6-prostyh-shagov-kak-zanyat-vysokuyu-pozitsiyu-v-poiskovoj-vydache-google/"
                                       target="_blank"><img class="lazyOwl"
                                                            data-src="{{asset('img/kolesnikov-link1.jpg')}}">
                                    </a>
                                </div>
                                <div class="item">
                                    <a href="https://www.davidkolesnikov.com/blog/8-proverennyh-sovetov-po-raskrutke-biznesa-v-instagram-chast-1/"
                                       target="_blank"><img class="lazyOwl"
                                                            data-src="{{asset('img/kolesnikov-link2.jpg')}}"></a>
                                </div>
                                <div class="item">
                                    <a href="https://www.davidkolesnikov.com/blog/kak-sozdavat-ubeditelnyj-kontent-chtoby-rasshiryat-klientskuyu-bazu/"
                                       target="_blank"><img class="lazyOwl"
                                                            data-src="{{asset('img/kolesnikov-link3.jpg')}}"></a>
                                </div>
                                <div class="item">
                                    <a href="https://www.davidkolesnikov.com/blog/zachem-vnedryat-programmu-loyalnosti-klientov/"
                                       target="_blank"><img class="lazyOwl"
                                                            data-src="{{asset('img/kolesnikov-link4.jpg')}}"></a>
                                </div>
                            </div>
                        </div><!-- #modal-content-8 -->
                    </article>

                    <!-- feature 3 -->
                    <article class="feature-col col-md-4">
                        <a href="" onclick="populate_and_open_modal(event, 'modal-content-9', '', 'full-size');"
                           class="thumbnail linked">
                            <div class="image-container">
                                <img data-img-src="{{asset('img/gayvan-preview.jpg')}}" class="lazy item-thumbnail"
                                     alt="Lorem Ipsum">
                            </div>
                            <div class="caption">
                                <h6>Страница в Instagram интернет-магазина чая из Германии</h6>
                            </div><!-- .caption -->
                        </a><!-- .thumbnail -->

                        <div class="content-to-populate-in-modal" id="modal-content-9">
                            <h3 class="no-shadow">Проект “Чай Гайван”</h3>
                            <h5 class="no-shadow">Описание проекта</h5>
                            <p>Клиент - ТМ, занимающаяся продажей элитных сортов чая в Германии и Англии.</p>
                            <h5 class="no-shadow">Цели</h5>
                            <p>
                            <ul>
                                <li>Повысить узнаваемость бренда</li>
                                <li>Собрать аудиторию ценителей чая в одном месте</li>
                                <li>Активность по имени в сети.</li>
                                <li>Сформировать образ места, где истинные ценители чая могут найти напиток
                                    индивидуально под свои вкусы и требования
                                </li>
                                <li>Сформировать образ владельца ТМ как эксперта в чае</li>
                            </ul>
                            </p>
                            <h5 class="no-shadow">Инструмент: Instagram</h5>
                            <p>*аккаунт велся на английском языке</p>
                            <h5 class="no-shadow">Первый этап работы</h5>
                            <p>
                            <ul>
                                <li>Создание контент-плана и внедрение разнообразных рубрик постов вместо однообразных
                                    продающих публикаций;
                                </li>
                                <li>Смена внешнего вида аккаунта.</li>
                            </ul>
                            </p>
                            <div class="block-item">
                                <h6 class="no-shadow">Так аккаунт выглядел до начала работы</h6>
                                <img src="{{asset('img/gayvan1.jpg')}}">
                            </div>
                            <div class="block-item">
                                <h6 class="no-shadow">Так - через пару недель после старта</h6>
                                <img src="{{asset('img/gayvan2.jpg')}}">
                            </div>
                            <div class="block-item">
                                <h6 class="no-shadow">Мы меняли внешний вид аккаунта <br>в зависимости от сезона</h6>
                                <img src="{{asset('img/gayvan3.jpg')}}">
                            </div>
                            <div class="block-item">
                                <h6 class="no-shadow">Наилучшим образом аудитория реагировала именно на фото в таких теплых тонах</h6>
                                <img src="{{asset('img/gayvan4.jpg')}}">
                            </div>
                            <h5 class="no-shadow">Второй этап</h5>
                            <p>
                            <ul>
                                <li>Продвижение. Мы использовали продвижение публикаций на разные группы потенциально
                                    заинтересованной аудитории в Инстаграм.
                                </li>
                                <br>
                                <li>Сложность задачи - продвижение осуществлялось на рынок Англии и Германии. Контент
                                    там воспринимается иначе, нежели на русскоязычном рынке. К примеру, аудиторию сложно
                                    зацепить всевозможными розыгрышами и бесплатностями.
                                </li>
                                <br>
                                <li>Однако нам удалось выйти на стоимость уникального клика 0,23-0,63 евро (в 2,5 раза
                                    дешевле изначальной цены), что для европейского рынка считается отличным
                                    показателем.
                                </li>
                            </ul>
                            </p>
                            <p>Исходя их общей затраченной на продвижение суммы и количества новых подписчиков в месяц,
                                стоимость подписчика выходила 1,2 евро, а через месяц была снижена до 1,1 евро (при
                                среднем показателе цены подписчика по Европе в 2,5-3,5 евро). </p>
                            <p>Кроме того, бонусом удалось увеличить количество переходов в магазин клиента на Амазоне
                                из Инстаграм, хотя такой цели рекламная кампания вообще не преследовала.</p>

                        </div><!-- #modal-content-8 -->
                        <p class="btn-inrow"><a href="{{route('about')}}" class="link-scroll btn btn-yellow btn-outline-inverse btn-lg">Больше
                                кейсов</a></p>
                    </article>
                </section><!-- end: .feature-columns -->

                <!-- End: Section content to edit -->

            </div><!-- .col-sm-10 -->
        </div><!-- .content-wrapper -->
    </article><!-- .section-wrapper -->
@stop
@section('partners')
    <article id="partners" class="section-wrapper clearfix" data-custom-background-img="{{asset('img/bg3.jpg')}}">
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
    </article><!-- .section-wrapper -->
@stop
@section('vacancies')
    <article id="vacancies" class="section-wrapper clearfix" data-custom-background-img="{{asset('img/bg5.jpg')}}">
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
    </article><!-- .section-wrapper -->
@stop
@section('contact')
    <article id="contact" class="section-wrapper clearfix" data-custom-background-img="{{asset('img/bg4.jpg')}}">
        <div class="content-wrapper clearfix">
            <h2 class="section-title">Свяжитесь с нами</h2>
            <!-- CONTACT DETAILS -->
            <div class="contact-details col-sm-5 col-md-5">
                {{--<p>123A,<br/>Molestie Lorem Avenue,<br/>Aliquam<br/>AAA0010</p>--}}
                <p>Tel: +7 (499) 677 24 11 <i class="fas fa-mobile-alt"></i></p>
                <p>Tel: +38 (094) 711 70 66 <i class="fas fa-mobile-alt"></i></p>
                <p><a href="mailto:content.kvartira@gmail.com">content.kvartira@gmail.com</a><i class="far fa-envelope"></i></p>
                <p>Мы в соцсетях
                    <a href="https://www.facebook.com/content.kvartira/" target="_blank" title="Facebook"><img src="{{asset('img/facebook.png')}}" alt="Facebook"></a>
                    <a href="https://vk.com/content_kvartira" target="_blank" title="Vk"><img src="{{asset('img/vk.png')}}" alt="Vk"></a>
                </p>
            </div>
            <!-- END: CONTACT DETAILS -->

            <!-- CONTACT FORM -->
            <div class="col-sm-7 col-md-7 pull-right">
                <!-- IMPORTANT: change the email address at the top of the assets/php/mail.php file to the email address that you want this form to send to -->

                <form class="form-style clearfix form-val" action="{{route('main')}}" method="POST"
                      role="form" name="form_name"> <!-- убрал класс validate-form-->
                {{ csrf_field() }}
                <!-- form left col -->
                    <div class="col-md-10 pull-right">
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
                    <div class="col-md-10 pull-right">
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