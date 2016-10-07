<?php include('inc/head.php');
      include('inc/nav_header.php'); 
      include('inc/side_nav.php'); ?>

<section id="browns_auto_products">
<div class="container-fluid">
     <div class="row">
          <div class="col-lg-10 col-lg-offset-1 col-md-10 col-md-offset-1">
                </h1> 

               <?php
  
               if((isset($_GET['tag'])) || (isset($_GET['partner']))){
                    if(isset($_GET['tag'])){
                         echo strtoupper('<h1 class="text-center product_heading">' . $_GET['tag'].'</h1>');//filter this to strip out underscores
                         $sql = "SELECT * FROM products WHERE tag2 = '" . $_GET['tag'] . "'";
                         $sql2 = "SELECT * FROM products WHERE tag3 = '" . $_GET['tag'] . "'"; 
                    }else{
                         $sql = "SELECT * FROM products WHERE tag1 = '" . $_GET['partner'] . "'"; 
                    }

                    include('inc/CRUD.class.php');
                    $db = new CRUDClass;
                    $resultSet = $db->dbRead($sql);
                    $resultSet2 = $db->dbRead($sql2);
                    //var_dump($resultSet[0]);
                    //if($resultSet2){echo var_dump($resultSet2);}
 
                  
                    foreach($resultSet as $r){
                         
                         echo '<div class="col-sm-6 col-md-4">
                                   <div class="thumbnail">
                                        <img class="thumbnail_img" src="data:image;base64,' . $r['image'] . ' ">
                                        <div class="caption">
                                        <h3 class="text-center">' .$r['product_name']. '</h3>
                                        <p class="text-center">' . $r['product_description'] . '</p>
                                        <h3 class="text-center price">€' . $r['price'] . '</h3>
                                        </div>
                                   </div></div>';   
                    }
                  
               }else{
                    echo '<script>window.location = "index.php";</script>';          
               }
          
               ?>
     
         
          </div>

     </div><!--row-->
</div><!--container-->
     
</section>


<?php include('inc/footer.php'); ?> 