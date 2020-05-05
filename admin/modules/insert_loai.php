<?php
    require_once ("check_login.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Thêm mã loại</title>
    <link rel="stylesheet" type="text/css" href="insert1.css">
    <script language="javascript">
        function ValidateForm() {
            var txtName = document.getElementById("txtName");
            var divNameError = document.getElementById("divNameError");
            if (txtName.value == "") {
                divNameError.innerHTML = "Không được bỏ trống tên";
                txtNAme.focus();
                return false;
            } else
                divNameError.innerHTML = "";
            }
    </script>
</head>
<body>
<header>
    <?php require_once ("../layouts/header.php")?>
    <?php
    include("include/open.php");
    ?>
    <div class="insert" style=" padding-top: 100px;">
        <form method="post" action="insert_loaixl.php">
            <fieldset class="fielset" style="padding-left:400px;">
                <legend style="font-size: 30px;">Thêm loại sách</legend>
                <table style="border: 0px">
                    <tr>
                        <td>Tên loại</td>
                        <td><input type="text" name="txtName" id="txtName"/></td>
                        <Td>
                            <div id="divNameError" style="color:#F00"></div>
                        </Td>
                    </tr>
                </table> <br>
                <input type="submit" value="Thêm loại" onclick="return ValidateForm()" name="btnInsert" class="btn btn-outline-dark"/>
            </fieldset>
        </form>
    </div>
    <?php include("include/close.php")?>
    </body>
<?php require_once ("../layouts/footer.php")?>
</header>
</body>