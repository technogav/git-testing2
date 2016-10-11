<?php 
include('inc/head.php');

if(($_SERVER['REQUEST_METHOD'] == 'POST') && (isset($_POST['username'])) && (isset($_POST['password']))){
     $username = $_POST['username'];
     $password = $_POST['password'];
     
     if(($username == 'eddie')&&($password == 'password')){
          $_SESSION['loggedIn'] = true;
          echo '<script>window.location = "insert_admin.php";</script>';
     }else{
          
         echo '<script>alert("Incorrect username and password");</script>';
     }  
}

/*if(isset($_POST['submit_login'])){
     echo 'here';
    if(isset($_POST['username'])){
        
         
    }else{
        echo '<script><alert>Please fill in username</alert></script>';  
    }    
    if(isset($_POST['password'])){
         
          
    }else{
         echo '<script><alert>Please fill in password</alert></script>'; 
    }
    
         
}*/




echo '<section>
          <div class="container-fluid">
               <div class="col-xs-6 col-xs-offset-3 col-sm-6 col-sm-offset-3 col-md-4 col-md-offset-4 col-lg-4 col-lg-offset-4">
                    <form method="post" action="#">
                        <div class="form-group">
                            <label for="username">Username</label>
                            <input type="username" name="username" class="form-control" id="username" placeholder="Username">
                        </div>
                        <div class="form-group">
                            <label for="password">Password</label>
                            <input type="password" name="password" class="form-control" id="password" placeholder="Password">
                        </div>
                        
                        <button type="submit" class="btn btn-default" value="submit_login">Submit</button>
                    </form>
               </div>
          </div>
</section>';


include('inc/footer.php');