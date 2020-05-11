<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $database = "snow";

    $connect = mysqli_connect($servername, $username, $password, $database);
    mysqli_set_charset($connect , 'utf8');