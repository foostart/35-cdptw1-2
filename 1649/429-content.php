 <?php
    $url_host = 'http://'.$_SERVER['HTTP_HOST'];
    $pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');
    $pattern_uri = '/' . $pattern_document_root . '(.*)$/';
    
    preg_match_all($pattern_uri, __DIR__, $matches);
    $url_path = $url_host . $matches[1][0];
    $url_path = str_replace('\\', '/', $url_path);
?>

<nav class="navbar navbar-default type-429">
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
            
                <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown-1" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                           LAYOUTS <i class="fa fa-angle-down" aria-hidden="true"></i>
                            </a>
                            <div class="dropdown-menu">
                                <a class="dropdown-item" href="#">FASHION 1</a>
                                <a class="dropdown-item" href="#">FASHION 1</a>
                                <a class="dropdown-item" href="#">FASHION 1</a>
                                <a class="dropdown-item" href="#">FASHION 1</a>
                                <a class="dropdown-item" href="#">FASHION 1</a>
                            </div>
                </li>
                <li>
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown-2" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">PAGES 
                    <i class="fa fa-angle-down" aria-hidden="true"></i>
                    </a>
                  
                </li>
                
                  
                <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown-3" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                           FEATURES <i class="fa fa-angle-down" aria-hidden="true"></i>
                            </a>
                            
                </li>
               
                
                   
                <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown-4" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                           NEW ARRIVALS  <i class="fa fa-angle-down" aria-hidden="true"></i>
                            </a>
                            
                </li>
                
               
                  
                <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown-5" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                           SHOP BY <i class="fa fa-angle-down" aria-hidden="true"></i>
                            </a>
                            
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