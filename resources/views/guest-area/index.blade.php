@extends('layouts.guest')

@section('content')
<div class="hero-wrap js-fullheight" style="background-image: url({{asset('lawncare/images/1.jpg')}});" data-stellar-background-ratio="0.5">
    <div class="overlay"></div>
    <div class="container">
        <div class="row no-gutters slider-text js-fullheight align-items-center justify-content-start" data-scrollax-parent="true">
            <div class="col-md-6 ftco-animate">
                <h2 class="subheading">Welcome to Direct Fresh</h2>
                <h1>Convenience at your door step</h1>
                <p class="mb-4">Just place an order and let us work on getting it to your doorstep. With the help of our mobile application you can easily order and pay seamlessly and before you know it your order will be waiting for you at your door step.</p>
                <p><a href="#" class="btn btn-primary mr-md-4 py-2 px-4">Download Now <span class="ion-ios-arrow-forward"></span></a></p>
            </div>
        </div>
    </div>
</div>

<section class="ftco-section">
    <div class="container">
        <div class="row justify-content-center mb-5">
            <div class="col-md-10 text-center heading-section ftco-animate">
                <span class="subheading">Discover</span>
                <h2 class="mb-4">From our catalog</h2>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="carousel-seasonal owl-carousel ftco-owl">
                    @foreach($items as $item)
                    <div class="item">
                        <div class="wrap">
                            <div class="seasonal img d-flex align-items-center justify-content-center" style="background-image: url({{ $item->image }});">
                            </div>
                            <div class="text text-center px-4">
                                <h3><a href="#">{{$item->item_description}}</a></h3>
                                <p>{{ $item->category->name }}</p>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</section>

