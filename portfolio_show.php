<?php
require_once 'dbConnect.php';

$id = ($_GET['portfolio_id_']);

$total_show_portfolio_query = "SELECT COUNT(*) AS total FROM portfolio WHERE status = 'show'";
$total_show_portfolio_from_db = mysqli_query($conn, $total_show_portfolio_query);
$total_show_portfolio = mysqli_fetch_assoc($total_show_portfolio_from_db)['total'];


if($total_show_portfolio < 6){
$update_query = "UPDATE portfolio SET status = 'show' WHERE id = $id";
mysqli_query( $conn,$update_query);
header("location: portfolio.php");
}

else{
    $_SESSION['portfolio_show'] = "Already six show!";
    header("location: portfolio.php");
}




?>