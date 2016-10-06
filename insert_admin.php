<?php

     $username = 'gavin';
     $password = 'password';
     if(($username === 'gavin')&&($password === 'password')){
          
     }else{
         header('location: index.php'); 
     }
?><?php include('inc/head.php'); ?>
<?php include('inc/nav_header.php'); 
//INCLUDE THE CRUD CLASS                  
include('inc/CRUD.class.php');?>
<?php if($_SERVER['REQUEST_METHOD'] == 'POST'){
         
          
          
          if(isset($_POST['submit_product']) && $_FILES['image']['size'] > 0){
               
               //GET DETAILS OF UPLOADED FILE AND PUT INTO VARIABLES BASE64 ENCODE THE IMAGE DATA     
               $image = addslashes($_FILES['image']['tmp_name']);
               $name = addslashes($_FILES['image']['name']);
               $image = file_get_contents($image);
               $image = base64_encode($image);              
               
                    
               $fileType = "image/jpeg";
               $binImgFile = $image;
               //GET THE REST OF THE VARIABLES
               $product_id = $_POST['product_id'];
               $product_name = $_POST['product_name'];
               $product_description = $_POST['product_description'];
               //$binImgFile = $content;
               $price = $_POST['price'];
               $tag1 = $_POST['brand'];
               $tag2 = $_POST['tag2'];
               $tag3 = $_POST['tag3'];
               
               //CALL THE DBCREATE METHOD TO INSERT PRODUCT INTO DATABASE
               $CRUD_obj = new CRUDClass;
               
               $CRUD_obj->dbCreate($product_id, $product_name, $product_description, $binImgFile, $fileType, $price, $tag1, $tag2, $tag3);
          } 
          
          if(isset($_POST['delete'])){
               //echo $_POST['delete_product'];
               
               $sql="DELETE FROM products WHERE product_name='" . $_POST['delete_product'] . "'";
               
               //CALL THE DBDELETE METHOD TO DELETE THE SELECT TAG PRODUCT NAME
               $delDB = new CRUDClass;
               $delDB->dbDelete($sql);
               
          }
          
          if(isset($_POST['splash_submit']) && $_FILES['splash_poster'] > 0){
               
               $splash_poster = addslashes($_FILES['splash_poster']['tmp_name']);
               $splash_poster = file_get_contents($splash_poster);
               $splash_poster = base64_encode($splash_poster);
               
               
               
               /*ON DUPLICATE KEY UPDATE image = '". $splash_poster . "'";*/   
               
               $CRUD_obj = new CRUDClass;
               
               if($CRUD_obj->dbUpdate($splash_poster)){
                    echo "<script>alert('The Deals of the week has been updated');</script>";
               
               }
                          
          }
          if((isset($_POST['submit_tool'])) && ($_FILES['image']['size'] > 0)){
               echo '2';
               $image = addslashes($_FILES['image']['tmp_name']);
               $name = addslashes($_FILES['image']['name']);
               $image = file_get_contents($image);
               $image = base64_encode($image);
               
               //GET THE REST OF THE VARIABLES
               $tool_make = $_POST['tool_make'];
               $tool_name = $_POST['tool_name'];
               $tool_desc = $_POST['tool_desc'];
               //$binImgFile = $content;
               $day_price = $_POST['day_price'];
               $week_price = $_POST['week_price'];
               
               //CALL THE DBCREATE METHOD TO INSERT PRODUCT INTO DATABASE
               $CRUD_obj = new CRUDClass;
               if($CRUD_obj->dbCreateTool($image, $tool_make, $tool_name, $tool_desc, $day_price, $week_price)){
                    echo('<script>alert("Tool entered into database successfully.")</script>');     
               }
          }
          
          
}
?>

