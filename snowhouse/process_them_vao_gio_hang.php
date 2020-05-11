<?php
    session_start();

    $ma_sp = $_GET['ma'];
    require_once 'connect.php';

    $sql = "SELECT * FROM sp WHERE ma_sp = $ma_sp";
//    die($sql);
    $array_sp = mysqli_query($connect, $sql);
    $sp = mysqli_fetch_array($array_sp);

    if(isset($_SESSION) && $_SESSION['gio_hang'][$ma_sp]['so_luong'] < 10){
        if(isset($_SESSION['gio_hang'][$ma_sp])){
            $_SESSION['gio_hang'][$ma_sp]['so_luong']++;
        }
        else{
            $sql = "SELECT * FROM sp WHERE ma_sp = $ma_sp";
            $array_sp = mysqli_query($connect, $sql);
            $sp = mysqli_fetch_array($array_sp);
            $_SESSION['gio_hang'][$ma_sp]['so_luong'] = 1;
            $_SESSION['gio_hang'][$ma_sp]['ten_sp'] = $sp['ten_sp'];
            $_SESSION['gio_hang'][$ma_sp]['gia'] = $sp['gia'];
            $_SESSION['gio_hang'][$ma_sp]['img'] = $sp['img'];
        }
    }
    require_once 'disconnect.php';
    header("location:index.php");