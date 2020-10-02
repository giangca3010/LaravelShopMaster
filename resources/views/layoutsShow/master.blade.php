<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    @yield('title')
    <title>Home | E-Shopper</title>
    <link href="{{asset('Eshopper/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('Eshopper/css/font-awesome.min.css')}}" rel="stylesheet">
    <link href="{{asset('Eshopper/css/prettyPhoto.css')}}" rel="stylesheet">
    <link href="{{asset('Eshopper/css/price-range.css')}}" rel="stylesheet">
    <link href="{{asset('Eshopper/css/animate.css')}}" rel="stylesheet">
    <link href="{{asset('Eshopper/css/main.css')}}" rel="stylesheet">

    <link rel="stylesheet" href="asset/css/themify-icons.css" type="text/css">
    <link rel="stylesheet" href="asset/css/elegant-icons.css" type="text/css">
    @yield('css')
</head>
<body>

@include('componentShow.header')
@yield('content')
@include('componentShow.footer')


<script src="{{asset('Eshopper/js/jquery.js')}}"></script>
<script src="{{asset('Eshopper/js/bootstrap.min.js')}}"></script>
<script src="{{asset('Eshopper/js/jquery.scrollUp.min.js')}}"></script>
<script src="{{asset('Eshopper/js/price-range.js')}}"></script>
<script src="{{asset('Eshopper/js/jquery.prettyPhoto.js')}}"></script>
<script src="{{asset('Eshopper/js/main.js')}}"></script>


<!-- Js Plugins -->
<script src="{{asset('asset/js/jquery-3.3.1.min.js')}}"></script>
<script src="{{asset('asset/js/bootstrap.min.js')}}"></script>
<script src="{{asset('asset/js/jquery-ui.min.js')}}"></script>
<script src="{{asset('asset/js/jquery.countdown.min.js')}}"></script>
<script src="{{asset('asset/js/jquery.nice-select.min.js')}}"></script>
<script src="{{asset('asset/js/jquery.zoom.min.js')}}"></script>
<script src="{{asset('asset/js/jquery.dd.min.js')}}"></script>
<script src="{{asset('asset/js/jquery.slicknav.js')}}"></script>
<script src="{{asset('asset/js/owl.carousel.min.js')}}"></script>
<script src="{{asset('asset/js/main.js')}}"></script>

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

    function RenderCart(response) {
        $("#change-item-cart").empty();
        $("#change-item-cart").html(response);
        $("#total-quanty-show").text($("#total-quanty-cart").val());
    }

    function getQuantyCart() {
        $.ajax({
            url:'get-quanty-cart',
            type: 'GET',
        }).done(function (response){
            $('#total-cart').html(response)
        });
    }

    function AddCart(id) {
        $.ajax({
            url: 'add-cart/'+id,
            type: 'GET',
        }).done(function (response) {
            $("#change-item-cart").empty();
            $("#change-item-cart").html(response);
            alertify.success('Thêm sản phẩm thành công');
        });
        getQuantyCart();
    }

    $("#change-item-cart").on("click", ".si-close i", function () {
        // console.log($(this).data("id"));
        $.ajax({
            url: 'delete-item-cart/'+$(this).data("id"),
            type: 'GET',
        }).done(function (response) {
            RenderCart(response);
            alertify.error('Xóa phẩm thành công');
        });
        getQuantyCart();
    });
</script>

@yield('js')

</body>
</html>
