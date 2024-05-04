<?php
require_once('dbConnect.php');

 $portfolio_id = ($_GET['portfolio_id_']);
$delete_query = "DELETE FROM `portfolio` WHERE id = $portfolio_id ";
mysqli_query($conn, $delete_query);
header('location: portfolio.php')
?>

