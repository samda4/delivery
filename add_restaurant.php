<?php include("includes/restaurant_header.php"); ?>
<div class="main-panel">
<div class="transition_link">
            <a href="restaurant_index.php">Ресторан</a>
            <a href="add_restaurant.php"> &rsaquo;&rsaquo; Ресторан нэмэх</a>
            </div>
                    <div class="content">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="card">
                                    <div class="card-header card-header-primary">
                                        <h4 class="card-title">Ресторан шинээр нэмэх</h4>
                                    </div>
                                    <div class="card-body">
                                    <form action = "insert_restaurant.php" method = "POST" enctype = "multipart/form-data">
                                            <div class="row">
                                                <div class="col-md-2">
                                                    <div class="form-group">
                                                        <label class="bmd-label-floating">Рестораны нэр</label>
                                                        <div class="form-group">
                                                            <input type="text" id="name" name="name"  class="form-control" />
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-2">
                                                    <div class="form-group">
                                                        <label class="bmd-label-floating">Тайлбар</label>
                                                        <div class="form-group">
                                                        <textarea name="comment" id="comment" rows="10" cols="80">
                                                        </textarea>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="col-md-2">
                                                    <div class="form-group">
                                                        <label class="bmd-label-floating">Утас</label>
                                                        <div class="form-group">
                                                            <input type="text" id="phone" name="phone" class="form-control" />
                                                        </div>
                                                    </div>
                                                </div>
                                                                                                <div class="col-md-2">
                                                    <div class="form-group">
                                                        <label class="bmd-label-floating">Холбоос</label>
                                                        <div class="form-group">

                                                            <input type="text"  name="link" id="link" class="form-control">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-2">
                                                    <div class="form-group">
                                                        <label class="bmd-label-floating">Хаяг</label>
                                                        <div class="form-group">

                                                            <input type="text" name="address" id="address" class="form-control">
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