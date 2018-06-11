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