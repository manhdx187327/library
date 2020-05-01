<?php
    $email = $_POST['email'];
    $pass = $_POST['pass'];

    require_once 'connect.php';

    $query = "SELECT * FROM kh WHERE email = '$email' and pass = '$pass'";
    $array_kh = mysqli_query($connect, $query);
    $khach_hang_count = mysqli_num_rows($array_kh);

    require_once 'disconnect.php';

    if($khach_hang_count == 1){
        session_start();
        $khach_hang = mysqli_fetch_array($array_kh);
        $_SESSION['ma_kh'] = $khach_hang['ma_kh'];
        $_SESSION['ten_kh'] = $khach_hang['ten_kh'];
        $_SESSION['email'] = $khach_hang['email'];
        header('location:index.php');
    }
    else{
        header('location:index.php?error=Đăng nhập thất bại');
    }