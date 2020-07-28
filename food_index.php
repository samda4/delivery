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
               <h4 class="card-title"><?php  echo $row['name'];?> ресторанд дараах хоолнууд байна</h4>
               <a href="add_food.php?&id=<?php  echo $row['id'];?>"><button style="position:absolute; top:4px; left:87%;" class="btn btn-primary pull-right" input type="submit">Хоол нэмэх</button></a>
            </div>
            <div class="card-body">
               <div class="table-responsive">
                  <table class="table">
                     <thead class="text-primary">
                        <th>
                           №
                        </th>
                        <th>
                           Нэр
                        </th>
                        <th>
                           Огноо
                        </th>
                        <th>
                           Ангилал
                        </th>
                        <th>Тайлбар</th>
                        <th>Үнэ</th>
                        <th>Зураг</th>
                        <th></th>
                        <th></th>
                        <th></th>
                     </thead>
                     <?php
                        $result_count = mysqli_query(
                            $link,
                            "SELECT COUNT(*) As total_records FROM `best_food`"
                            );
                           if (isset($_GET['page_no']) && $_GET['page_no']!="") {
                              $page_no = $_GET['page_no'];
                              } else {
                                 $page_no = 1;
                                 }
                                 $total_records_per_page = 3;
                                 $offset = ($page_no-1) * $total_records_per_page;
                                 $previous_page = $page_no - 1;
                                 $next_page = $page_no + 1;
                                 $adjacents = "2";

                                 $total_records = mysqli_fetch_array($result_count);
                                 $total_records = $total_records['total_records'];
                                 $total_no_of_pages = ceil($total_records / $total_records_per_page);
                                 $second_last = $total_no_of_pages - 1; // total pages minus 1
                                 if($_GET['id'] == ''){
                                    $sql = "SELECT * FROM `best_food`, `food_category` WHERE `best_food`.`idc` = `food_category`.`cid` order by `best_food`.`id` desc LIMIT $offset, $total_records_per_page;";
                                 }
                                 else
                                    $sql = "SELECT * FROM `best_food`, `food_category` WHERE `best_food`.`idc` = `food_category`.`cid` AND `best_food`.`r_id` = ".$_GET['id']." ORDER BY `best_food`.`r_id` DESC LIMIT $offset, $total_records_per_page;";

                        
                        $result = mysqli_query($link, $sql);
                        $resultCheck = mysqli_num_rows($result);
                        if ($resultCheck > 0){
                        while ($row = mysqli_fetch_assoc($result)){ ?>
                     <tbody>
                        <tr>
                           <td>
                           </td>
                           <td>
                              <?php  echo $row['name'];?>
                           </td>
                           <td>
                              <?php  echo $row['date'];?>
                           </td>
                           <td>
                              <?php  echo $row['categ_name'];?>
                           </td>
                           <td>
                              <?php  echo $row['comment'];?>  
                           </td>
                           <td>
                              <?php  echo $row['cost'];?>$  
                           </td>
                           <td>
                              <img src="images/<?php  echo $row['image'];?>" height="45px;" width=80px;">
                           </td>
                           <td class="text-primary">
                              <span class="completed">
                           </td>
                           <td class="text-primary">
                              <form class="inline" action="delete.php" method="post">
                                 <input name = "id" type = "hidden" id = "id" value="<?php  echo $row['id'];?>">
                                 <input type="hidden" name="_method" value="delete" />
                                 <button class="btn btn-primary pull-right" input type="submit">Устгах</button>
                              </form>
                           </td>
                           <td>
                              <a href="update_food.php?&id=<?php  echo $row['id'];?>&r_id=<?php  echo $row['r_id'];?>"><button class="btn btn-primary pull-right" input type="submit">Засах</button></a>
                           </td>
                        </tr>
                     </tbody>
                     <?php
                        }
                        }
                        ?>
                  </table>
               </div>
            </div>
         </div>
      </div>
   </div>
            </div>
<!-- Start Footer Area -->
<?php include("includes/admin_footer.php"); ?>