{{--<section class="ftco-intro bg-primary py-5">
        <div class="container">
            <div class="row justify-content-between align-items-center">
                <div class="col-md-6">
                    <h2>Contact with us</h2>
                    <p>Do you have any comments or questions about the products then contact us.</p>
                </div>
                <div class="col-md-5 text-md-right">
                    <span class="contact-number">+00(123) 456-78-09</span>
                </div>
            </div>
        </div>
    </section>



    <section class="ftco-section testimony-section">
        <div class="container">
            <div class="row justify-content-center mb-5">
                <div class="col-md-7 text-center heading-section ftco-animate">
                    <span class="subheading">Testimonial</span>
                    <h2 class="mb-4">Happy Clients</h2>
                </div>
            </div>
            <div class="row ftco-animate">
                <div class="col-md-12">
                    <div class="carousel-testimony owl-carousel ftco-owl">
                        <div class="item">
                            <div class="testimony-wrap py-4">
                                <div class="text">
                                    <p class="mb-4">Direct Fresh is a proudly Zimbabwean food delivery service provider for all ordinary Zimbabweans. Our products and services are engineered to give you a reliable, inclusive, safe, and convenient way to make purchases, payments, and receive your orders.</p>
                                    <div class="d-flex align-items-center">
                                        <div class="user-img" style="background-image: url(images/person_1.jpg)"></div>
                                        <div class="pl-3">
                                            <p class="name">Roger Scott</p>
                                            <span class="position">Marketing Manager</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="testimony-wrap py-4">
                                <div class="text">
                                    <p class="mb-4">Direct Fresh is a proudly Zimbabwean food delivery service provider for all ordinary Zimbabweans. Our products and services are engineered to give you a reliable, inclusive, safe, and convenient way to make purchases, payments, and receive your orders.</p>
                                    <div class="d-flex align-items-center">
                                        <div class="user-img" style="background-image: url(images/person_2.jpg)"></div>
                                        <div class="pl-3">
                                            <p class="name">Roger Scott</p>
                                            <span class="position">Marketing Manager</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="testimony-wrap py-4">
                                <div class="text">
                                    <p class="mb-4">Direct Fresh is a proudly Zimbabwean food delivery service provider for all ordinary Zimbabweans. Our products and services are engineered to give you a reliable, inclusive, safe, and convenient way to make purchases, payments, and receive your orders.</p>
                                    <div class="d-flex align-items-center">
                                        <div class="user-img" style="background-image: url(images/person_3.jpg)"></div>
                                        <div class="pl-3">
                                            <p class="name">Roger Scott</p>
                                            <span class="position">Marketing Manager</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="testimony-wrap py-4">
                                <div class="text">
                                    <p class="mb-4">Direct Fresh is a proudly Zimbabwean food delivery service provider for all ordinary Zimbabweans. Our products and services are engineered to give you a reliable, inclusive, safe, and convenient way to make purchases, payments, and receive your orders.</p>
                                    <div class="d-flex align-items-center">
                                        <div class="user-img" style="background-image: url(images/person_1.jpg)"></div>
                                        <div class="pl-3">
                                            <p class="name">Roger Scott</p>
                                            <span class="position">Marketing Manager</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="testimony-wrap py-4">
                                <div class="text">
                                    <p class="mb-4">Direct Fresh is a proudly Zimbabwean food delivery service provider for all ordinary Zimbabweans. Our products and services are engineered to give you a reliable, inclusive, safe, and convenient way to make purchases, payments, and receive your orders.</p>
                                    <div class="d-flex align-items-center">
                                        <div class="user-img" style="background-image: url(images/person_2.jpg)"></div>
                                        <div class="pl-3">
                                            <p class="name">Roger Scott</p>
                                            <span class="position">Marketing Manager</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="ftco-section bg-light">
        <div class="container">
            <div class="row justify-content-center mb-5 pb-3">
                <div class="col-md-7 heading-section text-center ftco-animate">
                    <span class="subheading">Our Blog</span>
                    <h2>Recent Blog</h2>
                </div>
            </div>
            <div class="row d-flex">
                <div class="col-md-4 d-flex ftco-animate">
                    <div class="blog-entry justify-content-end">
                        <a href="blog-single.html" class="block-20" style="background-image: url('images/image_1.jpg');">
                        </a>
                        <div class="text p-4 float-right d-block">
                            <div class="topper d-flex align-items-center">
                                <div class="one py-2 pl-3 pr-1 align-self-stretch">
                                    <span class="day">24</span>
                                </div>
                                <div class="two pl-0 pr-3 py-2 align-self-stretch">
                                    <span class="yr">2020</span>
                                    <span class="mos">January</span>
                                </div>
                            </div>
                            <h3 class="heading mb-0"><a href="#">All you want to know about industrial laws</a></h3>
                            <p>A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
                            <p><a href="#" class="btn btn-primary">Read more</a></p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 d-flex ftco-animate">
                    <div class="blog-entry justify-content-end">
                        <a href="blog-single.html" class="block-20" style="background-image: url('images/image_2.jpg');">
                        </a>
                        <div class="text p-4 float-right d-block">
                            <div class="topper d-flex align-items-center">
                                <div class="one py-2 pl-3 pr-1 align-self-stretch">
                                    <span class="day">24</span>
                                </div>
                                <div class="two pl-0 pr-3 py-2 align-self-stretch">
                                    <span class="yr">2020</span>
                                    <span class="mos">January</span>
                                </div>
                            </div>
                            <h3 class="heading mb-0"><a href="#">All you want to know about industrial laws</a></h3>
                            <p>A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
                            <p><a href="#" class="btn btn-primary">Read more</a></p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 d-flex ftco-animate">
                    <div class="blog-entry justify-content-end">
                        <a href="blog-single.html" class="block-20" style="background-image: url('images/image_3.jpg');">
                        </a>
                        <div class="text p-4 float-right d-block">
                            <div class="topper d-flex align-items-center">
                                <div class="one py-2 pl-3 pr-1 align-self-stretch">
                                    <span class="day">24</span>
                                </div>
                                <div class="two pl-0 pr-3 py-2 align-self-stretch">
                                    <span class="yr">2020</span>
                                    <span class="mos">January</span>
                                </div>
                            </div>
                            <h3 class="heading mb-0"><a href="#">All you want to know about industrial laws</a></h3>
                            <p>A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
                            <p><a href="#" class="btn btn-primary">Read more</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>--}}


@endsection