<div class="container-fluid">
     <div class="row">
          <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
          <h3 class="text-center admin_headings">Enter Product into Database</h3>
               <form method="post" enctype="multipart/form-data">
                    <table>
                         
                         <input type="hidden" name="MAX_FILE_SIZE" value="2000000">
                         <tr>
                              <td><label for="product_id">product_id</label></td>
                              <td><input type="text" name="product_id" /></td>
                         </tr>
                         <tr>
                              <td><label for="product_name">product_name</label></td>
                              <td><input type="text" name="product_name" /></td>
                         </tr>
                         <tr>
                              <td><label for="product_description">product_description</label></td>
                              <td><textarea cols="30" rows="4" name="product_description"></textarea></td>
                         </tr>
                         <tr>
                              <td><label for="image">image</label></td>
                              <td><input type="file" name="image" /></td>
                         </tr>
                         <tr>
                              <td><label for="price">price</label></td>
                              <td><input type="text" name="price" /></td>
                         </tr>
                         <tr>
                              <td><label for="brand">Brand Name</label></td>
                              <td><input type="text" name="brand" />
                              
                              <!--*<select name="tag1">
                                   <?php /*$db= new CRUDClass;
                                   $resultSet = $db->dbRead("SELECT tag1 FROM products");  
                                    foreach($resultSet as $r){echo $r;}*/ 
                                    ?>
                                     
                                     
                              </select>*/-->
                              </td>
                         </tr>
                         <tr>
                              <td><label for="tag2">Tag 2</label></td>
                              <td><select name="tag2">
                                     <option value="">-</option>
                                     <option value="audio">Audio</option>
                                     <option value="body_panels">Body Panels</option>
                                     <option value="car_accessories">Car Accessories</option>
                                     <option value="car_van_maintainence">Car/Van Maintainence</option>
                                     <option value="car parts">Car/Van Parts</option>
                                     <option value="headlights">Headlight Units</option>
                                     <option value="glass">Glass</option>
                                     <option value="oil_coolant">Oil/Coolant</option>
                                     <option value="wing_mirrors">Wing Mirrors</option>
                                     <option value="welding">Welding Supplies</option>
                              </select></td>
                         </tr>
                         <tr>
                              <td><label for="tag3">Tag 3</label></td>
                              <td><select name="tag3">
                                     
                                     <option value="">-</option>
                                     <option value="audio">Audio</option>
                                     <option value="body_panels">Body Panels</option>
                                     <option value="car_accessories">Car Accessories</option>
                                     <option value="car_van_maintainence">Car/Van Maintainence</option>
                                     <option value="car parts">Car/Van Parts</option>
                                     <option value="headlights">Headlight Units</option>
                                     <option value="glass">Glass</option>
                                     <option value="oil_coolant">Oil/Coolant</option>
                                     <option value="wing_mirrors">Wing Mirrors</option>
                                     <option value="welding">Welding Supplies</option>
                              </select></td>
                         </tr>
                         <tr>
                         <td></td>
                         <td><input class="btn btn-primary" type="submit" name="submit_product" value="Enter Product Into Database" /></td>
                         
                         </tr>
                    </table>
               </form>
          </div><!--cols-->
          <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
          <h3 class="text-center admin_headings">Delete from database</h3>
               <?php 
               $sql = 'SELECT product_name FROM products';
               $delDB = new CRUDClass;
               $resultSet = $delDB->dbRead($sql);
              
               ?>
               <form method='post'>
               
               <?php
                   echo('<select name="delete_product">');
                    
                    foreach($resultSet as $r){
                        echo '<option value="' . $r['product_name'] . '">' . $r['product_name'] . '</option>'; 
                    }
                    
               ?>
              </select>
                    <input class="btn btn-primary" type="submit" value="Delete Product" name="delete"/>
                    
               </form>
         </div>
         <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
               <h3 class="text-center admin_headings">Update Weekly Deal</h3>
               <form method="post" enctype="multipart/form-data">
                    <table>
                         
                         <input type="hidden" name="MAX_FILE_SIZE" value="2000000">
                         <tr>
                              <td><label for="deal_splash">Attach Poster</label></td>
                              <td><input type="file" name="splash_poster"/></td>
                         </tr>
                         <tr>
                              <td></td>
                              <td><input name="splash_submit" class="btn btn-primary" type="submit" value="Update" /></td>
                         </tr>
                     </table>
   
               </form>
          </div>
     
      
     <hr>
     
          
         
          <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
               <h3 class="text-center admin_headings">Update Tool Hire Database</h3>
               <form method="post" enctype="multipart/form-data">
                    <table>
                         
                         <input type="hidden" name="MAX_FILE_SIZE" value="2000000">
                         <tr>
                              <td><label for="image">Image</label></td>
                              <td><input type="file" name="image" /></td>
                         </tr>
                         <tr>
                              <td><label for="tool_make">Tool Make</label></td>
                              <td><input type="text" name="tool_make" /></td>
                         </tr>
                         <tr>
                              <td><label for="tool_name">Tool Name</label></td>
                              <td><input type="text" name="tool_name" /></td>
                         </tr>
                         <tr>
                              <td><label for="tool_desc">Tool Desc</label></td>
                              <td><textarea cols="30" rows="4" name="tool_desc"></textarea></td>
                         </tr>
                         
                         
                         <tr>
                              <td><label for="day_price">Day Price</label></td>
                              <td><input type="text" name="day_price" /></td>
   
                         </tr>
                         <tr>
                              <td><label for="week_price">Week Price</label></td>
                              <td><input type="text" name="week_price" /></td>
   
                         </tr>
     
                         <tr>
                         <td></td>
                         <td><input class="btn btn-primary" type="submit" name="submit_tool" value="Enter into Tool Hire Database" /></td>
                         
                         </tr>
                    </table>
               
               
               
               </form>         
         </div>
     </div><!--row-->
</div><!--container-->