<!doctype html>
<html class="no-js " lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>:: COVID 19 INFO ::</title>
    <link rel="icon" href="">
    <!-- start linking -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.25/css/dataTables.bootstrap4.min.css">

    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.1/morris.css">

    <link rel="stylesheet" href="{{asset('assets/plugins/bootstrap/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/plugins/aos/aos.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/main.css')}}">
    <style>
        html {
            scroll-behavior: smooth;
        }
    </style>
    @stack('style')
</head>
<body>

<div id="loading" class="page-loader-wrapper">
    <div class="loader">
        <div class="m-t-30"><img class="zmdi-hc-spin" src="{{asset('assets/images/loader.svg')}}" width="48" height="48"
                                 alt="Oreo"></div>
        <p>Please wait...</p>
    </div>
</div>

<div class="wrapper">
    <!-- start loading -->
    <div class="main_header" style="padding-top: 35px">
        {{--<section id="top-nav">--}}
        {{--<div class="container">--}}
        {{--<div class="top">--}}
        {{--<div class="row">--}}
        {{--<div class="col-lg-6 col-md-7">--}}
        {{--<div class="left">--}}
        {{--<ul class="list-unstyled m-b-0">--}}
        {{--<li><a href="" class="btn btn-link"><i class="zmdi zmdi-email m-r-5"></i>info@example.com</a>--}}
        {{--<a href="" class="btn btn-link"><i class="zmdi zmdi-phone m-r-5"></i>+--}}
        {{--202-555-0191</a>--}}
        {{--</li>--}}
        {{--</ul>--}}
        {{--</div>--}}
        {{--</div>--}}
        {{--<div class="col-lg-6 col-md-5">--}}
        {{--<div class="text-right d-none d-md-block">--}}
        {{--<ul class="list-unstyled m-b-0">--}}
        {{--<li><a href="javascript:void(0);" class="btn btn-link">Sign in</a> <a--}}
        {{--href="javascript:void(0);" class="btn btn-link">sign--}}
        {{--up</a></li>--}}
        {{--</ul>--}}
        {{--</div>--}}
        {{--</div>--}}
        {{--</div>--}}
        {{--</div>--}}
        {{--</div>--}}
        {{--</section>--}}
        <header id="header">
            <div class="container">
                <div class="head">
                    <div class="row">
                        <div class="col-lg-5 col-sm-5">
                            <div class="left">
                                <a href="" class="navbar-brand"><img src="{{asset('assets/images/logo.svg')}}"
                                                                     alt="logo"></a>
                            </div>
                        </div>
                        <div class="col-lg-7 col-sm-7">
                            {{--<div class="text-right d-none d-md-block">--}}
                            {{--<p class="col-white m-b-0 p-t-5"><i class="zmdi zmdi-time"></i> Mon - Sat: 9:00 - 18:00--}}
                            {{--Sunday CLOSED </p>--}}
                            {{--<p class="col-white m-b-0"><i class="zmdi zmdi-pin"></i> 1422 1st St. Santa Rosa CA--}}
                            {{--94559. United States </p>--}}
                            {{--</div>--}}
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <div id="navbar" data-aos="fade-down">
            <div class="container">
                <nav class="navbar navbar-expand-lg navbar-light bg-light">
                    <button class="navbar-toggler navbar-toggler-right collapsed" type="button" data-toggle="collapse"
                            data-target="#navbarMenu" aria-expanded="false" aria-label="Toggle navigation"><span
                                class="navbar-toggler-icon"></span>
                    </button>

                    <div class="collapse navbar-collapse" id="navbarMenu">
                        <ul class="navbar-nav mr-auto">
                            <li class="nav-item"><a class="nav-link" href="/">Home</a></li>
                            <li class="nav-item"><a class="nav-link" href="/statistics">Statistics</a></li>
                            <li class="nav-item"><a class="nav-link" href="/vaccines">Vaccines</a></li>
                            <li class="nav-item"><a class="nav-link" href="/FAQs">FAQ's</a></li>
                            <li class="nav-item"><a class="nav-link" href="/subscribe">Subscribe</a></li>
                            {{--<li class="nav-item dropdown">--}}
                            {{--<a class="nav-link dropdown-toggle" href="javascript:void(0);" id="pageMenuLink"--}}
                            {{--data-toggle="dropdown" aria-haspopup="true"--}}
                            {{--aria-expanded="false">Blog</a>--}}
                            {{--<div class="dropdown-menu">--}}
                            {{--<a class="dropdown-item" href="">Blog</a>--}}
                            {{--<a class="dropdown-item" href="">Blog Detail</a>--}}
                            {{--</div>--}}
                            {{--</li>--}}
                            {{--<li class="nav-item dropdown">--}}
                            {{--<a class="nav-link dropdown-toggle" href="javascript:void(0);" id="pageMenuLink"--}}
                            {{--data-toggle="dropdown" aria-haspopup="true"--}}
                            {{--aria-expanded="false">Pages</a>--}}
                            {{--<div class="dropdown-menu">--}}
                            {{--<a class="dropdown-item" href="">About Us</a>--}}
                            {{--<a class="dropdown-item" href="">FAQs</a>--}}
                            {{--<a class="dropdown-item" href="">Galary</a>--}}
                            {{--<a class="dropdown-item" href="">Price list</a>--}}
                            {{--</div>--}}
                            {{--</li>--}}
                            {{--<li class="nav-item"><a class="nav-link" href="">Contact Us</a></li>--}}
                            {{--<li class="nav-item d-md-none d-lg-none d-xl-none"><a class="nav-link"--}}
                            {{--href="javascript:void(0);">Sign in</a>--}}
                            {{--</li>--}}
                            {{--<li class="nav-item d-md-none d-lg-none d-xl-none"><a class="nav-link"--}}
                            {{--href="javascript:void(0);">Sign up</a>--}}
                            {{--</li>--}}
                        </ul>
                        @if(auth()->check())
                            <form action="/logout" method="post"
                                  class="form-inline my-2 my-lg-0 d-none d-lg-inline-block">
                                @csrf
                                <button type="submit" class="btn btn-primary btn-round">Log out</button>
                            </form>
                        @endif
                    </div>
                </nav>
            </div>
        </div>
    </div>

