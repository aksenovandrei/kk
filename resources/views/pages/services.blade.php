@extends('layout.layout')
@section('title', 'Услуги')
@include('includes.sub-menu')
@include('includes.footer')
@section('services')
    <div id="services2" class="section-wrapper clearfix section gap-block fp-auto-height" data-custom-background-img="{{asset('img/bg2.jpg')}}"
         data-centered="false">
        <div class="content-wrapper mid-vertical-positioning clearfix  active" style="position: relative">
            <div class="col-sm-12 col-md-12 pull-right">

                <h2 id="services"  class="section-title">Наши услуги</h2>
                <h6 class="text-left">Выделите то, что вам нужно</h6>

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
                        <li role="presentation"><a href="#tabs-tab5" aria-controls="tabs-tab5" role="tab"
                                                   data-toggle="tab"><i
                                        class="icon fas fa-laptop"></i><span>Технические услуги</span></a></li>
                        <li role="presentation"><a href="#tabs-tab6" aria-controls="tabs-tab6" role="tab"
                                                   data-toggle="tab"><i
                                        class="icon far fa-object-group"></i><span>Дизайн</span></a></li>
                    </ul>

                    <!-- Tab panes -->

                    <div class="tab-content servs-content">
                        <div role="tabpanel" class="tab-pane fade in active" id="tabs-tab1">
                            <h4>Контент</h4>
                            <p>Внедряемся в Ваш бизнес как готовый контент-отдел<br>
                                Экономим Вам 3+ часа в день<br>0
                                Создаем контент люкс-уровня<br>
                                Предлагаем решения, а не ждем их от Вас
                            </p>
                            <ul>
                                <li>
                                    <label>
                                        <input name="service[]" type="checkbox" id="num1" value="Ведение блогов (личных и компаний)">
                                        <span class="checkmark"></span>
                                        Ведение личных блогов
                                    </label>
                                        <div class="arrow-btn"></div>
                                    <p class="description">Подойдет для экспертов, коучей, психологов, тренеров, наставников - всех, кто хочет поделиться своими знаниями с аудиторией и сформировать доверие к себе благодаря качественному контенту.</p>
                                </li>
                                <li>
                                    <label>
                                        <input name="service[]" type="checkbox" id="num2" value="Ведение страниц в соцсетях (личных и компаний)">
                                        <span class="checkmark"></span>
                                        Ведение корпоративных блогов
                                    </label>
                                    <div class="arrow-btn"></div>
                                    <p class="description">Подойдет для компаний, которые хотят делиться с аудиторией полезным контентом и собирать вокруг себя лояльную аудиторию. А также для проектов, в которых объединяется несколько экспертов.</p>
                                </li>
                                <li>
                                    <label>
                                        <input name="service[]" type="checkbox" id="num3" value="Написание репутационных статей">
                                        <span class="checkmark"></span>
                                        Ведение страниц ВКонтакте
                                    </label>
                                    <div class="arrow-btn"></div>
                                    <p class="description">Включает в себя создание контент-планов, генерацию контента и регулярный постинг, работу с аудиторией, проведение активностей и продвижение.</p>
                                </li>
                                <li>
                                    <label>
                                        <input name="service[]" type="checkbox" id="num4" value="Внедрение контент-маркетинга в Ваш бизнес “под ключ”">
                                        <span class="checkmark"></span>
                                        Ведение страниц в Facebook
                                    </label>
                                    <div class="arrow-btn"></div>
                                    <p class="description">Включает в себя создание контент-планов, генерацию контента и регулярный постинг, работу с аудиторией, проведение активностей и продвижение.</p>
                                </li>
                                <li>
                                    <label>
                                        <input name="service[]" type="checkbox" id="num5" value="Внедрение контент-маркетинга в Ваш бизнес “под ключ”">
                                        <span class="checkmark"></span>
                                        Ведение страниц в Instagram
                                    </label>
                                    <div class="arrow-btn"></div>
                                    <p class="description">Включает в себя создание контент-планов, генерацию контента и регулярный постинг, работу с аудиторией, проведение активностей и продвижение.</p>
                                </li>
                                <li>
                                    <label>
                                        <input name="service[]" type="checkbox" id="num6" value="Внедрение контент-маркетинга в Ваш бизнес “под ключ”">
                                        <span class="checkmark"></span>
                                        Ведение Telegram-каналов
                                    </label>
                                    <div class="arrow-btn"></div>
                                    <p class="description">Включает в себя создание контент-планов, генерацию контента и регулярный постинг, проведение активностей и продвижение.</p>
                                </li>
                                <li>
                                    <label>
                                        <input name="service[]" type="checkbox" id="num7" value="Внедрение контент-маркетинга в Ваш бизнес “под ключ”">
                                        <span class="checkmark"></span>
                                        Написание сценариев для видео
                                    </label>
                                    <div class="arrow-btn"></div>
                                    <p class="description">Подойдет для проектов, которые делятся с аудиторией полезной информацией в видеоформате.</p>
                                </li>
                                <li>
                                    <label>
                                        <input name="service[]" type="checkbox" id="num8" value="Внедрение контент-маркетинга в Ваш бизнес “под ключ”">
                                        <span class="checkmark"></span>
                                        Написание лид-магнитов
                                    </label>
                                    <div class="arrow-btn"></div>
                                    <p class="description">Подготовка полезного материала, с помощью которого вы сможете собирать подписную базу.</p>
                                </li>
                            </ul>
                        </div>

                        <div role="tabpanel" class="tab-pane fade" id="tabs-tab2">
                            <h4>Продающий копирайтинг</h4>
                            <p>Отдел копирайтеров, пишущих исключительно продающие тексты<br>
                                Знаем основы маркетинга и продаж<br>
                                Проводим глубокий анализ аудитории<br>
                                Пишем просто и “в точку”
                            </p>
                            <ul>
                                <li>
                                    <label>
                                        <input name="service[]" type="checkbox" id="num9" value="Написание текстов на лендинги, посадочные страницы, страницы лид-магнитов">
                                        <span class="checkmark"></span>
                                        Написание текста для лендинга
                                    </label>
                                </li>
                                <li>
                                    <label>
                                        <input name="service[]" type="checkbox" id="num10" value="Написание коммерческих предложений">
                                        <span class="checkmark"></span>
                                        Написание текста для посадочной страницы
                                    </label>
                                </li>
                                <li>
                                    <label>
                                        <input name="service[]" type="checkbox" id="num11" value="Написание писем в email-рассылки и чат-бот рассылки">
                                        <span class="checkmark"></span>
                                        Написание текста на страницу лид-магнита
                                    </label>
                                </li>
                                <li>
                                    <label>
                                        <input name="service[]" type="checkbox" id="num12" value="Тексты для корпоративных сайтов и другие копирайтинг-задачи">
                                        <span class="checkmark"></span>
                                        Написание текстов на сайт
                                    </label>
                                </li>
                                <li>
                                    <label>
                                        <input name="service[]" type="checkbox" id="num13" value="Тексты для корпоративных сайтов и другие копирайтинг-задачи">
                                        <span class="checkmark"></span>
                                        Написание коммерческих предложений
                                    </label>
                                </li>
                                <li>
                                    <label>
                                        <input name="service[]" type="checkbox" id="num14" value="Тексты для корпоративных сайтов и другие копирайтинг-задачи">
                                        <span class="checkmark"></span>
                                        Написание писем в email-рассылку
                                    </label>
                                </li>
                                <li>
                                    <label>
                                        <input name="service[]" type="checkbox" id="num15" value="Тексты для корпоративных сайтов и другие копирайтинг-задачи">
                                        <span class="checkmark"></span>
                                        Написание цепочек сообщений для чат-ботов

                                    </label>
                                    <div class="arrow-btn"></div>
                                    <p class="description">Создадим тексты в ритме мессенджеров и соцсетей. Чтобы кратко и емко доносить то, что вы хотите сказать своим подписчикам.</p>
                                </li>
                                <li>
                                    <label>
                                        <input name="service[]" type="checkbox" id="num16" value="Тексты для корпоративных сайтов и другие копирайтинг-задачи">
                                        <span class="checkmark"></span>
                                        Написание сценариев продающих видео
                                    </label>
                                    <div class="arrow-btn"></div>
                                    <p class="description">Подойдет для видеорекламы, роликов на лендинги, посадочные страницы, видеопрезентаций.</p>
                                </li>
                                <li>
                                    <label>
                                        <input name="service[]" type="checkbox" id="num17" value="Тексты для корпоративных сайтов и другие копирайтинг-задачи">
                                        <span class="checkmark"></span>
                                        Написаний текстов рекламных постов
                                    </label>
                                    <div class="arrow-btn"></div>
                                    <p class="description">Анализируем то, о чем говорит и чего хочет ваша аудитория. А после переносим это в текст, чтобы ваше предложение било прямо в цель.</p>
                                </li>
                                <li>
                                    <label>
                                        <input name="service[]" type="checkbox" id="num18" value="Тексты для корпоративных сайтов и другие копирайтинг-задачи">
                                        <span class="checkmark"></span>
                                        Разработка названий и слоганов
                                    </label>
                                    <div class="arrow-btn"></div>
                                    <p class="description">Команда копирайтеров проводит брейншторм, анализирует продукт и аудиторию, подбирает ассоциативный ряд и в результате предлагает вам 5 вариантов слоганов/названий.</p>
                                </li>
                            </ul>
                        </div>

                        <div role="tabpanel" class="tab-pane fade" id="tabs-tab3">
                            <h4>Маркетинг</h4>
                            <p>Создаем стратегию под Ваш проект<br>
                                Прописываем пошаговый план достижения цели на 3, 6 месяцев и более<br>
                                Готовим контент-планы для реализации стратегии<br>
                                Разрабатываем воронки писем для рассылок
                            </p>
                            <ul>
                                <li>
                                    <label>
                                        <input name="service[]" type="checkbox" id="num19" value="Разработка контент-стратегий">
                                        <span class="checkmark"></span>
                                        Разработка маркетинговой стратегии
                                    </label>
                                    <div class="arrow-btn"></div>
                                    <p class="description">Маркетолог анализирует Вашу компанию, рынок, конкурентов и целевую аудиторию. Разрабатывает путь клиента - от первичного интереса до продажи. На основе этого под конкретную задачу создается решение - подбираются нужные в Вашем случае инструменты (например, сайт, социальные сети, реклама, seo). Прописывается пошаговый план - что и как выполнять, какие показатели отслеживать, чтобы добиться цели.</p>
                                </li>
                                <li>
                                    <label>
                                        <input name="service[]" type="checkbox" id="num20" value="Разработка стратегий под запуск">
                                        <span class="checkmark"></span>
                                        Разработка контент-стратегии
                                    </label>
                                    <div class="arrow-btn"></div>
                                    <p class="description">Не знаете за что хвататься - Facebook, Instagram или лучше вложиться в собственный блог? На основе полученных и проанализированных данных маркетолог создает решение, которое позволяет за меньшие деньги получить максимум результата из вашего присутствия в социальных сетях, блоге, работе с блоггерами или сторонних ресурсах - лидеров мнений. Маркетолог определяет что конкретно в вашем случае оптимально использовать. Также Вы получаете общую концепцию, позиционирование и контент-планы на работы в данных ресурсах.</p>
                                </li>
                                <li>
                                    <label>
                                        <input name="service[]" type="checkbox" id="num22" value="Разработка маркетинг-стратегий">
                                        <span class="checkmark"></span>
                                        Разработка стратегии под запуск
                                    </label>
                                    <div class="arrow-btn"></div>
                                    <p class="description">Подойдет инфо предпринимателям, коучам и тренерам. Маркетолог проанализирует Ваш продукт, рынок, конкурентов ,целевую аудиторию и составит стратегию продажи с нуля. Также Вы получите детально проработанную воронку - как будет проходить реклама, какие страницы нужны для продажи, какие письма, контент и т.д.</p>
                                </li>
                                <li>
                                    <label>
                                        <input name="service[]" type="checkbox" id="num22" value="Разработка воронок писем">
                                        <span class="checkmark"></span>
                                        Разработка воронки писем
                                    </label>
                                    <div class="arrow-btn"></div>
                                    <p class="description">Маркетолог под Вашу задачу разработает серию писем под нужные сегменты аудитории. Вы получите документ с концепцией, планом выхода писем и тезисно что должно быть в каждом письме.</p>
                                </li>
                                <li>
                                    <label>
                                        <input name="service[]" type="checkbox" id="num23" value="Разработка воронок писем">
                                        <span class="checkmark"></span>
                                        Разработка контент-плана для соцсетей
                                    </label>
                                    <div class="arrow-btn"></div>
                                    <p class="description">Маркетолог проведет анализ и на его основе создаст концепцию и сетку постов на месяц</p>
                                </li>
                                <li>
                                    <label>
                                        <input name="service[]" type="checkbox" id="num24" value="Разработка воронок писем">
                                        <span class="checkmark"></span>
                                        Разработка контент-плана для блога
                                    </label>
                                    <div class="arrow-btn"></div>
                                    <p class="description">Маркетолог проведет анализ и на его основе создаст концепцию, позиционирование, рубрики, формат статей, рекомендации для копирайтеров по реализации.</p>
                                </li>
                            </ul>
                        </div>

                        <div role="tabpanel" class="tab-pane fade" id="tabs-tab4">
                            <h4>Рекламные кампании</h4>
                            <p>Предлагаем стратегию запуска кампании<br>
                                Делаем глубокий анализ аудитории<br>
                                Пишем посты и готовим визуальное оформление<br>
                                Проводим тесты и прогнозируем результаты
                            </p>
                            <ul>
                                <li>
                                    <label>
                                        <input name="service[]" type="checkbox" id="num25" value="Сбор участников на онлайн и живые события">
                                        <span class="checkmark"></span>
                                        Продвижение публикаций в соцсетях
                                    </label>
                                </li>
                                <li>
                                    <label>
                                        <input name="service[]" type="checkbox" id="num26" value="Сбор заявок на покупку продуктов">
                                        <span class="checkmark"></span>
                                        Лидогенерация в соцсетях
                                    </label>
                                </li>
                                <li>
                                    <label>
                                        <input name="service[]" type="checkbox" id="num27" value="Продвижение сообществ в соцсетях">
                                        <span class="checkmark"></span>
                                        Комплексное продвижение страниц в соцсетях
                                    </label>
                                </li>
                            </ul>
                        </div>

                        <div role="tabpanel" class="tab-pane fade" id="tabs-tab5">
                            <h4>Технические услуги</h4>
                            <p>Реализуем технических задачи любой сложности<br>
                                Разработаем индивидуальные решения<br>
                                Оказываем техподдержку и проводим консультации<br>
                                Решим технические задачи бизнеса “под ключ”
                            </p>
                            <ul>
                                <li>
                                    <label>
                                        <input name="service[]" type="checkbox" id="num28" value="Создание сайтов и блогов">
                                        <span class="checkmark"></span>
                                        Создание блога/корпоративного сайта
                                    </label>
                                </li>
                                <li>
                                    <label>
                                        <input name="service[]" type="checkbox" id="num29" value="Создание лендингов, посадочных страниц “под ключ”">
                                        <span class="checkmark"></span>
                                        Создание лендинга
                                    </label>
                                </li>
                                <li>
                                    <label>
                                        <input name="service[]" type="checkbox" id="num30" value="Создание чат-ботов">
                                        <span class="checkmark"></span>
                                        Создание посадочной страницы
                                    </label>
                                </li>
                                <li>
                                    <label>
                                        <input name="service[]" type="checkbox" id="num31" value="Реализация технических задач любой сложности">
                                        <span class="checkmark"></span>
                                        Создание страницы лид-магнита
                                    </label>
                                </li>
                                <li>
                                    <label>
                                        <input name="service[]" type="checkbox" id="num32" value="Реализация технических задач любой сложности">
                                        <span class="checkmark"></span>
                                        Настройка готовых обучающих платформ
                                    </label>
                                </li>
                                <li>
                                    <label>
                                        <input name="service[]" type="checkbox" id="num33" value="Реализация технических задач любой сложности">
                                        <span class="checkmark"></span>
                                        Настройка рассылки писем
                                    </label>
                                </li>
                                <li>
                                    <label>
                                        <input name="service[]" type="checkbox" id="num34" value="Реализация технических задач любой сложности">
                                        <span class="checkmark"></span>
                                        Создание чат-ботов
                                    </label>
                                </li>
                                <li>
                                    <label>
                                        <input name="service[]" type="checkbox" id="num35" value="Реализация технических задач любой сложности">
                                        <span class="checkmark"></span>
                                        Создание собственной обучающей платформы
                                    </label>
                                </li>
                            </ul>
                        </div>

                        <div role="tabpanel" class="tab-pane fade" id="tabs-tab6">
                            <h4>Дизайн</h4>
                            <p>Создаем продающие дизайны для сайтов, лендингов, посадок и т.д.<br>
                                Разрабатываем индивидуальный стиль Вашего проекта<br>
                                Реализовываем визуальную часть упаковки бизнеса
                            </p>
                            <ul>
                                <li>
                                    <label>
                                        <input name="service[]" type="checkbox" id="num36" value="Дизайн продающих страниц">
                                        <span class="checkmark"></span>
                                        Лендинг
                                    </label>
                                </li>
                                <li>
                                    <label>
                                        <input name="service[]" type="checkbox" id="num37" value="Дизайн корпоративных сайтов и блогов">
                                        <span class="checkmark"></span>
                                        Посадочная страница
                                    </label>
                                </li>
                                <li>
                                    <label>
                                        <input name="service[]" type="checkbox" id="num38" value="Оформление коммерческих предложений">
                                        <span class="checkmark"></span>
                                        Страница лид-магнита
                                    </label>
                                </li>
                                <li>
                                    <label>
                                        <input name="service[]" type="checkbox" id="num39" value="Решение других дизайн-задач для Вашего бизнеса">
                                        <span class="checkmark"></span>
                                        Корпоративный сайт/Блог
                                    </label>
                                </li>
                                <li>
                                    <label>
                                        <input name="service[]" type="checkbox" id="num40" value="Решение других дизайн-задач для Вашего бизнеса">
                                        <span class="checkmark"></span>
                                        Коммерческое предложение
                                    </label>
                                </li>
                                <li>
                                    <label>
                                        <input name="service[]" type="checkbox" id="num41" value="Решение других дизайн-задач для Вашего бизнеса">
                                        <span class="checkmark"></span>
                                        Брендинг для соцсетей
                                    </label>
                                </li>
                                <li>
                                    <label>
                                        <input name="service[]" type="checkbox" id="num42" value="Решение других дизайн-задач для Вашего бизнеса">
                                        <span class="checkmark"></span>
                                        Инфографики
                                    </label>
                                </li>
                                <li>
                                    <label>
                                        <input name="service[]" type="checkbox" id="num43" value="Решение других дизайн-задач для Вашего бизнеса">
                                        <span class="checkmark"></span>
                                        Другие работы по дизайну
                                    </label>
                                </li>
                            </ul>
                        </div>

                    </div><!-- .tab-content -->
                    <p class="btn-inrow"><a href="javascript.void(0);" class="chart link-scroll btn btn-yellow btn-outline-inverse btn-lg" data-toggle="modal" data-target="#exampleModalCenter">Узнать цену</a>
                    </p>
                    <p class="btn-inrow"><a href="javascript.void(0);" class="link-scroll btn btn-outline-inverse btn-lg">Вопрос менеджеру</a></p>
                </div><!-- .tabpanel -->

            </div><!-- .col-sm-10 -->
        </div><!-- .content-wrapper -->
    </div><!-- .section-wrapper -->

    <div id="contact" class="section-wrapper clearfix section" data-custom-background-img="{{asset('img/bg4.jpg')}}">

        <div class="content-wrapper clearfix">

            <h2 class="section-title">Свяжитесь с нами</h2>
            <div class="col-md-12 pull-right">


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