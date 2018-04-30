@extends('layout.layout')
@include('includes.sub-menu')
@include('includes.footer')
@section('title', 'Портфолио')
<!-- Menu -->
@yield('sub-menu')
<!-- end: Menu -->
@section('portfolio')
    <article id="portfolio" class="section-wrapper clearfix" data-custom-background-img="{{asset('img/bg2.jpg')}}">
        <div class="content-wrapper clearfix">
            <div class="col-sm-11 col-md-10 pull-right">

                <h1 class="section-title">Наши кейсы</h1>
                <p>Как мы реализовываем проекты для наших клиентов</p>

                <h5><a href="#portfolio1" class="link-scroll">Ведение блогов</a></h5>
                <h5><a href="#portfolio2" class="link-scroll">SMM</a></h5>
                <h5><a href="#portfolio3" class="link-scroll">Продающий копирайтинг</a></h5>
                <h5><a href="#portfolio4" class="link-scroll">Email-рассылки</a></h5>
                <h5><a href="#portfolio5" class="link-scroll">Запуски “под ключ”</a></h5>


            </div><!-- .col-sm-11 -->
        </div><!-- .content-wrapper -->
    </article><!-- .section-wrapper -->

    <article id="portfolio1" class="section-wrapper clearfix" data-custom-background-img="{{asset('img/bg3.jpg')}}">
        <div class="content-wrapper clearfix">
            <div class="col-sm-11 pull-right">

                <h1 class="section-title">Ведение блогов</h1>

                <!-- feature columns -->
                <section class="feature-columns row clearfix">

                    <!-- feature 1 -->
                    <article class="feature-col col-md-4">
                        <a href="" onclick="populate_and_open_modal(event, 'modal-content-7', '', 'full-size');"
                           class="thumbnail linked">
                            <div class="image-container">
                                <img data-img-src="{{asset('img/granyts-preview.jpg')}}" class="lazy item-thumbnail"
                                     alt="granyts-preview">
                            </div>
                            <div class="caption">
                                <h6>Блог о развитии бизнеса на любимом деле</h6>
                            </div><!-- .caption -->
                        </a><!-- .thumbnail -->

                        <div class="content-to-populate-in-modal" id="modal-content-7">
                            <h3>Блог проекта “Границ.нет”</h3>
                            <h5>Первый этап</h5>
                            <p>Изначально блог создавался как источник информации о том, как можно зарабатывать на
                                рукоделии и продвигать себя и свои изделия через интернет, для всех, кто хочет перевести
                                hand made из хобби в дело, приносящее прибыль.
                            </p>
                            <p>
                            <ul>
                                <li>Формирование образа авторов проекта как экспертов в своей нише - построении бизнеса
                                    на рукоделии
                                </li>
                                <li>Привлечение и удержание подписчиков (в блоге и соцсетях) и дальнейший перевод их в
                                    потенциальных клиентов и клиентов
                                </li>
                                <li>Создание сообщества творческих людей, заинтересованных в развитии своего бизнеса на
                                    рукоделии
                                </li>
                                <li>Увеличение количества повторных заходов и переходов на сайт - удержание аудитории
                                </li>
                                <li>Повышение лояльности + создание круга постоянных читателей за счет пользы и качества
                                    контента
                                </li>
                            </ul>
                            </p>
                            <p>Мы <span>ориентировались на аудиторию</span>, которая ничего не знает об онлайн-бизнесе
                                либо имеет только поверхностные, минимальные знания, но хочет найти способ продавать
                                свои изделия в интернете.</p>
                            <p>Соответственно, к поставленным целям мы шли посредством публикации простых пошаговых
                                рекомендаций для новичков. Были созданы рубрики “Начнем с нуля”, “Для вдохновения” и
                                пр.</p>
                            <p><span>Примеры первых тем, опубликованных в блоге:</span><br>
                                “Как создать личный бренд и заставить ваше имя работать на вас”<br>
                                “21 надежный способ поймать вдохновение и не отпускать его”<br>
                                “25 мощных слов, которые привлекают читателей в соцсетях”</p>
                            <img src="{{asset('img/granyts-prev1.png')}}">
                            <p>Т.е. то, что:<br>
                                1) формирует картину, как можно продвигать себя и свои изделия в интернете легко,
                                воспользовавшись простыми формулами, не требующими специальных знания и привлечения
                                специалистов; 2) вдохновляет и мотивирует пробовать и получать результаты, т.к.
                                творческим людям нужен “вдохновляющий пинок”, чтобы поверить в свои силы и действовать.
                            </p>
                            <h5>Второй этап</h5>
                            <p>Через 6 месяцев регулярной публикации статей мы вместе с клиентом проанализировали
                                обратную связь, которую давала аудитория. И отметили, что активнее всего на контент
                                реагируют люди, которым в целом интересно развивать бизнес на любимом деле. Не только
                                рукоделии, но и других занятиях (йога, курсы кулинарного мастерства и т.д.).</p>
                            <p>И в основном это была аудитория, которая уже немного интересовалась продвижением через
                                интернет, поэтому нуждалась в более узкой и специализированной информации: фишках,
                                секретах, нюансах.</p>
                            <p>В соответствии с этим были скорректированы цели.</p>
                            <p><span>Цели через 6 месяцев работы над проектом:</span><br>
                                Теперь с помощью контента нужно было сформировать сообщество людей, которые хотят
                                развивать свой бизнес на любимом занятии и продвигать его через интернет.</p>
                            <p>Остальные цели остались без изменений.</p>
                            <p>Для достижения новой цели мы немного изменили позиционирование.</p>
                            <p>Теперь авторы разделили сферы экспертности: 1) продвижение в Фейсбук, чат-боты и
                                мессенджеры; 2) привлечение, удержание, возвращение клиентов. Статьи стали публиковаться
                                от имени одного из авторов, в зависимости от тематики.</p>
                            <p>Сами темы статей стали более узко специализированные, предлагающие решение конкретной
                                задачи. Мы ориентируемся на аудиторию, которая уже “в теме” и ищет более углубленную
                                информацию, а не простые советы для новичков.</p>
                            <p>Примеры тем статей после корректировки целей: “Магия копирайтинга для чат-бота” “Как
                                получать больше от рекламы на Facebook, анализируя конкурентов” “5 важных трендов 2018:
                                что делать бизнесу, чтобы достичь большего”</p>
                            <img src="{{asset('img/granyts-prev2.png')}}">
                            <h5>Динамика показателей</h5>
                            <p>На момент начала работы с блогом, в нем уже было опубликовано 20 статей. Мы написали
                                109.</p>
                            <p>Актуальная статистика просмотров статей в сутки:</p>
                            <img src="{{asset('img/granyts-prev3.png')}}">
                            <p class="text-center">Статья - рекордсмен по просмотрам</p>
                            <img src="{{asset('img/granyts-prev4.png')}}">
                            <p class="text-center">Также эта статья в ТОПе гугл</p>
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
                                <img data-img-src="{{asset('img/dhmd-preview.jpg')}}" class="lazy item-thumbnail"
                                     alt="dhmd-preview">
                            </div>
                            <div class="caption">
                                <h6>Блог интернет-магазина одежды ДХМД</h6>
                            </div><!-- .caption -->
                        </a><!-- .thumbnail -->

                        <div class="content-to-populate-in-modal" id="modal-content-9">
                            <h3>Блог для интернет-магазина женской одежды ДХМД</h3>
                            <h5>Краткое описание проекта</h5>
                            <p>ДХМД - интернет-магазин женской одежды премиум-класса, в котором представлены европейские
                                бренды. Аудитория магазина - деловые женщины, возраст 35+, - руководители, бизнес-вумен.
                                Однако в ассортименте представлены и молодежные модели, в связи с чем была задача
                                привлечь и девушек от 20 лет.</p>
                            <h5>Цели</h5>
                            <p>
                            <ul>
                                <li>Выражение экспертного мнения компании для повышения доверия и лояльности клиентов;
                                </li>
                                <li>Закрытие возражений и помощи потенциальным клиентам в качестве дожима тех, кто
                                    сомневается в покупке;
                                </li>
                                <li>Привлечение еще одного сегмента аудитории (женщины от 20 лет) на сайт и, как
                                    следствие, в магазин.
                                </li>
                            </ul>
                            </p>
                            <h5>Инструмент</h5>
                            <p>По заказу клиента для данного проекта был создан блог в качестве имиджевой
                                составляющей.</p>
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

    <article id="portfolio2" class="section-wrapper clearfix" data-custom-background-img="{{asset('img/bg3.jpg')}}">
        <div class="content-wrapper clearfix">
            <div class="col-sm-11 pull-right">

                <h1 class="section-title">SMM</h1>

                <!-- feature columns -->
                <section class="feature-columns row clearfix">

                    <!-- feature 1 -->
                    <article class="feature-col col-md-4">
                        <a href="" onclick="populate_and_open_modal(event, 'modal-content-10', '', 'full-size');"
                           class="thumbnail linked">
                            <div class="image-container">
                                <img data-img-src="{{asset('img/rotach-preview.jpg')}}" class="lazy item-thumbnail"
                                     alt="rotach-preview">
                            </div>
                            <div class="caption">
                                <h6>Паблик ВКонтакте обучающего проекта для отделочного бизнеса</h6>
                            </div><!-- .caption -->
                        </a><!-- .thumbnail -->
                        <div class="content-to-populate-in-modal" id="modal-content-10">
                            <h3>Проект экспертов по развитию отделочного бизнеса Rotach Training</h3>
                            <h5>Описание проекта</h5>
                            <p>Образовательный проект для владельцев отделочного бизнеса. Специализируется на построении
                                системы бизнеса, работе с сотрудниками, привлечении потенциальных клиентов и дальнейших
                                продажах, увеличении среднего чека и роста прибыли компаний отделочного сегмента в
                                целом.</p>
                            <h5>Цели</h5>
                            <p>
                            <ul>
                                <li>Повысить узнаваемость проекта и его тренеров.</li>
                                <li>Сформировать образ тренеров проекта как экспертов в развитии отделочного бизнеса,
                                    лидеров по обучению в этой нише, которые знают, о чем говорят, имеют много
                                    практического опыта именно в отделочном сегменте, и которым можно доверять.
                                </li>
                                <li>Привлечь и удержать подписчиков с целью дальнейшего перевода их в потенциальных
                                    клиентов и клиентов, сформировать ядро целевой аудитории (ЦА) в соцсетях.
                                </li>
                                <li>Создать в сообществах атмосферу, располагающую аудиторию к активному взаимодействию
                                    с сообществом, общению между собой, то есть сформировать открытую платформу для
                                    владельцев отделочного бизнеса.
                                </li>
                            </ul>
                            </p>
                            <h5>Инструмент: группа ВКонтакте</h5>
                            <p>Результат первых 2-х месяцев работы (май-июнь) без платного продвижения публикаций. Охват
                                вырос более, чем в 2 раза. Обратная связь - почти в 2 раза. За счет регулярности
                                публикаций, их уникальности (на странице много авторской информации и информации,
                                адаптированной под особенности сегмента бизнеса ЦА), полезности для аудитории, а также
                                за счет внедрения активностей в соцсетях. Аудитория страницы открыта к общению, им нужно
                                было только дать для этого повод и возможность. </p>
                            <p>+ Обратная связь, которую клиент получил от аудитории, “увеличилось количество
                                положительных отзывов “Мы вас читаем, спасибо за полезную информацию”.</p>
                            <h5>Инфографика</h5>
                            <img src="{{asset('img/rotach-prev1.png')}}">
                            <p></p>
                            <img src="{{asset('img/rotach-prev2.png')}}">
                        </div>
                    </article>

                    <!-- feature 2 -->
                    <article class="feature-col col-md-4">
                        <a href="" onclick="populate_and_open_modal(event, 'modal-content-11', '', 'full-size');"
                           class="thumbnail linked">
                            <div class="image-container">
                                <img data-img-src="{{asset('img/gayvan-preview.jpg')}}" class="lazy item-thumbnail"
                                     alt="gayvan-preview">
                            </div>
                            <div class="caption">
                                <h6>Страница в Instagram интернет-магазина чая из Германии</h6>
                            </div><!-- .caption -->
                        </a><!-- .thumbnail -->

                        <div class="content-to-populate-in-modal" id="modal-content-11">
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

                        </div><!-- #modal-content-11 -->

                    </article>

                    <!-- feature 3 -->
                    <article class="feature-col col-md-4">
                        <a href="" onclick="populate_and_open_modal(event, 'modal-content-12', '', 'full-size');"
                           class="thumbnail linked">
                            <div class="image-container">
                                <img data-img-src="{{asset('img/shurina-preview.jpg')}}" class="lazy item-thumbnail"
                                     alt="shurina-preview">
                            </div>
                            <div class="caption">
                                <h6>Страница эксперта в нише эзотерики</h6>
                            </div><!-- .caption -->
                        </a><!-- .thumbnail -->

                        <div class="content-to-populate-in-modal" id="modal-content-12">
                            <img data-img-src="{{asset('img/shurina.jpg')}}" class="lazy full-width"
                                 alt="shurina">
                        </div><!-- #modal-content-12 -->
                    </article>
                </section><!-- end: .feature-columns -->

                <!-- End: Section content to edit -->

            </div><!-- .col-sm-10 -->
        </div><!-- .content-wrapper -->
    </article><!-- .section-wrapper -->

    <article id="portfolio3" class="section-wrapper clearfix" data-custom-background-img="{{asset('img/bg3.jpg')}}">
        <div class="content-wrapper clearfix">
            <div class="col-sm-11 pull-right">

                <h1 class="section-title">Сайты, лендинги, коммерческие предложения</h1>

                <!-- feature columns -->
                <section class="feature-columns row clearfix">

                    <!-- feature 1 -->
                    <article class="feature-col col-md-4">
                        <a href="" onclick="populate_and_open_modal(event, 'modal-content-13', '', 'full-size');"
                           class="thumbnail linked">
                            <div class="image-container">
                                <img data-img-src="{{asset('img/landingtext-preview.jpg')}}" class="lazy item-thumbnail"
                                     alt="granyts-preview">
                            </div>
                            <div class="caption">
                                <h6>Тексты для лендингов</h6>
                            </div><!-- .caption -->
                        </a><!-- .thumbnail -->

                        <div class="content-to-populate-in-modal" id="modal-content-13">
                            <h5>Лендинги с нашим текстом</h5>
                            <div id="unique-id-for-alt-image-slider" class="owl-carousel popup-alt-image-gallery">
                                <div class="item">
                                    <a href="http://truemanbox.ru/" target="_blank">
                                        <img class="lazyOwl" data-src="{{asset('img/trueman-preview.jpg')}}">
                                    </a>
                                    <p>Нестандартные подарки для мужчин</p>
                                </div>
                                <div class="item">
                                    <a href="http://pintosevich.com/megatraining/"
                                       target="_blank"><img class="lazyOwl"
                                                            data-src="{{asset('img/mega-preview.jpg')}}"></a>
                                    <p>Мегатренинг Ицхака Пинтосевича 2018</p>
                                </div>
                                <div class="item">
                                    <a href="http://bestgiftformen.ru/ "
                                       target="_blank"><img class="lazyOwl"
                                                            data-src="{{asset('img/gifts-preview.jpg')}}"></a>
                                    <p>Подарочные сертификаты на дегустацию виски</p>
                                </div>
                                <div class="item">
                                    <a href="http://chuprova-tanya.ru/instagram/"
                                       target="_blank"><img class="lazyOwl"
                                                            data-src="{{asset('img/chuprova-preview.jpg')}}"></a>
                                    <p>Курс “Самый красивый Инстаграм”</p>
                                </div>
                                <div class="item">
                                    <a href="http://pg.deks.ua/"
                                       target="_blank"><img class="lazyOwl"
                                                            data-src="{{asset('img/deks-preview.jpg')}}"></a>
                                    <p>Фотопанели из стекла</p>
                                </div>
                            </div>
                        </div><!-- #modal-content-13 -->
                    </article>

                    <!-- feature 2 -->
                    <article class="feature-col col-md-4">
                        <a href="" onclick="populate_and_open_modal(event, 'modal-content-14', '', 'full-size');"
                           class="thumbnail linked">
                            <div class="image-container">
                                <img data-img-src="{{asset('img/leadtext-preview.jpg')}}" class="lazy item-thumbnail"
                                     alt="leadtext-preview">
                            </div>
                            <div class="caption">
                                <h6>Тексты для посадочных страниц и страниц лид-магнитов</h6>
                            </div><!-- .caption -->
                        </a><!-- .thumbnail -->

                        <div class="content-to-populate-in-modal" id="modal-content-14">
                            <div id="unique-id-for-alt-image-slider" class="owl-carousel popup-alt-image-gallery">
                                <div class="item">
                                    <a href="https://valery.fm/antichaos4" target="_blank">
                                        <img class="lazyOwl" data-src="{{asset('img/morozovlead-preview.jpg')}}">
                                    </a>
                                    <p>Анти Хаос в Интернет Продюсировании</p>
                                </div>
                                <div class="item">
                                    <a href="http://www.kosmetologiya-kazan.ru/"
                                       target="_blank"><img class="lazyOwl"
                                                            data-src="{{asset('img/kosmetologiya-preview.jpg')}}"></a>
                                    <p>Косметоллгия Казань</p>
                                </div>
                                <div class="item">
                                    <a href=""
                                       onclick="populate_and_open_modal(event, 'modal-content-15', '', 'full-size');"><img class="lazyOwl"
                                                            data-src="{{asset('img/pishiprosto-preview.jpg')}}"></a>
                                    <p>Контент-спринт от Пиши просто</p>
                                    <div class="content-to-populate-in-modal" id="modal-content-15">
                                        <img data-img-src="{{asset('img/pishiprosto.jpg')}}" class="lazy item-thumbnail"
                                             alt="pishiprosto">
                                    </div>
                                </div>
                            </div>
                        </div><!-- #modal-content-14 -->
                    </article>

                    <!-- feature 3 -->
                    <article class="feature-col col-md-4">
                        <a href="" onclick="populate_and_open_modal(event, 'modal-content-16', '', 'full-size');"
                           class="thumbnail linked">
                            <div class="image-container">
                                <img data-img-src="{{asset('img/kluch-preview.jpg')}}" class="lazy item-thumbnail"
                                     alt="kluch-preview">
                            </div>
                            <div class="caption">
                                <h6>Лендинги и посадочные страницы “под ключ”</h6>
                            </div><!-- .caption -->
                        </a><!-- .thumbnail -->

                        <div class="content-to-populate-in-modal" id="modal-content-16">
                            <div id="unique-id-for-alt-image-slider" class="owl-carousel popup-alt-image-gallery">
                                <div class="item">
                                    <a href="https://valery.fm/morozov_million" target="_blank">
                                        <img class="lazyOwl" data-src="{{asset('img/morozov-preview.jpg')}}">
                                    </a>
                                    <p>Курс “Продюсер-миллионер”</p>
                                </div>
                                <div class="item">
                                    <a href=""
                                       onclick="populate_and_open_modal(event, 'modal-content-17', '', 'full-size');"><img class="lazyOwl"
                                                                                                                           data-src="{{asset('img/sprint-preview.jpg')}}"></a>
                                    <p>Контент-спринт от Пиши просто</p>
                                    <div class="content-to-populate-in-modal" id="modal-content-17">
                                        <img data-img-src="{{asset('img/sprint.jpg')}}" class="lazy item-thumbnail"
                                             alt="pishiprosto">
                                    </div>
                                </div>
                            </div>
                        </div><!-- #modal-content-15 -->
                    </article>
                </section><!-- end: .feature-columns -->
                <section class="feature-columns row clearfix">

                    <!-- feature 4 -->
                    <article class="feature-col col-md-4">
                        <a href="" onclick="populate_and_open_modal(event, 'modal-content-18', '', 'full-size');"
                           class="thumbnail linked">
                            <div class="image-container">
                                <img data-img-src="{{asset('img/korp-preview.jpg')}}" class="lazy item-thumbnail"
                                     alt="korp-preview">
                            </div>
                            <div class="caption">
                                <h6>Тексты на корпоративные сайты</h6>
                            </div><!-- .caption -->
                        </a><!-- .thumbnail -->

                        <div class="content-to-populate-in-modal" id="modal-content-18">
                            <h4>Группа строительных компаний Delmar</h4>
                            <div id="unique-id-for-alt-image-slider" class="owl-carousel popup-alt-image-gallery">
                                <div class="item">
                                    <a href="" onclick="populate_and_open_modal(event, 'modal-content-19', '', 'full-size');">
                                        <img class="lazyOwl" data-src="{{asset('img/delmar1-preview.jpg')}}">
                                    </a>
                                    <div class="content-to-populate-in-modal" id="modal-content-19">
                                        <img data-img-src="{{asset('img/delmar1.jpg')}}" class="lazy item-thumbnail"
                                             alt="delmar1">
                                    </div>
                                </div>
                                <div class="item">
                                    <a href="" onclick="populate_and_open_modal(event, 'modal-content-20', '', 'full-size');">
                                        <img class="lazyOwl" data-src="{{asset('img/delmar2-preview.jpg')}}">
                                    </a>
                                    <div class="content-to-populate-in-modal" id="modal-content-20">
                                        <img data-img-src="{{asset('img/delmar2.jpg')}}" class="lazy item-thumbnail"
                                             alt="delmar2">
                                    </div>
                                </div>
                                <div class="item">
                                    <a href="" onclick="populate_and_open_modal(event, 'modal-content-21', '', 'full-size');">
                                        <img class="lazyOwl" data-src="{{asset('img/delmar3-preview.jpg')}}">
                                    </a>
                                    <div class="content-to-populate-in-modal" id="modal-content-21">
                                        <img data-img-src="{{asset('img/delmar3.jpg')}}" class="lazy item-thumbnail"
                                             alt="delmar3">
                                    </div>
                                </div>
                            </div>
                            <h4>Проект Rotach Training </h4>
                            <div id="unique-id-for-alt-image-slider" class="owl-carousel popup-alt-image-gallery">
                                <div class="item">
                                    <a href="" onclick="populate_and_open_modal(event, 'modal-content-22', '', 'full-size');">
                                        <img class="lazyOwl" data-src="{{asset('img/rotach1-preview.jpg')}}">
                                    </a>
                                    <div class="content-to-populate-in-modal" id="modal-content-22">
                                        <img data-img-src="{{asset('img/rotach1.jpg')}}" class="lazy item-thumbnail"
                                             alt="rotach1">
                                    </div>
                                </div>
                                <div class="item">
                                    <a href="" onclick="populate_and_open_modal(event, 'modal-content-23', '', 'full-size');">
                                        <img class="lazyOwl" data-src="{{asset('img/rotach2-preview.jpg')}}">
                                    </a>
                                    <div class="content-to-populate-in-modal" id="modal-content-23">
                                        <img data-img-src="{{asset('img/rotach2.jpg')}}" class="lazy item-thumbnail"
                                             alt="rotach2">
                                    </div>
                                </div>
                                <div class="item">
                                    <a href="" onclick="populate_and_open_modal(event, 'modal-content-24', '', 'full-size');">
                                        <img class="lazyOwl" data-src="{{asset('img/rotach3-preview.jpg')}}">
                                    </a>
                                    <div class="content-to-populate-in-modal" id="modal-content-24">
                                        <img data-img-src="{{asset('img/rotach3.jpg')}}" class="lazy item-thumbnail"
                                             alt="rotach3">
                                    </div>
                                </div>
                            </div>
                        </div><!-- #modal-content-16 -->
                    </article>

                    <!-- feature 5 -->
                    <article class="feature-col col-md-4">
                        <a href="{{asset('img/Kom_pred.pdf')}}"
                           class="thumbnail linked"
                           target="_blank">
                            <div class="image-container">
                                <img data-img-src="{{asset('img/kompred-preview.jpg')}}" class="lazy item-thumbnail"
                                     alt="kompred">
                            </div>
                            <div class="caption">
                                <h6>Коммерческие предложения</h6>
                            </div><!-- .caption -->
                        </a><!-- .thumbnail -->
                    </article>
                </section><!-- end: .feature-columns -->

                <!-- End: Section content to edit -->

            </div><!-- .col-sm-10 -->
        </div><!-- .content-wrapper -->
    </article><!-- .section-wrapper -->

    <article id="portfolio4" class="section-wrapper clearfix" data-custom-background-img="{{asset('img/bg3.jpg')}}">
        <div class="content-wrapper clearfix">
            <div class="col-sm-11 pull-right">

                <h1 class="section-title">Email-рассылки</h1>

                <!-- feature columns -->
                <section class="feature-columns row clearfix">

                    <!-- feature 1 -->
                    <article class="feature-col col-md-4">
                        <a href="" onclick="populate_and_open_modal(event, 'modal-content-25', '', 'full-size');"
                           class="thumbnail linked">
                            <div class="image-container">
                                <img data-img-src="{{asset('img/zhirkiller-preview.jpg')}}" class="lazy item-thumbnail"
                                     alt="zhirkiller-preview">
                            </div>
                            <div class="caption">
                                <h6>Проект “ЖирКиллер”</h6>
                            </div><!-- .caption -->
                        </a><!-- .thumbnail -->

                        <div class="content-to-populate-in-modal" id="modal-content-25">
                            <h4>Письмо 1 – информация о проекте, особенности</h4>
                            <h6>Тема:  Похудеть и получить за это призы – возможно</h6>
                            <h6>Тема 2: 100 000 грн в обмен на твой лишний вес</h6>
                            <p>Приветствую!<br><br>

                                Давай знакомиться. Я Игорь Обуховский, мастер по утилизации жира и Босс проекта «ЖирКиллер».<br><br>

                                Что такое «ЖирКиллер»? Это первая в Украине онлайн фитнес-игра. А еще, это твой шанс вырваться из диванного плена, привести свое тело в порядок и выиграть крутые призы.<br><br>

                                Да, да, да. Я знаю, что у тебя уже были попытки повоевать ордой пирожков, и знаю, как бесславно эта битва завершилась. Почему же тогда я уверен, что «ЖирКиллер» поможет тебе распрощаться с лишним весом? Есть несколько причин:<br>
                                1. Тебе придется делать. Тут не прокатит «сегодня среда, а я начну со следующего понедельника», «у меня просто генетика такая и кость широкая», «может, в другой раз» и тому подобное. 24/7 за тобой будет следить твой Агент и я лично. И если ты решишь халявить, нам придется попрощаться.<br><br>

                                2. У тебя будет все, чтобы привести себя в порядок. Во 2 сезоне «ЖирКиллера» мы подготовили для тебя закрытый Личный кабинет. Там ты получишь всю необходимую информацию: рационы питания, тренировки, видео с пинками советами. Помимо этого у тебя будет постоянная поддержка твоего Агента, диетолога и психолога. Тебе останется просто выполнять все эти задания и соблюдать рекомендации.<br><br>

                                3. Кстати, об Агентах. На время игры Агент - это твой лучший друг, соратник и помощник. Ежедневно он будет работать с тобой, поддерживать советом и добрым словом, а иногда и вытирать твои слезы (хотя не факт:)). Свои отчеты о выполненных заданиях ты тоже будешь отправлять Агенту. И если протупишь, тут слезы уже не помогут.<br><br>

                                4. А главное, ты уже не сможешь сказать, что тебе не хватает мотивации. Ведь за лучшие результаты я подготовил призы. И думаю, отказаться от них в пользу жира просто глупо.<br><br>

                                В таких условиях единственное, что может тебе помешать, - это лень. Но это же не про тебя, ведь так?<br><br>


                                Считай, что это был первый волшебный пинок:)<br>
                                Не прощаюсь<br>
                                 - Босс проекта Игорь Обуховский
                            </p>
                            <h4>Письмо 2 – правила участия, ответы на часто задаваемые вопросы</h4>
                            <h6>Тема: Давай я отвечу на твои вопросы</h6>
                            <h6>Тема 2: Босс всегда прав и другие правила игры</h6>
                            <p>Привет!<br><br>

                                Ох и засыпали меня письмами с вопросами об игре. Что же, спрашивали - отвечаю.<br><br>

                                <span>1. Сколько будет длиться игра?</span><br>
                                Мы начнем 7 ноября и будем сжигать твои лишние килограммы в течение 5 недель.<br><br>

                                <span>2. Когда я могу оплатить участие в проекте?</span><br>
                                Немного терпения:) Я обязательно тебе сообщу заранее. Так что регулярно проверяй почту.<br><br>

                                <span>3. Как найти время на тренировки?</span><br>
                                Все тренировки разработаны для занятий дома. И каждая из них займет у тебя не более 30-40 минут в день. Уверен, если отбросить отмазки, ты легко найдешь это время в своем расписании.<br><br>

                                <span>4. Есть ли какие-то ограничения для участия?</span><br>
                                Участвовать в игре могут все, кто достиг 18 лет. Но если у тебя есть какие-то проблемы со здоровьем, лучше проконсультируйся у врача о возможности участия в проекте.<br><br>

                                <span>5. Откуда ты будешь знать, как я выполняю задания?</span><br>
                                У меня есть Всевидящее око:) Шутка. Во 2 сезоне ты будешь получать всю информацию через удобный Личный кабинет. Туда же будешь отправлять отчеты о выполнении заданий. Твой Агент и я лично будем проверять их и раздавать волшебные ускоряющие пинки. Но надеюсь, с тобой до этого не дойдет:)<br><br>

                                    <span>6. Я могу вылететь из игры?</span><br>
                                Да, если будешь халявить и халтурить. Этого я не терплю. Так что настройся на серьезную работу.<br><br>

                                И еще, предупреждаю сразу. <span>У нас есть несколько правил:</span><br>
                                1. Босс всегда прав.<br>
                                2. Если Босс не прав, то смотри пункт 1.<br>
                                3. Твой возраст, пол, место проживания, нынешний вес, объемы, физическая подготовка не имеют значения. Важны только твое желание победить лишний вес и готовность что-то делать для этого. Во всем остальном я тебе помогу.<br>
                                4. Если во время игры тебе покажется, что жизнь – боль, ты на правильном пути. Просто продолжай движение.<br><br>

                                На связи,<br>
                                 - Босс проекта Игорь Обуховский<br><br>

                                <span>P.S.</span> В следующем письме я расскажу, что же ждет тебя во время игры. Следи за почтой;)</p>
                            <h4>Письмо 3 – что будет во время игры</h4>
                            <h6>Тема: Пора рассказать, что тебя ждет на самом деле</h6>
                            <p>Приветствую!<br><br>

                                Ты наверняка уже ждешь, когда можно будет оплатить участие во 2 сезоне «ЖирКиллера».<br><br>

                                И хотя время еще не пришло, это не мешает мне уже сейчас немного рассказать, что же тебя ждет после подключения к игре.<br>
                                Итак…<br><br>

                                1. Еще до старта ты получишь доступ к Личному кабинету. Там тебя ждут 4 подготовительных задания (достаточно простых, но ты на это не ведись): изучить правила участия, познакомиться с другими жиркиллерами, рассчитать свою суточную норму калорий (я расскажу, как), а также сделать фото «До» и необходимые замеры.<br><br>

                                2.  В это же время тебе придется мысленно распрощаться с привычными отмазками, прогулами тренировок, пирожками на ночь и прочими вещами, которые и привели тебя в состояние «До».<br><br>

                                3. С 7 ноября начнется жара Игра. И в течение 5 недель ты ежедневно будешь получать в своем Личном кабинете задания. Там будет информация о тренировках и питании, а также видеосоветы. Что-что? В твоей голове уже мелькают “гениальные” мысли, что у тебя получится подзабить на что-то? Смею тебя огорчить. В ответ на задания мы с Агентами ждем от тебя подробные отчеты о их выполнении (да, прямо как твой начальник). И никаких отговорок.<br><br>

                                4. В конце каждой недели ты получаешь задание на вылет. И тут все просто. Либо выполняешь его в течение 2-х дней, либо вылетаешь из игры. Сразу предостерегу тех, кто думает, что можно выполнять задание «на отвали». Если твой результат будет слабее, чем у других участников, ты тоже вылетишь. Так что придется постараться.<br><br>

                                5. Те, кто не будут халявить, успешно доберутся до финала. И смогут побороться за о-о-очень крутые призы!<br><br>

                                Кстати, пункт 2 можешь начать выполнять уже сейчас. И не забывай читать почту.<br><br>

                                На связи,<br>
                                 - Босс проекта Игорь Обуховский
                            </p>

                        </div><!-- #modal-content-13 -->
                    </article>

                    <!-- feature 2 -->
                    <article class="feature-col col-md-4">
                        <a href="" onclick="populate_and_open_modal(event, 'modal-content-26', '', 'full-size');"
                           class="thumbnail linked">
                            <div class="image-container">
                                <img data-img-src="{{asset('img/vinzer-preview.jpg')}}" class="lazy item-thumbnail"
                                     alt="vinzer-preview">
                            </div>
                            <div class="caption">
                                <h6>Проект “Vinzer Home”</h6>
                            </div><!-- .caption -->
                        </a><!-- .thumbnail -->

                        <div class="content-to-populate-in-modal" id="modal-content-26">
                            <h4>Письмо 1 - приветствие и призыв присоединиться в соцсетя</h4>
                            <h6>Тема: [Имя], получите Вашу скидку</h6>
                            <p>[Имя], приветствую!<br>
                                На связи Владислав, руководитель интернет-магазина Vinzer Home.<br><br>

                                Возможно, Вы удивлены, что я пишу Вам такое письмо. Скорее всего, от интернет-магазинов Вы привыкли получать совсем другие сообщения. Я тоже привык. Поэтому в Vinzer Home мне хотелось все сделать иначе.<br><br>

                                Мы создавали этот магазин, чтобы помогать Вам делать Ваш дом уютнее, деталь за деталью окутывать его атмосферой тепла и комфорта. Такое же настроение я хочу сохранить в нашем общении. И буду очень рад, если по Вашей обратной связи пойму, что у меня получилось.<br><br>

                                А пока...<br><br>

                                У нас в Vinzer Home есть одна традиция, которая мне очень нравится. Каждому, кто присоединяется к нам, мы дарим скидку в 100 грн на любой товар. Она сохраняется за Вами в течение 6 месяцев.<br><br>

                                Чтобы ею воспользоваться, Вам достаточно при заказе указать этот email. Скидка будет использована автоматически.
                                <span>Кстати, могу предложить несколько вариантов товаров, которые точно будут Вам интересны:</span>
                                <br>
                                <br>
                                <span>Хотите просмотреть другие варианты? Переходите в Vinzer Home</span>
                                <br>
                                <br>
                                Надеюсь, эта покупка принесет Вам удовольствие и хорошее настроение.<br><br>

                                С пожеланиями тепла и уюта,
                                руководитель интернет-магазина Vinzer Home Владислав<br><br>

                                <span>P.S.</span> В ближайшие дни я пришлю Вам сообщение, где расскажу кое-что очень важное. Так что оставайтесь на связи!<br><br>

                                <span>P.P.S.</span> Вы уже присоединились к нам в соцсетях? Предупреждаю сразу, это НЕ типичные страницы интернет-магазинов. Прежде всего, Вы найдете там массу полезной информации по оформлению интерьера, выбору предметов декора, посуды, текстиля. Присоединяйтесь
                            </p>
                            <h4>Письмо 2 - Акция только для подписчиков на 7 дней</h4>
                            <h6>Тема: Делюсь только с Вами [Подробности внутри]</h6>
                            <p>Приветствую!<br><br>

                                Если Вы внимательно читали мое прошлое сообщение, то помните, что я обещал написать Вам нечто очень важное.<br><br>

                                Время пришло:)<br><br>

                                С этого дня я буду лично сообщать Вам обо всех акциях, скидках и интересных предложениях в Vinzer Home. Причем еще до того, как о них узнают все остальные.<br><br>

                                Почему я принял такое решение? Я хочу дать Вам больше возможностей сделать Ваш дом лучше и уютнее. А еще показать, что для меня очень важно Ваше доверие. Ведь Вы оставили нам свой email-адрес, хотя и не могли знать, как мы будем его использовать.<br><br>

                                И в качестве первой благодарности я дарю Вам вот этот промокод на скидку 10%.<br><br>

                                <span>ПРОМОКОД/ИЗОБРАЖЕНИЕ СЕРТИФИКАТА</span><br><br>

                                В течение 7-ми дней Вы можете использовать его при заказе абсолютно любого товара из интернет-магазина Vinzer Home.<br><br>
                                <span>Можете воспользоваться им прямо сейчас, заказав что-то из наших ТОПовых предложений (качество этих товаров гарантируют мои жена и мама)</span>
                                <br>
                                <br>
                                <span>Ищете что-то другое? Переходите в Vinzer Hom</span>
                                <br>
                                <br>
                                Приятных Вам покупок и теплого настроения,<br>
                                руководитель интернет-магазина Vinzer Home Владислав
                            </p>
                        </div><!-- #modal-content-14 -->
                    </article>

                <!-- End: Section content to edit -->

            </div><!-- .col-sm-10 -->

        </div><!-- .content-wrapper -->
    </article><!-- .section-wrapper -->

    <article id="portfolio5" class="section-wrapper clearfix" data-custom-background-img="{{asset('img/bg3.jpg')}}">
        <div class="content-wrapper clearfix">
            <div class="col-sm-11 pull-right">

                <h1 class="section-title">Запуски “под ключ”</h1>

                <!-- feature columns -->
                <section class="feature-columns row clearfix">

                    <!-- feature 1 -->
                    <article class="feature-col col-md-4">
                        <a href="" onclick="populate_and_open_modal(event, 'modal-content-27', '', 'full-size');"
                           class="thumbnail linked">
                            <div class="image-container">
                                <img data-img-src="{{asset('img/morozov-preview.jpg')}}" class="lazy item-thumbnail"
                                     alt="granyts-preview">
                            </div>
                            <div class="caption">
                                <h6>Курс “Продюсер-миллионер”</h6>
                            </div><!-- .caption -->
                        </a><!-- .thumbnail -->

                        <div class="content-to-populate-in-modal" id="modal-content-27">
                            <div id="unique-id-for-alt-image-slider" class="owl-carousel popup-alt-image-gallery">
                                <div class="item">
                                    <a href="https://valery.fm/morozov_million" target="_blank">
                                        <img class="lazyOwl" data-src="{{asset('morozov-preview.jpg')}}">
                                    </a>
                                    <p>Лендинг</p>
                                </div>
                                <div class="item">
                                    <a href="https://valery.fm/antichaos4" target="_blank">
                                        <img class="lazyOwl" data-src="{{asset('morozovlead-preview.jpg')}}">
                                    </a>
                                    <p>Лид-магнит</p>
                                </div>
                                <div class="item">
                                    <a href="https://valery.fm/antichaos2" target="_blank">
                                        <img class="lazyOwl" data-src="{{asset('morozovoto-preview.jpg')}}">
                                    </a>
                                </div>
                            </div>
                        </div><!-- #modal-content-13 -->
                    </article>

                    <!-- feature 2 -->
                    <article class="feature-col col-md-4">
                        <a href="" onclick="populate_and_open_modal(event, 'modal-content-28', '', 'full-size');"
                           class="thumbnail linked">
                            <div class="image-container">
                                <img data-img-src="{{asset('img/pishiprosto-preview.jpg')}}" class="lazy item-thumbnail"
                                     alt="leadtext-preview">
                            </div>
                            <div class="caption">
                                <h6>Пишипросто</h6>
                            </div><!-- .caption -->
                        </a><!-- .thumbnail -->

                        <div class="content-to-populate-in-modal" id="modal-content-28">
                            <div id="unique-id-for-alt-image-slider" class="owl-carousel popup-alt-image-gallery">
                                <div class="item">
                                    <a href="" onclick="populate_and_open_modal(event, 'modal-content-17', '', 'full-size');">
                                        <img class="lazyOwl" data-src="{{asset('img/sprint-preview.jpg')}}">
                                    </a>
                                    <p>Лендинг</p>
                                </div>
                                <div class="item">
                                    <a href="" onclick="populate_and_open_modal(event, 'modal-content-15', '', 'full-size');">
                                        <img class="lazyOwl" data-src="{{asset('img/pishiprosto-preview.jpg')}}">
                                    </a>
                                    <p>Лид-магнит</p>
                                </div>
                                <div class="item">
                                    <a href="" onclick="populate_and_open_modal(event, 'modal-content-29', '', 'full-size');">
                                        <img class="lazyOwl" data-src="{{asset('img/sprintlessons-preview.jpg')}}">
                                    </a>
                                    <p>Страницы уроков</p>
                                    <div class="content-to-populate-in-modal" id="modal-content-29">
                                        <img data-img-src="{{asset('img/sprintlessons.jpg')}}" class="lazy item-thumbnail"
                                             alt="sprintlessons">
                                    </div>
                                </div>
                            </div>
                        </div><!-- #modal-content-14 -->
                    </article>
                </section><!-- end: .feature-columns -->
                <section class="feature-columns row clearfix">
            </div><!-- .col-sm-10 -->
        </div><!-- .content-wrapper -->
    </article><!-- .section-wrapper -->

    <article id="contact" class="section-wrapper clearfix" data-custom-background-img="{{asset('img/bg4.jpg')}}">
        <div class="content-wrapper clearfix">
            <h1 class="section-title">Хотите задать вопрос? Заполните форму и мы ответим Вам в ближайшее время</h1>

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
                            <button id="sub-btn" type="submit" class="btn btn-sm btn-outline-inverse">Задать вопрос</button>
                        </div>
                        <div class="form-group form-general-error-container"></div>
                    </div><!-- end: form right col -->

                </form>
            </div><!-- end: CONTACT FORM -->

        </div><!-- .content-wrapper -->
    </article><!-- .section-wrapper -->
@stop