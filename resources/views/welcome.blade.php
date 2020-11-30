<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Home | ToCoToCo</title>
    <base href="{{asset('')}}">
    <link href="{{ asset('public/frontend/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('public/frontend/css/font-awesome.min.css') }}" rel="stylesheet">
    <link href="{{ asset('public/frontend/css/prettyPhoto.css') }}" rel="stylesheet">
    <link href="{{ asset('public/frontend/css/price-range.css') }}" rel="stylesheet">
    <link href="{{ asset('public/frontend/css/animate.css') }}" rel="stylesheet">
    <link href="{{ asset('public/frontend/css/main.css') }}" rel="stylesheet">
    <link href="{{ asset('public/frontend/css/responsive.css') }}" rel="stylesheet">
    <link rel="shortcut icon" href="public/frontend/images/ico/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="images/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="images/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="images/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="images/ico/apple-touch-icon-57-precomposed.png">
</head>
<!--/head-->

<body>
    <header id="header">
        <div class="header-middle">
            <!--header-middle-->
            <div class="container">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="contactinfo">
                                <ul class="nav nav-pills">
                                    <li><a href="#"><i class="fa fa-phone"></i> 0123012301</a></li>
                                    <li><a href="#"><i class="fa fa-envelope"></i> dolinh.17.09.99@gmail.com</a></li>
                                    <li><a href="https://www.facebook.com/LinhCuteeeeeeeeeee/"><i class="fa fa-facebook"></i></a></li>
                                    <li><a href="https://www.instagram.com/dtyl_in/?hl=vi"><i class="fa fa-linkedin"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="shop-menu pull-right">
                                <ul class="nav navbar-nav">
                                    <li><a href="{{URL::to('/show-cart')}}"><i class="fa fa-shopping-cart"></i> Giỏ hàng</a></li>
                                    <?php
                                    $customer_id = Session::get('customer_id');
                                    if($customer_id!=NULL){
                                    ?>
                                    <li><a href="{{URL::to('/logout-checkout')}}"><i class="fa fa-lock"></i> Đăng xuất</a></li>
                                    <?php
                                    }else{
                                    ?>
                                    <li><a href="{{URL::to('/login-checkout')}}"><i class="fa fa-lock"></i> Đăng nhập</a></li>
                                    <?php
                                    }
                                    ?>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--/header-middle-->

        <div class="header-bottom">
            <!--header-bottom-->
            <div class="container">
                <div class="row">
                    <div class="col-sm-9">
                        <div class="navbar-header">
                            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                                <span class="sr-only">Toggle navigation</span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                        </div>
                        <div class="mainmenu pull-left">
                            <ul class="nav navbar-nav collapse navbar-collapse">
                                <li><a href="trang-chu" class="active">Trang chủ</a></li>
                                <li class="dropdown"><a href="#">Sản phẩm<i class="fa fa-angle-down"></i></a>
                                    <ul role="menu" class="sub-menu">
                                        <li><a href="shop.html">Products</a></li>
                                    </ul>
                                </li>
                                <li><a href="trang-chu">Tin tức</a></li>
                                <li><a href="{{URL::to('/show-cart')}}">Giỏ hàng</a></li>
                                <li><a href="contact-us.html">Liên hệ</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <form action="{{URL::to('/tim-kiem')}}" method="POST">
                            {{csrf_field()}}
                            <input name="keyworks_submit" class="form-control form-control-sm" type="text" placeholder="Search" aria-label="Search">
                            <!-- <input name="keyworks_submit" class="" type="text" placeholder="Search" aria-label="Search">
                            <input type="submit" name="search_item" class="btn-primary btn-sm" value="Tìm kiếm"> -->
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!--/header-bottom-->
    </header>
    <!--/header-->
    <!-- <img style="margin-left: 5%; height: 30px; margin-bottom: 5%;" src="public/frontend/images/banner4.png" alt="" /> -->

    <section id="slider">
        <!--slider-->
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div id="slider-carousel" class="carousel slide" data-ride="carousel">
                        <ol class="carousel-indicators">
                            <li data-target="#slider-carousel" data-slide-to="0" class="active"></li>
                            <li data-target="#slider-carousel" data-slide-to="1"></li>
                            <li data-target="#slider-carousel" data-slide-to="2"></li>
                        </ol>

                        <div class="carousel-inner">
                            <div class="item active">
                                <div class="col-sm-6">
                                    <h1><span></span>Welcome Tocotoco</h1>
                                    <h2>TocoToco – Trà sữa của hạnh phúc</h2>
                                    <p>Với sứ mệnh mang tới niềm vui và hạnh phúc, TocoToco hy vọng sẽ tạo nên một nét văn hóa giải trí bên cạnh ly trà sữa Ngon – sạch – tươi </p>
                                    <!-- <button type="button" class="btn btn-default get">Đặt hàng</button> -->
                                    <img src="public/frontend/images/icon_ts.jpg" alt="" />
                                </div>
                                <div class="col-sm-6">
                                    <img src="public/frontend/images/tcsoi.jpg" class="girl img-responsive" alt="" />
                                    <!-- <img src="public/frontend/images/pricing.png" class="pricing" alt="" /> -->
                                </div>
                            </div>
                            <div class="item">
                                <div class="col-sm-6">
                                    <h1><span></span>Welcome Tocotoco</h1>
                                    <h2>TocoToco – Trà sữa của hạnh phúc</h2>
                                    <p>Với sứ mệnh mang tới niềm vui và hạnh phúc, TocoToco hy vọng sẽ tạo nên một nét văn hóa giải trí bên cạnh ly trà sữa Ngon – sạch – tươi </p>
                                    <img src="public/frontend/images/icon_ts.jpg" alt="" />
                                    <!-- <button type="button" class="btn btn-default get">Đặt hàng</button> -->
                                    
                                </div>
                                <div class="col-sm-6">
                                    <img src="public/frontend/images/banner5.jpg" class="girl img-responsive" alt="" />
                                    <!-- <img src="public/frontend/images/pricing.png" class="pricing" alt="" /> -->
                                </div>
                            </div>

                            <div class="item">
                                <div class="col-sm-6">
                                    <h1><span></span>Welcome Tocotoco</h1>
                                    <h2>TocoToco – Trà sữa của hạnh phúc</h2>
                                    <p>Với sứ mệnh mang tới niềm vui và hạnh phúc, TocoToco hy vọng sẽ tạo nên một nét văn hóa giải trí bên cạnh ly trà sữa Ngon – sạch – tươi </p>
                                    <img src="public/frontend/images/icon_ts.jpg" alt="" />
                                    <!-- <button type="button" class="btn btn-default get">Đặt hàng</button> -->
                                    
                                </div>
                                <div class="col-sm-6">
                                    <img src="public/frontend/images/banner1.png" class="girl img-responsive" alt="" />
                                    <!-- <img src="public/frontend/images/pricing.png" class="pricing" alt="" /> -->
                                </div>
                            </div>

                        </div>

                        <a href="#slider-carousel" class="left control-carousel hidden-xs" data-slide="prev">
                            <i class="fa fa-angle-left"></i>
                        </a>
                        <a href="#slider-carousel" class="right control-carousel hidden-xs" data-slide="next">
                            <i class="fa fa-angle-right"></i>
                        </a>
                    </div>

                </div>
            </div>
        </div>
    </section>
    <!--/slider-->

    <section>
        <div class="container">
            <div class="row">
                <div class="col-sm-3">
                    <div class="left-sidebar">
                    
                        <h2 ><img src="public/frontend/images/iconhopsua.jpg" alt="" /> Danh mục sản phẩm</h2>
                        <div class="panel-group category-products" id="accordian">
                            <!-- category-productsr-->
                            @foreach($category as $key =>$cate)
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h4 class="panel-title"><a href="{{URL::to('danh-muc-san-pham/'.$cate->category_id)}}">{{$cate->category_name}}</a></h4>
                                </div>
                            </div>
                            @endforeach
                        </div>
                        
                        <!--/category-products-->

                        <div>
                        
                        </div>

                    </div>
                </div>

                <div class="col-sm-9 padding-right">
                    @yield('content')
                </div>
            </div>
        </div>
    </section>

    <footer id="footer">
        <div class="footer-bottom">
            <div class="container">
                <div class="row">
                    <p class="pull-left">Copyright © 2020 ToCoToCo</p>
                    <p class="pull-right">Designed by <span><a target="_blank" href="">Linh</a></span></p>
                </div>
            </div>
        </div>

    </footer>
    <!--/Footer-->



    <script src="public/frontend/js/jquery.js"></script>
    <script src="public/frontend/js/bootstrap.min.js"></script>
    <script src="public/frontend/js/jquery.scrollUp.min.js"></script>
    <script src="public/frontend/js/price-range.js"></script>
    <script src="public/frontend/js/jquery.prettyPhoto.js"></script>
    <script src="public/frontend/js/main.js"></script>
</body>
</html>