<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <link   href="css/bootstrap.min.css" rel="stylesheet">
    <script src="js/bootstrap.min.js">
    </script>
    
    <style type="text/css">
        h3{
        color:white;
        }
        th{
            background-color:black;
            color:white;
            
        }
        
        td{
            background-color:white;
        }
        
        body{
            background: url("https://i.pinimg.com/originals/ea/3f/d3/ea3fd3102ccf575e3c33954f73eab78d.jpg");
            background-position: right;
        }
        
       
    </style>
</head>
 
<body>
    <body>
    <div class="container">
            <div class="row">
                <h3>PHP CRUD Grid</h3>
            </div>
            <div class="row">
                <p>
                    <a href="create.php" class="btn btn-success">Add New User</a>
                </p>
                <table class="table table-striped table-bordered">
                  <thead>
                    <tr>
                      <th>Name</th>
                      <th>Email Address</th>
                       <th>Password</th>
                       <th>Status</th>
                      <th>Action</th>
                </div>
                    </tr>
                  </thead>
                  <tbody>
                  <?php
                   require('mysqli_connect.php');
                   $query = "SELECT * FROM USER ORDER BY `user_id`";
                   $result = mysqli_query($connection, $query);
                   
while ($row = mysqli_fetch_assoc($result)) {
                            echo '<tr>';
                            echo '<td>'. $row['first_name'] . " ". $row['last_name']  . '</td>';
                            echo '<td>'. $row['email_address'] . '</td>';
                            echo '<td>'. $row['password'] . '</td>';
                            echo '<td>'. $row['status'] . '</td>';
                            echo '<td><a class="btn" href="edit_user.php?id='.$row['user_id'].'">Edit</a></td>';
                            echo '</tr>';
                   }



                  ?>
                  </tbody>
            </table>
        </div>
    </div> <!-- /container -->
  </body>
</html>
   
  </body>
</html>