@yield('content')

<!-- start footer -->
    <footer style="margin: 15px 0px">
        <div class="copyright">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-md-6">
                        <small>Copyright &copy; 2021 - Advanced Software Engineering Project
                        </small>
                    </div>
                    <div class="col-lg-2 col-md-2">
                        <div class="up"><a href="#header"><i class="zmdi zmdi-caret-up-circle"></i></a></div>
                    </div>
                    {{--<div class="col-lg-4 col-md-4">--}}
                    {{--<div class="social float-md-right"><a href=""><i class="zmdi zmdi-facebook m-r-10"></i></a> <a--}}
                    {{--href=""><i class="zmdi zmdi-twitter m-r-10"></i></a> <a href=""><i--}}
                    {{--class="zmdi zmdi-dribbble m-r-10"></i></a> <a href=""><i--}}
                    {{--class="zmdi zmdi-behance m-r-10"></i></a></div>--}}
                    {{--</div>--}}
                </div>
            </div>
        </div>
    </footer>
</div>
<!-- start screpting -->
<script src="{{asset('assets/bundles/libscripts.bundle.js')}}"></script>

<script src="{{asset('assets/js/app.js')}}"></script><!-- my js -->
<script src="{{asset('assets/js/countto.js')}}"></script>

<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="https://cdn.datatables.net/1.10.25/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.25/js/dataTables.bootstrap4.min.js"></script>

{{--<script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.0/jquery.min.js"></script>--}}
<script src="//cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.1/morris.min.js"></script>

<script>
    $(document).ready(function () {
        $('#example').DataTable();
    });
</script>

@stack('script')
</body>
</html>