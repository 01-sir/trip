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
$sql = "SELECT `id`,`N_photo` FROM `tb_flower` ORDER BY `id` DESC LIMIT 0,20";
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
        <div class="kild">
            <img src="./images/banner7.jpeg" alt="">
            <!-- 图片下面的部分 -->
            <div class="kild_items">
                <div class="item">
                    <span class = "i_nav"><i class="iconfont icon-kongzhonghuayuan"></i></span>
                    <span id="i_title">鲜花品种</span>
                    <span id="i_con">至少有十种一上的品种可以供你选择</span>
                </div>
                <div class="item" id="click">
                    <span class = "i_nav" id="aixin"><i class="iconfont icon-aixin1"></i></span>
                    <span id="i_title" class="aixin">点击爱心</span>
                    <span id="i_aixin">134</span>
                </div>
                <div class="item sousuo">
                    <input type="text" placeholder="请输入花名" class="input">
                    <span class = "i_nav"><i class="iconfont icon-sousuo"></i></span>
                    <span id="i_title">寻找种类</span>
                    <span id="i_con">至少有十种一上的品种可以供你选择</span>
                </div>
            </div>
            <!-- 种类 -->
            <div class="kild_type">
                <div class="type_top">种类</div>
                <div class="type_nav">
                    <ul class="type_ul">
                        <li class="active">
                            <a href="javascript:;">牡丹</a>
                            <ul class="type_img  block" id="type_img">
                                <?php foreach($data as $sl) { ?>
                                <li>
                                    <img src="<?=$sl['N_photo']?>" alt="">
                                </li>
                                <?php }?>
                            </ul>
                        </li>
                        <li>
                            <a href="javascript:;">玫瑰</a>
                            <ul class="type_img" id="type_img">
                            <?php foreach($data as $sl) { ?>
                                <li>
                                    <img src="<?=$sl['N_photo']?>" alt="">
                                </li>
                                <?php }?>
                            </ul>
                        </li>
                        <li>
                            <a href="javascript:;">百合</a>
                            <ul class="type_img" id="type_img">
                            <?php foreach($data as $sl) { ?>
                                <li>
                                    <img src="<?=$sl['N_photo']?>" alt="">
                                </li>
                                <?php }?>
                            </ul>
                        </li>
                        <li>
                            <a href="javascript:;">薰衣草</a>
                            <ul class="type_img" id="type_img">
                            <?php foreach($data as $sl) { ?>
                                <li>
                                    <img src="<?=$sl['N_photo']?>" alt="">
                                </li>
                                <?php }?>
                            </ul>
                        </li>
                        <li>
                            <a href="javascript:;">向日葵</a>
                            <ul class="type_img" id="type_img">
                            <?php foreach($data as $sl) { ?>
                                <li>
                                    <img src="<?=$sl['N_photo']?>" alt="">
                                </li>
                                <?php }?>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- 结束 -->
    <!-- js部分 -->
    <script src="./js/flower1.js"></script>
</body>
</html>