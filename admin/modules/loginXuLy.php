<?php
session_start();
$email = $_POST["email"];
$pass = $_POST["pass"];
include("include/open.php");
$query = "SELECT * FROM admin WHERE email_admin='$email' AND pass = '$pass'";
//echo $query;
//die($query);
$result = mysqli_query($conn,$query);
$soBanGhi = mysqli_num_rows($result);
if($soBanGhi==1)
{
    $_SESSION['ma_admin'] =$email;
    $_SESSION['email_admin'] =$email;
    $page = "index.php";
}
else
{
    $page="login.php";
}
include("include/open.php");
header("Location:$page");
?>

