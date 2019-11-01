<?php
$url_host = 'http://' . $_SERVER['HTTP_HOST'];
$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');
$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);
$url_path = $url_host . $matches[1][0];
$url_path = str_replace('\\', '/', $url_path);
?>
<div class="type-1647">
  <div class="container">
    <div class="row column">

      <div class="col-md-4 blog-left"><img class="img-responsive img" title="image_1" src="./images/2.jpg" alt=""></div>
      <div class="col-md-4 blog-center">
        <div class="section-title">
          <h1>Explore the World</h1>
        </div>
        Duis molestie ultrices massa, non volutpat nibh auctor rhoncus. Aenean erat nunc, venenatis euismod quis, iaculis eu dolor. Sed purus neque, consequat at vulputate in, sagittis at dolor. Duis ut arcu libero. Ut quis neque nunc, eget suscipit nisl. Quisque orci neque, scelerisque!
      </div>
      <div class="col-md-4 blog-right">
        <div id="main">
          <div class="group-tabs">
            <div class="tab-content">
              <div role="tabpanel" class="tab-pane active" id="home">
                <article class="testimonial">
                  <div class="quote-text">
                    <div class="block-background">
                      We had the most amazing honeymoon trip in Thailand thanks to you. There is no question the trip far exceeded our expectation. Thank you!
                    </div>
                  </div>
                  <h6 class="quote-author">
                    Mary Templeton
                  </h6>
                </article>
              </div>
              <div role="tabpanel" class="tab-pane" id="profile">
                <article class="testimonial">
                  <div class="quote-text">
                    <div class="block-background">
                      Everything was absolutely amazing and all of the details were just perfect. You made the entire trip just effortless! The best trip i’ve ever had.
                    </div>
                  </div>
                  <h6 class="quote-author">
                    John Peterson
                  </h6>
                </article>
              </div>
              <div role="tabpanel" class="tab-pane" id="messages">
                <article class="testimonial">
                  <div class="quote-text">
                    <div class="block-background">
                      Thank you for the marvelous trip you arranged in India. We could never have put together such a well-planned visit by ourselves. Amazing!
                    </div>
                  </div>
                  <h6 class="quote-author">
                    Lisa Blackwood
                  </h6>
                </article>
              </div>
            </div>
            <ul class="nav nav-tabs" role="tablist">
              <li role="presentation" class="active"><a href="#home" aria-controls="home" role="tab" data-toggle="tab">
                  <img src="images/1.png" alt=""></a>
              </li>
              <li role="presentation"><a href="#profile" aria-controls="profile" role="tab" data-toggle="tab">
                  <img src="images/1.png" alt="">
                </a></li>
              <li role="presentation"><a href="#messages" aria-controls="messages" role="tab" data-toggle="tab">
                  <img src="images/1.png" alt="">
                </a></li>
            </ul>
          </div>
        </div>

      </div>
    </div>
    <!--main-->

  </div>

</div>