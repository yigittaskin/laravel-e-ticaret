@extends('front.layouts.master')
@section('title') MiavShop @endsection
@section('content')
    <!-- banner -->
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
        <!-- Indicators -->
        <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1" class=""></li>
            <li data-target="#myCarousel" data-slide-to="2" class=""></li>
            <li data-target="#myCarousel" data-slide-to="3" class=""></li>
            <li data-target="#myCarousel" data-slide-to="4" class=""></li>
        </ol>
        <div class="carousel-inner" role="listbox">
            <div class="item active">
                <div class="container">
                    <div class="carousel-caption">
                        <h3>Bugüne Özel Büyük</h3>
                        <h2 style="color:#bb7b3d;">İndirim!</h2> </div>
                </div>
            </div>
            <div class="item item2">
                <div class="container">
                <div class="carousel-caption">
</div>
                </div>
            </div>
            <div class="item item3">
                <div class="container">
                    <div class="carousel-caption">
                        <h3>Bugüne Özel Büyük</h3>
                        <h2 style="color:#bb7b3d;">İndirim!</h2>
                    </div>                </div>
            </div>
            <div class="item item4">
                <div class="container">
                <div class="carousel-caption">
</div>
                </div>
            </div>
            <div class="item item5">
                <div class="container">
                    <div class="carousel-caption">
                   
                    <h3>Bugüne Özel Büyük</h3>
                        <p>İndirim!</p></div>
                </div>
            </div>
        </div>
        <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
        <!-- The Modal -->
    </div>
    <!-- //banner -->

    <!-- banner-bootom-w3-agileits -->
    <div class="banner-bootom-w3-agileits">
        <div class="container">
            <h3 class="wthree_text_info">Çok <span>Satanlar</span></h3>

            <div class="col-md-6">
                    <div class="bb-left-agileits-w3layouts-inner grid">
                        <figure class="effect-roxy">
                            <img src="{{asset('front/images')}}/catmama1.jpg" alt=" " height=500 class="img-fluid" />
                            <figcaption>
                                <h3><span></span></h3>
                                <p></p>
                            </figcaption>
                        </figure>
                    </div>
            </div>
            <div class="col-md-6">
                    <div class="bb-right-agileits-w3layouts grid">
                        <figure class="effect-roxy">
                            <img src="{{asset('front/images')}}/catmama3.jpg" alt=" " height=500 class="img-fluid" />
                            <figcaption>
                                <h3><span></span> </h3>
                                <p style="font-weight: 900"></p>
                            </figcaption>
                        </figure>
                    </div>
            </div>
        </div>
    </div>

    <!-- /new_arrivals -->
    <div class="new_arrivals_agile_w3ls_info">
        <div class="container">
            <h3 class="wthree_text_info">En <span>Yeniler</span></h3>
            <div id="horizontalTab">
                <ul class="resp-tabs-list">
                    <li> Son Eklenenler</li>

                </ul>
                <div class="resp-tabs-container">
                    <!--/tab_one-->
                    <div class="tab1">
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
                                        @if($product->stock > 0)
                                        <form action="{{route('front.cart.add')}}" method="post">
                                            @csrf
                                            <fieldset>
                                                <input type="hidden" name="product_id" value="{{$product->id}}" id="">
                                                <input type="submit" name="submit" value="Sepete Ekle" class="button">
                                            </fieldset>
                                        </form>
                                        @else
                                        <fieldset>
                                            <input type="submit" name="submit" value="Ürün Stokta Yok !" style="background-color: red;" class="button">
                                        </fieldset>
                                        @endif
                                    </div>
    
                                </div>
                            </div>
                        </div>
                    @endforeach
                        <div class="clearfix"></div>
                    </div>
                    <!--//tab_one-->
                    <!--/tab_two-->
                </div>
            </div>
        </div>
    </div>
    <!-- //new_arrivals -->
    <!-- /we-offer -->
    <div class="sale-w3ls">
        <div class="container">
            <h6><span style="color:#bb7b3d;">%40</span>'a Varan İndirimler !</h6>
            <a class="hvr-outline-out button2" href="{{route('front.kedikumu')}}">Alışverişe Başla !</a>
        </div>
    </div>
    <!-- //we-offer -->
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
                        <p>Anlaşmalı kargo firmaları ile kargolarınız ücretsiz bir şekilde size ulaşacak!</p>
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

