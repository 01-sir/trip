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
$sql = "SELECT `id`,`N_photo`,`N_content`,`N_title` FROM `tb_flower` ORDER BY `id` DESC LIMIT 0,20";
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
    <link rel="stylesheet" href="http://at.alicdn.com/t/c/font_4336145_cwk9hy31j9.css">
    <link rel="stylesheet" href="./css/index.css">
    <link rel="stylesheet" href="./css/phone.css">
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
        <div class="phoneMain">
            <div class="phone-banner">
                <div class="contactUs">
                    <a href="./chat/login.html" target="_black"><h1>联系我们</h1></a>
                    <p>Contact Us</p>
                </div>
                <img src="<?=$data[2]['N_photo'] ?>" alt="">
            </div>
            <div class="phone-map">
                <div class="map-tilte">联系方式/Contact</div>
                <div class="mapTel">
                    <div class="tel-left">
                        <div class="item">
                            <span>联系人：程小姐</span>
                            <span>联系电话：0471-56254546</span>
                        </div>
                        <div class="item">
                            <span>传真：0471-14784567</span>
                            <span>邮箱：flower@mail.com</span>
                        </div>
                        <div class="item">
                            <span>店铺地址：大理大学</span>
                            <span>太和街道9-17号区300米</span>
                        </div>
                    </div>
                    <div class="tel-right">
                    <div>
                         <iframe width="800" height="400" frameborder="0" src="https://cn.bing.com/maps/embed?h=400&w=800&cp=n8kt2qsbhtb0&lvl=12&typ=d&sty=r&src=SHELL&FORM=MBEDV8" scrolling="no">
                         </iframe>
                         <div style="white-space: nowrap; text-align: center; width: 800px; padding: 6px 0;">
                            <a id="largeMapLink" target="_blank" href="https://cn.bing.com/maps?cp=n8kt2qsbhtb0&amp;sty=r&amp;lvl=12&amp;FORM=MBEDLD">查看放大的地图</a> &nbsp; | &nbsp;
                            <a id="dirMapLink" target="_blank" href="https://cn.bing.com/maps/directions?cp=n8kt2qsbhtb0&amp;sty=r&amp;lvl=12&amp;rtp=~pos.n8kt2q_sbhtb0____&amp;FORM=MBEDLD">获取路线</a>
                        </div>
                    </div>
                    </div>
                </div>
            </div>
            <div class="icon">
                <i class="iconfont icon-huahuabanxiaohonghua" style="font-size: 24px;color: #fff;"></i>
                <span>花12年的时光，我们只做一件事</span>
                <span id="icon-flew"><a href="">更多鲜花</a></span>
            </div>
            <div>
            </div>
        </div>

    <script src="./js/flower1.js"></script>
</body>
</html>