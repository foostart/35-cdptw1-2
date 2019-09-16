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
         $less->compileFile('less/2028.less', 'css/2028.css');
         ?>
      <link href="css/2028.css" rel="stylesheet" type="text/css"/>
      <script src="js/jquery-2.1.4.min.js" type="text/javascript"></script>
      <script src="js/bootstrap.min.js" type="text/javascript"></script>
      <link rel=”stylesheet” href=”#” />
   </head>
   <body>
      <div class="type-2028">
         <section class="containersite-content">
            <div class="row">
               <div class="eightcol column col-sm-12">
                  <div class="fivecol column"><img class="alignnone size-medium wp-image-21 demo-image" title="image_1" src="https://demo.themex.co/midway/wp-content/uploads/2012/11/image_1.jpg" alt=""></div>
                  <div class="sevencol column last col-sm-12">
                     <div class="section-title">
                        <h1>Explore the World</h1>
                     </div>
                     Duis molestie ultrices massa, non volutpat nibh auctor rhoncus. Aenean erat nunc, venenatis euismod quis, iaculis eu dolor. Sed purus neque, consequat at vulputate in, sagittis at dolor. Duis ut arcu libero. Ut quis neque nunc, eget suscipit nisl. Quisque orci neque, scelerisque!
                  </div>
                  <div class="clear"></div>
               </div>
                <!--main-->
                
            <div class="fourcol column last col-sm-12">
                <div id="main">
                <h1 class="title-page"></h1>
                <div class="group-tabs">
                <div class="tab-content">
                    <div role="tabpanel" class="tab-pane active" id="home">
                        <li class="current" style="display: block; position: relative; z-index: 1;">
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
                          </li>
                    </div>
                    <div role="tabpanel" class="tab-pane" id="profile">
                       <li class="current" style="display: block; position: relative; z-index: 1;">
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
                          </li>
                    </div>
                    <div role="tabpanel" class="tab-pane" id="messages">
                          <li class="current" style="display: block; position: relative; z-index: 1;">
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
                          </li>
                    </div>
                
                </div>
                <ul class="nav nav-tabs" role="tablist">
                    <li role="presentation" class="active"><a href="#home" aria-controls="home" role="tab" data-toggle="tab">
                            <img src="images/1.png"></a>
                    </li>
                            <li role="presentation"><a href="#profile" aria-controls="profile" role="tab" data-toggle="tab">
                              <img src="images/1.png">
                        </a></li>
                                <li role="presentation"><a href="#messages" aria-controls="messages" role="tab" data-toggle="tab">
                              <img src="images/1.png">
                            </a></li>
                </ul>
            
              
                
              </div>
           
            </div>
                  <!--<div class="content-slider testimonials-slider fade-effect">
                     <ul style="height: 129px;">
                        
                        
                        <li style="position: relative; z-index: 1; display: none;" class="">
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
                        </li>
                     </ul>
                     <input type="hidden" class="slider-pause" value="0"><input type="hidden" class="slider-speed" value="400">
                     <div class="controls"><a href="#" class="current"></a><a href="#" class=""></a><a href="#" class=""></a></div>
                  </div>
               </div>--> 
               <div class="clear"></div>
            </div>
         </section>
         
      </div>
   </body>
</html>