<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php 

$numbers=array(10,11,12,13,14,15,16,17,18,19,20,21);

echo "<pre>";
print_r($numbers);
echo "</pre>";
echo  "Current first number: ".current($numbers);
echo "<br>";
next($numbers);
echo "Current second number: ".current($numbers);
echo "<br>";
reset($numbers);
echo "Current number after reseting: ". current($numbers); 
echo "<br>";
end($numbers);
echo "End number: ". current($numbers);
echo "<br>";
next($numbers);
echo  "Current first number: ".current($numbers);
echo "<br>";



?>

    
   



</body>
</html>