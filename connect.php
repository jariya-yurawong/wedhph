<?php

$servername= 'localhost';
$username = 'root';
$password = '';
$dbname = 'dbemp';

$conn = mysqli_connect($servername,$username,$password,$dbname);

/*if (!$conn){
    die("Connection : failed (เชื่อมต่อฐานข้อมูล ไม่ สำเร็จ)".mysqli_connect_error());
}else{
    echo "Connection : OK (เชื่อมต่อฐานข้อมูลสำเร็จ)";
}*/

mysqli_set_charset($conn,"utf8");

?>