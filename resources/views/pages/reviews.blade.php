@extends('layout.layout')
@section('title', 'Отзывы')
@include('includes.sub-menu')
@include('includes.footer')
@section('reviews')
    <div id="reviews1" class="section-wrapper clearfix section reviews fp-auto-height-responsive" data-custom-background-img="{{asset('img/bg6.jpg')}}"
         data-centered="false">
        <div class="content-wrapper clearfix">
            <h2 class="section-title">Что говорят наши клиенты</h2>
            <div class="client-wrapper col-sm-3 col-md-3">
                <img class="client" src="{{asset('img/obuhovskiy-photo.jpg')}}" alt="obuhovskiy">
                <h6>Игорь Обуховский</h6>
                <p>экс-тренер проекта «Зваженi та щасливi», автор онлайн фитнес-игры
                    «ЖирКиллер»</p>
            </div>
            <div class="col-sm-9 col-md-9 pull-right">
                <div class="review-item">
                    <img class="quptes" src="{{asset('img/quotes.jpg')}}" alt="quotes">
                    <p>Дорабатывали лендинг и подготовили всю воронку писем от продаж до запуска.</p>
                    <img src="{{asset('img/Obuhovskiy.jpg')}}" alt="Obuhovskiy">
                </div>
            </div>
        </div><!-- .content-wrapper -->
    </div><!-- .section-wrapper -->

    <div id="reviews2" class="section-wrapper clearfix section reviews fp-auto-height-responsive" data-custom-background-img="{{asset('img/bg6.jpg')}}"
         data-centered="false">
        <div class="content-wrapper clearfix">
            <div class="client-wrapper col-sm-3 col-md-3">
                <img class="client" src="{{asset('img/granitsnet-photo.jpg')}}" alt="granitsnet">
                <h6>Границ.нет</h6>
                <p>обучающий проект для тех, кто хочет построить бизнес на любимом деле»</p>
            </div>
            <div class="col-sm-9 col-md-9 pull-right">
                <div class="review-item">
                    <img class="quptes" src="{{asset('img/quotes.jpg')}}" alt="quotes">
                    <p>Работали с проектом в качестве удаленного контент-отдела: взяли на себя все задачи от разработки
                        стратегии до регулярного постинга в соцсетях и в блоге.
                    </p>
                    <img src="{{asset('img/Granyts1.png')}}" alt="Granyts1">
                    <img src="{{asset('img/Granyts2.png')}}" alt="Granyts2">
                </div>
            </div><!-- .col-sm-10 -->
        </div><!-- .content-wrapper -->
    </div><!-- .section-wrapper -->

    <div id="reviews3" class="section-wrapper clearfix section reviews fp-auto-height-responsive" data-custom-background-img="{{asset('img/bg6.jpg')}}"
         data-centered="false">
        <div class="content-wrapper clearfix">
            <div class="client-wrapper col-sm-3 col-md-3">
                <img class="client" src="{{asset('img/gavrilova-photo.jpg')}}" alt="Alina">
                <h6>Ирина Гаврилова</h6>
                <p>Бизнес-тренер уровня PCC ICF</p>
            </div>
            <div class="col-sm-9 col-md-9 pull-right">
                <div class="review-item">
                    <img class="quptes" src="{{asset('img/quotes.jpg')}}" alt="quotes">
                    <p>Работали с проектом в качестве удаленного контент-отдела: взяли на себя все задачи от разработки
                        стратегии до регулярного постинга в соцсетях и в блоге.
                    </p>
                    <img src="{{asset('img/Gavrilova1.png')}}" alt="Gavrilova1">
                    <img src="{{asset('img/Gavrilova2.jpg')}}" alt="Gavrilova2">
                </div>
            </div><!-- .col-sm-10 -->
        </div><!-- .content-wrapper -->
    </div><!-- .section-wrapper -->

    <div id="review4" class="section-wrapper clearfix section reviews fp-auto-height-responsive" data-custom-background-img="{{asset('img/bg6.jpg')}}"
         data-centered="false">
        <div class="content-wrapper clearfix">
            <div class="client-wrapper col-sm-3 col-md-3">
                <img class="client" src="{{asset('img/secret-f-photo.jpg')}}" alt="secret-f">
                <h5>Эксперт в нише эзотерики</h5>
            </div>
            <div class="col-sm-9 col-md-9 pull-right">
                <div class="review-item">
                    <img class="quptes" src="{{asset('img/quotes.jpg')}}" alt="quotes">
                    <p>Работали над запуском рекламной кампании для сбора участников на бесплатный интенсив</p>
                    <img src="{{asset('img/izoterika.png')}}" alt="izoterika">
                </div>
            </div><!-- .col-sm-10 -->
        </div><!-- .content-wrapper -->
    </div><!-- .section-wrapper -->

    <div id="review5" class="section-wrapper clearfix section reviews fp-auto-height-responsive" data-custom-background-img="{{asset('img/bg6.jpg')}}"
         data-centered="false">
        <div class="content-wrapper clearfix">
            <div class="client-wrapper col-sm-3 col-md-3">
                <img class="client" src="{{asset('img/kolesnikov-photo.jpg')}}" alt="Alina">
                <h6>Давид Колесников</h6>
                <p>американский эксперт по продвижению в Facebook</p>
            </div>
            <div class="col-sm-9 col-md-9 pull-right">
                <div class="review-item">
                    <img class="quptes" src="{{asset('img/quotes.jpg')}}" alt="quotes">
                    <p>Работали с проектом в качестве удаленного контент-отдела: взяли на себя все задачи от разработки
                        стратегии до регулярного постинга в соцсетях и в блоге.</p>
                    <img src="{{asset('img/kolesnikov-review.png')}}" alt="kolesnikov">
                </div>
            </div><!-- .col-sm-10 -->
        </div><!-- .content-wrapper -->
    </div><!-- .section-wrapper -->

    <div id="reviews6" class="section-wrapper clearfix section reviews fp-auto-height-responsive" data-custom-background-img="{{asset('img/bg6.jpg')}}"
         data-centered="false">
        <div class="content-wrapper clearfix">
            <div class="client-wrapper col-sm-3 col-md-3">
                <img class="client" src="{{asset('img/shliahov-photo.jpg')}}" alt="shliahov">
                <h6>Роман Шляхов</h6>
                <p>интернет-предприниматель, продюсер, миллионер</p>
            </div>
            <div class="col-sm-9 col-md-9 pull-right">
                <div class="review-item">
                    <img class="quptes" src="{{asset('img/quotes.jpg')}}" alt="quotes">
                    <p>Работали над написанием продающих текстов для Романа и его учеников.</p>
                    <img src="{{asset('img/Shlyahov.png')}}" alt="Shlyahov">
                </div>
            </div><!-- .col-sm-10 -->
        </div><!-- .content-wrapper -->
    </div><!-- .section-wrapper -->

    <div id="reviews7" class="section-wrapper clearfix section reviews fp-auto-height-responsive" data-custom-background-img="{{asset('img/bg6.jpg')}}"
         data-centered="false">
        <div class="content-wrapper clearfix">
            <div class="client-wrapper col-sm-3 col-md-3">
                <img class="client" src="{{asset('img/secret-f-photo.jpg')}}" alt="secret-f">
                <h6>Производитель натуральных сладостей</h6>
            </div>
            <div class="col-sm-9 col-md-9 pull-right">
                <div class="review-item">
                    <img class="quptes" src="{{asset('img/quotes.jpg')}}" alt="quotes">
                    <p>Разрабатывали название для нового продукта компании</p>
                    <img src="{{asset('img/sladosti.jpg')}}" alt="izoterika">
                </div>
            </div><!-- .col-sm-10 -->
        </div><!-- .content-wrapper -->
    </div><!-- .section-wrapper -->

    <div id="reviews8" class="section-wrapper clearfix section reviews fp-auto-height-responsive" data-custom-background-img="{{asset('img/bg6.jpg')}}"
         data-centered="false">
        <div class="content-wrapper clearfix">
            <div class="client-wrapper col-sm-3 col-md-3">
                <img class="client" src="{{asset('img/zastroyshik-photo.jpg')}}" alt="zastroyshik">
                <p>Представитель крупного украинского застройщика (не можем указать название согласно требований
                    Договора о конфиденциальности)</p>
            </div>
            <div class="col-sm-9 col-md-9 pull-right">
                <div class="review-item">
                    <img class="quptes" src="{{asset('img/quotes.jpg')}}" alt="quotes">
                    <p>Работали над формированием узнаваемости и доверия к компании, т.к.она впервые зашла на рынок
                        недвижимости Киева, через активное ведение бизнес-страницы на Facebook.</p>
                    <img src="{{asset('img/potolok.png')}}" alt="potolok">
                </div>
            </div><!-- .col-sm-10 -->
        </div><!-- .content-wrapper -->
    </div><!-- .section-wrapper -->

    <div id="reviews9" class="section-wrapper clearfix section reviews fp-auto-height-responsive" data-custom-background-img="{{asset('img/bg6.jpg')}}"
         data-centered="false">
        <div class="content-wrapper clearfix">
            <div class="client-wrapper col-sm-3 col-md-3">
                <img class="client" src="{{asset('img/secret-f-photo.jpg')}}" alt="secret-f-photo">
                <h6>Проект Виктории Шуриной</h6>
                <p>духовный тренер счастливых людей</p>
            </div>
            <div class="col-sm-9 col-md-9 pull-right">
                <div class="review-item">
                    <img class="quptes" src="{{asset('img/quotes.jpg')}}" alt="quotes">
                    <p>Работали над написанием продающих текстов для Виктории, а также комплексно над ведением страниц в
                        соцсетях.
                        <br><br>
                        Важно было вести страницы так, чтобы аудитория чувствовала в каждом посте личность Виктории.
                    </p>
                    <img src="{{asset('img/Shurina-review.png')}}" alt="Shurina">
                </div>
            </div><!-- .col-sm-10 -->
        </div><!-- .content-wrapper -->
    </div><!-- .section-wrapper -->

    <div id="reviews10" class="section-wrapper clearfix section reviews fp-auto-height-responsive" data-custom-background-img="{{asset('img/bg6.jpg')}}"
         data-centered="false">
        <div class="content-wrapper clearfix">
            <div class="client-wrapper col-sm-3 col-md-3">
                <img class="client" src="{{asset('img/secret-m-photo.jpg')}}" alt="secret-m-photo">
                <h6>Андрей</h6>
                <p>владелец web-студии</p>
            </div>
            <div class="col-sm-9 col-md-9 pull-right">
                <div class="review-item">
                    <img class="quptes" src="{{asset('img/quotes.jpg')}}" alt="quotes">
                    <p>Работали над написанием продающего текста для клиента студии Андрея.</p>
                    <img src="{{asset('img/Andrei.jpg')}}" alt="Andrei">
                </div>
            </div><!-- .col-sm-10 -->
        </div><!-- .content-wrapper -->
    </div><!-- .section-wrapper -->

    <div id="reviews11" class="section-wrapper clearfix section reviews fp-auto-height-responsive" data-custom-background-img="{{asset('img/bg6.jpg')}}"
         data-centered="false">
        <div class="content-wrapper clearfix">
            <div class="client-wrapper col-sm-3 col-md-3">
                <img class="client" src="{{asset('img/secret-m-photo.jpg')}}" alt="secret-m-photo">
                <h6>Организатор элитных путешествий</h6>
            </div>
            <div class="col-sm-9 col-md-9 pull-right">
                <div class="review-item">
                    <img class="quptes" src="{{asset('img/quotes.jpg')}}" alt="quotes">
                    <p>Работали над написанием продающего текста для одного из туров.</p>
                    <img src="{{asset('img/travel-review.jpg')}}" alt="travel">
                </div>
            </div><!-- .col-sm-10 -->
        </div><!-- .content-wrapper -->
    </div><!-- .section-wrapper -->

    <div id="reviews12" class="section-wrapper clearfix section reviews fp-auto-height-responsive" data-custom-background-img="{{asset('img/bg6.jpg')}}"
         data-centered="false">
        <div class="content-wrapper clearfix">
            <div class="client-wrapper col-sm-3 col-md-3">
                <img class="client" src="{{asset('img/secret-m-photo.jpg')}}" alt="secret-m-photo">
                <h6>Украинский застройщик экодомов</h6>
            </div>
            <div class="col-sm-9 col-md-9 pull-right">
                <div class="review-item">
                    <img class="quptes" src="{{asset('img/quotes.jpg')}}" alt="quotes">
                    <p>Работали над написанием продающего текста</p>
                    <img src="{{asset('img/ekodom.png')}}" alt="ekodom">
                </div>
            </div><!-- .col-sm-10 -->
        </div><!-- .content-wrapper -->
    </div><!-- .section-wrapper -->

    <div id="reviews13" class="section-wrapper clearfix section fp-auto-height-responsive" data-custom-background-img="{{asset('img/bg4.jpg')}}"
         data-centered="false">
        <div class="content-wrapper clearfix">
            <h3 class="section-title">Хотите задать вопрос?</h3>
            <h5 class="pull-right">Заполните форму и мы ответим Вам в ближайшее время</h5>
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
    </div>
@stop