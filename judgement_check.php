<?php
    session_start();
    $n = $_SESSION['name'];
    $film = $_SESSION['current_film_id'];
    if (isset($_POST["submit"])) {
        $comment = $_POST["comment"];
        $con = mysqli_connect("127.0.0.1", "root", "in10years", "course_task");
        if (!$con) {
            // echo "<script>alert('数据库连接失败'); history.go(-1);</script>";
        }
        $sql2 = mysqli_query($con, "select * from user_list where user_name = '$n'");
        $row = mysqli_fetch_array($sql2);
        $u_id = $row['user_id'];
        //echo $film;
        //echo $u_id;
        //echo date("Y-m-d");
        //echo date("H:i:s");
        //echo $comment;


        //$sql = "INSERT INTO `judgement` (`jdmt_id`, `film_id`, `user_id`, `judge_time_d`, `judge_time_t`, `Info`) VALUES ('','$current_film_id', '$u_id','".date("Y-m-d")."','".date("H:i:s")."', '$comment')";
        //$sqll = "INSERT INTO `judgement` (`jdmt_id`, `film_id`, `user_id`, `judge_time_d`, `judge_time_t`, `Info`) VALUES ('', '2', '5', '2017-12-15', '09:15:24', 'hahahahaha')";
        $sql = "INSERT INTO `judgement` (`judge_id`, `film_id`, `judge_time`, `info`, `user_id`) VALUES (NULL, '$film', '" . date("Y-m-d H:i:sa") . "', '$comment', '$u_id')";
        //      echo "<br>";
        //      echo $sql;        
        $result = mysqli_query($con, $sql);
        //$arr = array();
        //while($rs = mysql_fetch_assoc($result)){ $arr[]=$rs; }
        //print_r($arr);
    }
    header("refresh:3;url=film.php?film=$film");
    ?>
<!DOCTYPE html>
<html>
<meta charset="utf8">
<style>
    .websitetitle {
        background-color: CornflowerBlue;
        color: white;
        margin: 20px;
        padding: 20px;
    }

    .login {
        background-color: Lavender;
        color: black;
        margin: 20px;
        padding: 20px;
    }
</style>

<body>

    <div class="websitetitle">
        <h2>libilibi!</h2>
        <p>
            libilibi是一个电影论坛网站，你可以在这里看到最新的电影资讯，发帖子吐槽你的感受，
            欢迎互动啊兄dei~
        </p>
    </div>
    
    <!-- <?php header("refresh:3;url=film.php?film=$film");  ?> -->







    <div class="login">
        <center>
            <h2>操作成功！</h2>
            <p>
                大爷默数3秒，马上回到刚才的界面～
            </p>
            <!-- <meta http-equiv="Refresh" content="2; url=posts.php"> -->

    </div>

    <!-- <script>
    const meta = document.createElement("meta");
    meta.httpEquiv = "Refresh";
    meta.content = 

</script> -->