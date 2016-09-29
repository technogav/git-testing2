<?php include('inc/head.php');
      include('inc/nav_header.php'); 
      include('inc/side_nav.php');
      
      if(isset($_GET["tooltag"])){
           
           include('inc/CRUD.class.php');
           $sql = "SELECT image, tool_make, tool_name, tool_desc, day_price, ";
           $sql .= "week_price FROM toolhire WHERE tool_name = '" . $_GET['tooltag'] . "'"; 
           $db = new CRUDClass;
           $resultSet = $db->dbRead($sql);
          
           for($i = 0; $i < count($resultSet); $i++ ){
               
               echo '<section>
               <div class="col-sm-12 col-md-4 col-md-offset-2 col-lg-4 col-lg-offset-2">               
                    <h1>' . $resultSet[$i]['tool_make'] . '</h1>
                    </div> 
               <div class="col-sm-12 col-md-4 col-lg-4">               
                    <img class="splash_img" src="data:image;base64,' . $resultSet[$i]['image'] . ' ">
                    </div>
                    </section>';          
      }
      
                    } 
      include('inc/footer.php'); 
?>