<!doctype html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>Connect to MySQL</title>
</head>
<body>
<?php
//Connect to the database

$host = "localhost";
$user = "id7872745_username"; //Your Cloud 9 username
$pass = "password"; //Remember, there is NO password by default!
$db = "id7872745_database"; //Your database name you want to connect to

$connection = mysqli_connect($host, $user, $pass, $db) or die('<h2>Could Not Connect to MySQL: ' . mysql_error() . '</h2>');
?>

</body>
</html>