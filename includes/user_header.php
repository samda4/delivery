<?php
   include_once 'include/dbh.inc.php';
   session_start();  
   if(!isset($_SESSION["fullname"]))  
   {  
        header("location:login.php");
        if ($_SESSION['LAST_ACTIVITY'] < time() - (60 * 5)) {
            session_start();  
            session_destroy();  
            header("location:http://localhost/delivery/login.php");  
        }
        $_SESSION['LAST_ACTIVITY'] = time();      
   }  
   ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <link rel="icon" type="image/png" href="images/favicon.png" />
    <title>
        Админ
    </title>
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700" />
    
    <link href="css/admin.css" rel="stylesheet" />
</head>

<body>
    <div class="wrapper">
        <div class="sidebar" data-color="purple" data-background-color="white" data-image="images/sidebar.jpg">
            <div class="logo">
                <a href="admin.php" class="simple-text logo-normal">
                        АДМИН ПАНЕЛ
                    </a>
            </div>
            <div class="sidebar-wrapper">
                <ul class="nav">
                    <li class="nav-item">
                        <a class="nav-link" href="restaurant_index.php">
                            <p><img border="0" alt="private" src="file/file_2.png" width="25" height="25" />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Ресторан</p>
                        </a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link" href="users_list.php">
                            <p><img border="0" alt="user" src="images/user_2.png" width="25" height="25" />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Хэрэглэгч</p>
                        </a>
                    </li>
                    <li class="nav-item active-pro">
                        <a class="nav-link" href="index.php">
                            <p><img border="0" alt="index" src="images/logout.png" width="25" height="25" />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Гарах</p>
                        </a>
                    </li>
                </ul>
            </div>
        </div>