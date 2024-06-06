<?php
include 'config.php';

$ID = $_GET['Id'];


mysqli_query($con, "DELETE FROM `tblcard` WHERE Id = $ID");


$result = mysqli_query($con, "SELECT COUNT(*) as count FROM `tblcard`");
$row = mysqli_fetch_assoc($result);


if ($row['count'] == 0) {
    mysqli_query($con, "ALTER TABLE `tblcard` AUTO_INCREMENT = 1");
}


header('Location:index.php');

?>
