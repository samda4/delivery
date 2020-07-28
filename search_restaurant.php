<?php

include_once 'include/dbh.inc.php';

$search = $_POST['search'];




$sql = "SELECT * FROM restaurant WHERE name like '%$search%'";

$result = $link->query($sql);

if ($result->num_rows > 0){
while($row = $result->fetch_assoc() ){

    echo $row["name"]."  ".$row["comment"]."  ".$row["phone"]."<br>";
}
} else {
	echo "0 records";
}



$link->close();

?>



