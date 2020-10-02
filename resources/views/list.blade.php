<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Fashi Template">
    <meta name="keywords" content="Fashi, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Fashi | Template</title>

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css?family=Muli:300,400,500,600,700,800,900&display=swap" rel="stylesheet">

    <!-- Css Styles -->
    <link rel="stylesheet" href="asset/css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="asset/css/font-awesome.min.css" type="text/css">
    <link rel="stylesheet" href="asset/css/themify-icons.css" type="text/css">
    <link rel="stylesheet" href="asset/css/elegant-icons.css" type="text/css">
    <link rel="stylesheet" href="asset/css/owl.carousel.min.css" type="text/css">
    <link rel="stylesheet" href="asset/css/nice-select.css" type="text/css">
    <link rel="stylesheet" href="asset/css/jquery-ui.min.css" type="text/css">
    <link rel="stylesheet" href="asset/css/slicknav.min.css" type="text/css">
    <link rel="stylesheet" href="asset/css/style.css" type="text/css">
</head>

<body>
<!-- Page Preloder -->
<div id="preloder">
    <div class="loader"></div>
</div>


<!-- Breadcrumb Section Begin -->
<div class="breacrumb-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="breadcrumb-text product-more">
                    <a href="/"><i class="fa fa-home"></i> Home</a>
                    <a href="./shop.html">Shop</a>
                    <span>Shopping Cart</span>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Breadcrumb Section Begin -->

<!-- Shopping Cart Section Begin -->
<section class="shopping-cart spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-12" id="list-cart">
                <div class="cart-table">
                    <table>
                        <thead>
                        <tr>
                            <th>Image</th>
                            <th class="p-name">Product Name</th>
                            <th>Price</th>
                            <th>Quantity</th>
                            <th>Total</th>
                            <th>Save</th>
                            <th>Delete</th>
                        </tr>
                        </thead>
                        <tbody>
                        @if(Session::has("cart") != null)           {{--has: kiem tra co ton tai hay khong--}}
                        @foreach(Session::get('cart')->products as $item)                 {{--get: lay gia tri cua session ra--}}
                        <tr>
                            <td class="cart-pic first-row">
                                <img class="img-view-cart" src="{{$item['productInfo']->feature_image_path}}" alt="">
                            </td>
                            <td class="cart-title first-row">
                                <h5>{{$item['productInfo']->name}}</h5>
                            </td>
                            <td class="p-price first-row">{{number_format($item['productInfo']->price)}}</td>
                            <td class="qua-col first-row">
                                <div class="quantity">
                                    <div class="pro-qty">
                                        <input id="quanty-item-{{$item['productInfo']->id}}"
                                               type="text"
                                               value="{{ $item['quanty'] }}">
                                    </div>
                                </div>
                            </td>
                            <td class="total-price first-row">{{number_format($item['price'])}} VND</td>
                            <td class="close-td first-row">
                                <i class="ti-save"
                                   onclick="SaveItemListCart({{$item['productInfo']->id}});">

                                </i>
                            </td>
                            <td class="close-td first-row"><i class="ti-close"
                                                              onclick="DeleteItemListCart({{$item['productInfo']->id}});"></i>
                            </td>
                        </tr>
                        @endforeach
                        @endif
                        </tbody>
                    </table>
                </div>
                <div class="row">
                    <div class="col-lg-4 offset-lg-8">
                        <div class="proceed-checkout">
                            @if(Session::has("cart") != null)           {{--has: kiem tra co ton tai hay khong--}}
                            <ul>
                                <li class="subtotal">Subtotal <span>{{Session::get('cart')->totalQuanty}}</span></li>
                                <li class="cart-total">Total <span>{{number_format(Session::get('cart')->totalPrice)}} VND</span>
                                </li>
                            </ul>
                            <a href="/checkout" class="proceed-btn">PROCEED TO CHECK OUT</a>
                            @endif
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</section>
<!-- Shopping Cart Section End -->

<!-- Footer Section Begin -->
<footer class="footer-section">
    <div class="copyright-reserved">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="copyright-text">
                        <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                        Copyright &copy;<script>document.write(new Date().getFullYear());</script>
                        All rights reserved | This template is made with <i class="fa fa-heart-o"
                                                                            aria-hidden="true"></i> by <a
                            href="https://colorlib.com" target="_blank">Colorlib</a>
                        <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                    </div>
                    <div class="payment-pic">
                        <img src="asset/img/payment-method.png" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
<!-- Footer Section End -->

<!-- Js Plugins -->
<script src="asset/js/jquery-3.3.1.min.js"></script>
<script src="asset/js/bootstrap.min.js"></script>
<script src="asset/js/jquery-ui.min.js"></script>
<script src="asset/js/jquery.countdown.min.js"></script>
<script src="asset/js/jquery.nice-select.min.js"></script>
<script src="asset/js/jquery.zoom.min.js"></script>
<script src="asset/js/jquery.dd.min.js"></script>
<script src="asset/js/jquery.slicknav.js"></script>
<script src="asset/js/owl.carousel.min.js"></script>
<script src="asset/js/main.js"></script>

<!-- JavaScript -->
<script src="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/alertify.min.js"></script>

<!-- CSS -->
<link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/alertify.min.css"/>
<!-- Default theme -->
<link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/themes/default.min.css"/>
<!-- Semantic UI theme -->
<link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/themes/semantic.min.css"/>
<!-- Bootstrap theme -->
<link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/themes/bootstrap.min.css"/>

<script>
    function DeleteItemListCart(id) {
        // console.log(id);
        $.ajax({
            url: 'Delete-Item-List-Cart/' + id,
            type: 'GET',
        }).done(function (response) {
            RenderListCart(response);
            alertify.success('Xóa sản phẩm thành công');
        });
    }

    function SaveItemListCart(id) {
        $.ajax({
            url: 'Save-Item-List-Cart/' + id + '/' + $("#quanty-item-" + id).val(),
            type: 'GET',
        }).done(function (response) {
            RenderListCart(response);
            alertify.success('Cập nhật sản phẩm thành công');
        });
    }

    function RenderListCart(response) {

        $("#list-cart").empty();
        $("#list-cart").html(response);
        var proQty = $('.pro-qty');
        proQty.prepend('<span class="dec qtybtn">-</span>');
        proQty.append('<span class="inc qtybtn">+</span>');
        proQty.on('click', '.qtybtn', function () {
            var $button = $(this);
            var oldValue = $button.parent().find('input').val();
            if ($button.hasClass('inc')) {
                var newVal = parseFloat(oldValue) + 1;
            } else {
                // Don't allow decrementing below zero
                if (oldValue > 0) {
                    var newVal = parseFloat(oldValue) - 1;
                } else {
                    newVal = 0;
                }
            }
            $button.parent().find('input').val(newVal);
        });
    }

</script>
</body>

</html>
