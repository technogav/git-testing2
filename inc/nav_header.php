 <?php

     if(((substr($_SERVER["SCRIPT_NAME"],strrpos($_SERVER["SCRIPT_NAME"],"/")+1)) === 'tool-hire.php') ||
          ((substr($_SERVER["SCRIPT_NAME"],strrpos($_SERVER["SCRIPT_NAME"],"/")+1)) === 'toolList.php')) {
         $tool_page = true;
         
          }else{$tool_page = false;}
?>
 
 <header id="Browns_motor_factors_header" class="absolut-header"><!--top section-->
         <div class="container-fluid hide-small" style="margin:0;padding:0;"> 
               <div class="row">
                    <div class="col-lg-12 col-md-12 ">
                         <div class="col-lg-3 col-lg-offset-0 col-md-3 col-md-offset-0 col-sm-3 col-sm-offset-0 main-logo">
                              <img src="img/brownsLogo.png" alt="browns_logo"/>
                         </div>
                         <div class="col-lg-8 col-lg-offset-1 col-md-8 col-md-offset-1 col-sm-8 col-sm-offset-1 yellow-bg">
                              
                              <span class="phone-head pull-right">
                              <i class="fa fa-envelope-o" aria-hidden="true"></i>
                              Eddie@team.ie
                              </span>
                              <span class="phone-head pull-right">
                              <i class="fa fa-phone" aria-hidden="true"></i>
                              045 522526
                              </span>
                               
                         </div>
                         <div class="col-lg-8 col-lg-offset-4 col-md-8 col-md-offset-4 slogan-top">
                              
                              <div class="col-lg-4 col-lg-offset-8 col-md-4 col-md-offset-8 opening-hours"><h4>Mon-Fri&nbsp; &nbsp;9AM - 6PM <br>Saturday &nbsp;9AM - 1PM</h4></div>
                                  
                         </div>
               </div><!--row-->
          </div>
          </div>
   
<!--navbar-->  
            <div class="container-fluid nav-container">  
               <div class="row">
               <nav class="navbar navbar-inverse">
                      <div class="container-fluid">
                        <div class="navbar-header">
                          
                          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                          
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>                        
                          </button>
                          
                        </div>
                        <div class="collapse navbar-collapse" id="myNavbar">
                        <span class="hide animated fadeIn fadeOut"><img src="img/browns-logo-invert.png" style="max-width:170px;" /></span>
                          <ul class="nav nav-pills nav-justified">
                            <li><a class="active" href="index.php">Home</a></li>
                            <li><a href="about.php">About Us</a></li>
                            <li><a href="tool-hire.php">
                            Tool Hire</a></li>
                            <li class="product-list"><a href="products.php">
                              <?php if($tool_page === true){
                                        echo 'Tools';
                                   }else{ 
                                        echo 'Products';
                                   } 
                               ?>
                               </a></li>
                            <li><a href="splash.php">Deals</a></li><?php //echo if a page/?>
                            <li><a href="contact.php">Contact</a></li>
                          </ul>
                         
                        </div>
                      </div>
               </nav>
               </div><!--row-->
          </div><!--container-->
                    
     </header>