<!DOCTYPE html>
<html lang="en">

@include('includes.guest-area.head')

<body>

    <div class="container pt-5 pb-4">
        <div class="row justify-content-between">
            <div class="col-md-8 order-md-last">
                <div class="row">
                    <div class="col-md-6 text-center">
                        <img height="50px !important" src="{{ asset('/images/logo/logo_trans.png') }}" alt="login image" class="login-img">

                    </div>
                    <div class="col-md-6 d-md-flex justify-content-end mb-md-0 mb-3">
                        <form action="#" class="searchform order-lg-last">
                            <div class="form-group d-flex">
                                <input type="text" class="form-control pl-3" placeholder="Search">
                                <button type="submit" placeholder="" class="form-control search"><span class="fa fa-search"></span></button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-md-4 d-flex">
                <div class="social-media">
                    <p class="mb-0 d-flex">
                        <a href="#" class="d-flex align-items-center justify-content-center"><span class="fa fa-facebook"><i class="sr-only">Facebook</i></span></a>
                        <a href="#" class="d-flex align-items-center justify-content-center"><span class="fa fa-twitter"><i class="sr-only">Twitter</i></span></a>
                        <a href="#" class="d-flex align-items-center justify-content-center"><span class="fa fa-instagram"><i class="sr-only">Instagram</i></span></a>
                        <a href="#" class="d-flex align-items-center justify-content-center"><span class="fa fa-dribbble"><i class="sr-only">Dribbble</i></span></a>
                    </p>
                </div>
            </div>
        </div>
    </div>
    <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
        <div class="container-fluid">

            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="fa fa-bars"></span> Menu
            </button>
            <div class="collapse navbar-collapse" id="ftco-nav">
                <ul class="navbar-nav m-auto">
                    <li class="nav-item active"><a href="{{ route('guest.home') }}" class="nav-link">Home</a></li>
                    <li class="nav-item"><a href="{{ route('guest.about') }}" class="nav-link">About us</a></li>
                    <li class="nav-item"><a href="{{ route('guest.services') }}" class="nav-link">Services</a></li>
                    <li class="nav-item"><a href="{{ route('guest.contact') }}" class="nav-link">Contact</a></li>
                    <li class="nav-item"><a href="{{ route('guest.downloads') }}" class="nav-link">Downloads</a></li>
                    <li class="nav-item"><a href="/login" class="nav-link">Account</a></li>

                </ul>
            </div>
        </div>
    </nav>
    <!-- END nav -->

    @yield('content')


    <section class="ftco-section ftco-no-pt ftco-no-pb bg-primary">
        <div class="container">
            <div class="row d-flex justify-content-center">
                <div class="col-lg-8 py-4">
                    <div class="row">
                        <div class="col-md-6 ftco-animate d-flex align-items-center">
                            <h2 class="mb-0" style="color:white; font-size: 24px;">Subcribe to our Newsletter</h2>
                        </div>
                        <div class="col-md-6 d-flex align-items-center">
                            <form action="#" class="subscribe-form">
                                <div class="form-group d-flex">
                                    <input type="text" class="form-control" placeholder="Enter email address">
                                    <input type="submit" value="Subscribe" class="submit px-3">
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <footer class="ftco-footer ftco-bg-dark ftco-section">
        <div class="container">
            <div class="row mb-5">
                <div class="col-md-6 col-lg">
                    <div class="ftco-footer-widget mb-4">
                    <img height="50px !important" src="{{ asset('/images/logo/logo_trans.png') }}" alt="login image" class="logo">

                        <p>Direct Fresh is a proudly Zimbabwean food delivery service provider for all ordinary Zimbabweans. Our products and services are engineered to give you a reliable, inclusive, safe, and convenient way to make purchases, payments, and receive your orders.</p>
                        <ul class="ftco-footer-social list-unstyled float-md-left float-lft mt-5">
                            <li class="ftco-animate"><a href="#"><span class="icon-twitter"></span></a></li>
                            <li class="ftco-animate"><a href="#"><span class="icon-facebook"></span></a></li>
                            <li class="ftco-animate"><a href="#"><span class="icon-instagram"></span></a></li>
                        </ul>
                    </div>
                </div>
                {{--<div class="col-md-6 col-lg">
                    <div class="ftco-footer-widget mb-4 ml-md-5">
                        <h2 class="ftco-heading-2">Services</h2>
                        <ul class="list-unstyled">
                            <li><a href="#" class="py-1 d-block"><span class="ion-ios-arrow-forward mr-3"></span>Garden Care</a></li>
                            <li><a href="#" class="py-1 d-block"><span class="ion-ios-arrow-forward mr-3"></span>Lawn mowing</a></li>
                            <li><a href="#" class="py-1 d-block"><span class="ion-ios-arrow-forward mr-3"></span>Lawn Care</a></li>
                            <li><a href="#" class="py-1 d-block"><span class="ion-ios-arrow-forward mr-3"></span>Gutter Cleaning</a></li>
                            <li><a href="#" class="py-1 d-block"><span class="ion-ios-arrow-forward mr-3"></span>New Lawn Installation</a></li>
                        </ul>
                    </div>
                </div>--}}
                <div class="col-md-6 col-lg">
                    <div class="ftco-footer-widget mb-4">
                        <h2 class="ftco-heading-2">Contact information</h2>
                        <div class="block-23 mb-3">
                            <ul>
                                <li><span class="icon icon-map-marker"></span><span class="text">4 Brunswick Lane Mt Pleasant, Harare, Zimbabwe</span></li>
                                <li><a href="#"><span class="icon icon-phone"></span><span class="text">+44 7749 935369</span></a></li>
                                <li><a href="#"><span class="icon icon-envelope"></span><span class="text">info@witevatrading.co.zw</span></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg">
                    <div class="ftco-footer-widget mb-4">
                        <h2 class="ftco-heading-2">Business Hours</h2>
                        <div class="opening-hours">
                            <h4>Opening Days:</h4>
                            <p class="pl-3">
                                <span>Monday – Friday : 9am to 20 pm</span>
                                <span>Saturday : 9am to 17 pm</span>
                            </p>
                            <h4>Vacations:</h4>
                            <p class="pl-3">
                                <span>All Sunday Days</span>
                                <span>All Official Holidays</span>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 text-center">

                    <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                        Copyright &copy;<script>
                            document.write(new Date().getFullYear());
                        </script> All rights reserved 
                        <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
                </div>
            </div>
        </div>
    </footer>



    <!-- loader -->
    <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px">
            <circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee" />
            <circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00" />
        </svg></div>


    @include('includes.guest-area.scripts')

</body>

</html>