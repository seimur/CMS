<?php

echo __FILE__ . "<br>";

echo __LINE__ . "<br>";

echo __DIR__ . "<br>";

if(file_exists(__DIR__)){
    echo "YES! <br>";
}

if(is_file(__DIR__)){
    echo "YES! <br>";
} else {
    echo "no <br>";
}

if(is_dir(__FILE__)){
    echo "YES! <br>";
} else {
    echo "no <br>";
}

 // Ternary operator, cia kai nerasom if, else, o viska parasom vienoje //eiluteje. ? = then, : = else;

echo file_exists(__FILE__) ? "yes" : "no";

?>