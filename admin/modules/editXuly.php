<?php
$code = $_POST["txtCode"];
$name = $_POST["txtName"];
$price = $_POST["txtPrice"];
$img= $_POST["txtImg"];
$loai=$_POST["txtMaloai"];
include("include/open.php");
$strSelect = "update sp set ten_sp='$name',gia='$price',img='$img' , danh_muc='$loai' where ma_sp=$code";
mysqli_query($conn,$strSelect);
include("include/close.php");
header("Location:list.php");
?>