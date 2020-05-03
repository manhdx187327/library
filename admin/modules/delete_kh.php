<?php
$code = $_GET["ma"];
include("include/open.php");
$strSelect = "delete from kh where ma_kh = $code";
mysqli_query($conn,$strSelect);
include("include/close.php");
header("Location:info_kh.php");

?>
