<?php

// example of switch statement
$food = "pap";
$food_data = ucwords($food);

switch($food_data) {
    case "Yam":
        echo "Yam is selected!";
        break;
    case "Beans":
        echo "Beans is selected!"; 
        break;
    case "Pap":
        echo "Pap is selected!";
        break;
    default:
        echo "Please pick the food on the list given.";
        break;
}
?>
<?php
echo "<hr>";

// another example for switch statement
$staff_salary = "Ada";
$staff_data = ucwords($staff_salary);
switch($staff_data) {
    case "Admin":
        echo "Permission is granted!";
        break;
    case "staff":
    case "public":
    case "driver":
        echo "Permission denied, you are not an admin!";
        break;
    default:
        echo "Only admin can open this file!";
}