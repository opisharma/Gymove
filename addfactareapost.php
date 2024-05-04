<?php
require_once('dbConnect.php');
$fact_icon = ($_POST['fact-icon']);
$fact_count = ($_POST['fact-count']);
$fact_content =  ($_POST['fact-content']);



$insert_query = "INSERT INTO `fact_area`( `fact_icon`, `fact_count`, `fact_content`) VALUES ('$fact_icon','$fact_count','$fact_content')";
mysqli_query($conn, $insert_query);
header("location: addfactarea.php");


?>