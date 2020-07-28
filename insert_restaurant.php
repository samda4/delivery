<?php
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
include_once 'include/dbh.inc.php';

if(isset($_FILES['image'])){
    $errors= array();
    $file_name = $_FILES['image']['name'];
    $file_size =$_FILES['image']['size'];
    $file_tmp =$_FILES['image']['tmp_name'];
    $file_type=$_FILES['image']['type'];
    $file_ext=strtolower(end(explode('.',$_FILES['image']['name'])));
    
    $extensions= array("jpeg","jpg","png");
    
    if(in_array($file_ext,$extensions)=== false){
       $errors[]="extension not allowed, please choose a JPEG or PNG file.";
    }
    
    if($file_size > 2097152){
       $errors[]='File size must be excately 2 MB';
    }
    
    if(empty($errors)==true){
       move_uploaded_file($file_tmp,"images/".$file_name);
       echo "Success";
    }else{
       print_r($errors);
    }
 }

// Escape user inputs for security
$name = mysqli_real_escape_string($link, $_POST['name']);
$comment = mysqli_real_escape_string($link, $_POST['comment']);
$phone = mysqli_real_escape_string($link, $_POST['phone']);
$address = mysqli_real_escape_string($link, $_POST['address']);
$res_link = mysqli_real_escape_string($link, $_POST['link']);
 
// Attempt insert query execution
$sql = "INSERT INTO restaurant (name, comment, phone, address, link, image) VALUES ('$name', '$comment', '$phone', '$address', '$res_link', '$file_name')";
if ($link->query($sql) === TRUE) { 
    header('Location: http://localhost/delivery/restaurant_index.php');
 } 
 else { 
     echo "Error: " . $sql . "<br>" . $link->error; 
    }
 
// Close connection 
mysqli_close($link);
?>
