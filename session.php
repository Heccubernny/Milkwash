<?php
include('assets/admin/config.php');
session_start();
$user_check = $_SESSION['username'];
$user_check1 = $_SESSION['email'];
$ses_sql = mysqli_query($conn, "SELECT username FROM admin WHERE username = '$user_check'") //AND SELECT email FROM admin WHERE email = '$user_check1' ")
$row = mysqli_fetch_array($ses_sql);
$login_session = $row['username'];

if(!isset($_SESSION['username'])){
    header("location: index.php");
}else{
    $update_login_query = "UPDATE admin SET login_at = Now() WHERE username='".$login_session."'";
    $update_login_result = mysqli_query($conn, $update_login_query);
}
?>