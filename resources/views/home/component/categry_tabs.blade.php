<div class="category-tab"><!--category-tab-->
    <div class="col-sm-12">
        <ul class="nav nav-tabs">
            @foreach($categories as $indexCategory => $categoryItem)
                <li class="{{ $indexCategory == 0 ? 'active' : '' }}">
                    <a href="#category_tab_{{ $categoryItem->id }}" data-toggle="tab">
                        {{ $categoryItem->name }}
                    </a>
                </li>
            @endforeach
        </ul>
    </div>
    <div class="tab-content">
        @foreach($categories as $indexCategoryProduct => $categoryItemProduct)
            <div class="tab-pane fade {{ $indexCategoryProduct == 0 ? 'active in' : ''  }}" id="category_tab_{{ $categoryItemProduct->id }}">
                @foreach($categoryItemProduct->products as $productItemTabs)
                    <div class="col-sm-3">
                        <div class="product-image-wrapper">
                            <div class="single-products">
                                <div class="productinfo text-center">
                                    <img src="{{config('app.base_url') . $productItemTabs->feature_image_path}}" alt=""/>
                                    <h2>{{ $categoryItemProduct->name }}</h2>
                                    <p>{{ number_format($categoryItemProduct->price) }} VND</p>
                                    <a onclick="AddCart({{$productItemTabs->id}})"
                                       href="javascript:"
                                       class="btn btn-default add-to-cart"><i
                                            class="fa fa-shopping-cart"></i>Add to cart</a>
                                </div>

                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        @endforeach
    </div>
</div>
