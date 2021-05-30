<!DOCTYPE html>
<html lang=en>
<head>
    <meta charset="utf-8">
    <title>Table Population</title>
    
    <style type="text/css">
        input[type ="button"] {
            color: orange;
            background-color:yellow;
            
}
    </style>
</head>
<body>
<table border="1" cellspacing="3" cellpadding="3" align="center">
     <thead>
          <tr> 
          <th><h2>City</h2></th> <th><h2>Population</h2></th>
          </tr> 
    </thead> 
<tbody>

<?php 

$city_State = array(
    'New York, New York' => '8,622,698', 
    'Los Angeles, California' => '3,999,759',
    'Chicago, Illinois' => '2,716,450', 
    'Houston, Texas' => '2,312,717', 
    'Phoenix, Arizona' => '1,626,078',
    'Philadelphia, Pennsylvania' => '1,580,863', 
    'San Antonio, Texas' => '1,511,946',
    'San Diego, California' => '1,419,516', 
    'Dallas, Texas' => '1,341,075', 
    'San Jose, California' => '1,035,317', 
    'Austin, Texas' => '950,715', 
    'Jacksonville, Florida' => '892,062', 
    'San Francisco' => '884,363', 
    'Columbus' => '879,170', 
    'Fort Worth' => '874,168',
);



foreach ($city_State as $city => $poulation) { 
    echo "<tr><td>$city</td><td>$poulation</td></tr>\n"; 
    }

ksort($city_State); 
echo '<tr><td colspan="2"> <strong>Sorted by title: </strong></td></tr>';
foreach ($city_State as $title => $poulation) { 
    echo "<tr><td>$title</td> <td>$poulation</td></tr>\n"; }
?>

<a href="quote.html"><input type="button" value="Quote Form"></a>

</body>
</html>

    