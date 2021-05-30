<!DOCTYPE html>
<html lang="en">
<head>
  <title>Input and Output Machine</title>
  
  <style>
@import url('https://fonts.googleapis.com/css?family=Nova+Mono');
body{
 margin: 10% 10% 40% 10%;
}
h1{
 font-family: 'Nova Mono', monospace;
}
</style>
</head>
<?php
$answer = 0;
$value1 = $_POST['value1'];
$value2 = $_POST['value2'];
function addition($a, $b)
 {
 return ($a + $b);
 }
 
function subtraction($a, $b)
 {
 return ($a - $b);
 }
 
function squareRoot($a, $b)
 {
 return sqrt($a + $b);
 }
 
 function divide($a, $b){
  
  if ($b != 0){
   return ($a/$b);
  }
  else {
   $error = 'error';
   return $error;
  }
 }

if (isset($_POST['add'])) {
     $answer = addition($value1, $value2); 
   }
    elseif (isset($_POST['subtract'])) {
     $answer = subtraction($value1, $value2);
    }
   elseif (isset($_POST['divide'])) {
      $answer = divide($value1, $value2);
   }
   elseif (isset($_POST['square_root'])) {
      $answer = squareRoot($value1, $value2);
   }
   

?>
<body>
	<header>
     
    </header>
		<form action="" method="post" style="height: 410px; width: 410px; border=1px; border-radius:25px; background-image: linear-gradient(to right, #FAA98B, #E6AECF, #AEE0DD, #01ACBD);" >
 		<div align="center">
 		 <h1>Calculator:</h1>
 			<p>
 				<input style="height:100px; width: 350px;font-size:60px; background-color:whitesmoke; margin:3%; border-radius: 20px;" type="text" name="value1" value="<?php echo $answer; ?>" />
 				
 				<input style="height:100px; width: 350px;font-size:60px;background-color:whitesmoke; margin:3%; border-radius: 20px;" type="text" name="value2" placeholder="0"/>
 			</p>
					<input type="submit" name="add" value="Add" style="margin:3%; font-size:20px">
					<input type="submit" name="subtract" value="Subtract" style="margin:3%; font-size:20px;">
					<input type="submit" name="divide" value="Divide" style="margin:3%; font-size:20px;">
					<input type="submit" name="square_root" value=" Square Root" style="margin:3%; font-size:20px;">
			
		
		</div>
  
 		
</form>

     <footer>
         <p>&copy; Jesus Castaneda COSW 30, 2018</p>
     </footer>
    
</body>
</html>