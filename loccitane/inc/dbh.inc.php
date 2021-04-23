<!-- 데이터 베이스 핸들러 역할을 하는 php이다 -->
<?php

$serverName = "lacalhost";
$dBuserName = "root";
$dBpassword = "ny99ny";
$dBname = "loccitane";

$conn = mysqli_connect( $serverName, $dBuserName, $dBpassword, $dBname );
// mysqli가 mysql의 최신형버전
if(!$conn){
    die('connection failed:' . mysqli_connect_error() );
}
