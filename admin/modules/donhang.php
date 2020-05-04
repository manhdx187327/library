<?php require_once ("../layouts/header.php")?>
<!--content!------>
<div id="content-wrapper">
    <div class="container-fluid">
        <!-- Breadcrumbs-->
        <ol class="breadcrumb">
            <li class="breadcrumb-item">
                <a href="index.php">Admin</a>
            </li>
            <li class="breadcrumb-item active">Danh sách đơn hàng</li>
        </ol>
        <!-- Page Content -->
        <h1>Danh sách sinh viên đặt sách</h1>
        <?php
        include("include/open.php");
        $query = "select * from hoa_don ORDER BY tinh_trang_hoa_don ASC";
        // die($query);
        $resultOrd = mysqli_query($conn,$query);
        ?>
        <table style="width: 100%; padding-left: 12%"  class="sp">
            <tr>
                <td>Mã</td>
                <td>Tên sinh vien</td>
                <td>Mã sinh viên</td>
                <td>Ngày đặt</td>
                <td>Ngày trả sách</td>
                <td></td>
                <td></td>
            </tr>
            <?php
            while($row = mysqli_fetch_array($resultOrd))
            {
                ?>
                <tr>
                    <td><?php echo $row["ma_hoa_don"]; ?></td>
                    <td><?php echo $row["ten_nguoi_nhan"]; ?></td>
                    <td><?php echo $row["sdt_nguoi_nhan"]; ?></td>
                    <td><?php echo $row["thoi_gian_mua"]?></td>
                    <td><?php echo $row["ngay_tra_sach"]?></td>
                    <td>
                        <?php 
                            if($row["tinh_trang_hoa_don"] == 0){
                                echo "Chưa trả sách";
                            }
                            else{
                                echo "Đã trả sách";
                            }
                        ?>
                    </td>
                    <td>
                        <a href="process_thay_doi_tinh_trang.php?kieu=duyet&ma_hoa_don=<?php echo $row['ma_hoa_don'];?>">
                            <?php 
                                if($row['tinh_trang_hoa_don'] == 0) {
                                 echo 'Đã trả';
                                }
                            ?>
                        </a>
                    </td>
                    <td><a href="view_chi_tiet_hoa_don.php?ma_hoa_don=<?php echo $row['ma_hoa_don']?>">Xem chi tiết</a></td>
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
