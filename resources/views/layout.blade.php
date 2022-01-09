<!DOCTYPE html>
<html lang="zxx" class="no-js">

<head>
    <!-- Mobile Specific Meta -->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Favicon-->
    <link rel="shortcut icon" href="/img/fav.png">
    <!-- Author Meta -->
    <meta name="author" content="Colorlib">
    <!-- Meta Description -->
    <meta name="description" content="">
    <!-- Meta Keyword -->
    <meta name="keywords" content="">
    <!-- meta character set -->
    <meta charset="UTF-8">
    <!-- Site Title -->
    <title>Pemodule</title>

    <link href="https://fonts.googleapis.com/css?family=Poppins:100,300,500,600" rel="stylesheet">
    <!--
  CSS
  ============================================= -->
    <link rel="stylesheet" href="/css/linearicons.css">
    <link rel="stylesheet" href="/css/owl.carousel.css">
    <link rel="stylesheet" href="/css/font-awesome.min.css">
    <link rel="stylesheet" href="/css/nice-select.css">
    <link rel="stylesheet" href="/css/magnific-popup.css">
    <link rel="stylesheet" href="/css/bootstrap.css">
    <link rel="stylesheet" href="/css/main.css">
</head>

<body>
    {{-- <div class="main-wrapper-first">
        <div class="hero-area relative"> --}}
            <header>
                <div class="container">
                    {{-- <div class="header-wrap"> --}}
                        <div class="d-flex justify-content-between align-items-center">
                            <div class="logo">
                                <a href="/home"><img src="/img/logo.png" alt=""></a>
                            </div>

                            <div class="main-menubar d-flex align-items-center">
                                @if (Auth::check())
                                    <nav class="hide">
                                        {{-- <p>{{ \Auth::user()->name }}さん</p> --}}
                                        <a href="/home">Home</a>
                                        {{-- <a href="generic.html">Generic</a>
                                        <a href="elements.html">Elements</a> --}}
                                        <a href="/logout">ログアウト</a>
                                    </nav>
                                @else
                                    <nav class="hide">
                                        {{-- <p>ゲストさん</p> --}}
                                        <a href="/login">ログイン</a>
                                        <a href="/register">会員登録</a>
                                    </nav>
                                @endif    
                                
                                <div class="menu-bar"><span class="lnr lnr-menu"></span></div>
                            </div>
                        </div>
                    {{-- </div> --}}
                </div>
            </header>
            {{-- <div class="banner-area">
                <div class="overlay overlay-bg"></div>
                <div class="container">
                    <div class="row height align-items-center justify-content-center">
                        <div class="col-lg-7">
                            <div class="banner-content text-center">
                                <h4 class="text-uppercase">your best partner</h4>
                                <h1>Pemodule</h1>
                                <a href="/" class="primary-btn d-inline-flex align-items-center"><span
                                        class="mr-10">Get Started</span><span
                                        class="lnr lnr-arrow-right"></span></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div> --}}
        {{-- </div>
    </div> 
    --}}
    <!-- Start Contact Area -->
    {{-- <section class="contact-area pt-100 pb-100 relative"> --}}
    <section class="contact-area pb-100 relative">
        @yield('content')
        @yield('form')
    </section>
    <!-- End  Contact Area -->
    <!-- Start newsletter Area -->
    {{-- <section class="newsletter-area pt-100 pb-100">
        <div class="container">
            <div class="row justify-content-center align-items-center">
                <div class="text-center">
                    <h3>Subscribe for our <span>Newsletter</span></h3>
                    <div class="subcribe-form" id="mc_embed_signup">
                        <form target="_blank" novalidate="true"
                            action="https://spondonit.us12.list-manage.com/subscribe/post?u=1462626880ade1ac87bd9c93a&amp;id=92a4423d01"
                            method="get" class="subscription relative">
                            <input name="EMAIL" placeholder="Your Email address" onfocus="this.placeholder = ''"
                                onblur="this.placeholder = 'Your Email address'" required="" type="email">
                            <div style="position: absolute; left: -5000px;">
                                <input name="b_36c4fd991d266f23781ded980_aefe40901a" tabindex="-1" value="" type="text">
                            </div>
                            <button class="primary-btn hover d-inline-flex align-items-center"><span
                                    class="mr-10">Get Started</span><span
                                    class="lnr lnr-arrow-right"></span></button>
                            <div class="info"></div>
                        </form>
                    </div>
                    <p>We won’t send any types of spam, Guranteed</p>
                </div>
            </div>
        </div>
    </section> --}}
    <!-- Start newsletter Area -->
    <!-- Start footer Area -->
    {{-- <footer class="footer-area relative">
        <div class="container">
            <div class="footer-content d-flex flex-column align-items-center">
                <div class="footer-menu">
                    <a href="index.html">Home</a>
                    <a href="generic.html">Generic</a>
                    <a href="elements.html">Elements</a>
                </div>
                <div class="footer-social">
                    <a href="#"><i class="fa fa-facebook"></i></a>
                    <a href="#"><i class="fa fa-twitter"></i></a>
                    <a href="#"><i class="fa fa-dribbble"></i></a>
                    <a href="#"><i class="fa fa-behance"></i></a>
                </div>
                <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                <script>
                    document.write(new Date().getFullYear());
                </script> All rights reserved | This template is made
                    with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com"
                        target="_blank">Colorlib</a></div>
                <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
            </div>
        </div>
    </footer> --}}
    <!-- End footer Area -->
    
    <script src="/js/vendor/jquery-2.2.4.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js"
        integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous">
    </script>
    <script src="/js/vendor/bootstrap.min.js"></script>
    <script src="/js/jquery.ajaxchimp.min.js"></script>
    <script src="/js/owl.carousel.min.js"></script>
    <script src="/js/jquery.nice-select.min.js"></script>
    <script src="/js/parallax.min.js"></script>
    <script src="/js/jquery.magnific-popup.min.js"></script>
    <script src="/js/main.js"></script>
</body>

</html>
