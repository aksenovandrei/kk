@extends('layout.layout')
@include('icludes.menu')
@include('icludes.footer')
@section('title', 'Портфолио')
@section('portfolio')
    <article id="grid" class="section-wrapper clearfix" data-custom-background-img="{{asset('img/bg2.jpg')}}">
        <div class="content-wrapper clearfix">
            <div class="col-sm-11 col-md-10 pull-right">

                <h1 class="section-title">Grid</h1>

                <!-- grid -->
                <section class="grid row clearfix clearfix-for-2cols">

                    <!-- grid item -->
                    <div class="grid-item col-md-6">
                        <div class="item-content clearfix">
                            <span class="icon fa fa-area-chart"></span>
                            <div class="text-content">
                                <h5>Lorem ipsum dolor sit amet</h5>
                                <p>Nullam ac rhoncus sapien, non gravida purus. Aliquam adipiscing eros non elit
                                    imperdiet congue. Integer ultricies.</p>
                            </div>
                        </div><!-- end: .item-content -->
                    </div><!-- end: .grid-item -->

                    <!-- grid item -->
                    <div class="grid-item col-md-6">
                        <div class="item-content clearfix">
                            <span class="icon fa fa-globe"></span>
                            <div class="text-content">
                                <h5>Aliquam adipiscing eros non elit</h5>
                                <p>Nullam ac rhoncus sapien, non gravida purus. Alinon elit imperdiet congue.
                                    Integer ultricies sed ligula eget tempus.</p>
                            </div>
                        </div><!-- end: .item-content -->
                    </div><!-- end: .grid-item -->

                    <!-- grid item -->
                    <div class="grid-item col-md-6">
                        <div class="item-content clearfix">
                            <span class="icon fa fa-certificate"></span>
                            <div class="text-content">
                                <h5>Integer ultricies sed ligula</h5>
                                <p>Aliquam adipiscing eros non elit imperdiet congue. Integer ultricies sed ligula
                                    ligula eget.</p>
                            </div>
                        </div><!-- end: .item-content -->
                    </div><!-- end: .grid-item -->

                    <!-- grid item -->
                    <div class="grid-item col-md-6">
                        <div class="item-content clearfix">
                            <span class="icon fa fa-cloud"></span>
                            <div class="text-content">
                                <h5>Lorem ipsum dolor sit amet</h5>
                                <p>Nullam ac rhoncus. Aliquam adipiscing eros non elit imperdiet congue. Integer
                                    ultricies sed ligula eget tempus.</p>
                            </div>
                        </div><!-- end: .item-content -->
                    </div><!-- end: .grid-item -->

                </section><!-- end: grid -->

            </div><!-- .col-sm-11 -->
        </div><!-- .content-wrapper -->
    </article><!-- .section-wrapper -->
@stop