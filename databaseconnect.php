<?php
$servername = "localhost";
$database = "u490006738_VDS5N";
$username = "u490006738_8QGb9";
$password = "iuser97D";
// Create connection
$conn = mysqli_connect($servername, $username, $password, $database);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully";
mysqli_close($conn);
?>