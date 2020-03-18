<?php
error_reporting(0);
$server = "localhost";
$username = "root";
$password = "";
$database = "milkwash";

$conn = mysqli_connect($server,$username,$password,$database);

$settings = mysqli_fetch_assoc(mysqli_query($conn, "SELECT * FROM settings WHERE id='1'"));
$currency=$settings['symbol'];

$curdate = date("Y-m-d",strtotime("+1 day"));
$beforedate=date("Y-m-d",strtotime("-30 day"));
$users_ip=$_SERVER['REMOTE_ADDR'];
$check_ip=mysqli_num_rows(mysqli_query($conn, "SELECT * FROM ads_click WHERE ip='".$users_ip."' and date BETWEEN '".$beforedate."' AND '".$curdate."'"));
?>