<?php include("includes/user_header.php"); ?>
    <div class="main-panel">
            <div class="transition_link">
            <?php
            $sql = "SELECT * FROM users where id= ".$_GET['id']."; ";
            $result = mysqli_query($link, $sql);
            $row = mysqli_fetch_assoc($result) ?>
            <a href="users_list.php">Хэрэглэгч</a>
            <a href="update_user.php?&id=<?php  echo $row['id'];?>&page_no=<?php echo $_GET['page_no']?>"> &rsaquo;&rsaquo; Хэрэглэгчийн мэдээлэл засах</a>
            </div>
                    <div class="content">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="card">
                                    <div class="card-header card-header-primary">
                                        <h4 class="card-title">Хэрэглэгчийн мэдээлэл засах</h4>
                                    </div>
                                    <div class="card-body">
                                    <?php
                            $sql = "SELECT * FROM users where id= ".$_GET['id']." order by id desc limit 1 ; ";
                            $result = mysqli_query($link, $sql);
                                $row = mysqli_fetch_assoc($result) ?>
                                        <form action="update_user_query.php" method="post" class="form"  enctype = "multipart/form-data">
                                        <div class="row">
                                                <div class="col-md-2">
                                                    <div class="form-group">
                                                        <label class="bmd-label-floating">Хэрэглэгчийн нэр</label>
                                                        <div class="form-group">
                                                        <input type="text" id="fullname" name="fullname" value="<?php  echo $row['fullname'];?>" class="form-control" />
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-2">
                                                    <div class="form-group">
                                                        <label class="bmd-label-floating">Цахим шуудан</label>
                                                        <div class="form-group">

                                                            <input type="text" name="email" id="email" value="<?php  echo $row['email'];?>" class="form-control">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-2">
                                                    <div class="form-group">
                                                        <label class="bmd-label-floating">Нууц үг</label>
                                                        <div class="form-group">

                                                            <input type="password" name="password" id="password" value="<?php  echo $row['password'];?>" class="form-control">
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