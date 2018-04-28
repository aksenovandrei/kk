@extends('layout.layout')
@include('includes.sub-menu')
@include('includes.footer')
@section('title', 'Контакты')
<!-- Menu -->
@yield('sub-menu')
<!-- end: Menu -->
@section('contact')
    <article id="contact" class="section-wrapper clearfix" data-custom-background-img="{{asset('img/bg4.jpg')}}">
        <div class="content-wrapper clearfix">

            <h1 class="section-title">Мы на связи</h1>
            <h4>Хотите заказать услугу,<br> узнать подробнее или задать вопросы?</h4>

            <!-- CONTACT DETAILS -->
            <div class="contact-details col-sm-5 col-md-3">
                {{--<p>123A,<br/>Molestie Lorem Avenue,<br/>Aliquam<br/>AAA0010</p>--}}
                <p>Tel: +7 (499) 677 24 11</p>
                <p>Tel: +38 (094) 711 70 66</p>
                <p><a href="mailto:content.kvartira@gmail.com">content.kvartira@gmail.com</a></p>
                <p>тут будут иконки сцсетей</p>
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
                        <!--<div class="form-group text-right">-->
                        <!--<img id="form-captcha-img" src="img/captcha_img.php">-->
                        <!--<input type="text" class="text-field form-control validate-field required" data-validation-type="captcha" id="form-captcha" placeholder="Enter text" name="captcha">-->
                        <!--<span id="form-captcha-refresh" class="fa fa-refresh" title="Reload"></span>-->
                        <!--</div>                 -->
                    </div><!-- end: form left col -->

                    <!-- form right col -->
                    <div class="col-md-6">
                        <div class="form-group">
                                <textarea placeholder="Ваше сообщение" class="form-control validate-field"
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
    <a href="https://google.com" target="_blank">yyy</a>
@stop