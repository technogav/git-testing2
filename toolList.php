<?php include('inc/head.php');
      include('inc/nav_header.php'); 
      include('inc/side_nav.php');
      
      if(isset($_GET["tooltag"])){
           
           include('inc/CRUD.class.php');
           $sql = "SELECT image, tool_make, tool_name, tool_desc, day_price, ";
           $sql .= "week_price FROM toolhire WHERE tool_name = '" . $_GET['tooltag'] . "'"; 
           $db = new CRUDClass;
           $resultSet = $db->dbRead($sql);
           //if($resultSet){echo var_dump($resultSet[0]['tool_name']);}
               foreach($resultSet as $r){
               
               echo '<section>
                         <div class="row">
                              <div class="col-xs-10 col-xs-offset-1 col-sm-12 col-sm-offset-1 col-md-5 col-md-offset-1 col-lg-5 tool-table-wrapper">
                                   <h2 class="text-center">' . $r["tool_name"] . '</h2>
                                   <table class="pull-right">
                                        <tr>
                                             <td class="table_data"><strong>Make</strong></td>
                                             <td class="table_data">' . $r["tool_make"] . '</td>
                                        </tr>
                                        <tr>
                                             <td class="table_data"><strong>Name</strong></td>
                                             <td class="table_data">' . $r["tool_name"] . '</td>
                                        </tr>
                                        <tr>
                                             <td class="table_data"><strong>Description</strong></td>
                                             <td class="table_data">' . $r["tool_desc"] . '</td>
                                        </tr>
                                        <tr>
                                             <td class="table_data"><strong>Day Price</strong></td>
                                             <td class="table_data">€' . $r["day_price"] . '</td>
                                        </tr>
                                        <tr>
                                             <td class="table_data"><strong>Five Day Price</strong></td>
                                             <td class="table_data">€' . $r["week_price"] . '</td>
                                        </tr>
                                   </table>
                              </div>
                              <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                                   <div class="col-xs-10 col-xs-offset-1 col-sm-10 col-sm-offset-1 col-md-8 col-md-offset-2 col-lg-8 col-lg-offset-2">                   <img class="" src="data:image;base64,' . $r['image'] . ' "> 
                                   </div>
                              </div>
                         </div>
                    </section>';
             
                }
      
       } else{
            echo '<script>window.location = "index.php";</script>';
       }
      include('inc/footer.php');
      
      
       
?>