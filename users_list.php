<?php include("includes/user_header.php"); 
error_reporting(E_ALL ^ E_NOTICE);
$search = mysqli_real_escape_string($link, $_POST['search']);
?>
<div class="main-panel">
    <div class="s130">
      <form action="users_list.php" method="POST">
        <div class="inner-form">
          <div class="input-field first-wrap">
            <div class="svg-wrapper">
              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                <path d="M15.5 14h-.79l-.28-.27C15.41 12.59 16 11.11 16 9.5 16 5.91 13.09 3 9.5 3S3 5.91 3 9.5 5.91 16 9.5 16c1.61 0 3.09-.59 4.23-1.57l.27.28v.79l5 4.99L20.49 19l-4.99-5zm-6 0C7.01 14 5 11.99 5 9.5S7.01 5 9.5 5 14 7.01 14 9.5 11.99 14 9.5 14z"></path>
              </svg>
            </div>
            <input id="search" type="text" name="search" value="<?php error_reporting(E_ALL ^ E_NOTICE); echo $search ?>"/>
          </div>
          <div class="input-field second-wrap">
            <button class="btn-search" type="submit" name="submit" >ХАИХ</button>
          </div>
        </div>
      </form>
    </div>
    <div class="transition_link">
       <a href="users_list.php">Хэрэглэгч</a>
    </div>
   <div class="content">
      <div class="col-md-12">
         <div class="card">
            <div class="card-header card-header-primary">
               <h4 class="card-title">Манай сайтад дараах хэрэглэгчид байна</h4>
               <a href="add_user.php"><button style="position:absolute; top:4px; left:85%;" class="btn btn-primary pull-right" input type="submit">Хэрэглэгч нэмэх</button></a>
            </div>
            <div class="card-body">
               <div class="table-responsive">
               <?php  $i=1;
               if(isset($_POST['submit'])){
               if($search ==""){
                  include("includes/table_user.php"); 
               }
               else{
                  include("includes/search_user.php"); 
               }
               }
               else{
                  include("includes/table_user.php"); 
               }?>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>
<?php include("includes/admin_footer.php"); ?>