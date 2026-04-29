<?php
/* echo "Hello World!, Welcome to PHP";

$name = "<br> Brent";
$surname = "Cruz";

echo $name . " " . $surname;
*/

$server = "localhost";
$username = "root";
$password = "";
$database = "dental_clinic"; // Change this to be the name of your database

// Connecting to the dental_clinic database
$connection = mysqli_connect($server, $username, $password, $database);

if ($connection) {
    echo "Connection Successful";
}

?>
