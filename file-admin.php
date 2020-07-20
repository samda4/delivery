<?php
   include_once 'include/dbh.inc.php';
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
                <a href="http://localhost:8000/admin" class="simple-text logo-normal">
                        АДМИН ПАНЕЛ
                    </a>
            </div>
            <div class="sidebar-wrapper">
                <ul class="nav">
                    <li class="nav-item active">
                        <a class="nav-link" href="http://localhost:8000/file_admin">
                            <p><img border="0" alt="file" src="file/file.png" width="25" height="25" />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Хоол</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="http://localhost:8000/private_admin">
                            <p><img border="0" alt="private" src="images/private.png" width="25" height="25" />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Хувийн мэдээлэл</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="http://localhost:8000/user">
                            <p><img border="0" alt="user" src="images/user.png" width="25" height="25" />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Хэрэглэгч</p>
                        </a>
                    </li>
                    <li class="nav-item active-pro">
                        <a class="nav-link" href="http://localhost:8000">
                            <p><img border="0" alt="index" src="images/logout.png" width="25" height="25" />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Гарах</p>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="main-panel">
            <nav class="navbar navbar-expand-lg navbar-transparent navbar-absolute fixed-top">
                <div class="container-fluid">
                    <div class="navbar-wrapper">
                        <a class="navbar-brand" href="javascript:;">Хоол</a>
                    </div>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="navbar-toggler-icon icon-bar"></span>
                            <span class="navbar-toggler-icon icon-bar"></span>
                            <span class="navbar-toggler-icon icon-bar"></span>
                        </button>
                </div>
            </nav>
            <div class="content">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header card-header-primary">
                            <h4 class="card-title">Манай сайтад дараах хоолнууд байна</h4>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table">
                                    <thead class="text-primary">
                                        <th>
                                            ID
                                        </th>
                                        <th>
                                            Нэр
                                        </th>
                                        <th>
                                            Огноо
                                        </th>
                                        <th>
                                            Ангилал
                                        </th>
                                        <th>Зураг</th>
                                        <th>Тайлбар</th>
                                        <th></th>
                                        <th></th>
                                    </thead>
                                    <?php
                            $sql = "SELECT * FROM best_food;";
                            $result = mysqli_query($conn, $sql);
                            $resultCheck = mysqli_num_rows($result);
                            if ($resultCheck > 0){
                                while ($row = mysqli_fetch_assoc($result)){ ?>
                                    <tbody>
                                        <tr>
                                            <td>
                                            <?php  echo $row['id'];?>
                                            </td>
                                            <td>
                                            <?php  echo $row['name'];?>
                                            </td>
                                            <td>
                                            <?php  echo $row['date'];?>
                                            </td>
                                            <td>
                                            <?php  echo $row['type'];?>
                                            </td>
                                            <td>
                                            <img src="<?php  echo $row['image'];?>" height="150px;" width="200px;">
                                            </td>
                                            <td class="text-primary">
                                                <span class="completed">
                                                        </td>
                                                        <td class="text-primary">
                                                            <form class="inline" action="/add_file/{{file.id}}" method="post">
                                                                <input type="hidden" name="_method" value="delete" />
                                                                <button class="btn btn-primary pull-right" input type="submit">Устгах</button>
                                                            </form>
                                                        </td>
                                                        <td>
                                                                <button class="btn btn-primary pull-right" input type="submit">Засах</button>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                                <?php
                                }
                            }
                        ?>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="card">
                                    <div class="card-header card-header-primary">
                                        <h4 class="card-title">Хоол шинээр нэмэх</h4>
                                    </div>
                                    <div class="card-body">
                                        <form action="insert.php" method="post" class="form">
                                            <div class="row">
                                                <div class="col-md-2">
                                                    <div class="form-group">
                                                        <label class="bmd-label-floating">Хоолны нэр</label>
                                                        <div class="form-group">
                                                            <input type="text" id="name" name="name" class="form-control" />
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-2">
                                                    <div class="form-group">
                                                        <label class="bmd-label-floating">Хоолны тайлбар</label>
                                                        <div class="form-group">
                                                            <input type="text" id="cost" name="name" class="form-control" />
                                                        </div>
                                                    </div>
                                                </div>
                                                                                                <div class="col-md-2">
                                                    <div class="form-group">
                                                        <label class="bmd-label-floating">Огноо</label>
                                                        <div class="form-group">

                                                            <input type="date" value="2020-05-21" name="date" id="date">
                                                        </div>
                                                    </div>
                                                </div>


                                                <div class="col-md-2">
                                                    <div class="form-group">
                                                        <label class="bmd-label-floating">Ангилал</label>
                                                        <div class="form-group">
                                                            <div class="custom-select" style="width: 200px;">
                                                                <select name="category" id="type">
                                                                    <option value="БИЧВЭР">Монгол</option>
                                                                    <option value="ЗУРАГ">Солонгос</option>
                                                                    <option value="ДУУ">Пицца</option>
                                                                    <option value="ВИДЕО">Тахиа</option>
                                                                    <option value="ВИДЕО">Уух зүйлс</option>
                                                                    <option value="ВИДЕО">Олон үндэстэний</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-100">
                                                    <label class="bmd-label-floating-2">Зураг</label>
                                                    <div class="form-group">
                                                            <input type="text" id="image" name="name" class="form-control" />
                                                        </div>
                                                </div>
                                            </div>
                                            <button onclick="myFunction()" class="btn btn-primary pull-right" input type="submit" value="submt">Хадгалах</button>
                                            <div class="clearfix"></div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <footer class="footer">
                    <div class="container-fluid">
                        <nav class="float-left">
                            <ul>
                                <li>
                                    <a href="https://www.youtube.com"> <img border="0" alt="youtube" src="images/youtube.png" width="35" height="35" /> Youtube </a>
                                </li>
                                <li>
                                    <a href="https://www.facebook.com"> <img border="0" alt="facebook" src="images/facebook.png" width="35" height="35" /> Facebook </a>
                                </li>
                                <li>
                                    <a href="https://www.twitter.com"> <img border="0" alt="twitter" src="images/twitter.png" width="35" height="35" /> Twitter </a>
                                </li>
                                <li>
                                    <a href="https://www.google.com"> <img border="0" alt="google" src="images/google.png" width="35" height="35" /> Google </a>
                                </li>
                            </ul>
                        </nav>
                        <div class="copyright float-right">
                            <script>
                            	var today = Date.now();

								document.getElementById("date").value = today ;
                                document.write(new Date().getFullYear());
                            </script>
                            , Бүх эрх хуулиар хамгаалагдсан
                        </div>
                    </div>
                </footer>
            </div>
        </div>
        <script src="js/jquery.min.js"></script>
        <script src="js/popper.min.js"></script>
        <script src="js/bootstrap-material-design.min.js"></script>
        <script src="js/perfect-scrollbar.jquery.min.js"></script>
        <script src="js/material-dashboard.js"></script>
    </body>
</html>