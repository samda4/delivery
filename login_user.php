<?php

include_once 'include/dbh.inc.php';

$password = mysqli_real_escape_string($link, $_POST['password']);
$email = mysqli_real_escape_string($link, $_POST['email']);


$sql = "SELECT * FROM users WHERE email = '$email' AND password = '$password'";
$result = mysqli_query($link,$sql);
$row = mysqli_fetch_array($result,MYSQLI_ASSOC);
$active = $row['active'];

$count = mysqli_num_rows($result);

  
if($count == 1) {
   $_SESSION['login_user'] = $email;
   
   header('Location: http://localhost/delivery/restaurant_index.php');
}else if($password == "" || $email == "") {
   $error = "Your Login Name or Password is invalid";
   header('Location: http://localhost/delivery/login-14.php'.$error);
}else{
   header('Location: http://localhost/delivery/login-14.php');
}

?>

