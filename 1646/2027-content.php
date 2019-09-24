<!DOCTYPE html>
<html>
   <head>
      <title>Đồ án 1646</title>
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
      <div class="container">
      <!-- Tab panes -->
      <div class="tab-content">
      <div role="tabpanel" class="tab-pane active" id="home">
         <div class="banner-top">
            <div class="col-img"><img src="images/1.jpg" alt=""></div>
            <div class="container">
               <div class="text-content">
                  <h4>Discover</h4>
                  <h1>Our Story.</h1>
                 
                  <h5>DEL GUSTO IS A GREAT MUSE TEMPLATE</h5>
                  <div class="row">
                    <div class="col-md-12">We are a team of designers and developers that create high quality Magento, Prestashop, Opencart themes and provide premium and dedicated support to our products.</div>
                  </div>
                  <ul>
                     <li><i class="zmdi zmdi-check"></i><i class="fa fa-angle-down" style="    padding-right: 30px;margin-left: -39px;"></i> <span class="nhincodechanvl" style="font-size: 1.4em;font-family: serif;">Mirum est notare quam littera gothica</span></li>
                     <li><i class="zmdi zmdi-check"></i><i class="fa fa-angle-down" style="    padding-right: 30px;margin-left: -39px;"></i> <span style="font-size: 1.4em;font-family: serif;"> Typi non habent claritatem insitam</span></li>
                  </ul>
                  <a class="text-readmore" href="#" style="margin-top: 30px">About Us <i class="fa fa-angle-right" style="padding-left: 20px"></i></a>
               </div>
            </div>
         </div>
      </div>
      </div>
      </div>  
      </div>
   </body>
</html>