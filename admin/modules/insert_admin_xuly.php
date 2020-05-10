<?php
include("include/open.php");
$name=$_POST["txtName"];
$email=$_POST["Email"];
$pass=$_POST["pass"];
$strInsert= "insert into admin(ten_admin,email_admin,pass) values ('$name','$email','$pass')";
mysqli_query($conn,$strInsert);
include("include/close.php");
echo "Đã thêm admin";
header('location:index.php');
