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
                    <h1 class="main-title"><span>[</span>Контент<span>]</span> Квартира</h1>
                    <p>Ваш удаленный отдел исключительных профессионалов</p>
                </section>
            </div><!-- .col-sm-10 -->
        </div><!-- .content-wrapper -->
    </article><!-- .section-wrapper -->

    <article id="about2" class="section-wrapper clearfix" data-custom-background-img="{{asset('img/bg9.jpg')}}">
        <div class="content-wrapper clearfix">
            <div class="col-sm-10 col-md-9 pull-right">
                <h4>Вы сидите на стуле в пустой квартире.</h4>
                <p>Недавно её купили, кое-где уже даже начали ремонт... Стены без обоев, нет пола, стоит один стул, на котором Вы и сидите. Столько работы...</p>
                <h5>Как же не хочется тратить на неё свое личное время, правда?</h5>
                <p>А представьте, что кто-то пришел и сделал все за Вас - договорился с бригадой, выбрал обои, купил и расставил мебель.<br><br>
                    И все это <span>без Вашего участия.</span></p>
                <h4>Теперь так возможно и в бизнесе</h4>
                <p>Скорее всего, сейчас вы сидите в такой своей «квартире». Это интернет-магазин или обучающие курсы, а может, услуги или сервис...<br>
                    Неважно.</p>
                <p><span>У Вас есть продукт – интеллектуальный или физический.</span><br>
                    Он продается. Или даже активно продается.
                    <span>НО...</span>
                </p>
            </div><!-- .col-sm-10 -->
        </div><!-- .content-wrapper -->
    </article><!-- .section-wrapper -->

    <article id="about3" class="section-wrapper clearfix" data-custom-background-img="{{asset('img/bg4.jpg')}}">
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

    <article id="about4" class="section-wrapper clearfix" data-custom-background-img="{{asset('img/bg2.jpg')}}">
        <div class="content-wrapper clearfix">
            <div class="col-sm-10 col-md-9 pull-right">

                <h4>Что Вы получите, передав работу команде Контент Квартиры</h4>
                <!-- grid -->
                <section class="grid row clearfix clearfix-for-2cols">

                    <!-- grid item -->
                    <div class="grid-item col-md-6">
                        <div class="item-content clearfix">
                            <span class="icon icon-about fas fa-users"></span>
                            <div class="text-content">
                                <p>Готовую команду специалистов.
                                    Вам не придется искать, собеседовать, тестировать и обучать людей, оплачивая их пробы и ошибки</p>
                            </div>
                        </div><!-- end: .item-content -->
                    </div><!-- end: .grid-item -->

                    <!-- grid item -->
                    <div class="grid-item col-md-6">
                        <div class="item-content clearfix">
                            <span class="icon icon-about fas fa-sitemap"></span>
                            <div class="text-content">
                                <p>Возможность передать все ключевые задачи - создание контента, продвижение, технические задачи, дизайн - одной команде</p>
                            </div>
                        </div><!-- end: .item-content -->
                    </div><!-- end: .grid-item -->

                    <!-- grid item -->
                    <div class="grid-item col-md-6">
                        <div class="item-content clearfix">
                            <span class="icon icon-about fas fa-check-square"></span>
                            <div class="text-content">
                                <p>Полное погружение в проект.
                                    Мы изучаем Ваш проект “от и до”, не ограничиваясь лишь своей зоной ответственности</p>
                            </div>
                        </div><!-- end: .item-content -->
                    </div><!-- end: .grid-item -->

                    <!-- grid item -->
                    <div class="grid-item col-md-6">
                        <div class="item-content clearfix">
                            <span class="icon icon-about fas fa-clipboard-list"></span>
                            <div class="text-content">
                                <p>Стратегию.
                                    Выстраиваем работу для достижения заданной цели, анализируем результаты и корректируем план действий, а не просто “публикуем посты”</p>
                            </div>
                        </div><!-- end: .item-content -->
                    </div><!-- end: .grid-item -->

                    <!-- grid item -->
                    <div class="grid-item col-md-6">
                        <div class="item-content clearfix">
                            <span class="icon icon-about fas fa-comments"></span>
                            <div class="text-content">
                                <p>Постоянную связь с командой.
                                    Вы всегда можете получить ответы на свои вопросы от проект-менеджера или конкретного специалиста</p>
                            </div>
                        </div><!-- end: .item-content -->
                    </div><!-- end: .grid-item -->

                    <!-- grid item -->
                    <div class="grid-item col-md-6">
                        <div class="item-content clearfix">
                            <span class="icon icon-about fas fa-file-alt"></span>
                            <div class="text-content">
                                <p>Четкое понимание, как обстоят дела по проекту.
                                    Раз в месяц мы предоставляем подробный отчет по динамике развития проекта, с анализом и планом на следующий месяц</p>
                            </div>
                        </div><!-- end: .item-content -->
                    </div><!-- end: .grid-item -->

                </section><!-- end: grid -->
            </div><!-- .col-sm-10 -->
        </div><!-- .content-wrapper -->
    </article><!-- .section-wrapper -->
@stop