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
$sql = "SELECT `id`,`N_photo`,`N_date`,`N_content`,`N_title` FROM `tb_flower` ORDER BY `id` DESC LIMIT 0,20";
// 执行查询操作
$result = mysqli_query($link, $sql);
if (!$result) {
    exit(mysqli_error($link));
}
$data = mysqli_fetch_all($result, MYSQLI_ASSOC);
mysqli_free_result($result);
// 关闭数据库
mysqli_close($link);
?>
<!DOCTYPE html> 
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>花之语花店</title>
    <link rel="stylesheet" href="http://at.alicdn.com/t/c/font_4336145_zvkyojm452s.css">
    <link rel="stylesheet" href="http://at.alicdn.com/t/c/font_3840031_yn8fwp6zt7f.css">
    <link rel="stylesheet" href="./css/flower2.css">
    <link rel="stylesheet" href="./css/index.css">
    <link rel="stylesheet" href="./css/hoot.css">
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
        <!-- 内容区 -->
        <div class="hotMain">
            <div class="hot_banner">
                <img src="<?=$data[0]['N_photo'] ?>" alt="">
            </div>
            <div class="hot_black">
                <?=$data[0]['N_content'] ?>
            </div>
            <!--flower  -->
            <div class="hot_content">
                <div class="hot_left">
                    <h1>FLOWER</h1>
                    <p class="photo">花卉咨询</p>
                    <!-- 图片展示区 -->
                    <div class="hotImg">
                        <div class="hotItem">
                            <img id="img" src="<?=$data[3]['N_photo'] ?>?>" alt="">
                            <h2><?=$data[3]['N_title'] ?></h2>
                            <p class="day"><?=$data[3]['N_date'] ?></p>
                        </div>
                        <div class="hotItem">
                            <img id="img" src="<?=$data[4]['N_photo'] ?>?>" alt="">
                            <h2><?=$data[4]['N_title'] ?></h2>
                            <p class="day"><?=$data[4]['N_date'] ?></p>
                        </div>
                        <div class="hotItem">
                            <img id="img" src="<?=$data[5]['N_photo'] ?>?>" alt="">
                            <h2><?=$data[5]['N_title'] ?></h2>
                            <p class="day"><?=$data[5]['N_date'] ?></p>
                        </div>
                        <div class="hotItem">
                            <img id="img" src="<?=$data[6]['N_photo'] ?>?>" alt="">
                            <h2><?=$data[6]['N_title'] ?></h2>
                            <p class="day"><?=$data[6]['N_date'] ?></p>
                        </div>
                        <div class="hotItem">
                            <img id="img" src="<?=$data[7]['N_photo'] ?>?>" alt="">
                            <h2><?=$data[7]['N_title'] ?></h2>
                            <p class="day"><?=$data[7]['N_date'] ?></p>
                        </div>
                        <div class="hotItem">
                            <img id="img" src="<?=$data[2]['N_photo'] ?>?>" alt="">
                            <h2><?=$data[2]['N_title'] ?></h2>
                            <p class="day"><?=$data[2]['N_date'] ?></p>
                        </div>
                    </div>
                </div>
                <div class="hot_right">
                    <h1>NEWS</h1>
                    <p class="new">新闻动态</p>
                    <div class="hot_news">
                        <ul>
                        <?php foreach($data as $sl) { ?>
                            <li>
                                <span>[商城动态]</span>
                                <a id="link" href="javasricpt:;"><?=$sl['N_content']?></a>
                                <a href="javasricpt:;"><?=$sl['N_date']?>></a>
                            </li>
                            <?php } ?>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="hot_gray">
                <div class="gray-title">
                    <p>乘着芬芳的清风，牵着四季春秋，一花一世界，一人一心思。</p>
                    <p>在我的世界里，装的全都是你</p>
                    <p>LOVE FLOWERS GAVE THE ONLY YOU</p>
                </div>
                <div class="gray-img">
                    <img src="./images/nuts.jpg" alt="" class="imgItem">
                    <img src="./images/nuts1.jpg" alt="" class="imgItem">
                    <img src="./images/tues2.jpeg" alt="" class="imgItem">
                </div>
            </div>
            <!-- 页脚 -->
            <div style="margin-top: 10px; width: 100%; height:100px;  background-image: url(./images/banner8.jpg);  background-repeat: no-repeat; background-size: 100%;">      
            </div>
        </div>
    <script src="./js/flower1.js"></script>
</body>
</html>