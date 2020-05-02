<?php require_once ("../layouts/header.php")?>
<!--content!------>
<div id="content-wrapper">
    <div class="container-fluid">
        <!-- Breadcrumbs-->
        <ol class="breadcrumb">
            <li class="breadcrumb-item">
                <a href="index.php">Admin</a>
            </li>
            <li class="breadcrumb-item active">Danh sách sinh viên</li>
        </ol>
        <!-- Page Content -->
        <h1>Danh sách sinh viên </h1>
        <?php
        include("include/open.php");
        $query = "select * from kh";
        $resultKh = mysqli_query($conn,$query);
        ?>
        <table style="width: 100%; padding-left: 12%"  class="kh">
            <tr>
                <td>Mã </td>
                <td>Tên sinh viên</td>
                <td>Số điện thoại</td>
                <td>Mã số sinh viên</td>
                <td>Email</td>
                <td>Password</td>
                <td></td>
            </tr>
            <?php
            while($row = mysqli_fetch_array($resultKh))
            {
                ?>
                <tr>
                    <td><?php echo $row["ma_kh"]; ?></td>
                    <td><?php echo $row["ten_kh"]; ?></td>
                    <td><?php echo $row["sdt"]?></td>
                    <td><?php echo $row["dia_chi"]?></td>
                    <td><?php echo $row["email"]?></td>
                    <td><?php echo $row["pass"]?></td>
                    <td><a href="delete_kh.php?ma=<?php  echo $row["ma_kh"]; ?>" onclick="return confirm('Xóa khách hàng?')"><img src="img/delete1.png" style="width: 35px; height: 35px" ></a></td>
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
