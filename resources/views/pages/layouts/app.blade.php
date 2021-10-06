<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Sama | Medical and Health Card</title>
    <link rel="shortcut icon" type="image/x-icon" href="images/favicon.png">
    <link href="{{ asset('frontpage/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('frontpage/css/default.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('frontpage/css/style.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('frontpage/css/plugin.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('frontpage/fonts/flaticon.css') }}" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script async src='/cdn-cgi/challenge-platform/h/g/scripts/invisible.js'></script>

    <style>
        .service-item {
            background-color: #6f42c1;
            /*padding: 5px 5px 5px;*/
        }
        .service-item a {
            color: #ffffff;
        }
        .service-item h3{
            /*font-size: 0.9em;*/
        }

        #preloader {
            background: #6f42c1;
        }
        #status {
            width: 140px!important;
            height: 140px!important;
        }

        @media (max-width: 767px){
            section.slider #x_023_animated_layers {
                height: 370px;
            }
            .service-item h3{
                font-size: 0.9em;
            }
            .service-item {
                padding: 15px 5px 5px;
            }
            .service-icon {
                height: 70px;
                width: 70px;
            }
        }

    </style>
</head>

<body>
{{--<div id="preloader">--}}
{{--    <div id="status"></div>--}}
{{--</div>--}}
<header class="main_header_area">
    <div class="top-bar">
        <div class="container">
            <div class="top-bar-content">
                <div class="contact-info">
                    <p><i class="fa fa-phone" aria-hidden="true"></i> {{ setting('site_phone') }}</p>
{{--                    <p><i class="fa fa-envelope" aria-hidden="true"></i> <a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="7b12151d143b080c1a080f13021a55181416">[email&#160;protected]</a></p>--}}
                </div>
                <div class="header-links">
                    <ul>
{{--                        <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>--}}
                        <li><a href="#"><i class="fa fa-whatsapp" aria-hidden="true"></i></a></li>
                        <li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="header_menu affix-top">
        <nav class="navbar navbar-default">
            <div class="container">
                <div class="navbar-header">
                    <a class="navbar-brand" href="{{ route('home') }}"> <img height="90" src="{{ setting('logo_white','/frontpage/logo_t.png') }}" alt="logo1"> <img src="{{ setting('logo_color','/images/s_logo.png') }}" alt="logo1"> </a>
                </div>
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav" id="responsive-menu">

                        <li >
                            <a href="{{ route('home') }}" >
                               Home
                            </a>

                        </li>
                        <li >
                            <a href="{{ route('partner') }}" >
                                Be A Partner
                            </a>

                        </li>
                        <li >
                            <a href="{{ route('about') }}" >
                                About Us
                            </a>

                        </li>
                        <li >
                            <a href="{{ route('contact') }}" >
                                Contact Us
                            </a>

                        </li>




{{--                        <li class="dropdown submenu"> <a href="#search1" class="mt_search"><i class="fa fa-search"></i></a> </li>--}}
                    </ul>
                </div>
            </div>
            <div id="slicknav-mobile"></div>
        </nav>
    </div>
</header>



@yield('content')



<footer>
    <div class="container">
        <div class="f-contact mar-bottom-50">
            <div class="row">
                <div class="col-md-4 col-sm-12">
                    <div class="f-contact-inner">
                        <div class="contact-icon"> <i class="fa fa-phone"></i> </div>
                        <div class="contact-title"> <span class="white">{{ setting('site_phone','+00-0000-1111') }}</span> <span class="white">Have a question? call us now</span> </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-12">
                    <div class="f-contact-inner">
                        <div class="contact-icon"> <i class="fa fa-envelope-o"></i> </div>
                        <div class="contact-title"> <span class="white"><a href="#" class="__cf_email__" >{{ setting('email') }}</a></span> <span class="white">Need support? Drop us an email</span> </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-12">
                    <div class="f-contact-inner">
                        <div class="contact-icon"> <i class="fa fa-clock-o"></i> </div>
                        <div class="contact-title"> <span class="white">{{ setting('address') }}</span> <span class="white">You can find here</span> </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-content">
            <div class="lower-footer pad-bottom-50">
                <div class="row">
                    <div class="col-md-5 col-sm-12">
                        <div class="footer-contact mar-right-15">
                            <div class="footer-logo text-center mar-bottom-15"> <img src="{{ setting('logo_color','/images/s_logo.png') }}" alt="Image"> </div>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                                <br>
                                <br> We are among the most qualified implant providers in the AUS with over 30 years of quality training and experience.</p>
                        </div>
                    </div>
                    <div class="col-md-2 col-sm-4 col-xs-12">
                        <div class="departments">
                            <h3>Departments</h3>
                            <ul>
                                <li><a href="#">Radiology</a></li>
                                <li><a href="#">Pedodontics</a></li>
                                <li><a href="#">Pedodontics</a></li>
                                <li><a href="#">Dental Implants</a></li>
                                <li><a href="#">Oral & Maxsillosacial</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-2 col-sm-3 col-xs-12">
                        <div class="facility">
                            <h3>Facilities</h3>
                            <ul>
                                <li><a href="#">Blood Bank</a></li>
                                <li><a href="#">Intensive Care Unit</a></li>
                                <li><a href="#">Laboratories</a></li>
                                <li><a href="#">Tooth Care</a></li>
                                <li><a href="#">Scale and Clean</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-5 col-xs-12">
                        <div class="work-time">
                            <h3>Work Time</h3>
                            <ul>
                                <li>Monday<span>10 AM - 3 PM</span></li>
                                <li>Tuesday<span>11 AM - 2 PM</span></li>
                                <li>Wednesday<span>10 AM - 3:30 PM</span></li>
                                <li>Thursday<span>9 AM - 2 PM</span></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="copyright">
                <div class="container">
                    <p>Copyright © {{ date('Y') }} Sama </p>
                </div>
            </div>
        </div>
    </div>
</footer>


<div id="back-to-top">
    <a href="#"></a>
</div>
<div id="search1">
    <button type="button" class="close">×</button>
    <form>
        <input type="search" value="" placeholder="type keyword(s) here" />
        <button type="submit" class="btn btn-primary">Search</button>
    </form>
</div>
<script data-cfasync="false" src="/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
<script src="{{ asset('frontpage/js/jquery-3.3.1.min.js') }}"></script>
<script src="{{ asset('frontpage/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('frontpage/js/plugin.js') }}"></script>
<script src="{{ asset('frontpage/js/main.js') }}"></script>
<script src="{{ asset('frontpage/js/custom-lightbox.js') }}"></script>
<script src="{{ asset('frontpage/js/custom-nav.js') }}"></script>
<script type="text/javascript">
    (function() {
        window['__CF$cv$params'] = {
            r: '69860235dc4c16e6',
            m: 'C9mnjHTL.FQhkbtfWBAGf_g1l8OHDsK5aS5dfH6M0eg-1633262411-0-Ace11aODZev1E512NwqEP5z9Q2VaS9GkcAw++lJCYg2luWO/Ul7iYdgOa3Vu2AwqOF155YjjeuiwDPtprh1YeizJaIBpR26+gT1g2jYwtVS7fqVUzqS7y6aU+ProTi+fcA==',
            s: [0x31b8b779d6, 0x837fd9727d],
            u: '/cdn-cgi/challenge-platform/h/g'
        }
    })();
</script>
</body>

</html>
