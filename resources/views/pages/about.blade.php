@extends('layout.layout')
@include('includes.sub-menu')
@include('includes.footer')
@section('title', 'О проекте')
<!-- Menu -->
@yield('sub-menu')
<!-- end: Menu -->
@section('about')
    <article id="about" class="section-wrapper clearfix about-1" data-custom-background-img="{{asset('img/bg1.jpg')}}">
        <div class="content-wrapper clearfix">
            <div class="col-sm-10 col-md-9 pull-right">
                <section class="feature-text">
                    <h1 class="main-title"><span class="yellow">[</span>Контент<span class="yellow">]</span> Квартира</h1>
                    <p class="bold">Ваш удаленный отдел исключительных профессионалов</p>
                </section>
                <p><span>Представьте.... Вы сидите на стуле в пустой квартире.</span></p>
                <p>Недавно её купили, кое-где уже даже начали ремонт... Стены без обоев, нет пола, стоит один стул, на котором Вы и сидите. Столько работы...</p>
                <img class="clip-img" src="{{asset('img/empty.png')}}" alt="empty">
                <p>Как же не хочется тратить на неё свое личное время, правда?</p>
                <p>А представьте, что кто-то пришел и сделал все за Вас - договорился с бригадой, выбрал обои, купил и расставил мебель.<br><br>
                    И все это <span>без Вашего участия.</span></p>
                <p>Теперь так возможно и в бизнесе</p>
                <img class="clip-img" src="{{asset('img/do-man.png')}}" alt="empty">
                <p>Скорее всего, сейчас вы сидите в такой своей «квартире». Это интернет-магазин или обучающие курсы, а может, услуги или сервис...<br>
                    Неважно.</p>
                <p><span>У Вас есть продукт – интеллектуальный или физический.</span><br>
                    Он продается. Или даже активно продается.
                    <span>НО...</span>
                </p>
            </div><!-- .col-sm-10 -->
        </div><!-- .content-wrapper -->
    </article><!-- .section-wrapper -->

    <article id="about3" class="section-wrapper clearfix" data-custom-background-img="{{asset('img/bg1.jpg')}}">
        <div class="content-wrapper clearfix">
            <div class="col-sm-10 col-md-9 pull-right">
                <h4>Что делать, чтобы он продавался в 10-ки или даже 100-ни раз больше</h4>
                <p>Если у Вас нет времени на</p>
                <p>
                    <ul class="list">
                    <li>Сбор, тестирование и обучение команды с “прямыми руками”</li>
                    <li>Поиски толкового smm-щика, который будет приводить клиентов из соцсетей</li>
                    <li>Написание статей в блог, чтобы собирать клиентов из поисковиков бесплатно</li>
                    <li>Создание рассылок, чтобы возвращать клиентов и продавать им повторно</li>
                    <li>Решение технических вопросов - от создания посадки до запуска полноценной обучающей платформы или интернет-магазина</li>
                    <li>Настройку рекламы в соцсетях методом “научного тыка”</li>
                    <li>Ошибки в выборе фрилансеров и студий, которые “заваливают” сроки и пропадают со связи</li>
                </ul>
                </p>
                <h5 class="text-center">Снимите Квартиру с уже готовым под Вас ремонтом</h5>
            </div><!-- .col-sm-10 -->
        </div><!-- .content-wrapper -->
    </article><!-- .section-wrapper -->

    <article id="about4" class="section-wrapper clearfix" data-custom-background-img="{{asset('img/bg1.jpg')}}">
        <div class="content-wrapper clearfix">
            <div class="col-sm-10 col-md-9 pull-right">

                <h4>Что Вы получите, передав работу команде Контент Квартиры</h4>
                <!-- grid -->
                <section class="grid row clearfix clearfix-for-2cols">

                    <!-- grid item -->
                    <div class="grid-item col-md-6">
                        <div class="item-content clearfix">
                            <img src="{{asset('img/icon1.png')}}" alt="icon1">
                            <div class="text-content">
                                <p>Готовую команду специалистов.
                                    Вам не придется искать, собеседовать, тестировать и обучать людей, оплачивая их пробы и ошибки</p>
                            </div>
                        </div><!-- end: .item-content -->
                    </div><!-- end: .grid-item -->

                    <!-- grid item -->
                    <div class="grid-item col-md-6">
                        <div class="item-content clearfix">
                            <img src="{{asset('img/icon2.png')}}" alt="icon2">
                            <div class="text-content">
                                <p>Возможность передать все ключевые задачи - создание контента, продвижение, технические задачи, дизайн - одной команде</p>
                            </div>
                        </div><!-- end: .item-content -->
                    </div><!-- end: .grid-item -->

                    <!-- grid item -->
                    <div class="grid-item col-md-6">
                        <div class="item-content clearfix">
                            <img src="{{asset('img/icon4.png')}}" alt="icon4">
                            <div class="text-content">
                                <p>Полное погружение в проект.
                                    Мы изучаем Ваш проект “от и до”, не ограничиваясь лишь своей зоной ответственности</p>
                            </div>
                        </div><!-- end: .item-content -->
                    </div><!-- end: .grid-item -->

                    <!-- grid item -->
                    <div class="grid-item col-md-6">
                        <div class="item-content clearfix">
                            <img src="{{asset('img/icon6.png')}}" alt="icon6">
                            <div class="text-content">
                                <p>Стратегию.
                                    Выстраиваем работу для достижения заданной цели, анализируем результаты и корректируем план действий, а не просто “публикуем посты”</p>
                            </div>
                        </div><!-- end: .item-content -->
                    </div><!-- end: .grid-item -->

                    <!-- grid item -->
                    <div class="grid-item col-md-6">
                        <div class="item-content clearfix">
                            <img src="{{asset('img/icon5.png')}}" alt="icon5">
                            <div class="text-content">
                                <p>Постоянную связь с командой.
                                    Вы всегда можете получить ответы на свои вопросы от проект-менеджера или конкретного специалиста</p>
                            </div>
                        </div><!-- end: .item-content -->
                    </div><!-- end: .grid-item -->

                    <!-- grid item -->
                    <div class="grid-item col-md-6">
                        <div class="item-content clearfix">
                            <img src="{{asset('img/icon3.png')}}" alt="icon3">
                            <div class="text-content">
                                <p>Четкое понимание, как обстоят дела по проекту.
                                    Раз в месяц мы предоставляем подробный отчет по динамике развития проекта, с анализом и планом на следующий месяц</p>
                            </div>
                        </div><!-- end: .item-content -->
                    </div><!-- end: .grid-item -->
                    <h6 class="text-center">Специалистов, которые любят то, что делают<br>
                        И выкладываются на 101% просто потому, что по-другому не умеют и не хотят</h6>
                </section><!-- end: grid -->
            </div><!-- .col-sm-10 -->
        </div><!-- .content-wrapper -->
    </article><!-- .section-wrapper -->

    <article id="about5" class="section-wrapper clearfix" data-custom-background-img="{{asset('img/bg1.jpg')}}">
        <div class="content-wrapper clearfix">
            <div class="col-sm-2 col-md-2 pull-left alina-wrapper">
                <img src="{{asset('img/alina.png')}}" alt="Alina">
            </div>
            <img class="hid-img" src="{{asset('img/alina.png')}}" alt="Alina">
            <div class="col-sm-10 col-md-9 pull-right">
                <h4 class="text-left">Почему Ваша удаленная команда справится со всеми задачами</h4>
                <p class="text-left">Привет! Меня зовут Алина Аксёнова.<br><br>
                    Я контент-маркетолог. Основатель проектов Контент Квартира - удаленный контент-отдел, интегрируемый в бизнес, и Пиши Просто - обучающий проект, где делюсь нашими наработками в области контент-маркетинга</p>
                <p>
                <h6 class="text-left">Что у меня есть на сегодня:</h6>
                <ul class="list">
                    {{--<li>Более 11520 часов практического опыта продающего копирайтинга и контент-маркетинга</li>--}}
                    <li>Сотни реализованных копирайтинг-проектов</li>
                    <li>Десятки успешно внедренных в бизнесы клиентов Контент Квартиры стратегий по работе с контентом</li>
                    <li>Команда из 18 контент-маркетологов</li>
                    <li>Контент-маркетинг проекты для рынков Польши, Германии, Италии</li>
                    {{--<li>Работа с лучшими: GeniusMarketing, Игорь Обуховский, Бегущий Банкир Андрей Онистрат, Роман Шляхов, Ицхак Пинтосевич, Первая мужская конференция в Украине, Группа строительных компаний Delmar, Павел Авдонькин, Vinzer Home, Эдвард Дубинский и другими</li>--}}
                    <li>Вывод компании с информационным продуктом в ТОП-40 компаний Украины по самому активному продвижению в Facebook (наряду с известными автомобильными брендами, брендами одежды и продуктами питания)</li>
                    <li>Автор контент-стратегии, которая приносит продаж на 14.000$ в месяц без вложений”</li>
                </ul>
                </p>

            </div><!-- .col-sm-10 -->
        </div><!-- .content-wrapper -->
    </article><!-- .section-wrapper -->

    <article id="about6" class="section-wrapper clearfix" data-custom-background-img="{{asset('img/bg1.jpg')}}">
        <div class="content-wrapper clearfix">
            <div class="col-sm-11 pull-right">

                <h3 class="section-title">Она лично подобрала и протестировала людей, которые создадут для Вашей
                    компании что-то подобное:</h3>

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
                                <h6>Текст на лендинг Мегатренинга Ицхака Пинтосевича</h6>
                            </div><!-- .caption -->
                        </a><!-- .thumbnail -->

                        <div class="content-to-populate-in-modal" id="modal-content-7">
                            <img data-img-src="{{asset('img/megatraining.png')}}" class="lazy full-width"
                                 alt="Lorem Ipsum">
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
                        <p class="btn-inrow"><a href="{{route('portfolio')}}" class="link-scroll btn btn-yellow btn-outline-inverse btn-lg">Больше
                                кейсов</a></p>
                    </article>
                </section><!-- end: .feature-columns -->

                <!-- End: Section content to edit -->

            </div><!-- .col-sm-10 -->
        </div><!-- .content-wrapper -->
    </article><!-- .section-wrapper -->

    <article id="about7" class="section-wrapper clearfix" data-custom-background-img="{{asset('img/bg4.jpg')}}">
        <div class="content-wrapper clearfix">
            <h4 class="section-title">
                Попробуйте нас в деле<br>
                Закажите детальный контент-аудит Вашего бизнеса и узнайте, из-за чего Вы ежедневно теряете клиентов</h4>

            <div class="contact-details col-sm-5 col-md-3">
            </div>

            <!-- CONTACT FORM -->
            <div class="col-sm-7 col-md-9">
                <!-- IMPORTANT: change the email address at the top of the assets/php/mail.php file to the email address that you want this form to send to -->

                <form class="form-style clearfix form-val" action="{{route('main')}}" method="POST"
                      role="form" name="form_name"> <!-- убрал класс validate-form-->
                {{ csrf_field() }}
                <!-- form left col -->
                    <div class="col-md-6 col-md-offset-2">
                        <div class="form-group">
                            <input type="text" class="text-field form-control required"
                                   data-validation-type="string" id="form-name" placeholder="Ваше имя" name="name"
                                   value="{{old('name')}}">
                        </div>
                    </div><!-- end: form left col -->

                    <!-- form right col -->
                    <div class="col-md-6 col-md-offset-2">

                        <div class="form-group">
                            <input type="email" class="text-field form-control"
                                   data-validation-type="email" id="form-email" placeholder="Ваш email"
                                   name="email" value="{{old('email')}}">
                        </div>
                        <div class="form-group">
                            <img src="{{asset('img/loader-form.GIF')}}" class="form-loader">
                            <button id="sub-btn" type="submit" class="btn btn-yellow btn-sm btn-outline-inverse">Заказать за $10</button>
                        </div>
                        <div class="form-group form-general-error-container"></div>
                    </div><!-- end: form right col -->

                </form>
            </div><!-- end: CONTACT FORM -->

        </div><!-- .content-wrapper -->
    </article><!-- .section-wrapper -->
@stop