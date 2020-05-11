<?php
    session_start();
    // print_r($_SESSION);die();
    if(isset($_SESSION['ma_kh'])){

        require_once 'connect.php';

        $ma_kh = $_SESSION['ma_kh'];

        $sql = "SELECT * FROM kh WHERE ma_kh = $ma_kh";
        $array_kh = mysqli_query($connect, $sql);
        $kh = mysqli_fetch_array($array_kh);

        $ten_nguoi_nhan = $kh['ten_kh'];
        $sdt_nguoi_nhan = $kh['sdt'];

        $thoi_gian_mua = date("Y-m-d");
        $ngay_tra_sach = date('Y-m-d', strtotime($thoi_gian_mua. ' + 7 days'));


        $sql = "INSERT INTO hoa_don (ma_khach_hang, thoi_gian_mua, ten_nguoi_nhan, sdt_nguoi_nhan, ngay_tra_sach) 
                VALUES ('$ma_kh','$thoi_gian_mua', '$ten_nguoi_nhan', '$sdt_nguoi_nhan', '$ngay_tra_sach')";
        mysqli_query($connect, $sql);
        $sql = "SELECT max(ma_hoa_don) FROM hoa_don";
        $array_sp = mysqli_query($connect, $sql);
        $sp = mysqli_fetch_array($array_sp);

        $ma_hoa_don = $sp['max(ma_hoa_don)'];

        $gio_hang = $_SESSION['gio_hang'];
        foreach($gio_hang as $ma_san_pham => $san_pham){
            $gia = $san_pham['gia'];
            $so_luong = $san_pham['so_luong'];
            $sql = "INSERT INTO hoa_don_chi_tiet (ma_hoa_don, ma_sp, so_luong, gia) VALUES ('$ma_hoa_don', '$ma_san_pham', '$so_luong', '$gia')";
//            die($sql);
            mysqli_query($connect, $sql);
        }
        unset($_SESSION['gio_hang']);

        require_once 'disconnect.php';
        header("location:index.php");
    }