 <?php
    $url_host = 'http://'.$_SERVER['HTTP_HOST'];
    $pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');
    $pattern_uri = '/' . $pattern_document_root . '(.*)$/';
    
    preg_match_all($pattern_uri, __DIR__, $matches);
    $url_path = $url_host . $matches[1][0];
    $url_path = str_replace('\\', '/', $url_path);
?>

<nav class="navbar navbar-default type-429" role="navigation">
    <div class="container">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" id="btn-show-menu-respon" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <div class="nav logo-respon">
                <img src="images/logo.png" alt="logo-respon">
            </div>
        </div>
        <div class="collapse navbar-collapse navbar-ex1-collapse" id="menu-tonggle">
            <ul class="nav navbar-nav">
                <li>
                    <a href="#">LAYOUTS <i class="fa fa-angle-down" aria-hidden="true"></i></a>
                    <ul class="sub-menu">
                        <li><a href="#">FASHION 1</a></li>
                        <li><a href="#">FASHION 2</a></li>
                        <li><a href="#">FASHION 3</a></li>
                        <li><a href="#">ELECTRONICS 1</a></li>
                        <li><a href="#">ELECTRONICS 2</a></li>
                        <li><a href="#">FUNITURES</a></li>
                        <li><a href="#">NUTRITION</a></li>
                    </ul>
                </li>
                <li>
                    <a href="#">PAGES <i class="fa fa-angle-down" aria-hidden="true"></i></a>
                    <ul class="sub-menu">
                        <li>
                            <a href="#">PRODUCT PAGE <i class="fa fa-angle-right show-right" aria-hidden="true"></i></a>
                            <ul class="sub-menu" id="child">
                                <li><a href="#">PRODUCT PAGE VARIANT 1</a></li>
                                <li><a href="#">PRODUCT PAGE VARIANT 2</a></li>
                                <li><a href="#">PRODUCT PAGE VARIANT 3</a></li>
                                <li><a href="#">PRODUCT PAGE VARIANT 4</a></li>
                                <li><a href="#">PRODUCT PAGE VARIANT 5</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="#">CATEGORY PAGE <i class="fa fa-angle-right show-right" aria-hidden="true"></i></a>
                            <ul class="sub-menu" id="child">
                                <li><a href="#">LEFT SIDEBAR FILTER</a></li>
                                <li><a href="#">RIGHT SIDEBAR FILTER</a></li>
                                <li><a href="#">EMPTY CATEGORY</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="#">CART & CHECKOUT</a>
                        </li>
                        <li>
                            <a href="#">ACCOUNT <i class="fa fa-angle-right show-right" aria-hidden="true"></i></a>
                            <ul class="sub-menu" id="child">
                                <li><a href="#">LOGIN</a></li>
                                <li><a href="#">CREATE ACCOUNT</a></li>
                                <li><a href="#">DETAIL ACCOUNT</a></li>
                            </ul>
                        </li>
                        <li><a href="#">BLOG</a></li>
                    </ul>
                </li>
                <li>
                    <a href="#">FEATURES <i class="fa fa-angle-down" aria-hidden="true"></i></a>
                    <ul class="sub-menu">
                        <li><a href="#">HEADER</a></li>
                        <li><a href="#">FOOTER</a></li>
                        <li><a href="#">BANNERS / GRID EDITOR</a></li>
                    </ul>
                </li>
                <li>
                    <a href="#">NEW ARRIVALS <i class="fa fa-angle-down" aria-hidden="true"></i></a>
                    <ul class="sub-menu">
                        <li><a href="#">SHOES</a></li>
                        <li><a href="#">TOPS</a></li>
                        <li><a href="#">BOTTOMS</a></li>
                        <li><a href="#">BAGS</a></li>
                        <li><a href="#">ACCESORIES</a></li>
                    </ul>
                </li>
                <li>
                    <a href="#">SHOP BY <i class="fa fa-angle-down" aria-hidden="true"></i></a>
                    <ul class="sub-menu">
                        <li><a href="#">MEN</a></li>
                        <li><a href="#">WOMAN</a></li>
                    </ul>
                </li>
                <li>
                    <a href="#">BUY THEME</a>
                </li>
                
            </ul>

            <ul class="nav navbar-nav navbar-right">
                <li><a href="#"><i class="fa fa-shopping-basket" aria-hidden="true"></i>Shopping Cart</a></li>
            </ul>
        </div><!-- /.navbar-collapse -->
    </div>
</nav>  