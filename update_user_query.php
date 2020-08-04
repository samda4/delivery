<?php
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
include_once 'include/dbh.inc.php';
// Escape user inputs for security
$file_name = "";
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

$id = mysqli_real_escape_string($link, $_POST['id']);
$fullname = mysqli_real_escape_string($link, $_POST['fullname']);
$email = mysqli_real_escape_string($link, $_POST['email']);
$password = mysqli_real_escape_string($link, $_POST['password']);
$hashed_password = password_hash($password, PASSWORD_BCRYPT);

if($file_name !=""){
   $sql = "UPDATE users SET fullname='$fullname', email = '$email', password= '$hashed_password', image = '$file_name'  WHERE id ='$id'";
   }


   else{
       $sql = "UPDATE users SET fullname='$fullname', email = '$email', password= '$hashed_password' WHERE id ='$id'";  
   }
// Attempt insert query execution
if ($link->query($sql) === TRUE) { 
    header('Location: http://localhost/delivery/users_list.php?page_no='.$_POST['page_no']);
 } 
 else { 
     echo "Error: " . $sql . "<br>" . $link->error; 
    }
 
// Close connection 
mysqli_close($link);

?>