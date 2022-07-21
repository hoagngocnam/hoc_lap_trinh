@extends('users.layouts.index')

@section('main-content')
    @php
    function promotionPercentage($originalPrice, $promotionalPrice)
    {
        $precent = (($originalPrice - $promotionalPrice) / $originalPrice) * 100;
        return $precent;
    }
    @endphp
    <section id="categoryPage" class="desktop" data-id="1942" data-name="Tivi" data-template="cate">
        <div class="container-productbox">
            <ul class="listproduct">
                @foreach ($productList as $index => $product)
                    <!-- Một sản phẩm -->
                    <li class=" item  __cate_1942">
                        <a href="https://www.dienmayxanh.com/tivi/qled-4k-samsung-qa50q65a?src=osp" class="main-contain">
                            <div class="item-label">
                                <span class="lb-tragop">Trả góp 0%</span>
                            </div>
                            <div class="item-img item-img_1942">
                                <img class="thumb lazyloaded" alt="Samsung Smart TV QLED QA50Q65A"
                                    src="{{ $product->picture }}">
                                <img src="./template_files/Label_01-05.png" width="40" height="40" loading="lazy"
                                    class="lbliconimg lbliconimg_1942 dmx">
                            </div>

                            <p class="result-label temp3">
                                <img width="20" height="20" class=" lazyloaded" alt="SINH NHẬT GIẢM SỐC"
                                    data-src="https://cdn.tgdd.vn/2022/07/content/50x50-50x50-10.png"
                                    src="./template_files/50x50-50x50-10.png"><span>SINH NHẬT GIẢM SỐC</span>
                            </p>
                            <h3>
                                {{ $product->name }}
                            </h3>
                            <div class="box-p">
                                <p class="price-old black"> {{ $product->original_price }}</p>
                                <span
                                    class="percent">-{{ promotionPercentage($product->original_price, $product->promotional_price) }}%</span>
                            </div>
                            <strong class="price">{{ $product->promotional_price }}</strong>
                            <div class="item-rating">
                                <p>
                                    <i class="icon-star"></i>
                                    <i class="icon-star"></i>
                                    <i class="icon-star"></i>
                                    <i class="icon-star"></i>
                                    <i class="icon-star-dark"></i>
                                </p>
                                <p class="item-rating-total">103</p>
                            </div>
                        </a>
                        <div class="item-bottom">
                            <a href="https://www.dienmayxanh.com/tivi#" class="shiping"></a>
                        </div>
                        <a href="javascript:void(0)" class="item-ss">
                            <i></i>
                            So sánh
                        </a>
                    </li>
                    <!-- Kết thúc Một sản phẩm -->
                @endforeach
            </ul>
        </div>
    </section>
@endsection
