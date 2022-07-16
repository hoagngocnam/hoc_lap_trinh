@extends('users.layouts.index')

@section('main-content')
    <div class="center_content">
        <div class="center_title_bar">{{ $product->name }}</div>
        <div class="prod_box_big">
            <div class="center_prod_box_big">
                <div class="product_img_big">
                    <a href="javascript:popImage('images/big_pic.jpg','Some Title')"
                        title="header=[Zoom] body=[&nbsp;] fade=[on]">
                        <img src="{{ asset($product->picture) }}" alt="" border="0" style="width: 150px">
                    </a>
                </div>
                <div class="details_big_box">
                    <div class="product_title_big">{{ $product->name }}</div>
                    <div class="specifications"> Available: <span class="blue">In stock</span><br>
                        Warranties: <span class="blue">24 months</span><br>
                        Transport: <span class="blue"> delivery services company</span><br>
                        Include :<span class="blue"> TVA</span><br>
                        Description :{{ $product->description }}
                    </div>
                    <div class="prod_price_big"><span class="reduce">350$</span> <span class="price">270$</span></div>
                    <a href="#" class="prod_buy">add to cart</a> <a href="#" class="prod_compare">compare</a>
                </div>
            </div>
        </div>
    </div>
@endsection
