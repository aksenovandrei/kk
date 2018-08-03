@extends('layout.layout')
@section('title', 'Портфолио')
@include('includes.sub-menu')
@include('includes.footer')
@section('portfolio')
    <div id="portfolio1" class="section-wrapper clearfix section fp-auto-height" data-custom-background-img="{{asset('img/bg3.jpg')}}">
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

                </div>
                <div class="row-menu">
                    <div class="btn">
                        <h5><a href="3" class="link-scroll">Продающий копирайтинг</a></h5>
                    </div>
                    <div class="btn">
                        <h5><a href="4" class="link-scroll">Email-рассылки</a></h5>
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

    <div id="portfolio2" class="section-wrapper clearfix section fp-auto-height" data-custom-background-img="{{asset('img/bg3.jpg')}}">
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
                    </article>
                </section><!-- end: .feature-columns -->
                <!-- End: Section content to edit -->
            </div><!-- .col-sm-10 -->
        </div><!-- .content-wrapper -->
    </div><!-- .section-wrapper -->

    <div id="portfolio3" class="section-wrapper clearfix section fp-auto-height" data-custom-background-img="{{asset('img/bg3.jpg')}}">
        <div class="content-wrapper clearfix">
            <div class="col-sm-11 pull-right">

                <h2 class="section-title">Сайты, лендинги</h2>

                <!-- feature columns -->
                <section class="feature-columns row clearfix">

                    <!-- feature 1 -->
                    <article class="feature-col col-md-4">
                        <a href="" data="modal-content-7" class="modal-button thumbnail linked"
                           data-toggle="modal"
                           data-target="#common-modal">
                            <div class="image-container">
                                <img src="{{asset('img/trueman-preview.jpg')}}" class="lazy item-thumbnail"
                                     alt="trueman-preview.jpg">
                            </div>
                            <div class="caption">
                                <h6>Нестандартные подарки для мужчин</h6>
                            </div><!-- .caption -->
                        </a><!-- .thumbnail -->
                    </article>

                    <!-- feature 2 -->
                    <article class="feature-col col-md-4">
                        <a href="" data="modal-content-0" class="modal-button thumbnail linked"
                           data-toggle="modal"
                           data-target="#common-modal">
                            <div class="image-container">
                                <img src="{{asset('img/mega-preview-small.jpg')}}" class="lazy item-thumbnail"
                                     alt="mega-preview">
                            </div>
                            <div class="caption">
                                <h6>Мегатренинг Ицхака Пинтосевича 2018</h6>
                            </div><!-- .caption -->
                        </a><!-- .thumbnail -->
                    </article>

                    <!-- feature 3 -->
                    <article class="feature-col col-md-4">
                        <a href="" data="modal-content-8" class="modal-button thumbnail linked"
                           data-toggle="modal"
                           data-target="#common-modal">
                            <div class="image-container">
                                <img src="{{asset('img/gifts-preview.jpg')}}" class="lazy item-thumbnail"
                                     alt="gifts-preview">
                            </div>
                            <div class="caption">
                                <h6>Подарочные сертификаты на дегустацию виски</h6>
                            </div><!-- .caption -->
                        </a><!-- .thumbnail -->
                    </article>

                </section><!-- end: .feature-columns -->
                <section class="feature-columns row clearfix">

                    <!-- feature 4 -->
                    <article class="feature-col col-md-4">
                        <a href="" data="modal-content-9" class="modal-button thumbnail linked"
                           data-toggle="modal"
                           data-target="#common-modal">
                            <div class="image-container">
                                <img src="{{asset('img/chuprova-preview.jpg')}}" class="lazy item-thumbnail"
                                     alt="chuprova-preview">
                            </div>
                            <div class="caption">
                                <h6>Курс “Самый красивый Инстаграм”</h6>
                            </div><!-- .caption -->
                        </a><!-- .thumbnail -->
                    </article>

                    <!-- feature 5 -->
                    <article class="feature-col col-md-4">
                        <a href="" data="modal-content-10" class="modal-button thumbnail linked"
                           data-toggle="modal"
                           data-target="#common-modal">
                            <div class="image-container">
                                <img src="{{asset('img/deks-preview.jpg')}}" class="lazy item-thumbnail"
                                     alt="deks-preview">
                            </div>
                            <div class="caption">
                                <h6>Фотопанели из стекла</h6>
                            </div><!-- .caption -->
                        </a><!-- .thumbnail -->
                    </article>

                    <!-- feature 6 -->
                    <article class="feature-col col-md-4">
                        <a href="" data="modal-content-11" class="modal-button thumbnail linked"
                           data-toggle="modal"
                           data-target="#common-modal">
                            <div class="image-container">
                                <img src="{{asset('img/morozovlead-preview.jpg')}}" class="lazy item-thumbnail"
                                     alt="morozovlead-preview">
                            </div>
                            <div class="caption">
                                <h6>Анти Хаос в Интернет Продюсировании</h6>
                            </div><!-- .caption -->
                        </a><!-- .thumbnail -->
                    </article>
                </section><!-- end: .feature-columns -->
                <section class="feature-columns row clearfix">

                    <!-- feature 7 -->
                    <article class="feature-col col-md-4">
                        <a href="" data="modal-content-12" class="modal-button thumbnail linked"
                           data-toggle="modal"
                           data-target="#common-modal">
                            <div class="image-container">
                                <img src="{{asset('img/kosmetologiya-preview.jpg')}}" class="lazy item-thumbnail"
                                     alt="kosmetologiya-preview">
                            </div>
                            <div class="caption">
                                <h6>Косметоллгия Казань</h6>
                            </div><!-- .caption -->
                        </a><!-- .thumbnail -->
                    </article>

                    <!-- feature 8 -->
                    <article class="feature-col col-md-4">
                        <a href="" data="modal-content-13" class="modal-button thumbnail linked"
                           data-toggle="modal"
                           data-target="#common-modal">
                            <div class="image-container">
                                <img src="{{asset('img/sprint-preview.jpg')}}" class="lazy item-thumbnail"
                                     alt="sprint-preview">
                            </div>
                            <div class="caption">
                                <h6>Контент-спринт от Пиши просто</h6>
                            </div><!-- .caption -->
                        </a><!-- .thumbnail -->
                    </article>

                    <!-- feature 9 -->
                    <article class="feature-col col-md-4">
                        <a href="" data="modal-content-14" class="modal-button thumbnail linked"
                           data-toggle="modal"
                           data-target="#common-modal">
                            <div class="image-container">
                                <img src="{{asset('img/pishiprosto-preview.jpg')}}" class="lazy item-thumbnail"
                                     alt="pishiprosto-preview">
                            </div>
                            <div class="caption">
                                <h6>Видео уроки от Пиши просто</h6>
                            </div><!-- .caption -->
                        </a><!-- .thumbnail -->
                    </article>
                </section><!-- end: .feature-columns -->
                <section class="feature-columns row clearfix">

                    <!-- feature 10 -->
                    <article class="feature-col col-md-4">
                        <a href="" data="modal-content-15" class="modal-button thumbnail linked"
                           data-toggle="modal"
                           data-target="#common-modal">
                            <div class="image-container">
                                <img src="{{asset('img/morozov-preview.jpg')}}" class="lazy item-thumbnail"
                                     alt="morozov-preview">
                            </div>
                            <div class="caption">
                                <h6>Курс “Продюсер-миллионер”</h6>
                            </div><!-- .caption -->
                        </a><!-- .thumbnail -->
                    </article>

                    <!-- feature 11 -->
                    <article class="feature-col col-md-4">
                        <a href="" data="modal-content-16" class="modal-button thumbnail linked"
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
                </section><!-- end: .feature-columns -->
                <!-- End: Section content to edit -->
            </div><!-- .col-sm-10 -->
        </div><!-- .content-wrapper -->
    </div><!-- .section-wrapper -->

    <div id="portfolio4" class="section-wrapper clearfix section fp-auto-height" data-custom-background-img="{{asset('img/bg3.jpg')}}">
        <section class="content-wrapper clearfix">
            <div class="col-sm-11 pull-right">

                <h2 class="section-title">Email-рассылки</h2>

                <!-- feature columns -->
                <section class="feature-columns row clearfix">

                    <!-- feature 1 -->
                    <article class="feature-col col-md-4">
                        <a href="" data="modal-content-23" class="modal-button thumbnail linked"
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
                        <a href="" data="modal-content-24" class="modal-button thumbnail linked"
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
            </div>
        </section>
    </div><!-- .section-wrapper -->

    <div id="contact" class="section-wrapper clearfix section fp-auto-height" data-custom-background-img="{{asset('img/bg3.jpg')}}">
        <div class="content-wrapper clearfix">
            <h2 class="section-title">Хотите задать вопрос?</h2>
            <p class="pull-right">Заполните форму и мы ответим Вам в ближайшее время</p>

            <!-- CONTACT FORM -->
            <div class="col-sm-10 pull-right">


                <div class="contact-details col-sm-5 col-md-5">
                    {{--<p>Tel: +7 (499) 677 24 11 <i class="fas fa-mobile-alt"></i></p>
                    <p>Tel: +38 (094) 711 70 66 <i class="fas fa-mobile-alt"></i></p>--}}
                    {{--<p><a href="mailto:content.kvartira@gmail.com">content.kvartira@gmail.com</a><i
                                class="far fa-envelope"></i></p>--}}
                    {{--<p>Мы в соцсетях
                        <a href="https://www.facebook.com/content.kvartira/" target="_blank" title="Facebook"><img
                                    src="{{asset('img/facebook.png')}}" alt="Facebook"></a>
                        <a href="https://vk.com/content_kvartira" target="_blank" title="Vk"><img
                                    src="{{asset('img/vk.png')}}" alt="Vk"></a>
                    </p>--}}
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
                                <button id="sub-btn" type="submit" class="btn btn-sm btn-outline-inverse">Задать вопрос
                                </button>
                                <p><a href="mailto:content.kvartira@gmail.com">content.kvartira@gmail.com</a><i
                                            class="far fa-envelope"></i></p>
                            </div>
                            <div class="form-group form-general-error-container"></div>
                        </div><!-- end: form right col -->
                    </form>
                </div><!-- end: CONTACT FORM -->

            </div><!-- .col-sm-10 -->
        </div><!-- .content-wrapper -->
    </div><!-- .section-wrapper -->
    <!--hiding preloader on this page-->
    <script>
        document.querySelector('.KvPreloaderDiv').style.display = "none";
    </script>
@stop