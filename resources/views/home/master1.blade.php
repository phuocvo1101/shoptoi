<!DOCTYPE html>
<html>
<meta http-equiv="content-type" content="text/html;charset=utf-8" />
<head>
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-2205398-24"></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());
      gtag('config', 'UA-2205398-24');
    </script>


    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="google-site-verification" content="xFnIbRiqlbUWt2-5yqv6TejVhQ1oYB1hZiZ1jRXLzHw" />
    <link rel="icon" type="image/png" href="../res.yame.vn/Content/images/yame-fav.png">
    <link rel="image_src" href="../res.yame.vn/Content/images/yame.png">

    <title>@yield('title')</title>

        <meta name="description" content="Giao Hàng Nhanh Miễn Phí ✓ Bảo Hành 365 Ngày ✓ 7 Ngày Đổi Hàng Miễn Phí. Mua Online Giá Rẻ Bất Ngờ" />

        <meta name="keywords" content="quần áo thời trang nam nữ, quần áo nam, quàn áo nữ, thời trang nam giá rẻ, thời trang nữ giá rẻ, shop thời trang nam nữ" />

    <link href='https://fonts.googleapis.com/css?family=Roboto:400,100,300,100italic,300italic,400italic,500,700,500italic,700italic,900&amp;subset=latin,greek,greek-ext,vietnamese,latin-ext,cyrillic-ext,cyrillic' rel='stylesheet' type='text/css'>
    <link href="{{ url('res.yame.vn/2018/Content/CssFrameworkBundle.min.css') }}" rel="stylesheet">
    <link href="{{ url('res.yame.vn/2018/Content/jQueryPluginsCssBundle.min.css') }}" rel="stylesheet">
    <link href="{{ url('res.yame.vn/Content/Site.min.css') }}" rel="stylesheet">
    <link href="{{ url('res.yame.vn/Content/bfd2016.css') }}" rel="stylesheet">

    {!! Html::script('/res.yame.vn/2018/Scripts/modernizr-2.6.2.min.js') !!}


    <!-- Facebook Pixel Code -->
    <script>
        !function (f, b, e, v, n, t, s) {
            if (f.fbq) return; n = f.fbq = function () {
                n.callMethod ?
                n.callMethod.apply(n, arguments) : n.queue.push(arguments)
            };
            if (!f._fbq) f._fbq = n; n.push = n; n.loaded = !0; n.version = '2.0';
            n.queue = []; t = b.createElement(e); t.async = !0;
            t.src = v; s = b.getElementsByTagName(e)[0];
            s.parentNode.insertBefore(t, s)
        }(window, document, 'script',
        '../connect.facebook.net/en_US/fbevents.js');
        fbq('init', '1772218379751100');
        fbq('track', 'PageView');
        
    </script>    
    <!-- End Facebook Pixel Code -->
</head>
<body>
    <noscript>
        <img height="1" width="1"
             src="https://www.facebook.com/tr?id=1772218379751100&amp;ev=PageView&amp;noscript=1" />
    </noscript>

@include('home.nav')
    
@yield('content')   

@include('home.footer')

<a href="#0" class="cd-top">Top</a>

{!! Html::script('/res.yame.vn/2018/Scripts/jQuery.min.js') !!}
{!! Html::script('/res.yame.vn/2018/Scripts/BootstrapBundle.min.js') !!}
{!! Html::script('/res.yame.vn/2018/Scripts/jQueryPluginsBundle.min.js') !!}
{!! Html::script('/res.yame.vn/2018/Scripts/jquery.sticky.min.js') !!}
{!! Html::script('/res.yame.vn/2018/Scripts/app.min.js') !!} 

<script type="text/javascript">
var google_tag_params = {
    dynx_pagetype: 'home'
};
</script>
<script type="text/javascript">
/* <![CDATA[ */
var google_conversion_id = 880703804;
var google_custom_params = window.google_tag_params;
var google_remarketing_only = true;
/* ]]> */
</script>
<script type="text/javascript" src="../www.googleadservices.com/pagead/f.txt">
</script>
<noscript>
    <div style="display: inline;">
        <img height="1" width="1" style="border-style: none;" alt="" src="http://googleads.g.doubleclick.net/pagead/viewthroughconversion/880703804/?value=0&amp;guid=ON&amp;script=0" />
    </div>
</noscript>

{!! Html::script('/res.yame.vn/Scripts/notify/notify.min.js') !!}
<script type="text/javascript">
    var latestNewsSkipValue = 14;

    // Wallop Init
    var slider = document.querySelector('.Wallop');
    var wallop = new Wallop(slider);
    var autoPlay = true;
    wallop.carousel = true;
    //autoplay
    var _count = wallop.allItemsArrayLength;        
    var _end = _count + 1;
    var _index = 1;

    jQuery(function () {
        setInterval(function () {
            if (autoPlay === true) {
                wallopMoveNext();
            }
        }, 5000);
    });

    function wallopMoveNext(){
        ++_index;
        if (_index === _end + 1) {
            _index = 1;
        }
        wallop.goTo(_index - 1);
    }

    function wallopMovePrevious(){
        --_index;
        if (_index === 0) _index = _end;
        wallop.goTo(_index - 1);
    }

    $('.Wallop-buttonPrevious').click(function () {
        autoPlay = false;
        wallopMovePrevious();
    });

    $('.Wallop-buttonNext').click(function () {
        autoPlay = false;
        wallopMoveNext();
    });

    jQuery(document).ready(function() {
        $('#loadNews').click(function() {
            $.post("/home/latestnews?skip=" + latestNewsSkipValue, function (data) {
                $(".timeline").append(data);
                if (data.trim() === '') {
                    $(".timeline").notify('Không có tin cũ hơn.',
                        {
                            className: "info",
                            position: "b c",
                            elementPosition: "bottom center",
                            clickToHide: true
                        }
                    );

                    $("#loadNews").hide();
                }
                latestNewsSkipValue += 10;
            });
        });
    });
</script>






</body>

</html>
