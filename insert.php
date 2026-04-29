<?php
require("connection.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $number = $_POST["phone"];           // Change all of the $ variables to the columns you made in the tables.
    $preferred_date = $_POST["date"];    // Change all of the variables in the square brackets to the names you have given in the input tags in your HTML file
    $preferred_time = $_POST["time"];
    $message = $_POST["message"];

    $sql = "INSERT INTO `patients-1` (name, email, number, preferred_date, preferred_time, message) VALUES ('$name', '$email', '$number', '$preferred_date', '$preferred_time', '$message')";

    if ($connection->query($sql) === TRUE) {
        echo "\nData inserted successfully!";
    } else {
        echo "Error: " . $connection->error;
    }
}
?>