@if($newCart != null)           {{--has: kiem tra co ton tai hay khong--}}
<p>ok</p>
@endif
<div class="select-items">
    <table>
        <tbody>
        @foreach(Session::get('cart')->products as $item)                 {{--get: lay gia tri cua session ra--}}
        <tr>
            <td class="si-pic"><img src="asset/img/products/{{$item['productInfo']->img}}" alt="">
            </td>
            <td class="si-text">
                <div class="product-selected">
                    <p>{{number_format($item['productInfo']->price)}} VND x {{ $item['quanty'] }}</p>
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
    <input id="total-quanty-cart" hidden type="number" value="{{Session::get('cart')->totalQuanty}}">

</div>
