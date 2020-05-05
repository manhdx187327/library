<?php
    $ten_kh = $_POST['ten_kh'];
    $email = $_POST['email'];
    $pass = $_POST['pass'];
    $sdt = $_POST['sdt'];
    $dia_chi = $_POST['dia_chi'];

    require_once 'connect.php';

    $query = "SELECT * FROM kh WHERE email = '$email' and pass = '$pass'";
    $array_kh = mysqli_query($connect, $query);
    $khach_hang_count = mysqli_num_rows($array_kh);

    if($khach_hang_count == 0){
        $query = "INSERT INTO kh (ten_kh, email, pass, sdt, dia_chi) values ('$ten_kh', '$email', '$pass', '$sdt', '$dia_chi')";
        mysqli_query($connect, $query);

        require_once 'disconnect.php';

        session_start();
        $_SESSION['email'] = $email;
        $_SESSION['pass'] = $pass;

        header("location:index.php");
    }
    else{
        header("location:index.php?error=Đăng nhập thất bại!");
    }

