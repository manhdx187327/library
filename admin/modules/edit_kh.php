<body>
<?php require_once ("../layouts/header.php")?>
<?php
include("include/open.php");
$code = $_GET["ma"];
$strSelect = "select * from kh where ma_kh = '$code'";
$result = mysqli_query($conn,$strSelect);
$row = mysqli_fetch_array($result);
?>
<div class="insert" style="width: 100%; padding-left: 30%; padding-top: 100px">
    <form method="post" action="editXuly.php">
        <fieldset class="fielset">
            <legend>Chỉnh sửa thông tin khách hàng</legend>
            <table style="border: 0px">
                <tr>
                    <td>Mã sản phẩm</td>
                    <td><input type="text" name="txtCode" readonly="readonly" value="<?php echo $row["ma_sp"]; ?>"/></td>
                </tr>
                <tr>
                    <td>Tên sản phẩm</td>
                    <td><input type="text" name="txtName"  value="<?php echo $row["ten_sp"]; ?>"/></td>
                </tr>
                <tr>
                    <td>Hình ảnh minh họa</td>
                    <td><input type="text" name="txtImg" value="<?php echo $row["img"]; ?>"/></td>
                </tr>
                <tr>
                    <td>Giá sản phẩm</td>
                    <td><input type="text" name="txtPrice" value="<?php echo $row["gia"]; ?>"></td>
                </tr>
                <tr>
                    <td>Mã loại</td>
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
                </tr>
            </table> <br>
            <input type="submit" value="Sửa sản phẩm" name="btnEdit"/>
        </fieldset>
    </form>
</div>
<?php include("include/close.php")?>
<?php require_once ("../layouts/footer.php")?>
</body>


