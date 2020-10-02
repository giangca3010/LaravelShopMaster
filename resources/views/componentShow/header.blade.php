<header id="header"><!--header-->
    <div class="header_top"><!--header_top-->
        {{--        <div class="fa">Login admin</div>--}}
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    <div class="contactinfo">
                        <ul class="nav nav-pills">
                            <li><a href="#">
                                    <i class="fa fa-phone"></i>
{{--                                    {{ getConfigValueFormSettingTable('phone_contact')->config_value }}--}}
                                    0989480463
                                </a>
                            </li>
                            <li><a href="#">
                                    <i class="fa fa-envelope"></i>
{{--                                    {{ getConfigValueFormSettingTable('Email')->config_value }}--}}
                                    gcgc89@gmail.com
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="social-icons pull-right">
                        <ul class="nav navbar-nav">
                            <li><a href=""><i
                                        class="fa fa-facebook"></i></a></li>
                            <li><a href=""><i
                                        class="fa fa-twitter"></i></a></li>
                            <li><a href=""><i
                                        class="fa fa-linkedin"></i></a></li>
                            <li><a href=""><i
                                        class="fa fa-dribbble"></i></a></li>
                            <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div><!--/header_top-->

    <div class="header-middle"><!--header-middle-->
        <div class="container">
            <div class="row">
                <div class="col-sm-4">
                    <div class="logo pull-left">
                        <a href="{{ route('news') }}"><img src="Eshopper//images/home/logo.png" alt=""/></a>
                    </div>
                    <div class="btn-group pull-right">

                    </div>
                </div>
                <div class="col-sm-8">
                    <div class="shop-menu pull-right">
                        <ul class="nav navbar-nav">
                            <li><a href="#"><i class="fa fa-user"></i> Account</a></li>
                            <li><a href="#"><i class="fa fa-star"></i> Wishlist</a></li>
                            <li><a href="checkout.html"><i class="fa fa-crosshairs"></i> Checkout</a></li>
                            <li class="cart-icon">
                                <a href="cart.html">
                                    <a href="">
                                        <i class="fa fa-shopping-cart"></i>
                                        Cart
                                        <span id="total-cart">{{ $totalQuanty }}</span>
                                    </a>
                                </a>
                                <div class="cart-hover">
                                    <div id="change-item-cart">
                                        @if(Session::has("cart") != null)           {{--has: kiem tra co ton tai hay khong--}}
                                        <div class="select-items">
                                            <table>
                                                <tbody>
                                                @foreach(Session::get('cart')->products as $item)                 {{--get: lay gia tri cua session ra--}}
                                                <tr>
                                                    <td class="si-pic">
                                                        <img src="{{$item['productInfo']->feature_image_path}}" alt="">
                                                    </td>
                                                    <td class="si-text">
                                                        <div class="product-selected">
                                                            <p>{{number_format($item['productInfo']->price)}} VND
                                                                x {{ $item['quanty'] }}</p>
                                                            <h6>{{$item['productInfo']->name}}</h6>
                                                        </div>
                                                    </td>
                                                    <td class="si-close">
                                                        <i class="ti-close" data-id="{{$item['productInfo']->id}}"></i>
                                                    </td>
                                                </tr>
                                                @endforeach
                                                </tbody>
                                            </table>
                                        </div>
                                        <div class="select-total">
                                            <span>total:</span>
                                            <h5>{{ number_format(Session::get('cart')->totalPrice) ?? 0 }} VND</h5>
                                        </div>
                                        @endif

                                    </div>
                                    <div class="select-button">
                                        <a href="/List-Cart" class="primary-btn view-card">VIEW CARD</a>
                                        <a href="/checkout" class="primary-btn checkout-btn">CHECK OUT</a>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <a href="#"><i class="fa fa-lock"></i>
                                    Login
                                </a>
                                <a class="login-admin" href="/adminLogin"><i class="fa fa-lock"></i>
                                    LoginAdmin
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div><!--/header-middle-->

    <div class="header-bottom"><!--header-bottom-->
        <div class="container">
            <div class="row">
                <div class="col-sm-9">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse"
                                data-target=".navbar-collapse">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                    </div>
                    {{--mainMenu     --}}
                    @include('componentShow.main_menu')
                </div>
                <div class="col-sm-3">
                    <div class="search_box pull-right">
                        <input type="text" placeholder="Search"/>
                    </div>
                </div>
            </div>
        </div>
    </div><!--/header-bottom-->
</header><!--/header-->
