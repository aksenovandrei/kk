@extends('layout.layout')
@include('includes.menu')
@include('includes.footer')
@section('title', 'Вакансии')
@section('vacancies')
    <article id="featured" class="section-wrapper clearfix" data-custom-background-img="{{asset('img/bg3.jpg')}}">
        <div class="content-wrapper clearfix">
            <div class="col-sm-11 pull-right">

                <h1 class="section-title">Featured</h1>

                <!-- feature columns -->
                <section class="feature-columns row clearfix">

                    <!-- feature 1 -->
                    <article class="feature-col col-md-4">
                        <a href="" onclick="populate_and_open_modal(event, 'modal-content-6');"
                           class="thumbnail linked">
                            <div class="image-container">
                                <img data-img-src="{{asset('img/project-3.jpg')}}" class="lazy item-thumbnail" alt="Lorem Ipsum">
                            </div>
                            <div class="caption">
                                <h5>Image Carousel</h5>
                                <p>This feature contains an image carousel when you open popup.</p>
                            </div><!-- .caption -->
                        </a><!-- .thumbnail -->

                        <div class="content-to-populate-in-modal" id="modal-content-6">
                            <h1>Sed scelerisque</h1>
                            <p>Nullam ac rhoncus. Aliquam adipiscing eros non elit imperdiet congue. Etiam at ligula
                                sit amet arcu laoreet consequat.<br/></p>

                            <!-- image slider inside popup -->
                            <div id="unique-id-for-image-slider" class="owl-carousel popup-image-gallery">
                                <!-- slide -->
                                <div>
                                    <!-- caption is optional. To remove it, remove the <h6> below -->
                                    <h6 class="caption">Caption for Image 1</h6>
                                    <img class="lazyOwl" data-src="{{asset('img/bg1.jpg')}}">
                                </div>
                                <!-- slide -->
                                <div>
                                    <h6 class="caption">Caption for Image 2</h6>
                                    <img class="lazyOwl" data-src="{{asset('img/bg2.jpg')}}">
                                </div>
                                <!-- slide -->
                                <div>
                                    <h6 class="caption">Caption for Image 3</h6>
                                    <img class="lazyOwl" data-src="{{asset('img/bg3.jpg')}}">
                                </div>
                            </div>
                        </div><!-- #modal-content-6 -->
                    </article>

                    <!-- feature 2 -->
                    <article class="feature-col col-md-4">
                        <a href="" onclick="populate_and_open_modal(event, 'modal-content-7');"
                           class="thumbnail linked">
                            <div class="image-container">
                                <img data-img-src="{{asset('img/project-2.jpg')}}" class="lazy item-thumbnail" alt="Lorem Ipsum">
                            </div>
                            <div class="caption">
                                <h5>Text popup</h5>
                                <p>This feature contains generic image and text content when you open popup.</p>
                            </div><!-- .caption -->
                        </a><!-- .thumbnail -->

                        <div class="content-to-populate-in-modal" id="modal-content-7">
                            <img data-img-src="{{asset('img/top-image2.jpg')}}" class="lazy full-width" alt="Lorem Ipsum">
                            <h1>Sed scelerisque</h1>
                            <p>Nullam ac rhoncus. Aliquam adipiscing eros non elit imperdiet congue. Etiam at ligula
                                sit amet arcu laoreet consequat. Duis dictum lorem metus, vitae dapibus risus
                                imperdiet nec. Suspendisse molestie lorem odio</a>, sit amet. </p>
                            <p>Laoreet consequat. Duis dictum lorem metus, vitae dapibus risus imperdiet nec.
                                Suspendisse molestie lorem odio, sit amet.</p>
                            <p>Suspendisse molestie lorem odio, sit amet. Duis dictum lorem metus, vitae dapibus
                                risus imperdiet nec. Suspendisse molestie lorem odio test.</p>
                        </div><!-- #modal-content-7 -->
                    </article>

                    <!-- feature 3 -->
                    <article class="feature-col col-md-4">
                        <a href="" onclick="populate_and_open_modal(event, 'modal-content-8', '', 'full-size');"
                           class="thumbnail linked">
                            <div class="image-container">
                                <img data-img-src="{{asset('img/project-4.jpg')}}" class="lazy item-thumbnail" alt="Lorem Ipsum">
                            </div>
                            <div class="caption">
                                <h5>Alternate Gallery</h5>
                                <p>Inside this feature's popup you'll find an alternative version of an image
                                    gallery.</p>
                            </div><!-- .caption -->
                        </a><!-- .thumbnail -->

                        <div class="content-to-populate-in-modal" id="modal-content-8">
                            <h1>Sed scelerisque</h1>
                            <p>Nullam ac rhoncus. Aliquam adipiscing eros non elit imperdiet congue. Etiam at ligula
                                sit amet arcu laoreet consequat. Duis dictum lorem metus, vitae dapibus risus
                                imperdiet nec. Suspendisse molestie lorem odio</a>, sit amet. Adipiscing eros non
                                elit imperdiet congue tiam at ligula sit amet arcu.</p>

                            <!-- alt image slider inside popup -->
                            <div id="unique-id-for-alt-image-slider" class="owl-carousel popup-alt-image-gallery">
                                <div class="item"><a href="{{asset('img/bg1.jpg')}}" data-lightbox="popup-alt-gallery"><img
                                                class="lazyOwl" data-src="{{asset('img/gallery-thumb-1.jpg')}}"></a></div>
                                <div class="item"><a href="{{asset('img/bg2.jpg')}}" data-lightbox="popup-alt-gallery"><img
                                                class="lazyOwl" data-src="{{asset('img/gallery-thumb-2.jpg')}}"></a></div>
                                <div class="item"><a href="{{asset('img/bg3.jpg')}}" data-lightbox="popup-alt-gallery"><img
                                                class="lazyOwl" data-src="{{asset('img/gallery-thumb-3.jpg')}}"></a></div>
                                <div class="item"><a href="{{asset('img/bg4.jpg')}}" data-lightbox="popup-alt-gallery"><img
                                                class="lazyOwl" data-src="{{asset('img/gallery-thumb-4.jpg')}}"></a></div>
                                <div class="item"><a href="{{asset('img/bg5.jpg')}}" data-lightbox="popup-alt-gallery"><img
                                                class="lazyOwl" data-src="{{asset('img/gallery-thumb-5.jpg')}}"></a></div>
                                <div class="item"><a href="{{asset('img/bg6.jpg')}}" data-lightbox="popup-alt-gallery"><img
                                                class="lazyOwl" data-src="{{asset('img/gallery-thumb-6.jpg')}}"></a></div>
                                <div class="item"><a href="{{asset('img/bg2.jpg')}}" data-lightbox="popup-alt-gallery"><img
                                                class="lazyOwl" data-src="{{asset('img/gallery-thumb-2.jpg')}}"></a></div>
                                <div class="item"><a href="{{asset('img/bg3.jpg')}}" data-lightbox="popup-alt-gallery"><img
                                                class="lazyOwl" data-src="{{asset('img/gallery-thumb-3.jpg')}}"></a></div>
                            </div>
                        </div><!-- #modal-content-8 -->
                    </article>

                </section><!-- end: .feature-columns -->

                <!-- End: Section content to edit -->

            </div><!-- .col-sm-10 -->
        </div><!-- .content-wrapper -->
    </article><!-- .section-wrapper -->
@stop