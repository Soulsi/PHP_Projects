<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <link   href="css/bootstrap.min.css" rel="stylesheet">
    <script src="js/bootstrap.min.js"></script>
</head>
 
<body>
  <?php
  
   //if ($_SERVER['REQUEST_METHOD'] == 'POST') 
   if(!empty($_POST)) {//this is calling the process which will update the USER table
    
        $name = $_POST['name'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $lastname = $_POST['lastname'];
    
       require 'mysqli_connect.php';
       $q = " INSERT INTO `USER`(`email_address`, `password`, `first_name`, `last_name`, `status`) VALUES ('$email', '$password', '$name', '$lastname', 'A')";
                
       if (mysqli_query($connection, $q) == true) {
         echo 'New Record.';
       }
       else {
         echo 'We have a problem.';
       }
    
    }
       
?>
                <div class="span10 offset1">
                    <div class="row">
                        <h3>Create a Customer</h3>
                    </div>
             
                    <form class="form-horizontal" action="create.php" method="post">
                      <div class="control-group">
                        <label class="control-label"> First Name</label>
                        <div class="controls">
                            <input name="name" type="text"  placeholder="name" value="<?php echo !empty($name)?$name:'';?>" required>
                            
                        </div>
                      </div>
                      <div class="control-group">
                        <label class="control-label"> Last Name</label>
                        <div class="controls">
                            <input name="lastname" type="text"  placeholder="last name" value="<?php echo !empty($lastname)?$lastname:'';?>" required>
                            
                        </div>
                      </div>
                      <div class="control-group">
                        <label class="control-label">Email Address</label>
                        <div class="controls">
                            <input name="email" type="text" placeholder="Email Address" value="<?php echo !empty($email)?$email:'';?>" required>
                        </div>
                      </div>
                      <div class="control-group">
                        <label class="control-label">Password</label>
                        <div class="controls">
                            <input name="password" type="password"  placeholder="password" value="<?php echo !empty($password)?$password:'';?>" required>
                        </div>
                      </div>
                      
                      <div class="form-actions">
                          <button type="submit" class="btn btn-success">Create</button>
                          <a class="btn" href="index.php">Back</a>
                        </div>
                    </form>
                </div>
                 
    </div>
    

  </body>
</html>
        