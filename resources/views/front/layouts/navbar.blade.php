<?php

use App\Http\Controllers\CartController;
$total = CartController::cartItem();

use App\Http\Controllers\Front\MainController;
$isKediKumu = MainController::Pc();
$isKediMamasi = MainController::Ps();
$isKediEsya = MainController::Xbox();

?>

<!-- header -->
<div class="header" id="home">
    <div class="container">
        <ul>
            @if (Auth::check())
                <li><a href="{{route('front.profile')}}"><i class="fa fa-user" aria-hidden="true"></i>Profilim ({{Auth::user()->name}} {{ Auth::user()->surname}})</a></li>
                @if(Auth::user()->type == 'user')
                <li><a href="{{route('front.order.index')}}"><i class="fa fa-shopping-basket" aria-hidden="true"></i> Siparişlerim </a></li>
                    <li><i class="fa fa-envelope-o" aria-hidden="true"></i> <a href="mailto:info@example.com">@kedisayfası</a></li>
                @else
                    <li style="width: 49%;"><a href="{{route('back.dashboard')}}"><i class="fa fa-desktop" aria-hidden="true"></i> Admin Paneli</a></li>
                @endif
                <li><form action="{{route('logout')}}" method="POST" style="margin: 0">@csrf<button type="submit" style="background: transparent; border:none;"><i class="glyphicon glyphicon-log-out" aria-hidden="true"></i> Çıkış Yap </button></form></li>
            @else
                <li> <a href="#" data-toggle="modal" data-target="#myModal"><i class="fa fa-unlock-alt" aria-hidden="true"></i> Giriş Yap </a></li>
                <li> <a href="#" data-toggle="modal" data-target="#myModal2"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Kayıt Ol </a></li>
                <li><i class="fa fa-phone" aria-hidden="true"></i> +90 537 923 9309</li>
                <li><i class="fa fa-envelope-o" aria-hidden="true"></i> <a href="mailto:info@example.com">@miavshop</a></li>
            @endif

        </ul>
    </div>
</div>
<!-- //header -->
<!-- header-bot -->
<div class="header-bot text-center">
    <div class="header-bot_inner_wthreeinfo_header_mid">
                <!-- header-bot -->
        
        <!-- header-bot -->
        <div class="col-md-4 header-middle">
            <h3>Kedileriniz için en iyisi...</h3>
        </div>
            
            <div class="col-md-4 header-middle">
            <h2>Miav PETSHOP</h2>
        </div>
        <div class="col-md-4 header-middle">
            <h3>Kedileriniz için en iyisi...</h3>
        </div>


        <div class="clearfix"></div>
    </div>
</div>
<!-- //header-bot -->
<!-- banner -->
<div class="ban-top" style="background-color:#bb7b3d !important;">
    <div class="container">
        <div class="top_nav_left">
            <nav class="navbar navbar-default">
                <div class="container-fluid">
                    <!-- Brand and toggle get grouped for better mobile display -->
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                    </div>
                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="collapse navbar-collapse menu--shylock" id="bs-example-navbar-collapse-1">
                        <ul class="nav navbar-nav menu__list">
                            <li class="active menu__item menu__item--current"><a class="menu__link" href="{{route('front.mainpage')}}">Ana Sayfa <span class="sr-only">(current)</span></a></li>
                            <li class=" menu__item"><a class="menu__link" href="{{route('front.about')}}">Hakkımızda</a></li>
                            <li class="menu__item">
                                <a href="{{route('front.kedimamasi')}}" class="menu__link">Kedi Maması</a>
                            </li>
                            <li class="menu__item">
                                <a href="{{route('front.kedikumu')}}" class="menu__link">Kedi Kumu</a>
                            </li>
                            <li class="menu__item">
                                <a href="{{route('front.kediesyalari')}}" class="menu__link">Kedi Eşyaları</a>
                            </li>
                            <li class=" menu__item"><a class="menu__link" href="{{route('front.contact')}}">İletişim</a></li>
                        </ul>
                    </div>
                </div>
            </nav>
        </div>
        <div class="top_nav_right">
            <a href="{{route('front.cart')}}">
            <div class="wthreecartaits wthreecartaits2 cart cart box_1">
                    <input type="hidden" name="cmd" value="_cart">
                    <input type="hidden" name="display" value="1">
                    <button class="w3view-cart" type="submit" name="submit" value=""><i class="fa fa-cart-arrow-down"  aria-hidden="true"></i></button>
                    <button class="w3view-cart" type="submit" name="submit" value=""><span>({{$total}})</span></button>

            </div></a>
        </div>
        <div class="clearfix"></div>
    </div>
