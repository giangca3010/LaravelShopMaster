<link href="//netdna.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//netdna.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<link rel="stylesheet" href="{{asset('asset/css/checkOut.css')}}">
<!------ Include the above in your HEAD tag ---------->

<div class="container wrapper">
    <div class="row cart-head">
        <div class="container">
            <div class="row">
                <p></p>
            </div>
            <div class="row">
                <div style="display: table; margin: auto;">
                    <span class="step step_complete"> <a href="#" class="check-bc">Cart</a>
                        <span class="step_line step_complete"> </span>
                        <span class="step_line backline"> </span>
                    </span>
                    <span class="step step_complete"> <a href="#" class="check-bc">Checkout</a>
                        <span class="step_line "> </span>
                        <span class="step_line step_complete"> </span>
                    </span>
                    <span class="step_thankyou check-bc step_complete">Thank you</span>
                </div>
            </div>
            <div class="row">
                <p></p>
            </div>
        </div>
    </div>
    <div class="row cart-body">
        <form class="form-horizontal" method="post" action="{{ route('checkouts.store') }}" enctype="multipart/form-data">
            @csrf
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 col-md-push-6 col-sm-push-6">
                <div class="panel panel-info">
                    <div class="panel-heading">Thông tin mua hàng</div>
                    <div class="panel-body">

                        <div class="form-group">
                            <div class="col-md-12"><strong>Họ và tên:</strong></div>
                            <div class="col-md-12">
                                <input type="text" class="form-control" name="name" value=""/>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-12"><strong>Họ và tên:</strong></div>
                            <div class="col-md-12">
                                <input type="text" class="form-control" name="email" value=""/>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-12"><strong>Địa chỉ:</strong></div>
                            <div class="col-md-12">
                                <input type="text" class="form-control" name="address"/>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-12"><strong>Số điện thoại:</strong></div>
                            <div class="col-md-12">
                                <input type="number" name="phone_number" class="form-control"/>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-12">
                                <strong>Lưu ý:</strong>
                            </div>
                            <div class="col-md-12">
                                <input type="text" name="note" class="form-control"/>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <button type="submit" class="btn btn-primary btn-submit-fix">Đặt hàng</button>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 col-md-pull-6 col-sm-pull-6">
                <!--SHIPPING METHOD-->
                <div class="panel panel-info">
                    <div class="panel-heading">
                        Danh sách đơn hàng
                        <div class="pull-right">
                            <small>
                                <a class="afix-1" href="/List-Cart">Chỉnh sửa giỏ hàng</a>
                            </small>
                        </div>
                    </div>

                    <div class="panel-body">
                        @if(Session::has("cart") != null)           has: kiem tra co ton tai hay khong
                        @foreach(Session::get('cart')->products as $item)                 get: lay gia tri cua session ra
                        <div class="form-group">
                            <div class="col-sm-3 col-xs-3">
                                <img class="img-responsive"
                                     src="{{$item['productInfo']->feature_image_path}}"/>
                            </div>
                            <div class="col-sm-6 col-xs-6">
                                <div class="checkOut-product">{{$item['productInfo']->name}} </div>
                                <input type="text" name="product_id[]" hidden value="{{$item['productInfo']->id}}"/>
                            </div>
                            <div class="col-sm-3 col-xs-3 text-right">
                                <h6 class="checkOut-product">
                                    {{number_format($item['price']) }}
                                </h6>
                                <input type="text" name="quanty[]" hidden value="{{ $item['quanty'] }}"/>
                            </div>
                        </div>
                        <div class="form-group">
                            <hr/>
                        </div>
                        @endforeach
                        <div class="form-group">
                            <div class="col-xs-12">
                                <strong>TỔNG ĐƠN HÀNG</strong>
                                <div class="pull-right">
                                    <span id="checkOut-product">
                                        {{number_format(Session::get('cart')->totalPrice)}} VND
                                    </span>
                                </div>
                            </div>
                        </div>

                        @endif
                    </div>
                </div>
            </div>

        </form>
    </div>
    <div class="row cart-footer">

    </div>
</div>



