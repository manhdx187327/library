<head>
    <meta charset="UTF-8">
    <title>Thêm sản phẩm</title>
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
            var divImgError = document.getElementById("divImgError");
            var Maloai = document.getElementById("Maloai");
            var divMaLoaiError = document.getElementById("divMaLoaiError");
            if(Maloai.value==0 )
            {
                divMaLoaiError.innerHTML =" Phải chọn loại";
                Maloai.focus();
                return false;
            }
            else
                divMaLoaiError.innerHTML = "";

            return true;
        }
    </script>
</head>
<body>
<header>
    <?php require_once ("../layouts/header.php")?>
    <?php
    include("include/open.php");
    ?>
    <div class="insert">
        <form method="post" action="InsertXuly.php" style="padding-top: 100px"  enctype="multipart/form-data">
            <fieldset style="padding-left:400px;">
                <legend style="font-size: 30px;">Thêm sách mới</legend>
                <table style="border: 0px">
                    <tr>
                        <td>Tên sách</td>
                        <td><input type="text" name="txtName" id="txtName"/></td>
                        <Td>
                            <div id="divNameError" style="color:#F00"></div>
                        </Td>
                    </tr>
                    <tr>
                        <td>Hình ảnh minh họa</td>
                        <td><input type="file" name="txtImg" id="txtImg"/></td>
                        <Td>
                            <div id="divImgError" style="color:#F00"></div>
                        </Td>
                    </tr>
                    <tr>
                        <td>Mã loại sách</td>
                        <td>
                        <select name="txtMaloai">
                            <?php
                            $queryLoai = "select * from danh_muc";
                            $resultLoai = mysqli_query($conn,$queryLoai);
                            while ($rowLoai = mysqli_fetch_array($resultLoai)) {
                                ?>
                                <option value="<?php echo $rowLoai["ma_danh_muc"]; ?>"> <?php echo $rowLoai["ten_danh_muc"]; ?></option>
                                <?php
                            }
                            ?>
                        </select>
                        </td>
                        <Td>
                            <div id="divMaLoaiError" style="color:#F00"></div>
                        </Td>
                    </tr>
                </table> <br>
                <input type="submit" value="Thêm sản phẩm" onclick="return ValidateForm()" name="btnInsert" class="btn btn-outline-dark"/>
            </fieldset>
        </form>
    </div>
    <?php include("include/close.php")?>
    </body>
</header>
</body>
<!-- /.content-wrapper -->
<?php require_once ("../layouts/footer.php")?>