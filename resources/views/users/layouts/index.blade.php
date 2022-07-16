<!DOCTYPE html
    PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <title>Tools Shop</title>
    <meta http-equiv="Content-Type" content="text/html; charset=windows-1252" />
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/users/css/style.css') }}" />
    <!--[if IE 6]>
<link rel="stylesheet" type="text/css" href="iecss.css" />
<![endif]-->
    <script type="text/javascript" src="js/boxOver.js"></script>
</head>

<body>
    <div id="main_container">
        @include('users.layouts.header')
        <div id="main_content">
            @include('users.layouts.menu')
            <!-- end of menu tab -->
            <div class="crumb_navigation"> Navigation: <span class="current">Home</span> </div>
            <div class="left_content">
                @include('users.components.category')
                @include('users.components.special_product')
            </div>
            <!-- end of left content -->
            @yield('main-content')
            <!-- end of center content -->
            <div class="right_content">
                <div class="title_box">Search</div>
                <div class="border_box">
                    <input type="text" name="newsletter" class="newsletter_input" value="keyword" />
                    <a href="#" class="join">search</a>
                </div>
                <div class="shopping_cart">
                    <div class="title_box">Shopping cart</div>
                    <div class="cart_details"> 3 items <br />
                        <span class="border_cart"></span> Total: <span class="price">350$</span>
                    </div>
                    <div class="cart_icon"><a href="#"><img
                                src="{{ asset('assets/users/images/shoppingcart.png') }}" alt=""
                                width="35" height="35" border="0" /></a></div>
                </div>
                <div class="title_box">What�s new</div>
                <div class="border_box">
                    <div class="product_title"><a href="#">Motorola 156 MX-VL</a></div>
                    <div class="product_img"><a href="#"><img src="{{ asset('assets/users/images/p2.jpg') }}"
                                alt="" border="0" /></a></div>
                    <div class="prod_price"><span class="reduce">350$</span> <span class="price">270$</span></div>
                </div>
                <div class="title_box">Manufacturers</div>
                <ul class="left_menu">
                    <li class="odd"><a href="#">Bosch</a></li>
                    <li class="even"><a href="#">Samsung</a></li>
                    <li class="odd"><a href="#">Makita</a></li>
                    <li class="even"><a href="#">LG</a></li>
                    <li class="odd"><a href="#">Fujitsu Siemens</a></li>
                    <li class="even"><a href="#">Motorola</a></li>
                    <li class="odd"><a href="#">Phillips</a></li>
                    <li class="even"><a href="#">Beko</a></li>
                </ul>
                <div class="banner_adds"> <a href="#"><img src="{{ asset('assets/users/images/bann1.jpg') }}"
                            alt="" border="0" /></a> </div>
            </div>
            <!-- end of right content -->
        </div>
        <!-- end of main content -->
       @include('users.layouts.footer')
    </div>
    <!-- end of main_container -->
</body>

</html>
