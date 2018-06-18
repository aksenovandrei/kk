<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author"
          content="Контент Квартира. Ваш удаленный контент-отдел. Решим задачу качественного присутствия Вашего бизнеса в сети. Контент-маркетинг. Копирайтинг. SMM. Реклама. Дизайн. Технические задачи любой сложности.">

    <title>@yield('title')</title>

    <link href="{{ asset('css/preloader.css') }}" rel="stylesheet">
    <script>
        window.onload = function() {
            $(".KvPreloaderDiv").delay(300).fadeOut(300);
        };
    </script>

    <!-- favicon -->
    <link rel="shortcut icon" href="{{asset('img/kk_favicon.png')}}" type="image/x-icon">
    <!-- Bootstrap core CSS -->
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
    <!-- Bootstrap theme -->
    <link href="{{ asset('css/bootstrap-theme.min.css') }}" rel="stylesheet">

{{--    <!-- intro animations -->
    <link href="{{ asset('css/animate.css') }}" rel="stylesheet">--}}

    <!-- font awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.8/css/all.css"
          integrity="sha384-3AB7yXWz4OeoZcPbieVW64vVXEwADiYyAEhwilzWsLw+9FgqpyjjStpPnpBO8o8S" crossorigin="anonymous">

    <!-- fullPage styles -->
    <link href="{{ asset('css/jquery.fullpage.css') }}" rel="stylesheet">
    <!-- main styles -->
    <link href="{{ asset('css/styles.css') }}" rel="stylesheet">
</head>

<body>
<div class="KvPreloaderDiv">
    <div class="KvPreloaderImage">
        <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
             viewBox="-100 -100 1600 450">
