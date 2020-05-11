<?php
$code = $_GET["ma"];
include("include/open.php");
$strSelect = "delete from tblord where code_dh=$code";
mysqli_query($conn,$strSelect);
include("include/close.php");
header("Location:donhang.php");
?>
