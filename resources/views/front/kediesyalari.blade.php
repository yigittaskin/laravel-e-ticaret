@extends('front.layouts.master')
@section('title') Kedi Eşyaları @endsection
@section('content')

<div class="page-head_agile_info_w3l">
    <div class="container">
        <h3>Kedi Eşyaları<span></span></h3>
        <!--/w3_short-->
        <div class="services-breadcrumb">
            <div class="agile_inner_breadcrumb">

                <ul class="w3_short">
                    <li><a href="{{route('front.mainpage')}}">Ana Sayfa</a><i>|</i></li>
                    <li>Kedi Eşyaları</li>
                </ul>
            </div>
        </div>
        <!--//w3_short-->
    </div>
</div>
    <!-- banner-bootom-w3-agileits -->
	<div class="banner-bootom-w3-agileits">
        <div class="container">
             <!-- mens -->
            <div class="col-md-4 products-left">

                <div class="css-treeview">
                    <h4>TÜR</h4>
                    <ul class="tree-list-pad">
                        @foreach($kinds as $kind)
                            <li><a href="#" style="margin: 0; padding: 0; font-size: 16px;">
                                    <input type="checkbox" checked="checked" id="item-0"/>
                                    <label for="item-0">
                                        <i class="fa fa-long-arrow-right" aria-hidden="true"></i>
                                        {{$kind->name}}
                                    </label>
                                </a>
                            </li>
                        @endforeach
                    </ul>
                </div>
                <div class="community-poll">
                    <h4>Marka</h4>
                    <div class="swit form">
                        <form>
                            @foreach($xboxPublishers as $publisher)
                                <div class="check_box">
                                    <a href="#">
                                        <div class="radio">
                                            <label><input type="radio" name="radio"><i></i>
                                                {{$publisher->name}}
                                            </label>
                                        </div>
                                    </a>
                                </div>
                            @endforeach
                            <input type="submit" value="FİLTRELE">
                        </form>
                    </div>
                </div>
                <div class="clearfix"></div>
            </div>
            <div class="col-md-8 products-right">
            <div class="single-pro">
                {{--       PRODUCT DIV         --}}
                @foreach($products as $product)
                    <div class="col-md-3 product-men">
                        <div class="men-pro-item simpleCart_shelfItem">
                            <div class="men-thumb-item">
                                <img src="{{$product->coverImage}}" alt="" width="255px" height="248px" style="object-fit: contain" class="pro-image-front">
                                <img src="{{$product->coverImage}}" alt="" width="255px" height="248px" style="object-fit: contain" class="pro-image-back">
                                <div class="men-cart-pro">
                                    <div class="inner-men-cart-pro">
                                        <a href="{{route('front.product.detail.index', $product->id)}}" class="link-product-add-cart">Hemen İncele</a>
                                    </div>
                                </div>
                                <span class="product-new-top">YENİ!</span>

                            </div>
                            <div class="item-info-product ">
                                <h4><a href="{{route('front.product.detail.index', $product->id)}}">{{$product->name}}</a></h4>
                                <div class="info-product-price">
                                    @if($product->discountRate !== 0)
                                        <span class="item_price">{{number_format($product->price-($product->price*($product->discountRate / 100)), 2)}}₺</span>
                                        <del>{{$product->price}}₺</del>
                                    @else
                                        <span class="item_price">{{$product->price}} ₺</span>
                                    @endif
                                </div>
                                <div class="snipcart-details top_brand_home_details item_add single-item hvr-outline-out button2">
                                    <form action="{{route('front.cart.add')}}" method="post">
                                        @csrf
                                        <fieldset>
                                            <input type="hidden" name="product_id" value="{{$product->id}}" id="">
                                            <input type="submit" name="submit" value="Sepete Ekle" class="button">
                                        </fieldset>
                                    </form>
                                </div>

                            </div>
                        </div>
                    </div>
                @endforeach
                {{--        /PRDOCUT DIV        --}}
                <div class="clearfix"></div>
            </div>
             
            <div class="clearfix"></div>
        </div>
    </div>
    <!-- //mens -->
<!--/grids-->
<div class="coupons">
    <div class="coupons-grids text-center">
        <div class="w3layouts_mail_grid">
            <div class="col-md-3 w3layouts_mail_grid_left">
                <div class="w3layouts_mail_grid_left1 hvr-radial-out">
                    <i class="fa fa-truck" aria-hidden="true"></i>
                </div>
                <div class="w3layouts_mail_grid_left2">
                    <h3>ÜCRETSİZ KARGO</h3>
                    <p>Fiziksel olarak almak isterseniz ücretsiz kargo ile gönderebiliriz!</p>
                </div>
            </div>
            <div class="col-md-3 w3layouts_mail_grid_left">
                <div class="w3layouts_mail_grid_left1 hvr-radial-out">
                    <i class="fa fa-headphones" aria-hidden="true"></i>
                </div>
                <div class="w3layouts_mail_grid_left2">
                    <h3>7/24 CANLI DESTEK</h3>
                    <p>7/24 Canlı Destek hattımız mevcuttur.</p>
                </div>
            </div>
            <div class="col-md-3 w3layouts_mail_grid_left">
                <div class="w3layouts_mail_grid_left1 hvr-radial-out">
                    <i class="fa fa-shopping-bag" aria-hidden="true"></i>
                </div>
                <div class="w3layouts_mail_grid_left2">
                    <h3>İADE GARANTİSİ</h3>
                    <p>Herhangi bir sorunda iade garantisi vardır.</p>
                </div>
            </div>
            <div class="col-md-3 w3layouts_mail_grid_left">
                <div class="w3layouts_mail_grid_left1 hvr-radial-out">
                    <i class="fa fa-gift" aria-hidden="true"></i>
                </div>
                <div class="w3layouts_mail_grid_left2">
                    <h3>HEDİYE KUPONLAR</h3>
                    <p>Alışveriş yaptıkça indirim kuponları kazanın.</p>
                </div>
            </div>
            <div class="clearfix"> </div>
        </div>
    </div>
</div>
<!--grids-->
@endsection
