<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Process Contact</title>
</head>
	<body>
<?php 
	echo "This is the information you provided. Please make sure everything is correct.";
	
	echo "<p>Name: {$_POST['first_name']} {$_POST['last_name']}  </p>";
	
	echo "<p>Email: {$_POST['email']}</p>";
	
	echo "<p>Gender: {$_POST['gender']}</p>";
	
	echo "<p>Age: {$_POST['age']}</p>";
	
	echo "<p>Interest: {$_POST['1']} {$_POST['2']} {$_POST['3']} {$_POST['4']} {$_POST['5']} {$_POST['6']}</p>";
	
	echo "<p>Donation: $ {$_POST['donation']}</p>";
	
	echo "<p>Comments: {$_POST['comments']}</p>";
	

	if (($_POST['donation']) > "0"){
	echo "<p>Thank you, Mr. <strong>{$_POST['last_name']}</strong>, for your generous donation. We ensure you your $ {$_POST['donation']}
	will be put to good use in this 2020 Presidential election. 
	</p>";
	
	if (($_POST['mailing']) === 'yes'){
		echo "<p> You will be receiving monthly updates on upcoming events .   	</p>";
	}
	else {
		echo "Thank you again for your interest in our political party";
	}
	print_r($_POST);
	}
	?>
	</body>
</html>