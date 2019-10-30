<?php
$url_host = 'http://' . $_SERVER['HTTP_HOST'];
$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');
$pattern_uri = '/' . $pattern_document_root . '(.*)$/';
preg_match_all($pattern_uri, __DIR__, $matches);
$url_path = $url_host . $matches[1][0];
$url_path = str_replace('\\', '/', $url_path);
?>
<!--/top-->
<div class="type-982">
    <div class="header container">
        <div class="wrap" style="background-image:url(./images/header-bg.png)">

            <div class="swiper-container">
                <div id="slide-holder" class="swiper-wrapper">
                    <div class="swiper-slide" style="background-image:url(./images/1.png)">
                        <div class="chu">POST: nature beauty , nature beauty photography</div>
                    </div>
                    <div class="swiper-slide" style="background-image:url(./images/2.png)">
                        <div class="chu">POST: nature beauty , nature beauty photography</div>
                    </div>
                    <div class="swiper-slide" style="background-image:url(./images/3.png)">
                        <div class="chu">POST: nature beauty , nature beauty photography</div>
                    </div>
                    <div class="swiper-slide" style="background-image:url(./images/4.png)">
                        <div class="chu">POST: nature beauty , nature beauty photography</div>
                    </div>
                    <div class="swiper-slide" style="background-image:url(./images/5.png)">
                        <div class="chu">POST: nature beauty , nature beauty photography</div>
                    </div>
                    <div class="swiper-slide" style="background-image:url(./images/6.png)">
                        <div class="chu">POST: nature beauty , nature beauty photography</div>
                    </div>
                    <div class="swiper-slide" style="background-image:url(./images/7.png)">
                        <div class="chu">POST: nature beauty , nature beauty photography</div>
                    </div>
                </div>
                <div class="swiper-pagination"></div>
                <!-- Add Arrows -->
                <div class="swiper-button-next"></div>
                <div class="swiper-button-prev"></div>
                <!--content featured gallery here -->
            </div>
        </div>
    </div>
</div>
<!--/header-->