@section('customPageCss')
    <style rel="stylesheet">
        /*-- banner --*/
        .carousel .item{
            background:-webkit-linear-gradient(rgba(23, 22, 23, 0.2), rgba(23, 22, 23, 0.5)), url({{asset('front/images/template-images')}}/cat.jpg) no-repeat;
            background:-moz-linear-gradient(rgba(23, 22, 23, 0.2), rgba(23, 22, 23, 0.5)), url({{asset('front/images/template-images')}}/cat.jpg) no-repeat;
            background:-ms-linear-gradient(rgba(23, 22, 23, 0.2), rgba(23, 22, 23, 0.5)), url({{asset('front/images/template-images')}}/cat.jpg) no-repeat;
            background:linear-gradient(rgba(23, 22, 23, 0.2), rgba(23, 22, 23, 0.5)), url({{asset('front/images/template-images')}}/cat.jpg) no-repeat;
        }
        .carousel .item.item2{
            background:-webkit-linear-gradient(rgba(23, 22, 23, 0.2), rgba(23, 22, 23, 0.5)), url({{asset('front/images/template-images')}}/kedilericin.jpg) no-repeat;
            background:-moz-linear-gradient(rgba(23, 22, 23, 0.2), rgba(23, 22, 23, 0.5)), url({{asset('front/images/template-images')}}/kedilericin.jpg) no-repeat;
            background:-ms-linear-gradient(rgba(23, 22, 23, 0.2), rgba(23, 22, 23, 0.5)), url({{asset('front/images/template-images')}}/kedilericin.jpg) no-repeat;
            background:linear-gradient(rgba(23, 22, 23, 0.2), rgba(23, 22, 23, 0.5)), url({{asset('front/images/template-images')}}/kedilericin.jpg) no-repeat;
            background-size:cover;
        }
        .carousel .item.item3{
            background:-webkit-linear-gradient(rgba(23, 22, 23, 0.2), rgba(23, 22, 23, 0.5)), url({{asset('front/images/template-images')}}/cat.jpg) no-repeat;
            background:-moz-linear-gradient(rgba(23, 22, 23, 0.2), rgba(23, 22, 23, 0.5)), url({{asset('front/images/template-images')}}/cat.jpg) no-repeat;
            background:-ms-linear-gradient(rgba(23, 22, 23, 0.2), rgba(23, 22, 23, 0.5)), url({{asset('front/images/template-images')}}/cat.jpg) no-repeat;
            background:linear-gradient(rgba(23, 22, 23, 0.2), rgba(23, 22, 23, 0.5)), url({{asset('front/images/template-images')}}/cat.jpg) no-repeat;
        }
        .carousel .item.item4{
            background:-webkit-linear-gradient(rgba(23, 22, 23, 0.2), rgba(23, 22, 23, 0.5)), url({{asset('front/images/template-images')}}/catban1.jpg) no-repeat;
            background:-moz-linear-gradient(rgba(23, 22, 23, 0.2), rgba(23, 22, 23, 0.5)), url({{asset('front/images/template-images')}}/catban1.jpg) no-repeat;
            background:-ms-linear-gradient(rgba(23, 22, 23, 0.2), rgba(23, 22, 23, 0.5)), url({{asset('front/images/template-images')}}/catban1.jpg) no-repeat;
            background:linear-gradient(rgba(23, 22, 23, 0.2), rgba(23, 22, 23, 0.5)), url({{asset('front/images/template-images')}}/catban1.jpg) no-repeat;
            background-size:cover;
        }
        .carousel .item.item5{
            background:-webkit-linear-gradient(rgba(23, 22, 23, 0.2), rgba(23, 22, 23, 0.5)), url({{asset('front/images/template-images')}}/kedilericin.jpg) no-repeat;
            background:-moz-linear-gradient(rgba(23, 22, 23, 0.2), rgba(23, 22, 23, 0.5)), url({{asset('front/images/template-images')}}/kedilericin.jpg) no-repeat;
            background:-ms-linear-gradient(rgba(23, 22, 23, 0.2), rgba(23, 22, 23, 0.5)), url({{asset('front/images/template-images')}}/kedilericin.jpg) no-repeat;
            background:linear-gradient(rgba(23, 22, 23, 0.2), rgba(23, 22, 23, 0.5)), url({{asset('front/images/template-images')}}/kedilericin.jpg) no-repeat;
            background-size:cover;
        }
    </style>
@endsection
