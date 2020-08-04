<?php include("includes/restaurant_header.php"); ?>
<div class="main-panel">
            <div class="transition_link">
            <?php
            $sql = "SELECT * FROM restaurant where id= ".$_GET['id']."; ";
            $result = mysqli_query($link, $sql);
            $row = mysqli_fetch_assoc($result) ?>
            <a href="restaurant_index.php">Ресторан</a><a href="food_index.php?&id=<?php echo $row['id']; ?>"> &rsaquo;&rsaquo; Хоол</a>
            <a href="add_food.php?&id=<?php echo $row['id']; ?>"> &rsaquo;&rsaquo; Хоол нэмэх</a>
            </div>
                    <div class="content">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="card">
                                    <div class="card-header card-header-primary">
                                        <h4 class="card-title">Хоол шинээр нэмэх</h4>
                                    </div>
                                    <div class="card-body">
                                    <?php
                            $sql = "SELECT * FROM restaurant where id= ".$_GET['id']." order by id desc limit 1 ; ";
                            $result = mysqli_query($link, $sql);
                            $row = mysqli_fetch_assoc($result) ?>
                                    <form action = "insert.php?&id=<?php  echo $row['id'];?>" method = "POST" enctype = "multipart/form-data">
                                            <div class="row">
                                                <div class="col-md-2">
                                                    <div class="form-group">
                                                        <label class="bmd-label-floating">Хоолны нэр</label>
                                                        <div class="form-group">
                                                            <input type="text" id="name" name="name"  class="form-control" />
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-2">
                                                    <div class="form-group">
                                                        <label class="bmd-label-floating">Хоолны тайлбар</label>
                                                        <div class="form-group">
                                                            <textarea name="comment" id="comment" rows="10" cols="80">
                                                            </textarea>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="col-md-2">
                                                    <div class="form-group">
                                                        <label class="bmd-label-floating">Үнэ</label>
                                                        <div class="form-group">
                                                            <input type="text" id="cost" name="cost" class="form-control" />
                                                        </div>
                                                    </div>
                                                </div>
                                                                                                <div class="col-md-2">
                                                    <div class="form-group">
                                                        <label class="bmd-label-floating">Огноо</label>
                                                        <div class="form-group">

                                                            <input type="date" name="date" id="date">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-2">
                                                    <div class="form-group">
                                                        <label class="bmd-label-floating">Ангилал</label>
                                                        <div class="form-group">
                                                            <div class="custom-select" style="width: 200px;">
                                                                <select name="idc" id="idc">
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
                                                <div class="col-md-2">
                                                    <div class="form-group">
                                                        <label class="bmd-label-floating">Онцлох</label>
                                                        <div class="form-group">
                                                            <div class="custom-select" style="width: 200px;">
                                                            <input type="checkbox" id="top" name="top">
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
                                                                <input type = "file" name = "image" id="image" />
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