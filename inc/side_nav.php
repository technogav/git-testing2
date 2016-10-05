<!--side nav bar-->
<div class="social-media-tab hide animated">
<div><a href="http://www.facebook.com"><i class="fa fa-facebook-official fa-3x" aria-hidden="true"></i></a> </div>
<div><a href="http://www.twitter.com"><i class="fa fa-twitter fa-3x" aria-hidden="true"></i></a> </div>
</div>
<!--invisible hover nav-->
<div class="hover-nav"></div>
<div id="tab" class="tab animated slideInLeft"> 
     <img src="img/tab.png" alt=""/> 
</div>
<div class="side-navbar animated slideOutLeft">
     <img src="img/brownsLogo.png" alt="" />
     <?php
          function displayLinks(){
               if(((substr($_SERVER["SCRIPT_NAME"],strrpos($_SERVER["SCRIPT_NAME"],"/")+1)) === 'tool-hire.php') ||
                    ((substr($_SERVER["SCRIPT_NAME"],strrpos($_SERVER["SCRIPT_NAME"],"/")+1)) === 'toolList.php')) {
                    echo '<ul>
         
                    <li><!--trap button click events on the dom and store the this.value in an object; send a get request to products page--> 
                         <a href="toolList.php?tooltag=compressor"><button class="btn-sm btn-success tool-button" value="compressor">Compressors</button></a>
                    </li>
                    <li>
                         <a href="toolList.php?tooltag=powerwasher"><button class="btn-sm btn-success tool-button" value="powerwasher">Power Washer</button></a>
                    </li>
                    <li>
                         <a href="toolList.php?tooltag=Lawnmower"><button class="btn-sm btn-success tool-button" value="Lawnmower">Lawnmower</button></a>
                    </li>
                    <li>
                         <a href="toolList.php?tooltag=angle_grinder"><button class="btn-sm btn-success tool-button" value="angle_grinder">Angle Grinder</button></a>
                    </li>
                    <li>
                         <a href="toolList.php?tooltag=whacker_plate"><button class="btn-sm btn-success tool-button" value="whacker_plate">Whacker Plate</button></a>
                    </li>
                    <li>
                        <a href="toolList.php?tooltag=water_pump"><button class="btn-sm btn-success tool-button" value="water_pump">Water Pump</button></a>
                    </li>
                    
                    <li>
                        <a href="toolList.php?tooltag=rotorvator"><button class="btn-sm btn-success tool-button" value="rotorvator">Rotorvator</button></a>
                    </li>
                     <li>
                         <a href="toolList.php?tooltag=vacume_cleaner"><button class="btn-sm btn-success tool-button" value="vacume_cleaner">Ind. Vacume Cleaner</button></a>
                    </li>
                    <li>
                         <a href="toolList.php?tooltag=strimers"><button class="btn-sm btn-success tool-button" value="strimers">Strimers</button></a>
                    </li>
                    <li>
                         <a href="toolList.php?tooltag=mixer"><button class="btn-sm btn-success tool-button" value="mixer">Cement Mixer</button></a>
                    </li>
                    
               </ul>';    
               }else{
                    echo '<ul>
         
          <li><!--trap button click events on the dom and store the this.value in an object; send a get request to products page--> 
               <a href="#"><button class="btn-sm btn-success product-button" value="body_panels">Body Panels</button></a>
          </li>
          <li>
               <a href="products.php?tag=car_accessories"><button class="btn-sm btn-success product-button" value="car_accessories">Car Accessories</button></a>
          </li>
          <li>
               <a href="products.php?tag=car_van_maintainence"><button class="btn-sm btn-success product-button" value="car_van_maintainence">Car/Van Maintainence</button></a>
          </li>
          <li>
               <a href="products.php?tag=car_parts"><button class="btn-sm btn-success product-button" value="car_parts">Car Parts</button></a>
          </li>
          <li>
               <a href="products.php?tag=headlights"><button class="btn-sm btn-success product-button" value="headlights">Headlights</button></a>
          </li>
          <li>
               <a href="products.php?tag=glass"><button class="btn-sm btn-success product-button" value="glass">Glass</button></a>
          </li>
          
          <li>
               <a href="products.php?tag=wing_mirrors"><button class="btn-sm btn-success product-button" value="wing_mirrors">Wing Mirrors</button></a>
          </li>
           <li>
               <a href="products.php?tag=welding"><button class="btn-sm btn-success product-button" value="welding">Welding Supplies</button></a>
          </li>
          <li>
               <a href="products.php?partner=seigen"><button class="btn-sm btn-success partner-button" value="seigen">Seigen</button></a>
          </li>
          <li>
               <a href="products.php?partner=refinish"><button class="btn-sm btn-success partner-button" value="refinish">Refinish</button></a>
          </li>
          <li>
               <a href="products.php?partner=sealy"><button class="btn-sm btn-success partner-button" value="sealy">Sealey</button></a>
          </li>
          <li>
               <a href="products.php?partner=jefferson"><button class="btn-sm btn-success partner-button" value="jefferson">Jefferson</button></a>
          </li>
     </ul>';    
               }
          }
          displayLinks();
          ?>
    
</div>