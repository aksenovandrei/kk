@extends('layout.layout')
@include('includes.sub-menu')
@include('includes.footer')
@section('title', 'Услуги')
<!-- Menu -->
@yield('sub-menu')
<!-- end: Menu -->
@section('services')

    <article id="services" class="service-tab section-wrapper clearfix" data-custom-background-img="{{asset('img/bg.jpg')}}">
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

                    <div class="tab-content servs-content">
                        <div role="tabpanel" class="tab-pane fade in active" id="tabs-tab1">
                            <h4>Контент</h4>
                            <p>Внедряемся в Ваш бизнес как готовый контент-отдел<br>
                                Экономим Вам 3+ часа в день<br>
                                Создаем контент люкс-уровня<br>
                                Предлагаем решения, а не ждем их от Вас
                            </p>
                            <ul>
                                <li>
                                    <label>
                                        <input name="service[]" type="checkbox" id="num1" value="Ведение блогов (личных и компаний)">
                                        <span class="checkmark"></span>
                                        Ведение блогов (личных и компаний)
                                    </label>
                                    <div class="arrow-btn"></div>
                                    <p class="description">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Architecto distinctio, ducimus est eum minima porro quos sint velit! Aliquam, assumenda at atque commodi consectetur debitis dignissimos dolore dolores, et illo ipsum iste magni maxime mollitia nam natus necessitatibus nostrum nulla quaerat quibusdam recusandae rem repellendus rerum saepe soluta suscipit vitae!</p>
                                </li>
                                <li>
                                    <label>
                                        <input name="service[]" type="checkbox" id="num2" value="Ведение страниц в соцсетях (личных и компаний)">
                                        <span class="checkmark"></span>
                                        Ведение страниц в соцсетях (личных и компаний)
                                    </label>
                                    <div class="arrow-btn"></div>
                                    <p class="description">Lorem ipsum dolor sit amet, consectetur adipisicing elit. A aliquam aperiam asperiores distinctio excepturi fugiat quia ratione reprehenderit, voluptates! A architecto beatae blanditiis commodi culpa error, excepturi facere fugiat id impedit magnam minus molestias nemo numquam officiis placeat porro quae ratione reprehenderit soluta suscipit tempora tempore temporibus vel vero voluptatem.</p>
                                </li>
                                <li>
                                    <label>
                                        <input name="service[]" type="checkbox" id="num3" value="Написание репутационных статей">
                                        <span class="checkmark"></span>
                                        Написание репутационных статей
                                    </label>
                                    <div class="arrow-btn"></div>
                                    <p class="description">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Architecto dolor earum harum, id, libero maxime nam nesciunt numquam odit porro quia, repellat sed velit. Eaque, fugiat, omnis! Ex ipsa iste possimus saepe. Hic pariatur, provident. Aspernatur incidunt iusto omnis rem repudiandae soluta voluptas? Aliquam commodi dolore nostrum praesentium sed sit?</p>
                                </li>
                                <li>
                                    <label>
                                        <input name="service[]" type="checkbox" id="num4" value="Внедрение контент-маркетинга в Ваш бизнес “под ключ”">
                                        <span class="checkmark"></span>
                                        Внедрение контент-маркетинга в Ваш бизнес “под ключ”
                                    </label>
                                    <div class="arrow-btn"></div>
                                    <p class="description">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Animi aperiam aspernatur, autem debitis dolorum id nemo nesciunt nulla odit quae quia sed sint voluptate. Accusantium ad commodi dolore facilis illo reiciendis sapiente sit, ullam voluptates. Adipisci consequatur deleniti et fugiat iure nam neque optio ratione rerum voluptates! Impedit, necessitatibus, praesentium.</p>
                                </li>
                            </ul>
                        </div>

                        <div role="tabpanel" class="tab-pane fade" id="tabs-tab2">
                            <h4>Продающий копирайтинг</h4>
                            <p>Отдел копирайтеров, пишущих исключительно продающие тексты
                                Знаем основы маркетинга и продаж
                                Проводим глубокий анализ аудитории
                                Пишем просто и “в точку”
                            </p>
                            <ul>
                                <li>
                                    <label>
                                        <input name="service[]" type="checkbox" id="num5" value="Написание текстов на лендинги, посадочные страницы, страницы лид-магнитов">
                                        <span class="checkmark"></span>
                                        Написание текстов на лендинги, посадочные страницы, страницы лид-магнитов
                                    </label>
                                    <div class="arrow-btn"></div>
                                    <p class="description">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam aliquid corporis minima minus quae quibusdam. Commodi dolor incidunt iure nostrum officiis perferendis recusandae sequi voluptates? Animi autem cupiditate deleniti dignissimos, dolore dolorem, eum illo ipsum nemo neque nobis quo, quod reiciendis rem rerum saepe sed similique sint tenetur ullam velit.</p>
                                </li>
                                <li>
                                    <label>
                                        <input name="service[]" type="checkbox" id="num6" value="Написание коммерческих предложений">
                                        <span class="checkmark"></span>
                                        Написание коммерческих предложений
                                    </label>
                                    <div class="arrow-btn"></div>
                                    <p class="description">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam, atque consequuntur cupiditate ex fuga illum inventore laudantium mollitia necessitatibus numquam, optio quae quas rem similique voluptatibus. Asperiores ducimus eum excepturi facere illo ipsa iusto, quibusdam rerum saepe, sint totam velit. Adipisci blanditiis dignissimos ipsum necessitatibus pariatur porro quae quod totam.</p>
                                </li>
                                <li>
                                    <label>
                                        <input name="service[]" type="checkbox" id="num7" value="Написание писем в email-рассылки и чат-бот рассылки">
                                        <span class="checkmark"></span>
                                        Написание писем в email-рассылки и чат-бот рассылки
                                    </label>
                                    <div class="arrow-btn"></div>
                                    <p class="description">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet assumenda consectetur consequatur culpa deserunt dignissimos ducimus ea enim ipsam libero molestias nihil odit officiis perspiciatis placeat quae quam qui quisquam sed soluta temporibus unde ut veniam, vero voluptatem! Consequatur deleniti ducimus eaque nesciunt non perferendis perspiciatis quaerat ratione sapiente voluptate.</p>
                                </li>
                                <li>
                                    <label>
                                        <input name="service[]" type="checkbox" id="num8" value="Тексты для корпоративных сайтов и другие копирайтинг-задачи">
                                        <span class="checkmark"></span>
                                        Тексты для корпоративных сайтов и другие копирайтинг-задачи
                                    </label>
                                    <div class="arrow-btn"></div>
                                    <p class="description">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aperiam architecto asperiores beatae blanditiis, dicta doloremque doloribus ea eius enim error est et expedita facere facilis fugit ipsum iusto laboriosam magni maxime minima nam nemo nobis nostrum numquam possimus quas quasi quod reiciendis rem sequi tempora vel velit veniam voluptatibus voluptatum?</p>
                                </li>
                            </ul>
                        </div>

                        <div role="tabpanel" class="tab-pane fade" id="tabs-tab3">
                            <h4>Маркетинг</h4>
                            <p>Создаем стратегию под Ваш проект
                                Прописываем пошаговый план достижения цели на 3, 6 месяцев и более
                                Готовим контент-планы для реализации стратегии
                                Разрабатываем воронки писем для рассылок
                            </p>
                            <ul>
                                <li>
                                    <label>
                                        <input name="service[]" type="checkbox" id="num9" value="Разработка контент-стратегий">
                                        <span class="checkmark"></span>
                                        Разработка контент-стратегий
                                    </label>
                                    <div class="arrow-btn"></div>
                                </li>
                                <li>
                                    <label>
                                        <input name="service[]" type="checkbox" id="num10" value="Разработка стратегий под запуск">
                                        <span class="checkmark"></span>
                                        Разработка стратегий под запуск
                                    </label>
                                    <div class="arrow-btn"></div>
                                </li>
                                <li>
                                    <label>
                                        <input name="service[]" type="checkbox" id="num11" value="Разработка маркетинг-стратегий">
                                        <span class="checkmark"></span>
                                        Разработка маркетинг-стратегий
                                    </label>
                                    <div class="arrow-btn"></div>
                                </li>
                                <li>
                                    <label>
                                        <input name="service[]" type="checkbox" id="num12" value="Разработка воронок писем">
                                        <span class="checkmark"></span>
                                        Разработка воронок писем
                                    </label>
                                    <div class="arrow-btn"></div>
                                </li>
                            </ul>
                        </div>

                        <div role="tabpanel" class="tab-pane fade" id="tabs-tab4">
                            <h4>Реклама</h4>
                            <p>Предлагаем стратегию запуска кампании
                                Делаем глубокий анализ аудитории
                                Пишем посты и готовим визуальное оформление
                                Проводим тесты и прогнозируем результаты
                            </p>
                            <ul>
                                <li>
                                    <label>
                                        <input name="service[]" type="checkbox" id="num13" value="Сбор участников на онлайн и живые события">
                                        <span class="checkmark"></span>
                                        Сбор участников на онлайн и живые события
                                    </label>
                                    <div class="arrow-btn"></div>
                                </li>
                                <li>
                                    <label>
                                        <input name="service[]" type="checkbox" id="num14" value="Сбор заявок на покупку продуктов">
                                        <span class="checkmark"></span>
                                        Сбор заявок на покупку продуктов
                                    </label>
                                    <div class="arrow-btn"></div>
                                </li>
                                <li>
                                    <label>
                                        <input name="service[]" type="checkbox" id="num15" value="Продвижение сообществ в соцсетях">
                                        <span class="checkmark"></span>
                                        Продвижение сообществ в соцсетях
                                    </label>
                                    <div class="arrow-btn"></div>
                                </li>
                                <li>
                                    <label>
                                        <input name="service[]" type="checkbox" id="num16" value="Комплексное продвижение в соцсетях">
                                        <span class="checkmark"></span>
                                        Комплексное продвижение в соцсетях
                                    </label>
                                    <div class="arrow-btn"></div>
                                </li>
                            </ul>
                        </div>

                        <div role="tabpanel" class="tab-pane fade" id="tabs-tab5">
                            <h4>Технические услуги</h4>
                            <p>Реализуем технических задачи любой сложности
                                Разработаем индивидуальные решения
                                Оказываем техподдержку и проводим консультации
                                Решим технические задачи бизнеса “под ключ”
                            </p>
                            <ul>
                                <li>
                                    <label>
                                        <input name="service[]" type="checkbox" id="num17" value="Создание сайтов и блогов">
                                        <span class="checkmark"></span>
                                        Создание сайтов и блогов
                                    </label>
                                    <div class="arrow-btn"></div>
                                </li>
                                <li>
                                    <label>
                                        <input name="service[]" type="checkbox" id="num18" value="Создание лендингов, посадочных страниц “под ключ”">
                                        <span class="checkmark"></span>
                                        Создание лендингов, посадочных страниц “под ключ”
                                    </label>
                                    <div class="arrow-btn"></div>
                                </li>
                                <li>
                                    <label>
                                        <input name="service[]" type="checkbox" id="num19" value="Создание чат-ботов">
                                        <span class="checkmark"></span>
                                        Создание чат-ботов
                                    </label>
                                    <div class="arrow-btn"></div>
                                </li>
                                <li>
                                    <label>
                                        <input name="service[]" type="checkbox" id="num20" value="Реализация технических задач любой сложности">
                                        <span class="checkmark"></span>
                                        Реализация технических задач любой сложности
                                    </label>
                                    <div class="arrow-btn"></div>
                                </li>
                            </ul>
                        </div>

                        <div role="tabpanel" class="tab-pane fade" id="tabs-tab6">
                            <h4>Дизайн</h4>
                            <p>Создаем продающие дизайны для сайтов, лендингов, посадок и т.д.
                                Разрабатываем индивидуальный стиль Вашего проекта
                                Реализовываем визуальную часть упаковки бизнеса
                            </p>
                            <ul>
                                <li>
                                    <label>
                                        <input name="service[]" type="checkbox" id="num21" value="Дизайн продающих страниц">
                                        <span class="checkmark"></span>
                                        Дизайн продающих страниц
                                    </label>
                                    <div class="arrow-btn"></div>
                                </li>
                                <li>
                                    <label>
                                        <input name="service[]" type="checkbox" id="num22" value="Дизайн корпоративных сайтов и блогов">
                                        <span class="checkmark"></span>
                                        Дизайн корпоративных сайтов и блогов
                                    </label>
                                    <div class="arrow-btn"></div>
                                </li>
                                <li>
                                    <label>
                                        <input name="service[]" type="checkbox" id="num23" value="Оформление коммерческих предложений">
                                        <span class="checkmark"></span>
                                        Оформление коммерческих предложений
                                    </label>
                                    <div class="arrow-btn"></div>
                                </li>
                                <li>
                                    <label>
                                        <input name="service[]" type="checkbox" id="num24" value="Решение других дизайн-задач для Вашего бизнеса">
                                        <span class="checkmark"></span>
                                        Решение других дизайн-задач для Вашего бизнеса
                                    </label>
                                    <div class="arrow-btn"></div>
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
                                <textarea placeholder="Ваш вопрос" class="form-control validate-field"
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