</div>
<!-- //banner-top -->
<!-- Modal1 -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog">
    <div class="modal-dialog">
        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            <div class="modal-body modal-body-sub_agile">
                <div class="col-md-8 modal_body_left modal_body_left1">
                    <h3 class="agileinfo_sign"><span>Hemen</span> Giriş Yap</h3>
                    <form method="post" id="loginForm" action="{{route('login')}}">
                        <div class="alert alert-danger" id="loginFormErrorDiv" style="margin-bottom: 0px !important; display: none; padding: 15px 15px 15px 25px !important;">
                            <ul id="loginFormErrorUL">
                            </ul>
                        </div>
                        @csrf
                        <div class="styled-input">
                            <input type="email" id="email" name="email" required="" class="@error('email') is-invalid @enderror" value="{{ old('email') }}" required autocomplete="email" autofocus>
                            <label for="email">Email</label>
                            <span></span>
                        </div>


                        <div class="styled-input agile-styled-input-top">
                            <input type="password" name="password" id="password"  class="@error('password') is-invalid @enderror" required autocomplete="current-password">
                            <label for="password">Şifre</label>
                            <span></span>
                        </div>
                        <div class="form-check" style="margin-bottom: 6px">
                            <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                            <label class="form-check-label" for="remember">
                                Beni Hatırla
                            </label>
                        </div>
                        <input type="submit" value="Giriş Yap">
                    </form>
                    <ul class="social-nav model-3d-0 footer-social w3_agile_social top_agile_third">
                        <li><a href="#" class="instagram">
                                <div class="front"><i class="fa fa-instagram" aria-hidden="true"></i></div>
                                <div class="back"><i class="fa fa-instagram" aria-hidden="true"></i></div></a></li>
                    </ul>
                    <div class="clearfix"></div>
                    <p><a href="#" data-toggle="modal" data-target="#myModal2" > Hesabın yok mu? <strong>Hemen Aç!</strong></a></p>

                </div>
                <div class="col-md-4 modal_body_right modal_body_right1">
                    <img src="{{asset('front/images/template-images')}}/cat.jpg" alt=" "/>
                </div>
                <div class="clearfix"></div>
            </div>
        </div>
        <!-- //Modal content-->
    </div>
</div>
<!-- //Modal1 -->
<!-- Modal2 -->
<div class="modal fade" id="myModal2" tabindex="-1" role="dialog">
    <div class="modal-dialog">
        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            <div class="modal-body modal-body-sub_agile">
                <div class="col-md-8 modal_body_left modal_body_left1">
                    <h3 class="agileinfo_sign"><span>Hemen</span> Kayıt Ol</h3>
                    <form id="registerForm" method="POST" action="{{route('register')}}">
                        <div class="alert alert-danger" id="registerFormErrorDiv" style="margin-bottom: 0px !important; display: none; padding: 15px 15px 15px 25px !important;">
                            <ul id="registerFormErrorUL">
                            </ul>
                        </div>
                        @csrf
                        <div style="margin-top:36px; display: flex; justify-content: space-between; align-items: center;">
                            <div class="styled-input agile-styled-input-top" style="width: 48%">
                                <input type="text" name="name" required="">
                                <label for="name">İsim</label>
                                <span></span>
                            </div>
                            <div class="styled-input agile-styled-input-top" style="width: 48%">
                                <input type="text" name="surname" required="">
                                <label for="surname">Soyisim</label>
                                <span></span>
                            </div>
                        </div>
                        <div class="styled-input">
                            <input type="email" name="email" required="">
                            <label for="email">Email</label>
                            <span></span>
                        </div>
                        <div class="styled-input">
                            <input type="password" name="password" required="">
                            <label>Şifre</label>
                            <span></span>
                        </div>
                        <div class="styled-input">
                            <input type="password" name="password_confirmation" required="">
                            <label for="password_confirmation">Tekrar Şifre</label>
                            <span></span>
                        </div>
                        <input type="submit" style="width: 100%" value="Kayıt Ol">
                    </form>
                    <ul class="social-nav model-3d-0 footer-social w3_agile_social top_agile_third">
                        <li><a href="#" class="instagram">
                                <div class="front"><i class="fa fa-instagram" aria-hidden="true"></i></div>
                                <div class="back"><i class="fa fa-instagram" aria-hidden="true"></i></div></a></li>
                    </ul>
                    <div class="clearfix"></div>
                </div>
                <div class="col-md-4 modal_body_right modal_body_right1">
                    <img src="{{asset('front/images/template-images')}}/cat.jpg" alt=" "/>
                </div>
                <div class="clearfix"></div>
                <p><a href="#">Üye olarak, Şartları ve KVKK'yı kabul etmiş oluyorsunuz.</a></p>

            </div>
        </div>
        <!-- //Modal content-->
    </div>
</div>
<!-- //Modal2 -->
