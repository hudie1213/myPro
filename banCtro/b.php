<!DOCTYPE html>
<html class="no-js" lang="">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>ming</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="css/basic.css">
</head>

<body>
    <video style="height: 100%;" autoplay muted loop class="bj_vid">
        <source src="images/bj.mp4">
    </video>

    <div class="page">
        <div class="menu">
            <div style="height: 100px;width: 100%;">

            </div>
            <ul>
                <li>基本信息</li>
                <li>小程序首页</li>
                <li>小程序资讯</li>
            </ul>
        </div>
        <div class="ctrol">
            <div class="basic">
                <h1 class="tit">轮播图管理系统</h1>
                <div class="butctro">
                    <button onclick="d()">增加一个轮播图</button>
                    <button onclick="s()">减少一个轮播图</button>
                </div>
                <form id="banform" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post">
                    <div class="inp"></div>
                    <input type='submit' class='t' value='提交'>
                </form>
            </div>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
        crossorigin="anonymous"></script>
    <!--<script>-->
    <!--window.jQuery || document.write('<script src="js/vendor/jquery-3.3.1.min.js"><\/script>')-->
    <!--</script>-->
    <script src="js/basic.js"></script>
    <script>
        <?php
    $imgUrl1 = $_POST["imgUrl1"];
    $imgNav1 = $_POST["imgNav1"];
    $imgUrl2 = $_POST["imgUrl2"];
    $imgNav2 = $_POST["imgNav2"];
    $imgUrl3 = $_POST["imgUrl3"];
    $imgNav3 = $_POST["imgNav3"];
    $imgUrl4 = $_POST["imgUrl4"];
    $imgNav4 = $_POST["imgNav4"];
    $imgUrl5 = $_POST["imgUrl5"];
    $imgNav5 = $_POST["imgNav5"];
    $imgUrl6 = $_POST["imgUrl6"];
    $imgNav6 = $_POST["imgNav6"];
    $conn = mysqli_connect("localhost", "root", "root", "mypro");
    $imgUrl1 = isset($_POST["imgUrl1"]) ? $_POST['imgUrl1'] : '';
    $imgNav1 = isset($_POST["imgNav1"]) ? $_POST["imgNav1"] : '';
    $imgUrl2 = isset($_POST["imgUrl2"]) ? $_POST["imgUrl2"] : '';
    $imgNav2 = isset($_POST["imgNav2"]) ? $_POST["imgNav2"] : '';
    $imgUrl3 = isset($_POST["imgUrl3"]) ? $_POST["imgUrl3"] : '';
    $imgNav3 = isset($_POST["imgNav3"]) ? $_POST["imgNav3"] : '';
    $imgUrl4 = isset($_POST["imgUrl4"]) ? $_POST['imgUrl4'] : '';
    $imgNav4 = isset($_POST["imgNav4"]) ? $_POST["imgNav4"] : '';
    $imgUrl5 = isset($_POST["imgUrl5"]) ? $_POST["imgUrl5"] : '';
    $imgNav5 = isset($_POST["imgNav5"]) ? $_POST["imgNav5"] : '';
    $imgUrl6 = isset($_POST["imgUrl6"]) ? $_POST["imgUrl6"] : '';
    $imgNav6 = isset($_POST["imgNav6"]) ? $_POST["imgNav6"] : '';
    $data = '';
    if ($imgUrl1 != '' and $imgNav1 != '') {
        $data .= "('" . $imgUrl1 . "','" . $imgNav1 . "')";
    }
    if ($imgUrl2 != '' and $imgNav2 != '') {
        $data .= ",('" . $imgUrl2 . "','" . $imgNav2 . "')";
    }
    if ($imgUrl3 != '' and $imgNav3 != '') {
        $data .= ",('" . $imgUrl3 . "','" . $imgNav3 . "')";
    }
    if ($imgUrl4 != '' and $imgNav4 != '') {
        $data .= ",('" . $imgUrl4 . "','" . $imgNav4 . "')";
    }
    if ($imgUrl5 != '' and $imgNav5 != '') {
        $data .= ",('" . $imgUrl5 . "','" . $imgNav5 . "')";
    }
    if ($imgUrl6 != '' and $imgNav6 != '') {
        $data .= ",('" . $imgUrl6 . "','" . $imgNav6 . "')";
    }
    if ($data == '') {
    }else{
        mysqli_query($conn, "DELETE FROM img");
    }
    $sql1 = "insert into img (Img,lj) VALUES $data";
    $re1 = mysqli_query($conn, $sql1);
    $q = "SELECT * FROM img";
    ?>
    </script>
</body>

</html>
