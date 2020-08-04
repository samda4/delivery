<?php
   include_once 'include/dbh.inc.php';
   session_start();  
   if(!isset($_SESSION["fullname"]))  
   {  
    header("location:login.php");       
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
                    <li class="nav-item active">
                        <a class="nav-link" href="restaurant_index.php">
                            <p><img border="0" alt="private" src="file/file.png" width="25" height="25" />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Ресторан</p>
                        </a>
                    </li>
                    <?php if($_SESSION["fullname"] == "admin"){?>
                    <li class="nav-item">
                        <a class="nav-link" href="users_list.php">
                            <p><img border="0" alt="user" src="images/user.png" width="25" height="25" />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Хэрэглэгч</p>
                        </a>
                    </li>
                   <?php }?>
                  
                    <li class="nav-item active-pro">
                        <a class="nav-link" href="logout.php">
                            <p><img border="0" alt="index" src="images/logout.png" width="25" height="25" />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Гарах</p>
                        </a>
                    </li>
                </ul>
            </div>
        </div>