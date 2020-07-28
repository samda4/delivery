<table class="table">
                <thead class="text-primary">
                <th>
                    №
                </th>
                <th>
                    Нэр
                </th>
                <th>
                    Утас
                </th>
                <th>
                    Хаяг
                </th>
                <th>Тайлбар</th>
                <th>Холбоос</th>
                <th>Зураг</th>
                <th></th>
                <th></th>
                <th></th>
                <th></th>
                </thead>
                <?Php
                $result_count = mysqli_query($link, "SELECT COUNT(*) As total_records FROM `restaurant`");
                if (isset($_GET['page_no']) && $_GET['page_no'] != "")
                {
                $page_no = $_GET['page_no'];
                }
                else
                {
                $page_no = 1;
                }
                $total_records_per_page = 3;
                $offset = ($page_no - 1) * $total_records_per_page;
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
                $i =  $previous_page * $total_records_per_page;
                }
                $sql = "SELECT * FROM `restaurant` order by `restaurant`.`id` desc LIMIT $offset, $total_records_per_page;";
                
                $result = mysqli_query($link, $sql);
                $resultCheck = mysqli_num_rows($result);
                if ($resultCheck > 0)
                {
                while ($row = mysqli_fetch_assoc($result))
                { ?>
        <tbody>
        <tr>
            <td>
            <?php echo $i++;?>
            </td>
            <td>
            <a href="food_index.php?&id=<?php echo $row['id']; ?>"><?php echo $row['name']; ?></a>
            </td>
            <td>
                <?php echo $row['phone']; ?>
            </td>
            <td>
                <?php echo $row['address']; ?>
            </td>
            <td>
                <?php echo $row['comment']; ?>  
            </td>
            <td>
                <?php echo $row['link']; ?>
            </td>
            <td>
                <img src="images/<?php echo $row['image']; ?>" height="45px;" width=80px;">
            </td>
            <td class="text-primary">
                <span class="completed">
            </td>
            <td class="text-primary">
                <form class="inline" action="delete_restaurant.php" method="post">
                    <input name = "id" type = "hidden" id = "id" value="<?php echo $row['id']; ?>">
                    <input type="hidden" name="_method" value="delete" />
                    <button class="btn btn-primary pull-right" input type="submit">Устгах</button>
                </form>
            </td>
            <td>
                <a href="update_restaurant.php?&id=<?php echo $row['id']; ?>"><button class="btn btn-primary pull-right" input type="submit">Засах</button></a>
            </td>
        </tr>
        </tbody>
        <?php
            }
        }
        ?>
    </table>
            <div class="col-md-12">
                <a <?php if($page_no > 1){
                echo "href='?page_no=$previous_page'";
                ?> > &lsaquo;&lsaquo; Prev <?php }?> 
                </a>
                <?php if($page_no >= $total_no_of_pages){
                } ?>
                <a <?php if($page_no < $total_no_of_pages) {
                echo "href='?page_no=$next_page'";
                ?>> Next &rsaquo;&rsaquo;
                </a>
                <?php } ?>
            </div>