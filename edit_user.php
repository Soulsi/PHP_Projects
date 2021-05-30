<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <link   href="css/bootstrap.min.css" rel="stylesheet">
    <script src="js/bootstrap.min.js"></script>
</head>
 
<body>
  <?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST')  {// we know this is calling the process which will update the USER table
    
        $name = $_POST['name'];
        $lastname = $_POST['lastname'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $status = $_POST['status'];
        $id = $_POST['id'];
    
       require 'mysqli_connect.php';
       $q = "UPDATE USER
             SET first_name = '$name',
                 last_name =  '$lastname',
                 email_address ='$email',
                 password = '$password',
                 status = '$status'
             WHERE user_id = $id;";

       if (mysqli_query($connection, $q) == 1) {
         echo 'Updated Record.';
       }
       else {
         echo 'We have a problem.';
         echo "You have selected :" .$status;
       }
       
    }
    
    else {
    // Get Information for the Form
    $user_id = $_GET['id']; 
   
    require 'mysqli_connect.php';

    $query = "SELECT * FROM USER WHERE user_id = $user_id";
   
    $result = mysqli_query($connection, $query);
   
         
    if (mysqli_num_rows($result) == 1) {
     
      $row = mysqli_fetch_array($result);
      
      $name = $row['first_name'];
      $lastname = $row['last_name'];
      $email = $row['email_address'];
      $password = $row['password'];
      $status = $row['status'];
    }
    } 
?>
                <div class="span10 offset1">
                    <div class="row">
                        <h3>Update User Information </h3>
                    </div>
             
                    <form class="form-horizontal" action="edit_user.php" method="post">
                        <div class="control-group">
                        <label class="control-label">User ID</label>
                        <div class="controls">
                            <input name="id" type="text"  readonly placeholder="Name" value="<?php echo !empty($user_id)?$user_id:'';?>" required>
                            
                        </div>
                      </div>
                      <div class="control-group">
                        <label class="control-label">Name</label>
                        <div class="controls">
                            <input name="name" type="text"  placeholder="First Name" value="<?php echo !empty($name)?$name:'';?>" required>
                            
                        </div>
                      </div>
                      <div class="control-group">
                        <label class="control-label">Last Name</label>
                        <div class="controls">
                            <input name="lastname" type="text"  placeholder="Last Name" value="<?php echo !empty($lastname)?$lastname:'';?>" required>
                            
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
                            <input name="password" type="text"  placeholder="password" value="<?php echo !empty($password)?$password:'';?>" required>
                            

                            
                        </div>
                      </div>
                      <div class="control-group">
                     <label class="control-label">Status</label>
                        <div class="controls">
                            <select name="status"> 
                          <option value="A">Active</option>
                          <option value=" ">Delete</option>
                          </select>
                        </div>
                            </div>


                      <div class="form-actions">
                          <button type="submit" class="btn btn-success">Update</button>
                          <a class="btn" href="index.php">Back</a>
                          
                        </div>
                    </form>
                </div>
                 
    </div>
    

  </body>
</html>
        