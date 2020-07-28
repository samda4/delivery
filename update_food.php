<?php include("includes/restaurant_header.php"); ?>
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
                        <div class="row">
                            <div class="col-md-12">
                                <div class="card">
                                    <div class="card-header card-header-primary">
                                        <h4 class="card-title">Хоолны мэдээлэл засах</h4>
                                    </div>
                                    <div class="card-body">
                                    <?php
                            $sql = "SELECT * FROM best_food where id= ".$_GET['id']." order by id desc limit 1 ; ";
                            $result = mysqli_query($link, $sql);
                                $row = mysqli_fetch_assoc($result) ?>
                                        <form action="update.php" method="post" class="form"  enctype = "multipart/form-data">
                                            <div class="row">
                                                <div class="col-md-2">
                                                    <div class="form-group">
                                                        <label class="bmd-label-floating">Хоолны нэр</label>
                                                        <div class="form-group">
                                                            <input type="text" id="name" name="name" value="<?php  echo $row['name'];?>" class="form-control" />
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-2">
                                                    <div class="form-group">
                                                        <label class="bmd-label-floating">Хоолны тайлбар</label>
                                                        <div class="form-group">
                                                            <textarea id="comment" name="comment"> <?php  echo $row['comment'];?>
                                                            </textarea class="form-control">
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="col-md-2">
                                                    <div class="form-group">
                                                        <label class="bmd-label-floating">Үнэ</label>
                                                        <div class="form-group">
                                                            <input type="text" id="cost" name="cost" value="<?php  echo $row['cost'];?>" class="form-control" />
                                                        </div>
                                                    </div>
                                                </div>
                                                                                                <div class="col-md-2">
                                                    <div class="form-group">
                                                        <label class="bmd-label-floating">Огноо</label>
                                                        <div class="form-group">

                                                            <input type="date" value="2020-05-21" name="date" value="<?php echo $row['date'];?>" id="date">
                                                        </div>
                                                    </div>
                                                </div>


                                                <div class="col-md-2">
                                                    <div class="form-group">
                                                        <label class="bmd-label-floating">Ангилал</label>
                                                        <div class="form-group">
                                                            <div class="custom-select" style="width: 200px;">
                                                                <select name="idc" id="idc" value="<?php  echo $row['idc'];?>" >
                                                                    <option value="1">Монгол</option>
                                                                    <option value="2">Солонгос</option>
                                                                    <option value="3">Пицца</option>
                                                                    <option value="4">Тахиа</option>
                                                                    <option value="5">Олон үндэстэний</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-100">
                                                    <label class="bmd-label-floating-2">Зураг</label>
                                                    <div class="f">
                                                        <div class="file-upload">
                                                            <div class="file-select">
                                                                <div class="file-select-button" id="fileName">ОРУУЛАХ</div>
                                                                <input type = "file" name = "image" id="image" value="<?php  echo $row['image'];?>" />
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <img src="images/<?php  echo $row['image'];?>" height="45px;" width="80px;">
                                                </div>
                                            </div>
                                            <input name = "id" type = "hidden" id = "id" value="<?php  echo $row['id'];?>">
                                            <input name = "r_id" type = "hidden" id = "r_id" value="<?php  echo $row['r_id'];?>">
                                            <button onclick="myFunction()" class="btn btn-primary pull-right" input type="submit">Хадгалах</button>
                                            <div class="clearfix"></div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php include("includes/admin_footer.php"); ?>