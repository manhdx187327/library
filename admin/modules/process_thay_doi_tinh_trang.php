<?php
    require_once 'include/open.php';
    if(isset($_GET['kieu'])){
        $kieu = $_GET['kieu'];
        switch($kieu){
            case 'duyet':
                $tinh_trang_hoa_don = 1;
                if(isset($_GET['ma_hoa_don'])){
                    $ma_hoa_don = $_GET['ma_hoa_don'];
                    $query = "UPDATE hoa_don SET tinh_trang_hoa_don = $tinh_trang_hoa_don WHERE ma_hoa_don = $ma_hoa_don";
                    mysqli_query($conn, $query);
                }
                break;
            case 'huy':
                $tinh_trang_hoa_don = 2;
                if(isset($_GET['ma_hoa_don'])){
                    $ma_hoa_don = $_GET['ma_hoa_don'];
                    $query = "UPDATE hoa_don SET tinh_trang_hoa_don = $tinh_trang_hoa_don WHERE ma_hoa_don = $ma_hoa_don";
                    mysqli_query($conn, $query);
                }
                break;
        }
    }
    require_once 'include/close.php';
    header("location:donhang.php");