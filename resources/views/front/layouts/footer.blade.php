<div class="footer">
    <div class="footer_agile_inner_info_w3l">
        <div class="agile_newsletter_footer">
            <div class="col-sm-6 newsleft">
                <h3>İndirimlerden Haberdar Olmak İster Misin ?
</h3>
            </div>
            <div class="col-sm-6 newsright">
                <form action="#" method="post">
                    <input type="email" placeholder="Mail adresi gir..." name="email" required="">
                    <input type="submit" value="Abone Ol !">
                </form>
            </div>
<!-- weather widget start --><div id="m-booked-weather-bl250-84235"> <div class="booked-wzs-250-175 weather-customize" style="background-color:#137AE9;width:250px;" id="width1"> <div class="booked-wzs-250-175_in"> <div class="booked-wzs-250-175-data"> <div class="booked-wzs-250-175-left-img wrz-18"> </div> <div class="booked-wzs-250-175-right"> <div class="booked-wzs-day-deck"> <div class="booked-wzs-day-val"> <div class="booked-wzs-day-number"><span class="plus">+</span>17</div> <div class="booked-wzs-day-dergee"> <div class="booked-wzs-day-dergee-val">&deg;</div> <div class="booked-wzs-day-dergee-name">C</div> </div> </div> <div class="booked-wzs-day"> <div class="booked-wzs-day-d">H: <span class="plus">+</span>17&deg;</div> <div class="booked-wzs-day-n">L: <span class="plus">+</span>11&deg;</div> </div> </div> <div class="booked-wzs-250-175-info"> <div class="booked-wzs-250-175-city">Kocaeli </div> <div class="booked-wzs-250-175-date">Cumartesi, 06 Mayıs</div> <div class="booked-wzs-left"> <span class="booked-wzs-bottom-l">7 Günlük Hava Tahmini</span> </div> </div> </div> </div> <table cellpadding="0" cellspacing="0" class="booked-wzs-table-250"> <tr> <td>Pz</td> <td>Pt</td> <td>Sa</td> <td>Ça</td> <td>Pe</td> <td>Cu</td> </tr> <tr> <td class="week-day-ico"><div class="wrz-sml wrzs-18"></div></td> <td class="week-day-ico"><div class="wrz-sml wrzs-03"></div></td> <td class="week-day-ico"><div class="wrz-sml wrzs-18"></div></td> <td class="week-day-ico"><div class="wrz-sml wrzs-18"></div></td> <td class="week-day-ico"><div class="wrz-sml wrzs-03"></div></td> <td class="week-day-ico"><div class="wrz-sml wrzs-18"></div></td> </tr> <tr> <td class="week-day-val"><span class="plus">+</span>17&deg;</td> <td class="week-day-val"><span class="plus">+</span>19&deg;</td> <td class="week-day-val"><span class="plus">+</span>15&deg;</td> <td class="week-day-val"><span class="plus">+</span>13&deg;</td> <td class="week-day-val"><span class="plus">+</span>15&deg;</td> <td class="week-day-val"><span class="plus">+</span>19&deg;</td> </tr> <tr> <td class="week-day-val"><span class="plus">+</span>11&deg;</td> <td class="week-day-val"><span class="plus">+</span>11&deg;</td> <td class="week-day-val"><span class="plus">+</span>11&deg;</td> <td class="week-day-val"><span class="plus">+</span>9&deg;</td> <td class="week-day-val"><span class="plus">+</span>7&deg;</td> <td class="week-day-val"><span class="plus">+</span>11&deg;</td> </tr> </table> </div> </div> </div><script type="text/javascript"> var css_file=document.createElement("link"); var widgetUrl = location.href; css_file.setAttribute("rel","stylesheet"); css_file.setAttribute("type","text/css"); css_file.setAttribute("href",'https://s.bookcdn.com/css/w/booked-wzs-widget-275.css?v=0.0.1'); document.getElementsByTagName("head")[0].appendChild(css_file); function setWidgetData_84235(data) { if(typeof(data) != 'undefined' && data.results.length > 0) { for(var i = 0; i < data.results.length; ++i) { var objMainBlock = document.getElementById('m-booked-weather-bl250-84235'); if(objMainBlock !== null) { var copyBlock = document.getElementById('m-bookew-weather-copy-'+data.results[i].widget_type); objMainBlock.innerHTML = data.results[i].html_code; if(copyBlock !== null) objMainBlock.appendChild(copyBlock); } } } else { alert('data=undefined||data.results is empty'); } } var widgetSrc = "https://widgets.booked.net/weather/info?action=get_weather_info;ver=7;cityID=36062;type=3;scode=45835;ltid=3458;domid=765;anc_id=78857;countday=undefined;cmetric=1;wlangID=21;color=137AE9;wwidth=250;header_color=ffffff;text_color=333333;link_color=08488D;border_form=1;footer_color=ffffff;footer_text_color=333333;transparent=0;v=0.0.1";widgetSrc += ';ref=' + widgetUrl;widgetSrc += ';rand_id=84235';var weatherBookedScript = document.createElement("script"); weatherBookedScript.setAttribute("type", "text/javascript"); weatherBookedScript.src = widgetSrc; document.body.appendChild(weatherBookedScript) </script><!-- weather widget end -->
            <div class="clearfix"></div>
        </div>
        <p class="copy-right">&copy 2023 MiavSHOP - Tüm Hakları Saklıdır.</p>
    </div>
