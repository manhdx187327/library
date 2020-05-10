<?php require_once ("../layouts/header.php")?>
<!--content!------>
<div id="content-wrapper">
    <div class="container-fluid">
        <!-- Breadcrumbs-->
        <ol class="breadcrumb">
            <li class="breadcrumb-item">
                <a href="index.php">Admin</a>
            </li>
            <li class="breadcrumb-item active">Chi tiết đơn hàng</li>
        </ol>
        <!-- Page Content -->
        <h1>Chi tiết</h1>
        <?php
        include("include/open.php");
        $ma_hoa_don = $_GET['ma_hoa_don'];
        $query = "SELECT 
                    sp.ten_sp,
                    sp.img
                    FROM hoa_don_chi_tiet
                    JOIN hoa_don ON hoa_don.ma_hoa_don = hoa_don_chi_tiet.ma_hoa_don
                    JOIN kh ON hoa_don.ma_khach_hang = kh.ma_kh
                    JOIN sp ON sp.ma_sp = hoa_don_chi_tiet.ma_sp
                    WHERE hoa_don.ma_hoa_don = $ma_hoa_don";
//         die($query);
        $resultOrd = mysqli_query($conn,$query);
        ?>
        <table style="width: 100%; padding-left: 12%"  class="sp">
            <tr>
                <td>Tên sách</td>
                <td>Ảnh </td>
            </tr>
            <?php
            while($row = mysqli_fetch_array($resultOrd))
            {
                ?>
                <tr>
                    <td><?php echo $row['ten_sp']?></td>
                    <td><img src="img/<?php echo $row['img']?>" width="150px" height="150px"></td>
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
    <?php require_once ("../layouts/footer.php");?>
