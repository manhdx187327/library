<?php require_once ("../layouts/header.php")?>
<!--content!------>
<div id="content-wrapper">
    <div class="container-fluid">
        <!-- Breadcrumbs-->
        <ol class="breadcrumb">
            <li class="breadcrumb-item">
                <a href="index.php">Admin</a>
            </li>
            <li class="breadcrumb-item active">Danh sách sản phẩm</li>
        </ol>
        <!-- Page Content -->
        <h1>Danh sách sản phẩm </h1>
        <?php
        include("include/open.php");
        $query = "select * from sp";
        $resultSp = mysqli_query($conn,$query);
        ?>
        <table style="width: 100%; padding-left: 12%"  class="sp">
            <tr>
                <td>Mã sản phẩm</td>
                <td>Tên sản phẩm</td>
                <td>Giá sản phẩm</td>
                <td>Ảnh</td>
                <td>Mã Loại</td>
                <td></td>
                <td></td>
            </tr>
            <?php
            while($row = mysqli_fetch_array($resultSp))
            {
                ?>
                <tr>
                    <td><?php echo $row["ma_sp"]; ?></td>
                    <td><?php echo $row["ten_sp"]; ?></td>
                    <td><?php echo number_format($row["gia"]) . " VNĐ";?></td>
                    <td><img src="<?php echo "img/".$row["img"];?>" style="width:100px;height:100px"/></td>
                    <td><?php echo $row["danh_muc"]?></td>
                    <td><a href="edit.php?ma=<?php  echo $row["ma_sp"]; ?>"><img src="img/pencil.png" style="width: 35px; height: 35px"></a></td>
                    <td><a href="delete.php?ma=<?php  echo $row["ma_sp"]; ?>" onclick="return confirm('Xóa sản phẩm?')"><img src="img/delete1.png" style="width: 35px; height: 35px" ></a></td>
                </tr>
                <?php
            }
            ?>
        </table>
        <?php
        include("include/close.php");
        ?>
    </div>
    <!-- /.container-fluid -->
<?php require_once ("../layouts/footer.php")?>