<style type="text/css">
    .st0{fill:#FBB03B;}
    .st1{fill:none;}
    .st2{fill:#FFFFFF;}
</style>
            <g id="Layer_1">
                <path id="green" class="st0 animate" d="M110.3,140.4c0,0-2.5-19.9-26.5-35.1C70.2,96.7,51.2,94,51.2,94C32.9,90.8,19,74.9,19,55.7
		c0-21.4,17.4-38.8,38.8-38.8c9,0,13.4,1.3,23.8,8.2c31.5,20.8,51.5,37.3,66.5,57.3c-6.4-7.2-17.2-17-30.1-16.5
		c-17.2,0.7-25.1,9.3-25.1,22.9C93.1,103.8,108.9,130.3,110.3,140.4z"/>
                <path class="st0 animate" d="M109.6,76.8c-4.3,3.6-7.9,10.7,3.6,31.5c9.7,17.7,25.8,29.3,58,37.2c13.4,3.9,21.5,18.5,21.5,33.3
		c0,19.6-15.9,35.4-35.4,35.4s-34.5-15.9-35.4-35.4c-1.4-29-0.3-28.4-5-44c-5-16.5-12.2-31.5-12.9-42.9
		C103.1,80.3,109.6,76.8,109.6,76.8z"/>
                <path class="st0 animate" d="M103.5,30c0,0,22.2,12.9,41.5,7.9c12.9-3.4,10.7-5,26.8-17.9c8.3-6.6,18.7-10.7,30.1-10.7
		c26.3,0,47.6,21.3,47.6,47.6s-21.3,47.6-47.6,47.6c-9.4,0-19.2-1.4-25.5-7.4c-16.4-15.5-20.7-24.8-34.3-37.7
		C131.1,48.8,126.4,42.8,103.5,30z"/>
            </g>
            <g id="Layer_2">
                <g>
                    <rect x="340" y="69.4" class="st1" width="1207" height="113.4"/>
                    <path class="st2 logoText" d="M409.3,147.8h-17.7l-26.7-37.3v37.3h-15.6V74.2h15.6v35.7l26.4-35.7h16.6l-26.8,35.4L409.3,147.8z"/>
                    <path class="st2 logoText" d="M468.6,119.5c0,9.2-2.4,16.3-7.3,21.5s-11.6,7.8-20.2,7.8c-5.4,0-10.2-1.2-14.3-3.6s-7.3-5.8-9.5-10.2
			c-2.2-4.4-3.3-9.6-3.3-15.5c0-9.2,2.4-16.4,7.2-21.5c4.8-5.1,11.6-7.7,20.3-7.7c5.4,0,10.2,1.2,14.3,3.5c4.1,2.4,7.3,5.7,9.5,10.1
			C467.4,108.5,468.6,113.6,468.6,119.5z M429.6,119.5c0,5.6,0.9,9.8,2.7,12.6c1.8,2.9,4.8,4.3,8.9,4.3c4.1,0,7-1.4,8.8-4.3
			c1.8-2.8,2.7-7.1,2.7-12.7c0-5.6-0.9-9.8-2.7-12.5c-1.8-2.8-4.8-4.2-8.9-4.2c-4.1,0-7.1,1.4-8.9,4.2S429.6,113.9,429.6,119.5z"/>
                    <path class="st2 logoText" d="M496.6,91.5v21.7h21.5V91.5h15.4v56.3h-15.4v-23.2h-21.5v23.2h-15.4V91.5H496.6z"/>
                    <path class="st2 logoText" d="M596.2,91.5V103h-18.4v44.8h-15.4V103h-18.5V91.5H596.2z"/>
                    <path class="st2 logoText" d="M632.1,148.8c-9.1,0-16.2-2.5-21.3-7.5c-5.1-5-7.7-12.1-7.7-21.3c0-9.4,2.4-16.7,7.1-21.9
			c4.7-5.2,11.2-7.7,19.6-7.7c8,0,14.2,2.3,18.6,6.8c4.4,4.5,6.6,10.8,6.6,18.8v7.5h-36.3c0.2,4.4,1.5,7.8,3.9,10.2
			c2.4,2.5,5.8,3.7,10.2,3.7c3.4,0,6.6-0.4,9.6-1.1s6.2-1.8,9.5-3.4v11.9c-2.7,1.3-5.6,2.3-8.6,3
			C640.2,148.5,636.5,148.8,632.1,148.8z M630,101.4c-3.3,0-5.8,1-7.7,3.1c-1.8,2.1-2.9,5-3.2,8.8h21.6c-0.1-3.8-1.1-6.7-3-8.8
			C635.8,102.4,633.2,101.4,630,101.4z"/>
                    <path class="st2 logoText" d="M682.9,91.5v21.7h21.5V91.5h15.4v56.3h-15.4v-23.2h-21.5v23.2h-15.4V91.5H682.9z"/>
                    <path class="st2 logoText" d="M782.5,91.5V103h-18.4v44.8h-15.4V103h-18.5V91.5H782.5z"/>
                    <path class="st2 logoText" d="M907.8,147.8h-17.7l-26.7-37.3v37.3h-15.6V74.2h15.6v35.7l26.4-35.7h16.6l-26.8,35.4L907.8,147.8z"/>
                    <path class="st2 logoText" d="M967.9,106.3c0,3-0.9,5.6-2.8,7.7c-1.9,2.1-4.7,3.5-8.4,4.1v0.4c4,0.5,7.2,1.8,9.5,4.1
			c2.3,2.3,3.5,5.1,3.5,8.4c0,5.5-2.2,9.6-6.4,12.5c-4.3,2.9-10.4,4.3-18.4,4.3h-28.9V91.5h28.9c7.7,0,13.5,1.3,17.4,3.8
			C965.9,97.7,967.9,101.4,967.9,106.3z M952.3,107.5c0-3.4-2.7-5.1-8.2-5.1h-12.9v11.1h11.1c3.3,0,5.7-0.5,7.4-1.4
			C951.5,111.1,952.3,109.6,952.3,107.5z M953.7,130.2c0-2.2-0.9-3.8-2.6-4.8c-1.7-1-4.3-1.5-7.7-1.5h-12.2v13.3h12.5
			c3.3,0,5.7-0.6,7.4-1.8C952.9,134.1,953.7,132.4,953.7,130.2z"/>
                    <path class="st2 logoText" d="M1017.6,147.8l-3-7.7h-0.4c-2.6,3.3-5.2,5.5-8,6.8c-2.7,1.3-6.3,1.9-10.7,1.9c-5.4,0-9.7-1.5-12.8-4.6
			c-3.1-3.1-4.7-7.5-4.7-13.2c0-6,2.1-10.4,6.3-13.2c4.2-2.8,10.5-4.4,18.9-4.7l9.8-0.3v-2.5c0-5.7-2.9-8.6-8.8-8.6
			c-4.5,0-9.8,1.4-15.9,4.1l-5.1-10.4c6.5-3.4,13.7-5.1,21.6-5.1c7.6,0,13.3,1.6,17.4,4.9c4,3.3,6,8.3,6,15v37.5H1017.6z
			 M1013.1,121.7l-5.9,0.2c-4.5,0.1-7.8,0.9-10,2.4c-2.2,1.5-3.3,3.7-3.3,6.8c0,4.3,2.5,6.5,7.5,6.5c3.6,0,6.4-1,8.5-3.1
			c2.1-2,3.2-4.8,3.2-8.2V121.7z"/>
                    <path class="st2 logoText" d="M1075.1,148.8c-6.6,0-11.8-2.4-15.6-7.2h-0.8c0.5,4.7,0.8,7.4,0.8,8.2v22.8h-15.4V91.5h12.5l2.2,7.3h0.7
			c3.6-5.6,8.9-8.4,16-8.4c6.6,0,11.9,2.6,15.6,7.7c3.8,5.1,5.6,12.3,5.6,21.4c0,6-0.9,11.2-2.6,15.7c-1.8,4.4-4.3,7.8-7.5,10.1
			C1083.3,147.7,1079.5,148.8,1075.1,148.8z M1070.5,102.7c-3.8,0-6.6,1.2-8.3,3.5c-1.7,2.3-2.7,6.2-2.7,11.6v1.7
			c0,6,0.9,10.4,2.7,13s4.6,3.9,8.5,3.9c6.9,0,10.3-5.7,10.3-17c0-5.5-0.8-9.7-2.5-12.5C1076.8,104.1,1074.2,102.7,1070.5,102.7z"/>
                    <path class="st2 logoText" d="M1156,91.5V103h-18.4v44.8h-15.4V103h-18.5V91.5H1156z"/>
                    <path class="st2 logoText" d="M1181.4,91.5v22.3c0,2.4-0.4,8.1-1.2,17.2l26-39.5h18.5v56.3h-14.9v-22.5c0-4,0.3-9.6,1-16.9l-25.9,39.4
			h-18.4V91.5H1181.4z"/>
                    <path class="st2 logoText" d="M1271.7,148.8c-6.6,0-11.8-2.4-15.6-7.2h-0.8c0.5,4.7,0.8,7.4,0.8,8.2v22.8h-15.4V91.5h12.5l2.2,7.3h0.7
			c3.6-5.6,8.9-8.4,16-8.4c6.6,0,11.9,2.6,15.6,7.7c3.8,5.1,5.6,12.3,5.6,21.4c0,6-0.9,11.2-2.6,15.7c-1.8,4.4-4.3,7.8-7.5,10.1
			C1280,147.7,1276.1,148.8,1271.7,148.8z M1267.2,102.7c-3.8,0-6.6,1.2-8.3,3.5c-1.7,2.3-2.7,6.2-2.7,11.6v1.7c0,6,0.9,10.4,2.7,13
			s4.6,3.9,8.5,3.9c6.9,0,10.3-5.7,10.3-17c0-5.5-0.8-9.7-2.5-12.5C1273.5,104.1,1270.8,102.7,1267.2,102.7z"/>
                    <path class="st2 logoText" d="M1341.9,147.8l-3-7.7h-0.4c-2.6,3.3-5.2,5.5-8,6.8c-2.7,1.3-6.3,1.9-10.7,1.9c-5.4,0-9.7-1.5-12.8-4.6
			c-3.1-3.1-4.7-7.5-4.7-13.2c0-6,2.1-10.4,6.3-13.2c4.2-2.8,10.5-4.4,18.9-4.7l9.8-0.3v-2.5c0-5.7-2.9-8.6-8.8-8.6
			c-4.5,0-9.8,1.4-15.9,4.1l-5.1-10.4c6.5-3.4,13.7-5.1,21.6-5.1c7.6,0,13.3,1.6,17.4,4.9c4,3.3,6,8.3,6,15v37.5H1341.9z
			 M1337.3,121.7l-5.9,0.2c-4.5,0.1-7.8,0.9-10,2.4c-2.2,1.5-3.3,3.7-3.3,6.8c0,4.3,2.5,6.5,7.5,6.5c3.6,0,6.4-1,8.5-3.1
			c2.1-2,3.2-4.8,3.2-8.2V121.7z"/>
                </g>
                <g>
                    <path class="st0 logoText" d="M330.2,180.4h-24.4V46.7h24.4v10.6h-11.3v112.4h11.3V180.4z"/>
                </g>
                <g>
                    <path class="st0 logoText" d="M791.3,46.7h24.4v133.7h-24.4v-10.6h11.3V57.4h-11.3V46.7z"/>
                </g>
                <g>
                </g>
                <g>
                </g>
                <g>
                </g>
                <g>
                </g>
                <g>
                </g>
                <g>
                </g>
                <g>
                </g>
                <g>
                </g>
                <g>
                </g>
                <g>
                </g>
                <g>
                </g>
                <g>
                </g>
                <g>
                </g>
                <g>
                </g>
                <g>
                </g>
            </g>
</svg>
    </div>
</div>
<div class="upArrow"></div>
@yield('menu')
@yield('sub-menu')
{{--<div id="outer-container">--}}
    <!-- Main Content -->
    <div id="fullpage" class="clearfix main-content">

        @yield('intro')
        @yield('about')
        @yield('services')
        @yield('reviews')
        @yield('portfolio')
        {{--@yield('partners')--}}
{{--        @yield('vacancies')--}}
        @yield('contact')
        @yield('thanks')
    </div>
    <!-- end: Main Content -->
    <!-- Footer -->
    <section id="footer">
        @yield('footer')
    </section>
    <!-- end: Footer -->
{{--</div>--}}
<!-- Modal -->
<!-- DO NOT MOVE, EDIT OR REMOVE -  this is needed in order for popup content to be populated in it -->
<div class="modal fade" id="common-modal" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">x</button>
            <div class="modal-body clearfix">
            </div><!-- .modal-body -->
        </div><!-- .modal-content -->
    </div><!-- .modal-dialog -->
</div><!-- .modal -->

<div class="modal fade" id="common-modal2" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">x</button>
            <div class="modal-body clearfix">
            </div><!-- .modal-body -->
        </div><!-- .modal-content -->
    </div><!-- .modal-dialog -->
</div><!-- .modal -->

<!-- Modal -->
<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle"
     aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title no-shadow" id="exampleModalLongTitle">Выбранные услуги</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body cart-modal">
                <form class="form-style clearfix form-val" action="{{route('main')}}" method="POST"
                      role="form" name="form_name"> <!-- убрал класс validate-form-->
                {{ csrf_field() }}
                <!-- form left col -->
                    <ul class="content">
                    </ul>
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

                        <div class="form-group">
                            <img src="{{asset('img/loader-form.GIF')}}" class="form-loader">
                            <button id="sub-btn" type="submit" class="btn btn-sm btn-outline-inverse">Отправить</button>
                        </div>
                        <div class="form-group form-general-error-container"></div>

                </form>
            </div>
        </div>
    </div>
</div>

<!-- Javascripts
================================================== -->

<!-- Jquery and Bootstrap JS -->
<script src="{{asset('js/jquery-3.3.1.min.js')}}"></script>
<script src="{{asset('js/bootstrap.min.js')}}"></script>
<script src="{{asset('js/bootstrapValidator.js')}}"></script>

<!-- This following line is only necessary in the case of using the option `scrollOverflow:true` -->
<script type="text/javascript" src="{{asset('js/scrolloverflow.min.js')}}"></script>

<!-- FullPge.js -->
<script src="{{asset('js/jquery.fullpage.extensions.min.js')}}"></script>


<!-- Custom functions for this theme -->
<script src="{{asset('js/app.js')}}"></script>
</body>
</html>