<?php
$color = "red";
$food = "FOOD";

$combine = $color;
$combine .= $food;

echo ucfirst($combine);
echo "<br>";
echo ucwords($combine);
echo "<br>";
echo strtolower($food);
echo "<br>";
echo strtoupper($color);
echo "<br>";
echo str_repeat($combine, 2);
echo "<br>";
echo substr($combine,0, 6);
echo "<br>";
echo strpos($combine, 'red');
echo "<br>";
echo strchr($combine, 'F');
echo "<br>";
echo str_replace("FOOD", "DRINK", $combine);
echo "<br>";

echo "The final string is ". $combine . "<br>";
echo "my fav color is $color <br>";
echo "{$color}is my color <br>";
echo 'I love pap a lot';
echo "<br>";

$drinks = array("blackbullet", "redbull", "smirnoff ice", array("voda", "balleys", "wine"), "baron");
$foods = array("Yam" => "Egg","Bread" => "Tea", "Noodles" => "Pepper");
$drinks[5] = "bestcream";

echo "Arrays:";
echo "<br>";

echo $foods["Yam"]; echo "<br>";

echo array_pop($drinks); echo "<br>";
echo array_push($drinks, "jameson"); echo "<br>";
echo "<pre>";
echo print_r($drinks);
echo "</pre>";
echo "<br>";
echo count($drinks); echo "<br>";
echo "Jameson in arrays:"; echo in_array("jameson", $drinks);

echo "<br>";
$names = array("Mojisola", "Aramide");
echo "Implode: "; echo implode(" ", $names); echo "<br>";
 
$name = "Aramide Dorcas";
echo "Explode: "; print_r(explode(" ",$name)); echo "<br>";


?>