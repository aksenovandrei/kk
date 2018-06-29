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
        <svg class="animate" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
             viewBox="0 0 300 300" style="enable-background:new 0 0 300 300;" xml:space="preserve">
<style type="text/css">
    .st0{fill:#FF9D2E;}
    .st1{fill:none;}
    .st2{fill:#FFFFFF;}
</style>
            <g id="Layer_1">
                <g>
                    <path class="st0" d="M149.3,112.7c10.6-0.4,19.5,7.7,24.8,13.6c-12.4-16.5-28.9-30.1-54.8-47.2c-8.6-5.7-12.2-6.7-19.6-6.7
			c-17.7,0-32,14.3-32,32c0,15.8,11.4,28.9,26.5,31.5c0,0,15.7,2.2,26.9,9.3c11.8,7.4,17.2,16.2,19.8,22.2
			c-4-10.2-12.1-25.9-12.1-35.7C128.7,120.4,135.2,113.3,149.3,112.7z"/>
                    <path class="st0" d="M193,178.3c-26.5-6.5-39.7-16.1-47.8-30.7c-9.4-17.1-6.5-23-2.9-25.9c0,0-5.3,2.9-4.7,12.4
			c0.6,9.4,6.5,21.8,10.6,35.4c3.9,12.9,2.9,12.4,4.1,36.3c0.8,16.1,13.1,29.2,29.2,29.2s29.2-13.1,29.2-29.2
			C210.7,193.5,204,181.5,193,178.3z"/>
                    <path class="st0" d="M218.4,66c-9.4,0-18,3.4-24.8,8.8c-13.2,10.6-11.4,12-22.1,14.8c-15.2,3.9-32.6-5.6-34.1-6.4
			c18.8,10.6,22.6,15.5,31.7,24.1c11.2,10.6,14.7,18.3,28.2,31.1c5.2,4.9,13.3,6.1,21,6.1c21.7,0,39.2-17.6,39.2-39.2
			C257.6,83.6,240,66,218.4,66z"/>
                </g>
            </g>
</svg>
        <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
             viewBox="0 0 1200 300" style="enable-background:new 0 0 1200 300;" xml:space="preserve">
<style type="text/css">
    .st0{fill:#FF9D2E;}
    .st1{fill:none;}
    .st2{fill:#FFFFFF;}
</style>
            <g id="Layer_2">
                <g>
                    <rect x="346.1" y="116.6" class="st1" width="994.5" height="93.4"/>
                    <path class="st2" d="M403.2,181.2h-14.6l-22-30.8v30.8h-12.9v-60.7h12.9v29.4l21.7-29.4h13.7l-22.1,29.1L403.2,181.2z"/>
                    <path class="st2" d="M452,157.9c0,7.6-2,13.5-6,17.7c-4,4.3-9.5,6.4-16.6,6.4c-4.5,0-8.4-1-11.8-2.9c-3.4-2-6-4.8-7.8-8.4
			s-2.7-7.9-2.7-12.8c0-7.6,2-13.5,5.9-17.7c4-4.2,9.5-6.3,16.7-6.3c4.5,0,8.4,1,11.8,2.9c3.4,1.9,6,4.7,7.8,8.3
			C451.1,148.8,452,153,452,157.9z M419.9,157.9c0,4.6,0.8,8.1,2.3,10.4c1.5,2.4,4,3.5,7.4,3.5c3.4,0,5.8-1.2,7.3-3.5
			c1.5-2.3,2.2-5.8,2.2-10.4c0-4.6-0.7-8-2.2-10.3c-1.5-2.3-3.9-3.4-7.3-3.4c-3.4,0-5.8,1.1-7.3,3.4
			C420.7,149.8,419.9,153.3,419.9,157.9z"/>
                    <path class="st2" d="M475.1,134.8v17.8h17.7v-17.8h12.7v46.4h-12.7v-19.1h-17.7v19.1h-12.7v-46.4H475.1z"/>
                    <path class="st2" d="M557.2,134.8v9.5H542v36.9h-12.7v-36.9h-15.2v-9.5H557.2z"/>
                    <path class="st2" d="M586.8,182c-7.5,0-13.3-2.1-17.5-6.2c-4.2-4.1-6.3-10-6.3-17.5c0-7.8,1.9-13.8,5.8-18
			c3.9-4.2,9.3-6.4,16.1-6.4c6.6,0,11.7,1.9,15.3,5.6s5.5,8.9,5.5,15.5v6.1h-29.9c0.1,3.6,1.2,6.4,3.2,8.4c2,2,4.8,3,8.4,3
			c2.8,0,5.4-0.3,7.9-0.9s5.1-1.5,7.8-2.8v9.8c-2.2,1.1-4.6,1.9-7.1,2.5C593.5,181.8,590.4,182,586.8,182z M585,142.9
			c-2.7,0-4.8,0.9-6.3,2.6c-1.5,1.7-2.4,4.1-2.6,7.2h17.8c-0.1-3.1-0.9-5.5-2.4-7.2C589.8,143.8,587.7,142.9,585,142.9z"/>
                    <path class="st2" d="M628.7,134.8v17.8h17.7v-17.8H659v46.4h-12.7v-19.1h-17.7v19.1H616v-46.4H628.7z"/>
                    <path class="st2" d="M710.7,134.8v9.5h-15.2v36.9h-12.7v-36.9h-15.2v-9.5H710.7z"/>
                    <path class="st2" d="M813.9,181.2h-14.6l-22-30.8v30.8h-12.9v-60.7h12.9v29.4l21.7-29.4h13.7l-22.1,29.1L813.9,181.2z"/>
                    <path class="st2" d="M863.4,147c0,2.5-0.8,4.6-2.3,6.4c-1.6,1.8-3.9,2.9-6.9,3.4v0.3c3.3,0.4,5.9,1.5,7.8,3.4
			c1.9,1.9,2.9,4.2,2.9,6.9c0,4.5-1.8,7.9-5.3,10.3c-3.5,2.4-8.6,3.5-15.2,3.5h-23.8v-46.4h23.8c6.4,0,11.1,1,14.3,3.1
			C861.8,140,863.4,143,863.4,147z M850.6,148c0-2.8-2.2-4.2-6.7-4.2h-10.6v9.2h9.2c2.7,0,4.7-0.4,6.1-1.2
			C849.9,151,850.6,149.7,850.6,148z M851.8,166.7c0-1.8-0.7-3.1-2.1-4c-1.4-0.8-3.5-1.2-6.3-1.2h-10v11h10.3c2.7,0,4.7-0.5,6.1-1.5
			C851.1,169.9,851.8,168.5,851.8,166.7z"/>
                    <path class="st2" d="M904.4,181.2l-2.4-6.3h-0.3c-2.1,2.7-4.3,4.5-6.6,5.6c-2.3,1-5.2,1.6-8.8,1.6c-4.5,0-8-1.3-10.5-3.8
			s-3.8-6.2-3.8-10.9c0-4.9,1.7-8.6,5.2-10.9c3.4-2.3,8.6-3.6,15.6-3.9l8.1-0.2v-2c0-4.7-2.4-7.1-7.2-7.1c-3.7,0-8.1,1.1-13.1,3.4
			l-4.2-8.5c5.3-2.8,11.3-4.2,17.8-4.2c6.2,0,11,1.4,14.3,4.1c3.3,2.7,5,6.8,5,12.4v30.9H904.4z M900.6,159.7l-4.9,0.2
			c-3.7,0.1-6.4,0.8-8.2,2c-1.8,1.2-2.7,3.1-2.7,5.6c0,3.6,2,5.4,6.1,5.4c2.9,0,5.3-0.8,7-2.5c1.8-1.7,2.6-3.9,2.6-6.7V159.7z"/>
                    <path class="st2" d="M951.7,182c-5.5,0-9.7-2-12.8-5.9h-0.7c0.4,3.9,0.7,6.1,0.7,6.7v18.8h-12.7v-66.8h10.3l1.8,6h0.6
			c3-4.6,7.3-6.9,13.2-6.9c5.5,0,9.8,2.1,12.9,6.4c3.1,4.2,4.6,10.1,4.6,17.6c0,5-0.7,9.3-2.2,12.9c-1.5,3.7-3.5,6.4-6.2,8.3
			C958.5,181.1,955.4,182,951.7,182z M948,144.1c-3.1,0-5.4,1-6.8,2.9c-1.4,1.9-2.2,5.1-2.2,9.5v1.4c0,5,0.7,8.5,2.2,10.7
			s3.8,3.2,7,3.2c5.7,0,8.5-4.7,8.5-14c0-4.6-0.7-8-2.1-10.3C953.2,145.2,951,144.1,948,144.1z"/>
                    <path class="st2" d="M1018.4,134.8v9.5h-15.2v36.9h-12.7v-36.9h-15.2v-9.5H1018.4z"/>
                    <path class="st2" d="M1039.3,134.8v18.3c0,1.9-0.3,6.7-1,14.2l21.4-32.5h15.2v46.4h-12.2v-18.5c0-3.3,0.3-7.9,0.8-13.9l-21.3,32.5
			h-15.2v-46.4H1039.3z"/>
                    <path class="st2" d="M1113.8,182c-5.5,0-9.7-2-12.8-5.9h-0.7c0.4,3.9,0.7,6.1,0.7,6.7v18.8h-12.7v-66.8h10.3l1.8,6h0.6
			c3-4.6,7.3-6.9,13.2-6.9c5.5,0,9.8,2.1,12.9,6.4c3.1,4.2,4.6,10.1,4.6,17.6c0,5-0.7,9.3-2.2,12.9c-1.5,3.7-3.5,6.4-6.2,8.3
			C1120.5,181.1,1117.4,182,1113.8,182z M1110,144.1c-3.1,0-5.4,1-6.8,2.9c-1.4,1.9-2.2,5.1-2.2,9.5v1.4c0,5,0.7,8.5,2.2,10.7
			s3.8,3.2,7,3.2c5.7,0,8.5-4.7,8.5-14c0-4.6-0.7-8-2.1-10.3C1115.2,145.2,1113,144.1,1110,144.1z"/>
                    <path class="st2" d="M1171.5,181.2l-2.4-6.3h-0.3c-2.1,2.7-4.3,4.5-6.6,5.6c-2.3,1-5.2,1.6-8.8,1.6c-4.5,0-8-1.3-10.5-3.8
			s-3.8-6.2-3.8-10.9c0-4.9,1.7-8.6,5.2-10.9c3.4-2.3,8.6-3.6,15.6-3.9l8.1-0.2v-2c0-4.7-2.4-7.1-7.2-7.1c-3.7,0-8.1,1.1-13.1,3.4
			l-4.2-8.5c5.3-2.8,11.3-4.2,17.8-4.2c6.2,0,11,1.4,14.3,4.1c3.3,2.7,5,6.8,5,12.4v30.9H1171.5z M1167.8,159.7l-4.9,0.2
			c-3.7,0.1-6.4,0.8-8.2,2c-1.8,1.2-2.7,3.1-2.7,5.6c0,3.6,2,5.4,6.1,5.4c2.9,0,5.3-0.8,7-2.5c1.8-1.7,2.6-3.9,2.6-6.7V159.7z"/>
                </g>
                <g>
                    <path class="st0" d="M338,208h-20.1V97.9H338v8.8h-9.3v92.6h9.3V208z"/>
                </g>
                <g>
                    <path class="st0" d="M717.9,97.9H738V208h-20.1v-8.8h9.3v-92.6h-9.3V97.9z"/>
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
<script>
    window.onload = function () {
        function fadeOutEffect(el) {
            var fadeEffect = setInterval(function () {
                if (!el.style.opacity) {
                    el.style.opacity = 1;
                }
                if (el.style.opacity > 0) {
                    el.style.opacity -= 0.05;
                } else {
                clearInterval(fadeEffect);
                    document.querySelector('.KvPreloaderDiv').style.display = "none"
                }
            }, 20);
        }
        fadeOutEffect(document.querySelector('.KvPreloaderDiv'));
    }
</script>
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

<!-- Подгружаем все картинки, чтобы фон плавно менялся при первой загрузке -->
{{--<img class="hidden" src="{{asset('img/bg9.jpg')}}" alt="1">
<img class="hidden" src="{{asset('img/bg2.jpg')}}" alt="2">
<img class="hidden" src="{{asset('img/bg6.jpg')}}" alt="3">
<img class="hidden" src="{{asset('img/bg3.jpg')}}" alt="4">
<img class="hidden" src="{{asset('img/bg3.jpg')}}" alt="5">
<img class="hidden" src="{{asset('img/bg4.jpg')}}" alt="6">--}}

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