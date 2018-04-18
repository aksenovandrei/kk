@extends('layout.layout')
@include('includes.sub-menu')
@include('includes.footer')
@section('title', 'Отзывы')
<!-- Menu -->
@yield('sub-menu')
<!-- end: Menu -->
@section('reviews')
    <article id="reviews" class="section-wrapper clearfix" data-custom-background-img="{{asset('img/bg6.jpg')}}">
        <div class="content-wrapper clearfix">
            <div class="col-sm-10 col-md-9 pull-right">
                <h2 class="section-title">
                    Отзывы</h2>
                <p class="feature-paragraph">
                <h5>Что говорят наши клиенты</h5>
                <div class="review-item">
                    <h6>Игорь Обуховский, экс-тренер проекта «Зваженi та щасливi», автор онлайн фитнес-игры
                        «ЖирКиллер»</h6>
                    <p>Дорабатывали лендинг и подготовили всю воронку писем от продаж до запуска.</p>
                    <img src="{{asset('img/Obuhovskiy.jpg')}}" alt="Obuhovskiy">
                </div>
            </div><!-- .col-sm-10 -->
        </div><!-- .content-wrapper -->
    </article><!-- .section-wrapper -->

    <article id="reviews" class="section-wrapper clearfix" data-custom-background-img="{{asset('img/bg6.jpg')}}">
        <div class="content-wrapper clearfix">
            <div class="col-sm-10 col-md-9 pull-right">
                <div class="review-item">
                    <h6>Границ.нет - обучающий проект для тех, кто хочет построить бизнес на любимом деле</h6>
                    <p>Работали с проектом в качестве удаленного контент-отдела: взяли на себя все задачи от разработки стратегии до регулярного постинга в соцсетях и в блоге.
                    </p>
                    <img src="{{asset('img/Granyts1.png')}}" alt="Granyts1">
                    <img src="{{asset('img/Granyts2.png')}}" alt="Granyts2">
                </div>
            </div><!-- .col-sm-10 -->
        </div><!-- .content-wrapper -->
    </article><!-- .section-wrapper -->

    <article id="reviews" class="section-wrapper clearfix" data-custom-background-img="{{asset('img/bg6.jpg')}}">
        <div class="content-wrapper clearfix">
            <div class="col-sm-10 col-md-9 pull-right">
                <div class="review-item">
                    <h6>Ирина Гаврилова, Бизнес-тренер уровня PCC ICF</h6>
                    <p>Работали с проектом в качестве удаленного контент-отдела: взяли на себя все задачи от разработки стратегии до регулярного постинга в соцсетях и в блоге.
                    </p>
                    <img src="{{asset('img/Gavrilova1.png')}}" alt="Gavrilova1">
                    <img src="{{asset('img/Gavrilova2.jpg')}}" alt="Gavrilova2">
                </div>
            </div><!-- .col-sm-10 -->
        </div><!-- .content-wrapper -->
    </article><!-- .section-wrapper -->

    <article id="reviews" class="section-wrapper clearfix" data-custom-background-img="{{asset('img/bg6.jpg')}}">
        <div class="content-wrapper clearfix">
            <div class="col-sm-10 col-md-9 pull-right">
                <div class="review-item">
                    <h6>Давид Колесников, американский эксперт по продвижению в Facebook</h6>
                    <p>Работали с проектом в качестве удаленного контент-отдела: взяли на себя все задачи от разработки стратегии до регулярного постинга в соцсетях и в блоге.</p>
                    <img src="{{asset('img/kolesnikov-review.png')}}" alt="kolesnikov">
                </div>
            </div><!-- .col-sm-10 -->
        </div><!-- .content-wrapper -->
    </article><!-- .section-wrapper -->

    <article id="reviews" class="section-wrapper clearfix" data-custom-background-img="{{asset('img/bg6.jpg')}}">
        <div class="content-wrapper clearfix">
            <div class="col-sm-10 col-md-9 pull-right">
                <div class="review-item">
                    <h6>Роман Шляхов, интернет-предприниматель, продюсер, миллионер</h6>
                    <p>Работали над написанием продающих текстов для Романа и его учеников.</p>
                    <img src="{{asset('img/Shlyahov.png')}}" alt="Shlyahov">
                </div>
            </div><!-- .col-sm-10 -->
        </div><!-- .content-wrapper -->
    </article><!-- .section-wrapper -->

    <article id="reviews" class="section-wrapper clearfix" data-custom-background-img="{{asset('img/bg6.jpg')}}">
        <div class="content-wrapper clearfix">
            <div class="col-sm-10 col-md-9 pull-right">
                <div class="review-item">
                    <h6>Представитель крупного украинского застройщика (название не можем назвать согласно требований Договора о конфиденциальности)</h6>
                    <p>Работали над формированием узнаваемости и доверия к компании, т.к.она впервые зашла на рынок недвижимости Киева, через активное ведение бизнес-страницы на Facebook.</p>
                    <img src="{{asset('img/potolok.png')}}" alt="potolok">
                </div>
            </div><!-- .col-sm-10 -->
        </div><!-- .content-wrapper -->
    </article><!-- .section-wrapper -->

    <article id="reviews" class="section-wrapper clearfix" data-custom-background-img="{{asset('img/bg6.jpg')}}">
        <div class="content-wrapper clearfix">
            <div class="col-sm-10 col-md-9 pull-right">
                <div class="review-item">
                    <h6>Проект Виктории Шуриной, Духовного тренера счастливых людей</h6>
                    <p>Работали над написанием продающих текстов для Виктории, а также комплексно над ведением страниц в соцсетях.
                        <br><br>
                        Важно было вести страницы так, чтобы аудитория чувствовала в каждом посте личность Виктории.
                    </p>
                    <img src="{{asset('img/Shurina-review.png')}}" alt="Shurina">
                </div>
            </div><!-- .col-sm-10 -->
        </div><!-- .content-wrapper -->
    </article><!-- .section-wrapper -->

    <article id="reviews" class="section-wrapper clearfix" data-custom-background-img="{{asset('img/bg6.jpg')}}">
        <div class="content-wrapper clearfix">
            <div class="col-sm-10 col-md-9 pull-right">
                <div class="review-item">
                    <h6>Андрей, владелец web-студии</h6>
                    <p>Работали над написанием продающего текста для клиента студии Андрея.</p>
                    <img src="{{asset('img/Andrei.jpg')}}" alt="Andrei">
                </div>
            </div><!-- .col-sm-10 -->
        </div><!-- .content-wrapper -->
    </article><!-- .section-wrapper -->

    <article id="reviews" class="section-wrapper clearfix" data-custom-background-img="{{asset('img/bg6.jpg')}}">
        <div class="content-wrapper clearfix">
            <div class="col-sm-10 col-md-9 pull-right">
                <div class="review-item">
                    <h6>Организатор элитных путешествий</h6>
                    <p>Работали над написанием продающего текста для одного из туров.</p>
                    <img src="{{asset('img/travel-review.jpg')}}" alt="travel">
                </div>
            </div><!-- .col-sm-10 -->
        </div><!-- .content-wrapper -->
    </article><!-- .section-wrapper -->

    <article id="reviews" class="section-wrapper clearfix" data-custom-background-img="{{asset('img/bg6.jpg')}}">
        <div class="content-wrapper clearfix">
            <div class="col-sm-10 col-md-9 pull-right">
                <div class="review-item">
                    <h6>Украинский застройщик экодомов</h6>
                    <p>Работали над написанием продающего текста</p>
                    <img src="{{asset('img/ekodom.png')}}" alt="ekodom">
                </div>
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

@stop