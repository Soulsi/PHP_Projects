<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="style.css">
<meta charset="utf-8">
<title>Process Contact</title>
</head>
	<body>
	<header>	<h1>Your Tuition Calculations </h1></header>
	<fieldset>	
<?php 
 $resident = $_POST['resident'];
 $numUnits = $_POST['numberofunits'];
 $studentfee = 21;
 $cardfee = $_POST['servicecardfee'];
 $parkingfee = $_POST['parking'];
 $scholar = rand(30, 100);

if ($resident == 46 ){
	$costUnits = $numUnits * 46;
	echo " <p>Cost of Tuition: {$_POST['numberofunits']}  x $46 = $".$costUnits." </p>";
}
else {
	$costUnits = $numUnits * 274;
	echo " <p>Cost of Tuition: {$_POST['numberofunits']}  x $274 = $".$costUnits." </p>";	
}

  
 
	echo "<p> Student Health Fee: $".$studentfee." </p>";
	
	echo "<p> College Services Card: $".$cardfee."</p>";
	
	echo "<p>Parking Permit: $".$parkingfee." </p>";
	
	echo "<p>Scholarship Award: $".$scholar." </p>";
	
	$total = $costUnits + $studentfee + $cardfee + $parkingfee - $scholar;
	echo "<p>Total Registration Costs: $".$total." </p>";

?>
</fieldset>
	</body>
</html>