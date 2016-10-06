<?php include('inc/head.php'); ?>
 <!--api key AIzaSyAAIlBmEEBgms_hhbcyU-uNciPRknniNQY-->
<div class="container-fluid nav-container">
                
               <div class="row">
               <nav class="navbar navbar-inverse">
                      <div class="container-fluid">
                        <div class="navbar-header">
                          <span id="logo"><img class="display-med" src="img/browns-logo-invert.png" style="max-width:170px;" /></span>
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
                            <li class="product-list"><a href="products.php">Products</a></li><?php //echo depending on page??>
                            <li><a href="splash.php">Deals</a></li><?php //echo if a page/?>
                            <li><a href="contact.php">Contact</a></li>
                          </ul>
                         
                        </div>
                      </div>
               </nav>
               </div><!--row-->
          </div><!--container-->

<section id="browns_motor_factors_contact">
<div class="container-fluid">
     
     <div class="row" id="contact-row-1">
          <div class="col-lg-8 col-lg-offset-2 col-md-8 col-md-offset-2">
               <div class="col-lg-6 col-lg-offset-0 col-md-6 col-md-offset-0 col-sm-12 col-xs-12 n">
                    <div>
                         <h3>Drop us a line!</h3>
                         
                         <i class="fa fa-phone contact" aria-hidden="true"></i>045 522526<br><br>
                         <i class="fa fa-envelope-o contact" aria-hidden="true"></i>Eddie@team.ie <br><br>
                         <i class="fa fa-map-marker contact" aria-hidden="true"></i>Kildare Business Park<br>
                         Melietta Road<br>
                         Kildare Town
                     </div>

                     <h3 id="form-heading">We will always reply ;-)</h3>
                     <div class="formbox">
                     
                         <form id="contact-form">
                              <div class="col-lg-12 col-md-12 col-xs-12">
                                   <div class="form-group">
                                        <label for="exampleInputEmail1">Name</label>
                                        <input type="text" class="form-control" name="name" placeholder="Name">
                                   </div>
                                  <div class="form-group">
                                      <label for="exampleInputPassword1">Email</label>
                                      <input type="email" class="form-control" name="email" placeholder="Email">
                                  </div>
                                   <div class="form-group">
                                        <label for="exampleInputEmail1">Message</label>
                                        <textarea class="form-control" name="message" placeholder="Enter Your Message"/></textarea><br>
                                        <button type="submit" class="btn btn-default">Submit</button>
                                        
                                   </div>
                              </div>
                                   
                         </form>
                    </div>
          
               </div>
               <div class="col-lg-5 col-lg-offset-1 col-md-5 col-md-offset-1 col-sm-12 col-xs-12 top-margin-small">
                    <div id="map" class="map bottom-shadow"></div> 
              
               </div>
          </div>
               
     </div>
     
     
          
</div><!--container-->
 
</section>


<?php include('inc/footer.php'); ?> 