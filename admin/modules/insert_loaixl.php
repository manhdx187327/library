<?php
include("include/open.php");
$name=$_POST["txtName"];
$strInsert= "insert into danh_muc(ten_danh_muc) value ('$name')";
mysqli_query($conn,$strInsert);
include("include/close.php");
echo "Đã thêm mã loại";
header('location:insert_loai.php');