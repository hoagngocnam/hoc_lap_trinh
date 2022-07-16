@extends('users.layouts.index')

@section('main-content')
    <div class="center_content">
        <div class="center_title_bar">Danh sách sản phẩm</div>
        @foreach ($productList as $index => $product)
            {{-- Mỗi Sản phẩm --}}
            <div class="prod_box">
                <div class="center_prod_box">
                    <div class="product_title"><a href="{{ route('users.product.detail', ['id'=>$product->id]) }}">{{ $product->name }}</a>
                    </div>
                    <div class="product_img">
                        <a href="{{ route('users.product.detail', ['id'=>$product->id]) }}  ">
                            <img src="{{ asset($product->picture) }}" alt="" border="0" style="width: 150px" />
                        </a>
                    </div>
                    <div class="prod_price"><span class="reduce">350$</span> <span class="price">270$</span>
                    </div>
                </div>
                <div class="prod_details_tab"> <a href="#" class="prod_buy">Add to Cart</a> <a href="#"
                        class="prod_details">Details</a> </div>
            </div>
            {{-- End sản phẩm --}}
        @endforeach
    </div>
@endsection
