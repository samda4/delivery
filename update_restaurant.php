<?php include("includes/restaurant_header.php"); ?>
<div class="main-panel">

<nav class="navbar navbar-expand-lg navbar-transparent navbar-absolute fixed-top">
                <div class="container-fluid">
                    <div class="navbar-wrapper">
                        <a class="navbar-brand" href="javascript:;">Ресторан</a>
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
                        <div class="row">
                            <div class="col-md-12">
                                <div class="card">
                                    <div class="card-header card-header-primary">
                                        <h4 class="card-title">Рестораны мэдээлэл засах</h4>
                                    </div>
                                    <div class="card-body">
                                    <?php
                            $sql = "SELECT * FROM restaurant where id= ".$_GET['id']." order by id desc limit 1 ; ";
                            $result = mysqli_query($link, $sql);
                                $row = mysqli_fetch_assoc($result) ?>
                                        <form action="update_restaurant_query.php" method="post" class="form"  enctype = "multipart/form-data">
                                        <div class="row">
                                                <div class="col-md-2">
                                                    <div class="form-group">
                                                        <label class="bmd-label-floating">Рестораны нэр</label>
                                                        <div class="form-group">
                                                        <input type="text" value="<?php  echo $row['name'];?>" id="name" name="name" value="<?php  echo $row['name'];?>"  class="form-control" />
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-2">
                                                    <div class="form-group">
                                                        <label class="bmd-label-floating">Тайлбар</label>
                                                        <div class="form-group">
                                                            <input type="text" id="comment" name="comment" value="<?php  echo $row['comment'];?>" class="form-control" />
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="col-md-2">
                                                    <div class="form-group">
                                                        <label class="bmd-label-floating">Утас</label>
                                                        <div class="form-group">
                                                            <input type="text" id="phone" name="phone"  value="<?php  echo $row['phone'];?>"  class="form-control" />
                                                        </div>
                                                    </div>
                                                </div>
                                                                                                <div class="col-md-2">
                                                    <div class="form-group">
                                                        <label class="bmd-label-floating">Холбоос</label>
                                                        <div class="form-group">

                                                            <input type="text" name="link" id="link" value="<?php  echo $row['link'];?>"  class="form-control">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-2">
                                                    <div class="form-group">
                                                        <label class="bmd-label-floating">Хаяг</label>
                                                        <div class="form-group">

                                                            <input type="text" name="address" id="address" value="<?php  echo $row['address'];?>" class="form-control">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-2" style="margin-top:10px;">
                                                    <label class="bmd-label-floating-2">Зураг</label>
                                                    <div class="f">
                                                        <div class="file-upload">
                                                            <div class="file-select">
                                                                <div class="file-select-button" id="fileName">ОРУУЛАХ</div>
                                                                <input type = "file" name = "image" id="image" value="<?php  echo $row['image'];?>" class="form-control"/>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <input name = "id" type = "hidden" id = "id" value="<?php  echo $row['id'];?>">
                                                                <input type="hidden" name="_method" value="delete" />
                                            <button onclick="myFunction()" class="btn btn-primary pull-right" input type="submit">Хадгалах</button>
                                            <div class="clearfix"></div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php include("includes/admin_footer.php"); ?>