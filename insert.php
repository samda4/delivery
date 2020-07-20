<?php
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
$link = mysqli_connect("localhost", "root", "", "delivery");
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 
// Escape user inputs for security
$name = mysqli_real_escape_string($link, $_REQUEST['name']);
$cost = mysqli_real_escape_string($link, $_REQUEST['cost']);
$type = mysqli_real_escape_string($link, $_REQUEST['type']);
$image = mysqli_real_escape_string($link, $_REQUEST['image']);
$date = mysqli_real_escape_string($link, $_REQUEST['date']);
 
// Attempt insert query execution
$sql = "INSERT INTO best_food (name, cost, type, image, date) VALUES ('$name', '$cost', '$type', '$image', '$date')";
if(mysqli_query($link, $sql)){
    echo "Records added successfully.";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
 
// Close connection
mysqli_close($link);
?>
