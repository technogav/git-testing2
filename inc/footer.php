<footer class="top-blue-inset-shadow">
     <div class="container-fluid">
<div class="row">
     <div id="footer-inner" class="col-lg-10 col-lg-offset-1 col-md-10 col-md-offset-1 col-sm-10 col-sm-offset-1">
          
          <div class="col-lg-6 col-md-6 col-sm-6">
               <ul id="footerList">
                    <a href="" class="footer-links"><li>Motor Factors</li></a>
                    <a href="" class="footer-links"><li>Tool Hire Kildare</li></a>
                    <a href="" class="footer-links"><li>Body Panels</li></a>
                    <a href="" class="footer-links"><li>Cheap Car Parts</li></a>
                    <a href="" class="footer-links"><li>Auto Parts kildare</li></a>
                    <a href="" class="footer-links"><li>Auto Parts Newbridge</li></a>
                    <a href="" class="footer-links"><li>Auto Parts Naas</li></a>           
                </ul>
          </div>
          <div class="col-lg-6 col-md-6 col-sm-6 hide-small">
               <div class="col-lg-8 col-lg-offset-2 col-md-8 col-md-offset-2">
                    <h2 id="mailing_list_footer">Join Our Mailing List</h2>
                    <hr class="footer-hr">
                    <form>
                         <div class="form-group">
                              <label for="exampleInputEmail1">Name</label></label>
                              <input type="email" class="form-control" id="name" placeholder="Enter Name" name="name" disabled>
                              
                              <label for="exampleInputPassword1">Email</label>
                              <input type="email" class="form-control" id="exampleInputPassword1" name="email" placeholder="Enter Email" disabled>
                              </div>
                         
                         
                         <button type="submit" class="btn btn-default" disabled>Submit</button>
                         </form>
                    </div>
               </div>
     </div>   
</div>
<div class="row">
<?php echo "<p id='footer-copyright' class='text-center'>Browns Motor Factors &copy; " . date("Y")."<br>
               Designed and built by <a href='www.responsivedesign101.com'><span id='responsivedesign'>ResponsiveDesign</span></a></p>"
 ?>
</div>          
          
     </div>
</footer>
     
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.4/jquery-ui.min.js"></script>

<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
<script src="js/stickUp/stickUp.min.js" type="text/javascript"></script>
<script src="js/main/js/jquery.touchSwipe.min.js" type="text/javascript"></script>
<script src="js/main/js/bannerscollection_zoominout.js" type="text/javascript"></script>
<script src="js/main/slider.config.js"></script>

<script type="text/javascript" src="js/myJs.js"></script>
<script>
      var map;
      function initMap() {
      
        var myLatLng = {lat: 53.162294, lng: -6.9009067};

       var map = new google.maps.Map(document.getElementById('map'), {
         zoom: 13,
         center: myLatLng
       });
     
       var marker = new google.maps.Marker({
         position: myLatLng,
         map: map,
         title: 'Hello World!'
       });

      }
    </script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAAIlBmEEBgms_hhbcyU-uNciPRknniNQY&callback=initMap"
    async defer></script>


                       

</body>
</html>