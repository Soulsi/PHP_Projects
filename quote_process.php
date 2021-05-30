<!DOCTYPE html>
<html lang=en>
<head>
    <meta charset="utf-8">
    <title>String</title>
</head>
<body>


<?php 

$quote = $_REQUEST['quote'];

$quoteArray = explode(" ", $quote);

     echo "<h3> Original Array </h3>";
     print_array($quoteArray);
     echo "Total items: " . count($quoteArray);
     echo "<br>";
     
     echo "<h3> Alphabetized</h3>";
     natcasesort($quoteArray);
     print_array($quoteArray);
     echo "<br>";

echo "<h3>Reverse Alphabetized</h3>";

print_array(array_reverse($quoteArray));
echo "<br>";

echo "<h3>Add Three Items</h3>";
array_push($quoteArray, 'please', 'I', 'Help');
print_array($quoteArray);
echo "<br>";

echo "<h3>Remove Three Items</h3>";
array_shift($quoteArray);
array_shift($quoteArray);
array_shift($quoteArray);
print_array($quoteArray);
echo "<br>";

function print_array($quote){
    echo "<pre>";
    print_r($quote);
    echo "</pre>";
}
?>

<a href="quote.html"><input type="button" value="Return"></a>
</body>
</html>

    