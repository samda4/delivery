<?php include("includes/user_header.php"); ?>
<div class="main-panel">
<div class="transition_link">
            <a href="users_list.php">Хэрэглэгч</a>
            <a href="add_user.php"> &rsaquo;&rsaquo; Хэрэглэгч нэмэх</a>
            </div>
                    <div class="content">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="card">
                                    <div class="card-header card-header-primary">
                                        <h4 class="card-title">Хэрэглэгч шинээр нэмэх</h4>
                                    </div>
                                    <div class="card-body">
                                    <form action = "insert_user.php" method = "POST" enctype = "multipart/form-data">
                                            <div class="row">
                                                <div class="col-md-2">
                                                    <div class="form-group">
                                                        <label class="bmd-label-floating">Хэрэглэгчийн нэр</label>
                                                        <div class="form-group">
                                                            <input type="text" id="fullname" name="fullname"  class="form-control" />
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="col-md-2">
                                                    <div class="form-group">
                                                        <label class="bmd-label-floating">Цахим шуудан</label>
                                                        <div class="form-group">
                                                            <input type="text" id="email" name="email" class="form-control" />
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-2">
                                                    <div class="form-group">
                                                        <label class="bmd-label-floating">Нууц үг</label>
                                                        <div class="form-group">
                                                            <input type="password" id="password" name="password" class="form-control" />
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-2" style="margin-top:10px;">
                                                    <label class="bmd-label-floating-2">Зураг</label>
                                                    <div class="f">
                                                        <div class="file-upload">
                                                            <div class="file-select">
                                                                <div class="file-select-button" id="fileName">ОРУУЛАХ</div>
                                                                <input type = "file" name = "image" id="image" class="form-control"/>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <button onclick="myFunction()" class="btn btn-primary pull-right" input type="submit">Хадгалах</button>
                                            <div class="clearfix"></div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
<?php include("includes/admin_footer.php"); ?>