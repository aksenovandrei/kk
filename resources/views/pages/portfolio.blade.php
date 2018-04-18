@extends('layout.layout')
@include('includes.sub-menu')
@include('includes.footer')
@section('title', 'Портфолио')
<!-- Menu -->
@yield('sub-menu')
<!-- end: Menu -->
@section('portfolio')
    <article id="grid" class="section-wrapper clearfix" data-custom-background-img="{{asset('img/bg2.jpg')}}">
        <div class="content-wrapper clearfix">
            <div class="col-sm-11 col-md-10 pull-right">

                <h1 class="section-title">Наши кейсы</h1>
                <p>Как мы реализовываем проекты для наших клиентов</p>

                <!-- grid -->
                <section class="grid row clearfix clearfix-for-2cols">

                    <!-- grid item -->
                    <div class="grid-item col-md-6">
                        <div class="item-content clearfix">
                            <div class="text-content">
                                <h5>Ведение блогов</h5>
                            </div>
                        </div><!-- end: .item-content -->
                    </div><!-- end: .grid-item -->

                    <!-- grid item -->
                    <div class="grid-item col-md-6">
                        <div class="item-content clearfix">
                            <div class="text-content">
                                <h5>SMM</h5>
                            </div>
                        </div><!-- end: .item-content -->
                    </div><!-- end: .grid-item -->

                    <!-- grid item -->
                    <div class="grid-item col-md-6">
                        <div class="item-content clearfix">
                            <div class="text-content">
                                <h5>Продающий копирайтинг</h5>
                            </div>
                        </div><!-- end: .item-content -->
                    </div><!-- end: .grid-item -->

                    <!-- grid item -->
                    <div class="grid-item col-md-6">
                        <div class="item-content clearfix">
                            <div class="text-content">
                                <h5>Email-рассылки</h5>
                            </div>
                        </div><!-- end: .item-content -->
                    </div><!-- end: .grid-item -->

                    <!-- grid item -->
                    <div class="grid-item col-md-6">
                        <div class="item-content clearfix">
                            <div class="text-content">
                                <h5>Запуски “под ключ”</h5>
                            </div>
                        </div><!-- end: .item-content -->
                    </div><!-- end: .grid-item -->

                </section><!-- end: grid -->

            </div><!-- .col-sm-11 -->
        </div><!-- .content-wrapper -->
    </article><!-- .section-wrapper -->

    <article id="portfolio" class="section-wrapper clearfix" data-custom-background-img="{{asset('img/bg3.jpg')}}">
        <div class="content-wrapper clearfix">
            <div class="col-sm-11 pull-right">

                <h1 class="section-title">Ведение блогов</h1>

                <!-- feature columns -->
                <section class="feature-columns row clearfix">

                    <!-- feature 1 -->
                    <article class="feature-col col-md-4">
                        <a href="" onclick="populate_and_open_modal(event, 'modal-content-7');"
                           class="thumbnail linked">
                            <div class="image-container">
                                <img data-img-src="{{asset('img/mega-preview.jpg')}}" class="lazy item-thumbnail"
                                     alt="Lorem Ipsum">
                            </div>
                            <div class="caption">
                                <h6>Блог о развитии бизнеса на любимом деле</h6>
                            </div><!-- .caption -->
                        </a><!-- .thumbnail -->

                        <div class="content-to-populate-in-modal" id="modal-content-7">

                        </div><!-- #modal-content-7 -->
                    </article>

                    <!-- feature 2 -->
                    <article class="feature-col col-md-4">
                        <a href="" onclick="populate_and_open_modal(event, 'modal-content-8', '', 'full-size');"
                           class="thumbnail linked">
                            <div class="image-container">
                                <img data-img-src="{{asset('img/kolesnikov-preview.jpg')}}" class="lazy item-thumbnail"
                                     alt="Lorem Ipsum">
                            </div>
                            <div class="caption">
                                <h6>Блог эксперта по Facebook из США</h6>
                            </div><!-- .caption -->
                        </a><!-- .thumbnail -->

                        <div class="content-to-populate-in-modal" id="modal-content-8">
                            <h3>Личный блог эксперта по
                                Фейсбук-продвижению из США
                                Давида Колесникова</h3>
                            <h5>Краткое описание проекта</h5>
                            <p>Давид Колесников – эксперт по продвижению бизнеса в Facebook, интернет-маркетолог,
                                предприниматель из Америки, который только выходит на рынок СНГ и не является узнаваемой
                                для аудитории личностью.</p>
                            <h5>Цели</h5>
                            <p>
                            <ul>
                                <li>Формирование образа эксперта в своей нише (продвижение бизнеса через Facebook);</li>
                                <li>Повышение уровня доверия у аудитории, которая привлекается на события.</li>
                                <li>Активность по имени в сети.</li>
                            </ul>
                            </p>
                            <h5>Инструмент</h5>
                            <p>Блог.</p>
                            <h5>Вложения: точечное продвижение постов.</h5>
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
                                <h6>Блог интернет-магазина одежды ДХМД</h6>
                            </div><!-- .caption -->
                        </a><!-- .thumbnail -->

                        <div class="content-to-populate-in-modal" id="modal-content-9">
                            <h3>Блог для интернет-магазина женской одежды ДХМД</h3>
                            <h5>Краткое описание проекта</h5>
                            <p>ДХМД - интернет-магазин женской одежды премиум-класса, в котором представлены европейские бренды. Аудитория магазина - деловые женщины, возраст 35+, - руководители, бизнес-вумен. Однако в ассортименте представлены и молодежные модели, в связи с чем была задача привлечь и девушек от 20 лет.</p>
                            <h5>Цели</h5>
                            <p>
                            <ul>
                                <li>Выражение экспертного мнения компании для повышения доверия и лояльности клиентов;</li>
                                <li>Закрытие возражений и помощи потенциальным клиентам в качестве дожима тех, кто сомневается в покупке;</li>
                                <li>Привлечение еще одного сегмента аудитории (женщины от 20 лет) на сайт и, как следствие, в магазин.</li>
                            </ul>
                            </p>
                            <h5>Инструмент</h5>
                            <p>По заказу клиента для данного проекта был создан блог в качестве имиджевой составляющей.</p>
                            <h5>Вложения: компания не вкладывается в продвижение.</h5>
                            <p>Сотрудничество завершилось 20.08.2017</p>

                            <div id="unique-id-for-alt-image-slider" class="owl-carousel popup-alt-image-gallery">
                                <div class="item">
                                    <a href="https://dhmd.ru/blog/14-neozhidannyih-obrazov-s-sumkoy-poyasom/"
                                       target="_blank"><img class="lazyOwl"
                                                            data-src="{{asset('img/14-neozhidannyih-obrazov-s-sumkoy-poyasom.jpg')}}">
                                    </a>
                                </div>
                                <div class="item">
                                    <a href="https://dhmd.ru/blog/delovoy-obraz-v-stile-militari-vzryivnaya-elegantnost/"
                                       target="_blank"><img class="lazyOwl"
                                                            data-src="{{asset('img/delovoy-obraz-v-stile-militari-vzryivnaya-elegantnost.jpg')}}"></a>
                                </div>
                                <div class="item">
                                    <a href="https://dhmd.ru/blog/zagadochnaya-istoriya-zhenskogo-trencha/"
                                       target="_blank"><img class="lazyOwl"
                                                            data-src="{{asset('img/zagadochnaya-istoriya-zhenskogo-trencha.jpg')}}"></a>
                                </div>
                                <div class="item">
                                    <a href="https://dhmd.ru/blog/v-moem-vozraste-takoe-ne-nosyat-chto-delat-s-etoy-myislyu/"
                                       target="_blank"><img class="lazyOwl"
                                                            data-src="{{asset('img/v-moem-vozraste-takoe-ne-nosyat-chto-delat-s-etoy-myislyu.jpg')}}"></a>
                                </div>
                                <div class="item">
                                    <a href="https://dhmd.ru/blog/idealnyiy-naryad-dlya-ledi-boss-7-besproigryishnyih-resheniy/"
                                       target="_blank"><img class="lazyOwl"
                                                            data-src="{{asset('img/idealnyiy-naryad-dlya-ledi-boss-7-besproigryishnyih-resheniy.jpg')}}"></a>
                                </div>
                            </div>
                        </div><!-- #modal-content-8 -->
                    </article>
                </section><!-- end: .feature-columns -->

                <!-- End: Section content to edit -->

            </div><!-- .col-sm-10 -->
        </div><!-- .content-wrapper -->
    </article><!-- .section-wrapper -->

    <article id="portfolio" class="section-wrapper clearfix" data-custom-background-img="{{asset('img/bg3.jpg')}}">
        <div class="content-wrapper clearfix">
            <div class="col-sm-11 pull-right">

                <h1 class="section-title">SMM</h1>

                <!-- feature columns -->
                <section class="feature-columns row clearfix">

                    <!-- feature 1 -->
                    <article class="feature-col col-md-4">
                        <a href="http://content-kvartira.com/texts/rotach.html" class="thumbnail linked">
                            <div class="image-container">
                                <img data-img-src="{{asset('img/mega-preview.jpg')}}" class="lazy item-thumbnail"
                                     alt="Lorem Ipsum">
                            </div>
                            <div class="caption">
                                <h6>Паблик ВКонтакте обучающего проекта для отделочного бизнеса</h6>
                            </div><!-- .caption -->
                        </a><!-- .thumbnail -->
                    </article>

                    <!-- feature 2 -->
                    <article class="feature-col col-md-4">
                        <a href="http://content-kvartira.com/texts/gayvan.html" class="thumbnail linked">
                            <div class="image-container">
                                <img data-img-src="{{asset('img/kolesnikov-preview.jpg')}}" class="lazy item-thumbnail"
                                     alt="Lorem Ipsum">
                            </div>
                            <div class="caption">
                                <h6>Страница в Instagram интернет-магазина чая из Германии</h6>
                            </div><!-- .caption -->
                        </a><!-- .thumbnail -->

                        <div class="content-to-populate-in-modal" id="modal-content-9">
                            <h3>Проект “Чай Гайван”</h3>
                            <h5>Описание проекта</h5>
                            <p>Клиент - ТМ, занимающаяся продажей элитных сортов чая в Германии и Англии.</p>
                            <h5>Цели</h5>
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
                            <h5>Инструмент: Instagram</h5>
                            <p>*аккаунт велся на английском языке</p>
                            <h5>Первый этап работы</h5>
                            <p>
                            <ul>
                                <li>Создание контент-плана и внедрение разнообразных рубрик постов вместо однообразных
                                    продающих публикаций;
                                </li>
                                <li>Смена внешнего вида аккаунта.</li>
                            </ul>
                            </p>
                            <div class="block-item">
                                <p>Так аккаунт выглядел до начала работы</p>
                                <img src="{{asset('img/gayvan1.jpg')}}">
                            </div>
                            <div class="block-item">
                                <p>Так - через пару недель после старта</p>
                                <img src="{{asset('img/gayvan2.jpg')}}">
                            </div>
                            <div class="block-item">
                                <p>Мы меняли внешний вид аккаунта <br>в зависимости от сезона</p>
                                <img src="{{asset('img/gayvan3.jpg')}}">
                            </div>
                            <div class="block-item">
                                <p>Наилучшим образом аудитория реагировала именно на фото в таких теплых тонах</p>
                                <img src="{{asset('img/gayvan4.jpg')}}">
                            </div>
                            <h5>Второй этап</h5>
                            <p>
                            <ul>
                                <li>Продвижение. Мы использовали продвижение публикаций на разные группы потенциально
                                    заинтересованной аудитории в Инстаграм.
                                </li>
                                <li>Сложность задачи - продвижение осуществлялось на рынок Англии и Германии. Контент
                                    там воспринимается иначе, нежели на русскоязычном рынке. К примеру, аудиторию сложно
                                    зацепить всевозможными розыгрышами и бесплатностями.
                                </li>
                                <li>днако нам удалось выйти на стоимость уникального клика 0,23-0,63 евро (в 2,5 раза
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
                                <h6>Блог интернет-магазина одежды ДХМД</h6>
                            </div><!-- .caption -->
                        </a><!-- .thumbnail -->

                        <div class="content-to-populate-in-modal" id="modal-content-9">
                            <h3>Блог для интернет-магазина женской одежды ДХМД</h3>
                            <h5>Краткое описание проекта</h5>
                            <p>ДХМД - интернет-магазин женской одежды премиум-класса, в котором представлены европейские бренды. Аудитория магазина - деловые женщины, возраст 35+, - руководители, бизнес-вумен. Однако в ассортименте представлены и молодежные модели, в связи с чем была задача привлечь и девушек от 20 лет.</p>
                            <h5>Цели</h5>
                            <p>
                            <ul>
                                <li>Выражение экспертного мнения компании для повышения доверия и лояльности клиентов;</li>
                                <li>Закрытие возражений и помощи потенциальным клиентам в качестве дожима тех, кто сомневается в покупке;</li>
                                <li>Привлечение еще одного сегмента аудитории (женщины от 20 лет) на сайт и, как следствие, в магазин.</li>
                            </ul>
                            </p>
                            <h5>Инструмент</h5>
                            <p>По заказу клиента для данного проекта был создан блог в качестве имиджевой составляющей.</p>
                            <h5>Вложения: компания не вкладывается в продвижение.</h5>
                            <p>Сотрудничество завершилось 20.08.2017</p>

                            <div id="unique-id-for-alt-image-slider" class="owl-carousel popup-alt-image-gallery">
                                <div class="item">
                                    <a href="https://dhmd.ru/blog/14-neozhidannyih-obrazov-s-sumkoy-poyasom/"
                                       target="_blank"><img class="lazyOwl"
                                                            data-src="{{asset('img/14-neozhidannyih-obrazov-s-sumkoy-poyasom.jpg')}}">
                                    </a>
                                </div>
                                <div class="item">
                                    <a href="https://dhmd.ru/blog/delovoy-obraz-v-stile-militari-vzryivnaya-elegantnost/"
                                       target="_blank"><img class="lazyOwl"
                                                            data-src="{{asset('img/delovoy-obraz-v-stile-militari-vzryivnaya-elegantnost.jpg')}}"></a>
                                </div>
                                <div class="item">
                                    <a href="https://dhmd.ru/blog/zagadochnaya-istoriya-zhenskogo-trencha/"
                                       target="_blank"><img class="lazyOwl"
                                                            data-src="{{asset('img/zagadochnaya-istoriya-zhenskogo-trencha.jpg')}}"></a>
                                </div>
                                <div class="item">
                                    <a href="https://dhmd.ru/blog/v-moem-vozraste-takoe-ne-nosyat-chto-delat-s-etoy-myislyu/"
                                       target="_blank"><img class="lazyOwl"
                                                            data-src="{{asset('img/v-moem-vozraste-takoe-ne-nosyat-chto-delat-s-etoy-myislyu.jpg')}}"></a>
                                </div>
                                <div class="item">
                                    <a href="https://dhmd.ru/blog/idealnyiy-naryad-dlya-ledi-boss-7-besproigryishnyih-resheniy/"
                                       target="_blank"><img class="lazyOwl"
                                                            data-src="{{asset('img/idealnyiy-naryad-dlya-ledi-boss-7-besproigryishnyih-resheniy.jpg')}}"></a>
                                </div>
                            </div>
                        </div><!-- #modal-content-8 -->
                    </article>
                </section><!-- end: .feature-columns -->

                <!-- End: Section content to edit -->

            </div><!-- .col-sm-10 -->
        </div><!-- .content-wrapper -->
    </article><!-- .section-wrapper -->
@stop