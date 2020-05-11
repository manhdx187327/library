<?php
    session_start();
    $ma_sp = $_GET['ma'];
    $thay_doi = $_GET['thay_doi'];

    switch($thay_doi){
        case 'giam':
            if($_SESSION['gio_hang'][$ma_sp]['so_luong'] == 1){
                unset($_SESSION['gio_hang'][$ma_sp]);
            }
            else{
                $_SESSION['gio_hang'][$ma_sp]['so_luong']--;
            }
            break;
        case 'tang':
            $_SESSION['gio_hang'][$ma_sp]['so_luong']++;
            break;
    }
    header("location:view_gio_hang.php");