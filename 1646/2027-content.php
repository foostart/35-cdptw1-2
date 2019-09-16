<!DOCTYPE html>
<html>
   <head>
      <title>Đồ án</title>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css"/>
      <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
      <?php
         if (!class_exists('lessc')) {
             include ('./libs/lessc.inc.php');
         }
         $less = new lessc;
         $less->compileFile('less/2027.less', 'css/2027.css');
         ?>
      <link href="css/2027.css" rel="stylesheet" type="text/css"/>
      <script src="js/jquery-2.1.4.min.js" type="text/javascript"></script>
      <script src="js/bootstrap.min.js" type="text/javascript"></script>
      <link rel=”stylesheet” href=”https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css” />
   </head>
   <body>
      <div class="type-2027">
      <div id="main">
      <div class="container">
      <div class="group-tabs">
      <!-- Nav tabs -->
      <ul class="nav nav-tabs" role="tablist">
         <li role="presentation" class="active"><a href="#home" aria-controls="home" role="tab" data-toggle="tab">Discover</a></li>
         <li role="presentation"><a href="#profile" aria-controls="profile" role="tab" data-toggle="tab">Organic</a></li>
         <li role="presentation"><a href="#messages" aria-controls="messages" role="tab" data-toggle="tab">Our Products</a></li>
         <li role="presentation"><a href="#settings" aria-controls="settings" role="tab" data-toggle="tab">Contact</a></li>
      </ul>
      <!-- Tab panes -->
      <div class="tab-content">
      <div role="tabpanel" class="tab-pane active" id="home">
         <div class="banner-top">
            <div class="col-img"><img src="images/1.jpg" alt=""></div>
            <div class="container">
               <div class="text-content">
                  <h4>Discover</h4>
                  <h1>Our Story.</h1>
                  <h3>DEL GUSTO IS A GREAT MUSE TEMPLATE</h3>
                  <p>We are a team of designers and developers that create high quality Magento, Prestashop, Opencart themes and provide premium and dedicated support to our products.</p>
                  <ul>
                     <li><i class="zmdi zmdi-check"></i> Mirum est notare quam littera gothica</li>
                     <li><i class="zmdi zmdi-check"></i> Typi non habent claritatem insitam</li>
                  </ul>
                  <a class="text-readmore" href="#">About Us <i class="zmdi zmdi-chevron-right"></i></a>
               </div>
            </div>
         </div>
      </div>
      <div role="tabpanel" class="tab-pane" id="profile">
         <div class="banner-bottom">
            <div class="col-img"><img src="images/2.jpg" alt="banner 3"></div>
            <div class="container">
               <div class="text-content">
                  <h4>Organic</h4>
                  <h1>Orange Juice.</h1>
                  <p>We all know that fruits and vegetables are a very basic part of the Mediterranean Diet and they should be consumed daily.</p>
                  <ul>
                     <li><i class="zmdi zmdi-check"></i> Is rich in antioxidants help fight aging.</li>
                     <li><i class="zmdi zmdi-check"></i> Contains Vitamin C, which fortifies the body defence.</li>
                     <li><i class="zmdi zmdi-check"></i> Reduce the level of bad cholesterol.</li>
                  </ul>
                  <a class="text-readmore" href="#">Shop now <i class="zmdi zmdi-chevron-right"></i></a>
               </div>
            </div>
         </div>
      </div>
      <div role="tabpanel" class="tab-pane" id="messages">
      <div class="blockPosition2">
      <div class="col-xs-12 col-md-7 col-lg-7 col-padding">
         <div class="banner-left-best">
            <div class="banner-inner"><a href="#"><img src="images/3.jpg" alt=""></a></div>
         </div>
      </div>
      <div class="col-xs-12 col-md-5 col-lg-5 col-padding">
         <div class="pos_bestseller_product product_block_container">
            <div class="pos_title text-right">
               <h2>
                  <span class="word1">Our Products</span>
                  <span class="word2">Trending Item.</span>
               </h2>
            </div>
            <div class=" pos_content">
               <div class="bestsellerSlide owl-carousel owl-theme" style="opacity: 1; display: block;">
                  <div class="owl-wrapper-outer">
                     <div class="owl-wrapper" style="width: 3360px; left: 0px; display: block;">
                        <div class="owl-item" style="width: 240px;">
                           <div class="item-product">
                              <article class="js-product-miniature item_in" data-id-product="2" data-id-product-attribute="7" >
                              <div class="img_block">
                                 <a href="#" class="thumbnail product-thumbnail">
                                 <img src="images/3.1.jpg" alt="" data-full-size-image-url="#">
                                 <p>Cofplus Tripplerunlax</p>
                                 </a>
                                   <a href="#" class="thumbnail product-thumbnail">
                                 <img src="images/3.2.jpg" alt="" data-full-size-image-url="#">
                                 <p>Beta La Blackwarm</p>
                                 </a>
                                   <a href="#" class="thumbnail product-thumbnail">
                                 <img src="images/3.3.jpg" alt="" data-full-size-image-url="#">
                                 <p>Ecoex Una-It</p>
                                 </a>
                              
                                 
                              </div>
                           </div>
         </div>
                         </div>
               </div>
            </div>
         </div>
             </div>
         </div>
                 
                  </div>
               </div>
          <div role="tabpanel" class="tab-pane" id="settings">
              <div class="cms-block">
                <h3 class="page-subheading">Contact</h3>
                <p><strong class="dark">Lorem ipsum dolor sit amet conse ctetur adipisicing elit, sed do eiusmod tempor incididun.</strong></p>
                <p>Lorem ipsum dolor sit amet conse ctetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam. Lorem ipsum dolor sit amet conse ctetur adipisicing elit.</p>
                
                <p>Lorem set sint occaecat cupidatat non

Eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo.</p>
                <p>“Lorem ipsum dolor sit amet conse ctetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim.”
Lorem ipsum dolor sit

“Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Lorem ipsum dolor sit amet conse ctetur adipisicing elit. Lorem ipsum dolor sit amet conse ctetur adipisicing elit, sed do eiusmod.”
Ipsum dolor sit</p>  
              </div>
          </div>
            </div>
         
         </div>
         
      </div>
   </body>
</html>