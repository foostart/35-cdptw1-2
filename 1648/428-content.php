<?php
$url_host = 'http://'.$_SERVER['HTTP_HOST'];
$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');
$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);
$url_path = $url_host . $matches[1][0];
$url_path = str_replace('\\', '/', $url_path);
?>

<div class="type-428">
   <div class="container">
      <div class="row">
         <nav class="navbar navbar-default">
            <div class="navbar-header">
               <button class="navbar-toggle" type="button" data-toggle="collapse" data-target=".js-navbar-collapse">
               <span class="sr-only">Toggle navigation</span>
               <span class="icon-bar"></span>
               <span class="icon-bar"></span>
               <span class="icon-bar"></span>
               </button>
               <a class="navbar-brand" href="#">
               <img src="image/logo.png" alt=""/>
               </a>
            </div>
            <div class="collapse navbar-collapse js-navbar-collapse">
               <!-- danh mục -->
               <ul class="nav navbar-nav navbar-left">
                  <li class="dropdown">
                     <a href="#" class="dropdown-toggle btn cate" data-toggle="dropdown" role="button" aria-expanded="false">DANH MỤC <span><i class="fa fa-bars"></i></span></a>
                     <ul class="dropdown-menu" role="menu">
                        <li><a href="#">Điện Thoại</a></li>
                        <li class="divider"></li>
                        <li><a href="#">Quần Áo</a></li>
                        <li class="divider"></li>
                        <li><a href="#">Phụ Kiện</a></li>
                        <li class="divider"></li>
                        <li><a href="#">Giày</a></li>
                     </ul>
                  </li>
               </ul>
               <ul class="nav navbar-nav">
                  <li class="dropdown mega-dropdown">
                     <a href="#" class="dropdown-toggle btn btn-2 color-green" data-toggle="dropdown">Sản Phẩm</a>
                     <ul class="dropdown-menu mega-dropdown-menu row">
                        <li class="col-sm-3">
                           <ul>
                              <li class="dropdown-header">New Products</li>
                              <li>
                                 <div id="myCarousel" class="carousel slide" data-ride="carousel">
                                    <div class="carousel-inner">
                                       <div class="item active">
                                          <a href="#"><img src="image/img1.jpg" class="img-responsive" alt="product 1"></a>
                                          <h4><small>Summer dress floral prints</small></h4>
                                          <button class="btn btn-primary" type="button">49,99 $</button>
                                          <button class="btn btn-default" type="button"><span class="glyphicon glyphicon-heart"></span> Add to Wishlist</button>
                                       </div>
                                       <!-- End Item -->
                                       <div class="item">
                                          <a href="#"><img src="image/img2.jpg" class="img-responsive" alt="product 2"></a>
                                          <h4><small>Gold sandals with shiny touch</small></h4>
                                          <button class="btn btn-primary" type="button">9,99 $</button>
                                          <button  class="btn btn-default" type="button"><span class="glyphicon glyphicon-heart"></span> Add to Wishlist</button>
                                       </div>
                                       <!-- End Item -->
                                       <div class="item">
                                          <a href="#"><img src="image/img3.jpg" class="img-responsive" alt="product 3"></a>
                                          <h4><small>Denin jacket stamped</small></h4>
                                          <button class="btn btn-primary" type="button">50 $</button>
                                          <button  class="btn btn-default" type="button"><span class="glyphicon glyphicon-heart"></span> Add to Wishlist</button>
                                       </div>
                                       <!-- End Item -->
                                    </div>
                                    <!-- End Carousel Inner -->
                                 </div>
                              </li>
                              <!-- /.carousel -->
                              <li class="divider"></li>
                           </ul>
                        </li>
                        <li class="col-sm-3">
                           <ul>
                              <li class="dropdown-header">Dresses</li>
                              <li><a href="#">Unique Features</a></li>
                              <li><a href="#">Image Responsive</a></li>
                              <li><a href="#">Four columns</a></li>
                              <li class="divider"></li>
                           </ul>
                        </li>
                        <li class="col-sm-3">
                           <ul>
                              <li class="dropdown-header">Jackets</li>
                              <li><a href="#">Easy to customize</a></li>
                              <li><a href="#">Glyphicons</a></li>
                              <li><a href="#">Pull Right Elements</a></li>
                              <li class="divider"></li>
                           </ul>
                        </li>
                        <li class="col-sm-3">
                           <ul>
                              <li class="dropdown-header">Accessories</li>
                              <li><a href="#">Default Navbar</a></li>
                              <li><a href="#">Lovely Fonts</a></li>
                              <li><a href="#">Responsive Dropdown </a></li>
                              <li class="divider"></li>
                           </ul>
                        </li>
                     </ul>
                  </li>
               </ul>
               <ul class="nav navbar-nav navbar-left">
                  <li class="dropdown">
                     <a href="#" class="dropdown-toggle btn btn-2 color-green" data-toggle="dropdown" role="button" aria-expanded="false">Dịch Vụ </a>
                     <ul class="dropdown-menu" role="menu">
                        <li><a href="#">Action</a></li>
                        <li class="divider"></li>
                        <li><a href="#">Another action</a></li>
                        <li class="divider"></li>
                        <li><a href="#">Something else here</a></li>
                        <li class="divider"></li>
                        <li><a href="#">Separated link</a></li>
                     </ul>
                  </li>
               </ul>
               <ul class="nav navbar-nav btn-2 color-green">
                  <li><a href="#">Hướng Dẫn</a></li>
               </ul>
               <ul class="nav navbar-nav btn-2 color-green">
                  <li><a href="#">Tin Tức</a></li>
               </ul>
               <ul class="nav navbar-nav btn-2 color-green">
                  <li><a href="#">Liên Hệ</a></li>
               </ul>
            </div>
         </nav>
      </div>
   </div>
</div>