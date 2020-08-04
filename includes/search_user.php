<table class="table">
    <thead class="text-primary">
    <th>
        №
    </th>
    <th>
        Нэр
    </th>
    <th>
        Цахим шуудан
    </th>
    <th>
        Нууц үг
    </th>
    <th>Зураг</th>
    <th></th>
    <th></th>
    <th></th>
    <th></th>
    </thead>
            <?Php
            $result_count = mysqli_query($link, "SELECT COUNT(*) As total_records FROM `users`");
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

            if($page_no == 1){
                $i=1;
            }
            else{
            $i =  $previous_page * $total_records_per_page+1;
            }

            $total_records = mysqli_fetch_array($result_count);
            $total_records = $total_records['total_records'];
            $total_no_of_pages = ceil($total_records / $total_records_per_page);
            $second_last = $total_no_of_pages - 1; // total pages minus 1
            $sql = "SELECT * FROM `users` order by `users`.`id` desc LIMIT $offset, $total_records_per_page;";

            $result = mysqli_query($link, $sql);
            $resultCheck = mysqli_num_rows($result);
            if ($resultCheck > 0)
            {
                    include_once 'include/dbh.inc.php';
                    $search = mysqli_real_escape_string($link, $_POST['search']);
                    $sql = "SELECT * FROM users WHERE fullname like '%$search%'";
                    $result = $link->query($sql);
                    if ($result->num_rows > 0 && $search !="")
                    {
                        while ($row = $result->fetch_assoc())
                        {?>
                            <tbody>
                        <tr>
                            <td>
                            <?php echo $i++;?>
                            </td>
                            <td>
                            <?php echo $row['fullname']; ?>
                            </td>
                            <td>
                                <?php echo $row['email']; ?>
                            </td>
                            <td>
                                <?php echo $row['password']; ?>
                            </td>
                            <td>
                                <img src="images/<?php echo $row['image']; ?>" height="60" width="55">
                            </td>
                            <td class="text-primary">
                                <span class="completed">
                            </td>
                            <td class="text-primary">
                                <form class="inline" action="delete_user.php" method="post">
                                    <input name = "id" type = "hidden" id = "id" value="<?php echo $row['id']; ?>">
                                    <input type="hidden" name="_method" value="delete" />
                                    <button class="btn btn-primary pull-right" input type="submit">Устгах</button>
                                </form>
                            </td>
                            <td>
                                <a href="update_user.php?&id=<?php echo $row['id']; ?>"><button class="btn btn-primary pull-right" input type="submit">Засах</button></a>
                            </td>
                        </tr>
                        </tbody>
                        <?php
                            }
                    }
            else{
                echo "Таны хайсан хэрэглэгч байхгүй байна"; 
            }
                            }

$link->close();
?>



