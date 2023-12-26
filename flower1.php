<?php
// 连接数据库
$link = mysqli_connect('localhost', 'root', '', 'flower', '3306');
if (!$link) {
     exit(mysqli_connect_error());
}
// 设置字符集
if (!mysqli_set_charset($link, 'utf8')) {
     exit(mysqli_error($link));
}
$sql = "SELECT `id`,`N_title`,`N_type`,`N_content`,`N_photo` FROM `tb_flower` ORDER BY `id` DESC LIMIT 0,20";
// 执行查询操作
$result = mysqli_query($link, $sql);
if (!$result) {
    exit(mysqli_error($link));
}
$data = mysqli_fetch_all($result, MYSQLI_ASSOC);
mysqli_free_result($result);
mysqli_close($link);
?>
<!DOCTYPE html>
<html lang="en">
    <meta charset="UT<head>
F-8">
    <title>花之语花店</title>
    <link rel="stylesheet" href="http://at.alicdn.com/t/c/font_3840031_yn8fwp6zt7f.css">
    <link rel="stylesheet" href="./css/flower1.css">
    <link rel="stylesheet" href="./css/index.css">
</head>
<body>
    <!-- 容器 -->
    <!-- 鲜花页 -->
    <div class="flowerPage">
        <!-- 导航栏 -->
        <div class="main-nav">
            <!-- logo区 -->
            <img src="" class="main-logo" alt="">
            <!-- nav -->
            <ul class="nav">
                <li><a href="index.php">首页</a></li>
                <li><a href="flower1.php">物语</a></li>
                <li><a href="flower2.php">品种</a></li>
                <li><a href="flower3.php">热卖专区</a></li>
                <li><a href="flower4.php">联系</a></li>
                <li><a href="admin.php">上架后台</a></li>
            </ul>
        </div>
        <!-- banner开始 -->
        <div class="F_Languange">
            <div class="F_lang">
                <h1 class="title">花·语</h1>
                <p class="English">Flower·Language</p>
            </div>

            <div class="F_round">
                <!-- 左箭头 -->
                <i class="iconfont icon-jiantou_xiangzuoliangci"></i>
                <div class="F_item F_1">
                    <img src="<?=$data[0]['N_photo'] ?>" alt="">
                    <span id="tem-T"><?=$data[0]['N_title'] ?></span>
                </div>
                <div class="F_item F_2">
                    <img src="<?=$data[1]['N_photo'] ?>" alt="">
                    <span id="tem-T"><?=$data[1]['N_title'] ?></span>
                </div>
                <div class="F_item F_3">
                    <img src="<?=$data[2]['N_photo'] ?>" alt="">
                    <span id="tem-T"><?=$data[2]['N_title'] ?></span>
                </div>
                <i class="iconfont icon-jiantou_xiangyouliangci"> </i>
            </div>
            <div class="F_container">
                <?=$data[1]['N_content'] ?>
            </div>
        </div>

        <!-- banner结束 -->
        <!-- way -->
        <div class="F_way">
            <div class="consevre">
                <h3>鲜花养护</h3>
                <p>Fower consevre</p>
            </div>
            <!-- 列表 -->
            <div class="wayList">
                <ul class="L_ul">
                    <li class="listItem">
                        <img src="<?=$data[4]['N_photo'] ?>" alt="">
                        <h2><?=$data[4]['N_title'] ?>·养护</h2>
                        <p class="Litem"><?=$data[4]['N_content'] ?></p>
                    </li>
                    <li class="listItem">
                        <img src="<?=$data[5]['N_photo'] ?>" alt="">
                        <h2><?=$data[5]['N_title'] ?>·养护</h2>
                        <p class="Litem"><?=$data[6]['N_content'] ?></p>
                    </li>
                    <li class="listItem">
                        <img src="<?=$data[6]['N_photo'] ?>" alt="">
                        <h2><?=$data[6]['N_title'] ?>·养护</h2>
                        <p class="Litem"><?=$data[6]['N_content'] ?></p>
                    </li>
                </ul>
            </div>
        </div>
        <!-- 页脚 -->
        <div class="F_footer">
        &copy; 版权归 花之语花店 所有
        </div>
    </div>
    <!-- 结束 -->
    <!-- js部分 -->
    <script src="./js/flower1.js"></script>
</body>
</html>