<?php

$connection = mysqli_connect('localhost', 'root', '', 'cms'); 
// Pasijungiama prie serverio, rasosi host, username, password //ir database pavadinimas

/*if($connection){
    echo "We are connected";
} else {
    echo "NOT CONNECTED!!!!";
}
*/

/*
Kitas budas prisijungi prie serverio

$db['db_host'] = "localhost";
$db['db_user'] = "root";
$db['db_pass'] = "";
$db['db_name'] = "cms";

foreach ($db as $key => $value){
    define(strtoupper($key), $value);
    
$connection - mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB_NAME);
}

*/

?>