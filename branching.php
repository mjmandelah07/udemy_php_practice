<?php
// example of branching statement

$names = array("Yemi","Gbenga","Yemisi","Seun","yomi","Idowu","Moji");

for ($n = 0; $n <= 6; $n++) {
    if ($names[$n] == "Seun"){
        break; // or continue
    }
    echo $names[$n] . "<br>";
}
