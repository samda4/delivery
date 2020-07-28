<?php include("includes/restaurant_header.php"); ?>
<div class="main-panel">
   <nav class="navbar navbar-expand-lg navbar-transparent navbar-absolute fixed-top ">
      <form action = "restaurant_index.php" method = "POST" >
         <div class="inner-form">
            <div class="input-field first-wrap" >
               <div class="svg-wrapper">
               </div>
               <input id="search" type="text" name="search" style="margin-left:7%; position:absolute;" />
            </div>
            <div class="input-field second-wrap" style="position:absolute; margin-left:20%;">
               <button class="btn-search" type="submit" name="submit">SEARCH</button>
            </div>
         </div>
      </form>
   </nav>
   <div class="content">
      <div class="col-md-12">
         <div class="card">
            <div class="card-header card-header-primary">
               <h4 class="card-title">Манай сайтад дараах ресторанууд байна</h4>
               <a href="add_restaurant.php"><button style="position:absolute; top:4px; left:85%;" class="btn btn-primary pull-right" input type="submit">Ресторан нэмэх</button></a>
            </div>
            <div class="card-body">
               <div class="table-responsive">
               <?php if(isset($_POST['submit']))
                  include("includes/search_restaurant.php"); 
               else{
                  include("includes/table_restaurant.php"); 
               }?>
               
               </div>
            </div>
         </div>
      </div>
   </div>
</div>
<?php include("includes/admin_footer.php"); ?>