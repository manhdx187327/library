<?php
$code = $_GET["ma"];
include("include/open.php");
$strSelect = "delete from sp where ma_sp = $code";
mysqli_query($conn,$strSelect);
include("include/close.php");
header("Location:list.php");
?>