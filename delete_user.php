<?php
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
include_once 'include/dbh.inc.php';
// Escape user inputs for security

$id = mysqli_real_escape_string($link, $_POST['id']);


$sql = "DELETE FROM users WHERE id='$id'";


if ($link->query($sql) === TRUE) {
    header('Location: http://localhost/delivery/users_list.php?page_no='.$_POST['page_no']);
  echo "Амжилттай устгагдлаа";
} else {
  echo "Error deleting record: " . $link->error;
}

$link->close();
?>
