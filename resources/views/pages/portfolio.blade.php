@extends('layout.layout')
@section('title', 'Портфолио')
@include('includes.sub-menu')
@include('includes.footer')
@section('portfolio')
    <div id="portfolio" class="section-wrapper clearfix section" data-custom-background-img="{{asset('img/bg3.jpg')}}">
        <div class="content-wrapper clearfix">
            <div class="col-sm-11 pull-right">
                <h2 class="section-title" style="text-align: center;">Как мы реализовываем проекты для наших клиентов</h2>
                <div class="row-menu">
                    <div class="btn">
                        <h5><a href="1" class="link-scroll">Ведение блогов</a></h5>
                    </div>
                    <div class="btn">
                        <h5><a href="2" class="link-scroll">SMM</a></h5>
                    </div>
                    <div class="btn">
                        <h5><a href="3" class="link-scroll">Продающий копирайтинг</a></h5>
                    </div>
                </div>
                <div class="row-menu">
                    <div class="btn">
                        <h5><a href="4" class="link-scroll">Email-рассылки</a></h5>
                    </div>
                    <div class="btn">
                        <h5><a href="5" class="link-scroll">Запуски “под ключ”</a></h5>
                    </div>
                </div>

                <h2 class="section-title" id="blog-title">Ведение блогов</h2>

                <!-- feature columns -->
                <section class="feature-columns row clearfix">

                    <!-- feature 1 -->
                    <article class="feature-col col-md-4">
                        <a href="" data="modal-content-3" class="modal-button thumbnail linked"
                           data-toggle="modal"
                           data-target="#common-modal">
                            <div class="image-container">
                                <img src="{{asset('img/granyts-preview.jpg')}}" class="lazy item-thumbnail"
                                     alt="granyts-preview">
                            </div>
                            <div class="caption">
                                <h6>Блог о развитии бизнеса на любимом деле</h6>
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
                                     alt="Kolesnikov">
                            </div>
                            <div class="caption">
                                <h6>Блог эксперта по Facebook из США</h6>
                            </div><!-- .caption -->
                        </a><!-- .thumbnail -->
                    </article>

                    <!-- feature 3 -->
                    <article class="feature-col col-md-4">
                        <a href="" data="modal-content-4" class="modal-button thumbnail linked"
                           data-toggle="modal"
                           data-target="#common-modal">
                            <div class="image-container">
                                <img src="{{asset('img/dhmd-preview.jpg')}}" class="lazy item-thumbnail"
                                     alt="dhmd-preview">
                            </div>
                            <div class="caption">
                                <h6>Блог интернет-магазина одежды ДХМД</h6>
                            </div><!-- .caption -->
                        </a><!-- .thumbnail -->
                    </article>
                </section><!-- end: .feature-columns -->

                <!-- End: Section content to edit -->

            </div><!-- .col-sm-10 -->
        </div><!-- .content-wrapper -->
    </div><!-- .section-wrapper -->

    <div id="portfolio2" class="section-wrapper clearfix section" data-custom-background-img="{{asset('img/bg3.jpg')}}">
        <div class="content-wrapper clearfix">
            <div class="col-sm-11 pull-right">

                <h2 class="section-title">SMM</h2>

                <!-- feature columns -->
                <section class="feature-columns row clearfix">

                    <!-- feature 1 -->
                    <article class="feature-col col-md-4">
                        <a href="" data="modal-content-5" class="modal-button thumbnail linked"
                           data-toggle="modal"
                           data-target="#common-modal">
                            <div class="image-container">
                                <img src="{{asset('img/rotach-preview.jpg')}}" class="lazy item-thumbnail"
                                     alt="rotach-preview">
                            </div>
                            <div class="caption">
                                <h6>Паблик ВКонтакте обучающего проекта для отделочного бизнеса</h6>
                            </div><!-- .caption -->
                        </a><!-- .thumbnail -->
                    </article>

                    <!-- feature 2 -->
                    <article class="feature-col col-md-4">
                        <a href="" data="modal-content-2" class="modal-button thumbnail linked"
                           data-toggle="modal"
                           data-target="#common-modal">
                            <div class="image-container">
                                <img src="{{asset('img/gayvan-preview.jpg')}}" class="lazy item-thumbnail"
                                     alt="gayvan-preview">
                            </div>
                            <div class="caption">
                                <h6>Страница в Instagram интернет-магазина чая из Германии</h6>
                            </div><!-- .caption -->
                        </a><!-- .thumbnail -->
                    </article>

                    <!-- feature 3 -->
                    <article class="feature-col col-md-4">
                        <a href="" data="modal-content-6" class="modal-button thumbnail linked"
                           data-toggle="modal"
                           data-target="#common-modal">
                            <div class="image-container">
                                <img src="{{asset('img/shurina-preview.jpg')}}" class="lazy item-thumbnail"
                                     alt="shurina-preview">
                            </div>
                            <div class="caption">
                                <h6>Страница эксперта в нише эзотерики</h6>
                            </div><!-- .caption -->
                        </a><!-- .thumbnail -->

                        <div id="modal-content-6">
                            <img src="http://kk/img/shurina.jpg" class="lazy full-width"
                                 alt="shurina">
                        </div>
                    </article>
                </section><!-- end: .feature-columns -->

                <!-- End: Section content to edit -->

            </div><!-- .col-sm-10 -->
        </div><!-- .content-wrapper -->
    </div><!-- .section-wrapper -->

    <div id="portfolio3" class="section-wrapper clearfix section" data-custom-background-img="{{asset('img/bg3.jpg')}}"
         data-centered="false">
        <div class="content-wrapper clearfix">
            <div class="col-sm-11 pull-right">

                <h2 class="section-title">Сайты, лендинги, коммерческие предложения</h2>

                <!-- feature columns -->
                <section class="feature-columns row clearfix">

                    <!-- feature 1 -->
                    <article class="feature-col col-md-4">
                        <a href="" data="modal-content-7" class="modal-button thumbnail linked"
                           data-toggle="modal"
                           data-target="#common-modal">
                            <div class="image-container">
                                <img src="{{asset('img/landingtext-preview.jpg')}}" class="lazy item-thumbnail"
                                     alt="granyts-preview">
                            </div>
                            <div class="caption">
                                <h6>Тексты для лендингов</h6>
                            </div><!-- .caption -->
                        </a><!-- .thumbnail -->
                    </article>

                    <!-- feature 2 -->
                    <article class="feature-col col-md-4">
                        <a href="" data="modal-content-8" class="modal-button thumbnail linked"
                           data-toggle="modal"
                           data-target="#common-modal">
                            <div class="image-container">
                                <img src="{{asset('img/leadtext-preview.jpg')}}" class="lazy item-thumbnail"
                                     alt="leadtext-preview">
                            </div>
                            <div class="caption">
                                <h6>Тексты для посадочных страниц и страниц лид-магнитов</h6>
                            </div><!-- .caption -->
                        </a><!-- .thumbnail -->
                    </article>

                    <!-- feature 3 -->
                    <article class="feature-col col-md-4">
                        <a href="" data="modal-content-10" class="modal-button thumbnail linked"
                           data-toggle="modal"
                           data-target="#common-modal">
                            <div class="image-container">
                                <img src="{{asset('img/kluch-preview.jpg')}}" class="lazy item-thumbnail"
                                     alt="kluch-preview">
                            </div>
                            <div class="caption">
                                <h6>Лендинги и посадочные страницы “под ключ”</h6>
                            </div><!-- .caption -->
                        </a><!-- .thumbnail -->
                    </article>

                </section><!-- end: .feature-columns -->
                <section class="feature-columns row clearfix">

                    <!-- feature 4 -->
                    <article class="feature-col col-md-4">
                        <a href="" data="modal-content-12" class="modal-button thumbnail linked"
                           data-toggle="modal"
                           data-target="#common-modal">
                            <div class="image-container">
                                <img src="{{asset('img/korp-preview.jpg')}}" class="lazy item-thumbnail"
                                     alt="korp-preview">
                            </div>
                            <div class="caption">
                                <h6>Тексты на корпоративные сайты</h6>
                            </div><!-- .caption -->
                        </a><!-- .thumbnail -->
                    </article>

                    <!-- feature 5 -->
                    <article class="feature-col col-md-4">
                        <a href="" data="modal-content-19" class="modal-button thumbnail linked"
                           data-toggle="modal"
                           data-target="#common-modal">
                            <div class="image-container">
                                <img src="{{asset('img/kompred-preview.jpg')}}" class="lazy item-thumbnail"
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
        <div class="gap-block"></div>
    </div><!-- .section-wrapper -->

    <div id="portfolio4" class="section-wrapper clearfix section" data-custom-background-img="{{asset('img/bg3.jpg')}}">
        <section class="content-wrapper clearfix">
            <section class="col-sm-11 pull-right">

                <h2 class="section-title">Email-рассылки</h2>

                <!-- feature columns -->
                <section class="feature-columns row clearfix">

                    <!-- feature 1 -->
                    <article class="feature-col col-md-4">
                        <a href="" data="modal-content-20" class="modal-button thumbnail linked"
                           data-toggle="modal"
                           data-target="#common-modal">
                            <div class="image-container">
                                <img src="{{asset('img/zhirkiller-preview.jpg')}}" class="lazy item-thumbnail"
                                     alt="zhirkiller-preview">
                            </div>
                            <div class="caption">
                                <h6>Проект “ЖирКиллер”</h6>
                            </div><!-- .caption -->
                        </a><!-- .thumbnail -->
                    </article>

                    <!-- feature 2 -->
                    <article class="feature-col col-md-4">
                        <a href="" data="modal-content-21" class="modal-button thumbnail linked"
                           data-toggle="modal"
                           data-target="#common-modal">
                            <div class="image-container">
                                <img src="{{asset('img/vinzer-preview.jpg')}}" class="lazy item-thumbnail"
                                     alt="vinzer-preview">
                            </div>
                            <div class="caption">
                                <h6>Проект “Vinzer Home”</h6>
                            </div><!-- .caption -->
                        </a><!-- .thumbnail -->
                    </article>
                    <!-- End: Section content to edit -->
                </section>
            </section>
        </section>
    </div><!-- .section-wrapper -->

    <div id="portfolio5" class="section-wrapper clearfix section" data-custom-background-img="{{asset('img/bg3.jpg')}}">
        <div class="content-wrapper clearfix">
            <div class="col-sm-11 pull-right">

                <h2 class="section-title">Запуски “под ключ”</h2>

                <!-- feature columns -->
                <section class="feature-columns row clearfix">

                    <!-- feature 1 -->
                    <article class="feature-col col-md-4">
                        <a href="" data="modal-content-22" class="modal-button thumbnail linked"
                           data-toggle="modal"
                           data-target="#common-modal">
                            <div class="image-container">
                                <img src="{{asset('img/morozov-preview-big.jpg')}}" class="lazy item-thumbnail"
                                     alt="granyts-preview">
                            </div>
                            <div class="caption">
                                <h6>Курс “Продюсер-миллионер”</h6>
                            </div><!-- .caption -->
                        </a><!-- .thumbnail -->
                    </article>

                    <!-- feature 2 -->
                    <article class="feature-col col-md-4">
                        <a href="" data="modal-content-23" class="modal-button thumbnail linked"
                           data-toggle="modal"
                           data-target="#common-modal">
                            <div class="image-container">
                                <img src="{{asset('img/pishiprosto-preview-big.jpg')}}" class="lazy item-thumbnail"
                                     alt="leadtext-preview">
                            </div>
                            <div class="caption">
                                <h6>Пиши Просто</h6>
                            </div><!-- .caption -->
                        </a><!-- .thumbnail -->
                    </article>
                </section><!-- end: .feature-columns -->
            </div><!-- .col-sm-10 -->
        </div><!-- .content-wrapper -->
    </div><!-- .section-wrapper -->

    <div id="contact" class="section-wrapper clearfix section" data-custom-background-img="{{asset('img/bg3.jpg')}}">
        <div class="content-wrapper clearfix">
            <h2 class="section-title">Хотите задать вопрос?</h2>
            <p class="pull-right">Заполните форму и мы ответим Вам в ближайшее время</p>

            <!-- CONTACT FORM -->
            <div class="col-sm-7 col-md-9 pull-right">
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
                                <textarea placeholder="Ваше сообщение" class="form-control validate-field"
                                          name="message">{{old('message')}}</textarea>
                        </div>
                        <div class="form-group">
                            <img src="{{asset('img/loader-form.GIF')}}" class="form-loader">
                            <button id="sub-btn" type="submit" class="btn btn-yellow btn-sm btn-outline-inverse">Задать вопрос
                            </button>
                        </div>
                        <div class="form-group form-general-error-container"></div>
                    </div><!-- end: form right col -->
                </form>
            </div><!-- end: CONTACT FORM -->
        </div><!-- .content-wrapper -->
    </div><!-- .section-wrapper -->
@stop