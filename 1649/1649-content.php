 <?php
    $url_host = 'http://'.$_SERVER['HTTP_HOST'];
    $pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');
    $pattern_uri = '/' . $pattern_document_root . '(.*)$/';
    
    preg_match_all($pattern_uri, __DIR__, $matches);
    $url_path = $url_host . $matches[1][0];
    $url_path = str_replace('\\', '/', $url_path);
?>

<nav class="navbar navbar-expand-lg navbar-light bg-light type-1649" >
  <div class="container">
  <div class="nav logo-respon">
    <img src="images/logo.png" alt="logo-respon">
  </div>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse " id="navbarSupportedContent">

    <ul class="navbar-nav mx-auto">
      <li class="nav-item dropdown">
        <a class="nav-link" href="#" id="navbarDropdown">
          LAYOUTS
        </a>
        <div class="dropdown-content">
          <a class="dropdown-item" href="#">Action</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">Another action</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">Something else here</a>
        </div>
      </li>
      <li class="nav-item ">
        <a class="nav-link" href="#">PAGES </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">FEATURES </a>
      </li>
      <li class="nav-item ">
        <a class="nav-link" href="#">NEW ARRIVALS </a>
      </li>
      <li class="nav-item ">
        <a class="nav-link" href="#">SHOP BY </a>
      </li>
      <li class="nav-item ">
        <a class="nav-link" href="#">BUY THEME </a>
      </li>
      
    </ul>
    <ul class="nav navbar-nav navbar-right">
      <li><a href="#"><i class="fa fa-shopping-basket" aria-hidden="true"></i>Shopping Cart</a></li>
    </ul>
  </div>
  </div>
</nav>