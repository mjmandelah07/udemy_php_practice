<?php
// example of a foreachLoop
$foods = array("yam","rice","pap","beans","plantain","spag");

foreach ($foods as $value) {
    echo $value . " is a food i love. <br>";

}
echo "<hr>";
// another example of foreachLoop
$mojisola = array("Name" => "mojisola", "Age" => 26, "Gender" => "Female", "best_food" => "Pap",
 "Phone_number" => 8167849930);

foreach ($mojisola as $key => $value) {
    // check if Phone_number is a numeric or not
    if($key == "Phone_number") {
        if (is_numeric($value)) {
            }
        else{
            $value="Can not be determined";
        }
    }

    $data = ucwords(str_replace("_"," ", $key));
    $data_value = ucwords(str_replace("_"," ", $value));

    
    echo "My " . $data . " is " . $data_value . ". <br> ";

}