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
      <th>Онцлох</th>
      <th>Зураг</th>
      <th></th>
      <th></th>
      <th></th>
   </thead>
   <?php
      $result_count = mysqli_query(
          $link,
          "SELECT COUNT(*) As total_records FROM `best_food` where r_id= ".$_GET['id']."; " 
          );
         if (isset($_GET['page_no']) && $_GET['page_no']!="") {
            $page_no = $_GET['page_no'];
            } else {
               $page_no = 1;
               }
               $total_records_per_page = 5;
               $offset = ($page_no-1) * $total_records_per_page;
               $previous_page = $page_no - 1;
               $next_page = $page_no + 1;
               $adjacents = "2";
      
               $total_records = mysqli_fetch_array($result_count);
               $total_records = $total_records['total_records'];
               $total_no_of_pages = ceil($total_records / $total_records_per_page);
               $second_last = $total_no_of_pages - 1; // total pages minus 1
               if($page_no == 1){
                  $i=1;
               }
               else{
               $i =  $previous_page * $total_records_per_page+1;
               }
                  $sql = "SELECT * FROM `best_food`, `food_category` WHERE `best_food`.`idc` = `food_category`.`cid` AND `best_food`.`r_id` = ".$_GET['id']." ORDER BY `best_food`.`r_id` DESC LIMIT $offset, $total_records_per_page;";
      
      
               $result = mysqli_query($link, $sql);
               $resultCheck = mysqli_num_rows($result);
               if ($resultCheck > 0){
      while ($row = mysqli_fetch_assoc($result)){ ?>
   <tbody>
      <tr>
         <td>
            <?php echo $i++;?>
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
            <?php  echo $row['cost'];?>  
         </td>
         <td>
            <input type="checkbox" id="top" name="top" disabled="disabled" value="<?php  echo $row['top'];?>">  
         </td>
         <td>
            <img src="images/<?php  echo $row['image'];?>" height="45px;" width=80px;>
         </td>
         <td class="text-primary">
            <span class="completed">
         </td>
         <td class="text-primary">
            <form class="inline" action="delete.php" method="post">
               <input name = "id" type = "hidden" id = "id" value="<?php  echo $row['id'];?>">
               <input name = "r_id" type = "hidden" id = "r_id" value="<?php  echo $row['r_id'];?>">
               <input name = "page_no" type = "hidden" id = "page_no" value="<?php  echo $page_no?>">
               <input type="hidden" name="_method" value="delete" />
               <button class="btn btn-primary pull-right" input type="submit">Устгах</button>
            </form>
         </td>
         <td>
            <a href="update_food.php?&id=<?php  echo $row['id'];?>&r_id=<?php  echo $row['r_id'];?>&page_no=<?php echo $page_no?>">
            <button class="btn btn-primary pull-right" input type="submit">Засах</button></a>
         </td>
      </tr>
   </tbody>
   <?php
      }
      }
      ?>
</table>
<div class="col-md-12">
      <?php $sql = "SELECT * FROM best_food";
         $result = mysqli_query($link, $sql);
         $row = mysqli_fetch_assoc($result) ?>
      <?php if($page_no > 1){?>
      <a href="food_index.php?&id=<?php  echo $row['r_id'];?>&page_no=<?php echo $previous_page?>"> &lsaquo;&lsaquo; Prev
      </a>
      <?php } ?>
      <?php if($page_no >= $total_no_of_pages){
      } ?>
      <?php if($page_no < $total_no_of_pages) {?>
      <a href="food_index.php?&id=<?php  echo $row['r_id'];?>&page_no=<?php echo $next_page?>"> Next &rsaquo;&rsaquo;
      </a>
      <?php } ?>
</div>