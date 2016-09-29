<?php include('inc/head.php');
      include('inc/nav_header.php');
      include('inc/CRUD.class.php');
      $sql = 'SELECT image FROM splash WHERE 1';
      $db = new CRUDClass;
      $resultSet = $db->dbRead($sql);
      for($i = 0; $i < count($resultSet); $i++ ){
          echo '<div class="col-sm-12 col-md-12 col-lg-12">                 
               <img class="splash_img" src="data:image;base64,' . $resultSet[$i]['image'] . ' ">
               </div>';

                    }
      include('inc/footer.php'); 
?> 