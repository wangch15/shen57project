@extends('frontstage.template')

@section('meta')
<meta property="og:url" content="https://wangch15.github.io/shen57web/location">
<meta property="og:image" content="https://wangch15.github.io/shen57web/img/index/banner.jpg">
<meta property="og:description" content="行館資訊、交通指引、旅遊地圖">
<meta property="og:title" content="森五七行館 / 行館資訊，旅遊地圖">
@endsection

@section('title')
    森五七行館 - 行 Location
@endsection

@section('css')
    <link rel="stylesheet" href="{{ asset('css/location.css') }}">
@endsection

@section('main')
    <!-- 行 -->
    <main id="location">
        <section class="container">
            <!-- 行-頁面標題 -->
            <div class="title-area">
                <img src="{{ asset('img/location/calligraphy-location.svg') }}" alt="">
                <div class="title-area-infobox">
                    <h5>​行館資訊 · 交通指引 · 旅遊地圖</h5>
                </div>
            </div>

            <!-- 行-內容區域 -->
            <div class="location-info-container">
                <div class="info-map-box">
                    <!-- 地圖區域 -->
                    <div class="map-area">
                        <img src="{{ asset('img/location/index-location-cover-phone.jpg') }}" alt="">
                    </div>
                    <!-- 行館資訊 -->
                    <div class="info-area-top">
                        <div class="info-inside-box">
                            <div class="info-title">行館地址</div>
                            <p class="info-content">946 屏東縣恆春鎮大光里砂尾路68-2號</p>
                        </div>
                        <div class="info-inside-box">
                            <div class="info-title">聯絡電話</div>
                            <p class="info-content">(08) 886-7658 / 0961-333-857</p>
                        </div>
                        <div class="info-inside-box">
                            <div class="info-title">電子信箱</div>
                            <p class="info-content">shen57hostel@gmail.com</p>
                        </div>
                        <div class="info-inside-box">
                            <div class="info-title">訂房時段</div>
                            <p class="info-content">每日 09 : 00 am ~ 09 : 00 pm</p>
                        </div>
                        <div class="info-inside-box">
                            <div class="info-title last-title">服&emsp;&emsp;務</div>
                            <p class="info-content">
                                提供優惠汽機車租賃、包車旅遊導覽服務資訊。<br>
                                提供旅遊資訊及諮詢服務。
                            </p>
                        </div>
                    </div>
                    <!-- 自行開車資訊 -->
                    <div class="info-inside-lastbox">
                        <div class="info-title">自行開車</div>
                        <div class="info-content">
                            <div class="content-road3"><span class="road3">走國道三號</span>
                                <span class="triangle"></span><span class="triangle"></span>
                            </div>
                            <p>
                                自中山高南下接88快速道路接國道三號下南州交流道，續行一號省道南下經枋山抵楓港。<br>
                                <br>
                                由此轉26號省道南下至南灣天鵝湖飯店(對面有7-11)，從7-11旁右轉南光路前往至底，遇T字型路口後左轉。<br>
                                <br>
                                左轉後會遇到分叉路往右側往水泉(往貓鼻頭白沙方向)，前往500公尺車程注意看右手邊有個砂尾路的招牌，<br>
                                右轉進去順著路走即可看到左手邊有森五七行館招牌。
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- 旅遊地圖 -->
        <div class="travel-map-area">
            <div class="info-inside-box">
                <div class="info-title">旅遊地圖</div>
                <p class="info-content">點擊景點區域即可直接開啟Google Map</p>
            </div>

            <!-- 768以下旅遊地圖 -->
            <!-- Image Map Generated by http://www.image-map.net/ -->
            <img srcset="/img/location/travel-map-phone.png 1x, /img/location/travel-map-phone@2x.png 2x"
                src="{{ asset('img/location/travel-map-phone.png') }}" usemap="#image-map-phone" class="travel-map">
            <map name="image-map-phone">
                <area target="_blank" alt="屏東海生館" title="屏東海生館" href="https://goo.gl/maps/QRAeeUDL3smFE4TQ7"
                    coords="132,29,258,183" shape="rect">
                <area target="_blank" alt="鹿境梅花鹿生態園區" title="鹿境梅花鹿生態園區" href="https://goo.gl/maps/xCxW6uSWE89NtG23A"
                    coords="300,36,487,219" shape="rect">
                <area target="_blank" alt="萬里桐" title="萬里桐" href="https://goo.gl/maps/cUQuAmrz3YDjzoZX7"
                    coords="48,267,141,371" shape="rect">
                <area target="_blank" alt="恆春古城" title="恆春古城" href="https://goo.gl/maps/Ncm7UR1UmSs2MJSx7"
                    coords="222,261,416,378" shape="rect">
                <area target="_blank" alt="出火" title="出火" href="https://goo.gl/maps/2s5yjM6tPeu2YuZj7"
                    coords="421,244,519,325" shape="rect">
                <area target="_blank" alt="墾丁森林公園" title="墾丁森林公園" href="https://goo.gl/maps/YDVoNU3xunxXBaz9A"
                    coords="475,346,621,379" shape="rect">
                <area target="_blank" alt="南灣" title="南灣" href="https://goo.gl/maps/7ppzkhZhirYVLR2W6"
                    coords="376,392,512,506" shape="rect">
                <area target="_blank" alt="白沙灣" title="白沙灣" href="https://goo.gl/maps/zvSz5Q9XMFZjBY7q9"
                    coords="56,431,192,573" shape="rect">
                <area target="_blank" alt="森五七行館" title="森五七行館" href="https://goo.gl/maps/y9epKuTUXdYVUL1k8"
                    coords="217,461,315,563" shape="rect">
                <area target="_blank" alt="貓鼻頭" title="貓鼻頭" href="https://goo.gl/maps/9s6DXGa5GKuGxm9UA"
                    coords="238,615,402,723" shape="rect">
                <area target="_blank" alt="鵝鑾鼻燈塔" title="鵝鑾鼻燈塔" href="https://goo.gl/maps/PJe3tXhEGyTuhWz86"
                    coords="640,595,755,777" shape="rect">
                <area target="_blank" alt="龍磐" title="龍磐" href="https://goo.gl/maps/YyCnpXPjAwjBcjeW9"
                    coords="647,520,742,564" shape="rect">
                <area target="_blank" alt="墾丁大街" title="墾丁大街" href="https://goo.gl/maps/FaqUxLwZpdt8Exjw9"
                    coords="499,523,621,560" shape="rect">
                <area target="_blank" alt="風吹砂" title="風吹砂" href="https://goo.gl/maps/UMdMMTtzGHv1su267"
                    coords="649,409,762,452" shape="rect">
                <area target="_blank" alt="佳樂水遊樂區" title="佳樂水遊樂區" href="https://goo.gl/maps/LJiDjpaNLsGd14zLA"
                    coords="681,270,864,392" shape="rect">
            </map>
        </div>
    </main>
       <!-- Messenger 洽談外掛程式 Code -->
   <div id="fb-root"></div>

   <!-- Your 洽談外掛程式 code -->
   <div id="fb-customer-chat" class="fb-customerchat">
   </div>

   <script>
     var chatbox = document.getElementById('fb-customer-chat');
     chatbox.setAttribute("page_id", "148570588837035");
     chatbox.setAttribute("attribution", "biz_inbox");
   </script>

   <!-- Your SDK code -->
   <script>
     window.fbAsyncInit = function() {
       FB.init({
         xfbml            : true,
         version          : 'v15.0'
       });
     };

     (function(d, s, id) {
       var js, fjs = d.getElementsByTagName(s)[0];
       if (d.getElementById(id)) return;
       js = d.createElement(s); js.id = id;
       js.src = 'https://connect.facebook.net/zh_TW/sdk/xfbml.customerchat.js';
       fjs.parentNode.insertBefore(js, fjs);
     }(document, 'script', 'facebook-jssdk'));
   </script>
   
@endsection

@section('js')
    <!-- 影像地圖自適應 -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="{{ asset('js/jquery.rwdImageMaps.js') }}"></script>
    <script>
        $(document).ready(function(e) {
            $('img[usemap]').rwdImageMaps();
        });
    </script>

    <!-- location js 目前取消引入-->
@endsection
