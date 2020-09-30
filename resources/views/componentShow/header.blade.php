<header id="header"><!--header-->
    <div class="header_top"><!--header_top-->
        {{--        <div class="fa">Login admin</div>--}}
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    <div class="contactinfo">
                        <ul class="nav nav-pills">
                            <li><a href="#"><i
                                        class="fa fa-phone"></i>{{ getConfigValueFormSettingTable('phone_contact')->config_value }}
                                </a></li>
                            <li><a href="#"><i
                                        class="fa fa-envelope"></i> {{ getConfigValueFormSettingTable('Email')->config_value }}
                                </a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="social-icons pull-right">
                        <ul class="nav navbar-nav">
                            <li><a href="{{ getConfigValueFormSettingTable('Facebook_link')->config_value }}"><i
                                        class="fa fa-facebook"></i></a></li>
                            <li><a href="{{ getConfigValueFormSettingTable('Instagram_link')->config_value }}"><i
                                        class="fa fa-twitter"></i></a></li>
                            <li><a href="{{ getConfigValueFormSettingTable('Facebook_link')->config_value }}"><i
                                        class="fa fa-linkedin"></i></a></li>
                            <li><a href="{{ getConfigValueFormSettingTable('Instagram_link')->config_value }}"><i
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
                                        <span>3</span>
                                    </a>
                                </a>
                                <div class="cart-hover">
                                    <div id="change-item-cart">
                                        <div class="select-items">
                                            <table>
                                                <tbody>
                                                <tr>
                                                    <td class="si-pic"><img src="/storage/product/1/yxk0VOes50YhUcrgENem.png" alt=""></td>
                                                    <td class="si-text">
                                                        <div class="product-selected">
                                                            <p>₫60.00 x 1</p>
                                                            <h6>Kabino Bedside Table</h6>
                                                        </div>
                                                    </td>
                                                    <td class="si-close">
                                                        <i class="ti-close"></i>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="si-pic"><img src="/storage/product/1/yxk0VOes50YhUcrgENem.png" alt=""></td>
                                                    <td class="si-text">
                                                        <div class="product-selected">
                                                            <p>₫60.00 x 1</p>
                                                            <h6>Kabino Bedside Table</h6>
                                                        </div>
                                                    </td>
                                                    <td class="si-close">
                                                        <i class="ti-close"></i>
                                                    </td>
                                                </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                        <div class="select-total">
                                            <span>total:</span>
                                            <h5>₫120.00</h5>
                                        </div>
                                    </div>
                                    <div class="select-button">
                                        <a href="#" class="primary-btn view-card">VIEW CARD</a>
                                        <a href="#" class="primary-btn checkout-btn">CHECK OUT</a>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <a href="login.html"><i class="fa fa-lock"></i>
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
