<?php
include("include/open.php");
$name=$_POST["txtName"];
$price=$_POST["txtPrice"];
$Maloai=$_POST["txtMaloai"];
$img= $_FILES["txtImg"];

$array     = explode('/', $img['type']);
$file_type = $array[1];
$img_name   = strtotime("now").".$file_type";

$target_dir = "img/";
$target_file = $target_dir . $img_name;
move_uploaded_file($img["tmp_name"], $target_file);

$strInsert= "insert into sp(ten_sp,img,gia,danh_muc) values ('$name','$img_name','$price','$Maloai')";

mysqli_query($conn,$strInsert);
include("include/close.php");
echo "Đã thêm sản phẩm";
header('location:Insert.php');

