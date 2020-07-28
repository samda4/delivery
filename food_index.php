<?php include("includes/restaurant_header.php"); ?>
<div class="main-panel">
<nav class="navbar navbar-expand-lg navbar-transparent navbar-absolute fixed-top ">
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
</nav>
         <div class="content">
            <div class="col-md-12">
               <div class="card">
                  <div class="card-header card-header-primary">
<?php
   $sql = "SELECT * FROM restaurant where id= ".$_GET['id']."; ";
   $result = mysqli_query($link, $sql);
   $row = mysqli_fetch_assoc($result) ?>
<h4 class="card-title"><?php  echo $row['name'];?> -д дараах хоолнууд байна</h4>
<a href="add_food.php?&id=<?php  echo $row['id'];?>"><button style="position:absolute; top:4px; left:87%;" class="btn btn-primary pull-right" input type="submit">Хоол нэмэх</button></a>
</div>
<div class="card-body">
<div class="table-responsive">
<?php include("includes/table_food.php"); ?>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>
<!-- Start Footer Area -->
<?php include("includes/admin_footer.php"); ?>