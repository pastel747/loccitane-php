<?php

// 사용자가 이 페이지에 도달햇는지 확인해야한다. 하지만 이 페이지에 가서는 안된다.

if( isset($_POST['summit'])){
    echo "it works";
}
else {
    header('location: ../join.php');
    // 되돌려 보내기
}
