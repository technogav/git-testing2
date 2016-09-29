<?php include('inc/head.php');
      include('inc/nav_header.php'); 
      include('inc/side_nav.php'); ?>




<section id="browns_auto_products">
<div class="container-fluid">
     <div class="row">
          <div class="col-lg-10 col-lg-offset-1 col-md-10 col-md-offset-1">
               <h1 class="text-center product_heading">
               <?php if(isset($_GET['tag'])){
                    echo strtoupper($_GET['tag'].'</h1>');
               }else{
                    echo '<h1>Products Page';
               }?>
               </h1>

               <?php
  
               if((isset($_GET['tag'])) || (isset($_GET['partner']))){
                    if(isset($_GET['partner'])){
                        $sql = "SELECT * FROM products WHERE tag1 = '" . $_GET['partner'] . "'"; 
                    }else{
                        $sql = "SELECT * FROM products WHERE tag2 = '" . $_GET['tag'] . "'";  
                    }
                    
                    
                    include('inc/CRUD.class.php');
                    $db = new CRUDClass;
                    $resultSet = $db->dbRead($sql);
                    //var_dump($resultSet[0]);
 
                    for($i = 0; $i < count($resultSet); $i++ ){
                         //echo($resultSet[$i]['product_name']). '<br>';
                         echo '<div class="col-sm-6 col-md-4">
                                   <div class="thumbnail">
                                        <img class="thumbnail_img" src="data:image;base64,' . $resultSet[$i]['image'] . ' ">
                                        <div class="caption">
                                        <h3 class="text-center">' .$resultSet[$i]['product_name']. '</h3>
                                        <p class="text-center">' . $resultSet[$i]['product_description'] . '</p>
                                        <h3 class="text-center price">€' . $resultSet[$i]['price'] . '</h3>
                                        </div>
                                   </div></div>';

                    }
                    
                  
               }
          
               ?>
     
         
          </div>

     </div><!--row-->
</div><!--container-->
     
</section>


<?php include('inc/footer.php'); ?> 