</div>
<!-- //footer -->

<!-- js -->
<script type="text/javascript" src="{{asset('front/js/jquery-2.1.4.min.js')}}"></script>
<!-- //js -->
<script src="{{asset('front/js/modernizr.custom.js')}}"></script>
<!-- Custom-JavaScript-File-Links -->
<!-- cart-js -->
<script src="{{asset('front/js/minicart.min.js')}}"></script>
<script>
    // Mini Cart
    paypal.minicart.render({
        action: '#'
    });

    if (~window.location.search.indexOf('reset=true')) {
        paypal.minicart.reset();
    }
</script>

<!-- //cart-js -->
<!-- script for responsive tabs -->
<script src="{{asset('front/js/easy-responsive-tabs.js')}}"></script>
<script>
    $(document).ready(function () {
        $('#horizontalTab').easyResponsiveTabs({
            type: 'default', //Types: default, vertical, accordion
            width: 'auto', //auto or any width like 600px
            fit: true,   // 100% fit in a container
            closed: 'accordion', // Start closed if in accordion view
            activate: function(event) { // Callback function if tab is switched
                var $tab = $(this);
                var $info = $('#tabInfo');
                var $name = $('span', $info);
                $name.text($tab.text());
                $info.show();
            }
        });
        $('#verticalTab').easyResponsiveTabs({
            type: 'vertical',
            width: 'auto',
            fit: true
        });
    });
</script>
<!-- //script for responsive tabs -->
<!-- stats -->
<script src="{{asset('front/js/jquery.waypoints.min.js')}}"></script>
<script src="{{asset('front/js/jquery.countup.js')}}"></script>
<script>
    $('.counter').countUp();
</script>
<!-- //stats -->
<!-- start-smoth-scrolling -->
<script type="text/javascript" src="{{asset('front/js/move-top.js')}}"></script>
<script type="text/javascript" src="{{asset('front/js/jquery.easing.min.js')}}"></script>
<script type="text/javascript">
    jQuery(document).ready(function($) {
        $(".scroll").click(function(event){
            event.preventDefault();
            $('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
        });
    });
</script>
<!-- here stars scrolling icon -->
<script type="text/javascript">
    $(document).ready(function() {
        /*
            var defaults = {
            containerID: 'toTop', // fading element id
            containerHoverID: 'toTopHover', // fading element hover id
            scrollSpeed: 1200,
            easingType: 'linear'
            };
        */

        $().UItoTop({ easingType: 'easeOutQuart' });

    });
</script>
<!-- //here ends scrolling icon -->

<script src="{{asset('front/js/responsiveslides.min.js')}}"></script>
				<script>
						// You can also use "$(window).load(function() {"
						$(function () {
						 // Slideshow 4
						$("#slider3").responsiveSlides({
							auto: true,
							pager: true,
							nav: false,
							speed: 500,
							namespace: "callbacks",
							before: function () {
						$('.events').append("<li>before event fired.</li>");
						},
						after: function () {
							$('.events').append("<li>after event fired.</li>");
							}
							});
						});
</script>

<!-- for bootstrap working -->
<script type="text/javascript" src="{{asset('front/js/bootstrap.js')}}"></script>
<script type="text/javascript" src="{{asset('front/js/custom.js')}}"></script>
@yield('customPageJs')
</body>
</html>
