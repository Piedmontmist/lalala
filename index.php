<?php
    $connect = mysqli_connect("127.0.0.1","root","in10years", "course_task");
    if(!$connect){
        echo "<h1>数据库连接失败</h1>";
    } else {
        echo "<h1>数据库连接成功</h1>";
    }
?>