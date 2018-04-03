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
    <link rel="icon" type="image/png" href="{{asset('img/favicon.png')}}">
    <!-- Bootstrap core CSS -->
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
    <!-- Bootstrap theme -->
    <link href="{{ asset('css/bootstrap-theme.min.css') }}" rel="stylesheet">
    <!-- vegas bg -->
    <link href="{{ asset('css/jquery.vegas.min.css') }}" rel="stylesheet">
    <!-- owl carousel css -->
    <link href="{{ asset('css/owl.carousel.css') }}" rel="stylesheet">
    <link href="{{ asset('css/owl.theme.css') }}" rel="stylesheet">
    <link href="{{ asset('css/owl.transitions.css') }}" rel="stylesheet">
    <!-- intro animations -->
    <link href="{{ asset('css/animate.css') }}" rel="stylesheet">
    <!-- font awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.8/css/all.css" integrity="sha384-3AB7yXWz4OeoZcPbieVW64vVXEwADiYyAEhwilzWsLw+9FgqpyjjStpPnpBO8o8S" crossorigin="anonymous">
    {{--<link href="{{ asset('css/font-awesome.min.css') }}" rel="stylesheet">--}}
    <!-- lightbox -->
    <link href="{{ asset('css/lightbox.css') }}" rel="stylesheet">
    <!-- styles for this template -->
    <link href="{{ asset('css/styles.css') }}" rel="stylesheet">
    <!-- place your extra custom styles in this file -->
    <link href="{{ asset('css/custom.css') }}" rel="stylesheet">

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
</head>

<body data-default-background-img="{{asset('img/bg5.jpg')}}" data-overlay="true" data-overlay-opacity="0.35">
<div id="outer-container">
    <!-- Menu -->
@yield('menu')
<!-- end: Menu -->
    <!-- Main Content -->
    <section id="main-content" class="clearfix">
        @yield('intro')
        @yield('about')
        @yield('services')
        @yield('reviews')
        @yield('portfolio')
        @yield('vacancies')
        @yield('contact')
        @yield('thanks')
    </section>
    <!-- end: Main Content -->
    <!-- Footer -->
    <section id="footer">
        @yield('footer')
    </section>
    <!-- end: Footer -->
</div>
<!-- Modal -->
<!-- DO NOT MOVE, EDIT OR REMOVE -  this is needed in order for popup content to be populated in it -->
<div class="modal fade" id="common-modal" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            <div class="modal-body clearfix">
            </div><!-- .modal-body -->
        </div><!-- .modal-content -->
    </div><!-- .modal-dialog -->
</div><!-- .modal -->

<!-- Javascripts
================================================== -->

<!-- Jquery and Bootstrap JS -->
{{--<script src="{{asset('js/jquery.js')}}"></script>--}}
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>


{{--<script src="https://code.jquery.com/jquery-1.11.2.min.js"></script>--}}
<script>window.jQuery || document.write('<script src="{{asset('js/jquery-1.11.2.min.js')}}"><\/script>')</script>
<script src="{{asset('js/bootstrap.min.js')}}"></script>
<script src="{{asset('js/bootstrapValidator.js')}}"></script>
{{--<script src='http://cdnjs.cloudflare.com/ajax/libs/bootstrap-validator/0.4.5/js/bootstrapvalidator.min.js'></script>--}}
<!-- Easing - for transitions and effects -->
<script src="{{asset('js/jquery.easing.1.3.js')}}"></script>

<!-- background image strech script -->
<script src="{{asset('js/jquery.vegas.min.js')}}"></script>

<!-- detect mobile browsers -->
<script src="{{asset('js/detectmobilebrowser.js')}}"></script>

<!-- detect scrolling -->
<script src="{{asset('js/jquery.scrollstop.min.js')}}"></script>

<!-- owl carousel js -->
<script src="{{asset('js/owl.carousel.min.js')}}"></script>

<!-- lightbox js -->
<script src="{{asset('js/lightbox.min.js')}}"></script>

<!-- intro animations -->
<script src="{{asset('js/wow.min.js')}}"></script>

<!-- responsive videos -->
<script src="{{asset('js/jquery.fitvids.js')}}"></script>

<!-- Custom functions for this theme -->
<script src="{{asset('js/test.js')}}"></script>
<script src="{{asset('js/initialise-functions.js')}}"></script>

<!-- IE9 form fields placeholder fix -->
<!--[if lt IE 9]>
<script>contact_form_IE9_placeholder_fix();</script>
<![endif]-->


</body>
</html>