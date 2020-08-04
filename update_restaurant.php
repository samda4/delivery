<?php include("includes/restaurant_header.php"); ?>
    <div class="main-panel">
            <div class="transition_link">
            <?php
            $sql = "SELECT * FROM restaurant where id= ".$_GET['id']."; ";
            $result = mysqli_query($link, $sql);
            $row = mysqli_fetch_assoc($result) ?>
            <a href="restaurant_index.php">Ресторан</a>
            <a href="update_restaurant.php?&id=<?php  echo $row['id'];?>&page_no=<?php echo $_GET['page_no']?>"> &rsaquo;&rsaquo; Рестораны мэдээлэл засах</a>
            </div>
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
                                                            <textarea id="comment" name="comment"> <?php  echo $row['comment'];?>
                                                            </textarea class="form-control">
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
                                                        <label class="bmd-label-floating">Онцлох</label>
                                                        <div class="form-group">

                                                            <input type="checkbox" name="top" id="top" value="<?php  echo $row['top'];?>"  class="form-control">
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
                                            <input name = "page_no" type = "hidden" id = "page_no" value="<?php  echo $_GET['page_no']?>">
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