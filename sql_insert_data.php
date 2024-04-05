<?php
// Connecting to the Database
$servername = "localhost";
$username = "root";
$password = "";
$database = "dbsap2";
// Create a connection
$conn = mysqli_connect($servername, $username, $password, $database);
// Die if connection was not successful
if(!$conn){
    die("Sorry we failed to connect: " . mysqli_connect_error() . "<br>");
}
echo "Connection was successful <br>";

// SQL Query to be executed
$name = 'Saptarshi';
$destination = 'Russia';
$sql = "INSERT INTO `phptrip` (`name`, `dest`) VALUES ('$name', '$destination')";
$result = mysqli_query($conn, $sql);

// Add a new trip to trip table in DB
if($result){
    echo "The record has been inserted successfully <br>";
}
else{
    echo "The record was not inserted successfully: " . mysqli_error($conn) . "<br>";
}
?>