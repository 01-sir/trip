
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>花之语花店</title>
    <link rel="stylesheet" href="http://at.alicdn.com/t/c/font_3840031_k5evuet6i9l.css">
    <link rel="stylesheet" href="./css/index.css">
    <link rel="stylesheet" href="./css/hoot.css">
</head>
<body>
<div class="main">
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
            <!-- 登录/注册 -->
           <div class="reg">
            <a href="login.php">登录</a>
            <a href="reg.php">注册</a>
           </div>
        </div>
        <!--banner区  -->
        <div class="main-banner">
            <img src="./images/banner1.jpg" alt="">
            <div class="bannerLeft">
                <i class="iconfont icon-jiantou" id="left"></i>
            </div>
            <div class="bannerRight">
                <i class="iconfont icon-a-jiantou1" id="right"></i>
            </div>
        </div>
        <!-- 内容区 -->
        <div class="container">
            <div id="gray"  class="peopleShip">人气单品</div>
            <div class="peoImg"> 
                <img src="./images/0.jpeg" alt="">
            </div>
            <div class="peoImg">
                <img src="./images/1.jpeg" alt="">
            </div>
            <div class="peoImg">
                <img src="./images/2.jpeg" alt="">
            </div>
            <div class="peoImg">
                <img src="./images/3.jpeg" alt="">
            </div>
            <div class="peoImg">
                <img src="./images/4.jpeg" alt="">
            </div>
            <div id="gray" class="hotBiby">热销宝贝</div>
            <div class="leftFower"><img src="./images/9.jpeg" alt=""></div>
            <div class="rightFower">
                <div class="Fitems active">送男神</div>
                <div class="Fitems">送闺蜜</div>
                <div class="Fitems">送女友</div>
                <div class="Fitems">表白</div>
                <div class="Fitems"></div>
                <div id="fitemsImg">
                    <img class="fitemsImg" src="./images/5.jpeg" alt="">
                    <img class="fitemsImg" src="./images/6.jpeg" alt="">
                    <img class="fitemsImg" src="./images/7.jpeg" alt="">
                    <img class="fitemsImg" src="./images/8.jpeg" alt="">
                </div>
            </div>
        </div>
        <!-- footer -->
        <div class="footer">
            <div class="footerItems">
                <h2 class="title">新手上路</h2>
                <ul>
                    <li><a href="">购物指南</a></li>
                    <li><a href="">会员介绍</a></li>
                    <li><a href="">发票制度</a> </li>
                    <li><a href="">常见问题</a> </li>
                    <li><a href="">在线客服</a></li>
                </ul>
            </div>
            <div class="footerItems">
                <h2 class="title">支付方式</h2>
                <ul>
                    <li><a href="">网银支付</a></li>
                    <li><a href="">快捷支付</a></li>
                    <li><a href="">分期支付</a> </li>
                    <li><a href="">货到支付</a> </li>
                    <li><a href="">门店支付</a> </li>
                </ul>
            </div>
            <div class="footerItems">
                <h2 class="title">物流配送</h2>
                <ul>
                    <li><a href="">快递配送</a> </li>
                    <li><a href="">门店自提</a> </li>
                    <li><a href="">白城半日达</a> </li>
                    <li><a href="">配送范围及时间</a> </li>
                    <li><a href="">配送状态查询</a> </li>
                </ul>
            </div>
            <div class="footerItems">
                <h2 class="title">售后服务</h2>
                <ul>
                    <li><a href="">咨询与投诉</a> </li>
                    <li><a href="">购买延保服务</a></li>
                    <li><a href="">退换货申请</a> </li>
                    <li><a href="">退换货政策</a> </li>
                </ul>
            </div>
        </div>
    </div>
    <!-- <table  class="main1">
        <tr>
            <td style="background-color: #013274;">
                <img src="images/banner.jpg" alt="banner">
            </td>
        </tr>
        <tr>
            <td>
                <table class="nav">
                    <tr>
                        <td height="36px" ><a href="index.php">新闻首页</a></td>
                        <td ><a href="news1.php">时政要闻</a></td>
                        <td ><a href="news2.php">校园新闻</a></td>
                        <td ><a href="news3.php">体育新闻</a></td>
                        <td ><a href="login.php">用户登录</a></td>
                        <td ><a href="admin.php">新闻管理</a></td>
                    </tr>
                </table>
            </td>
        </tr>
        <tr>
            <td>
                <table class="grid1">
                    <tr>
                        <td>
                            <h3><img src="images/news.png" alt="tp"> 新闻速递</h3> 
                            <ul>
                            <?php foreach($data1 as $l){ ?>                                
                                <li><a href="detail.php?id=<?=$l['id'] ?>"> <?=$l['N_title'] ?></a></li>
                            <?php }?>
                            </ul>
                        </td>
                        <td>
                            <h3><img src="images/news.png" alt="tp">热点新闻</h3> 
                            <ul>
                            <?php foreach($data2 as $l){ ?>                                
                                <li><a href="detail.php?id=<?=$l['id'] ?>"> <?=$l['N_title'] ?></a></li>
                            <?php }?>
                            </ul>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <h3><img src="images/news.png" alt="tp">时政要闻</h3> 
                            <ul>
                            <?php foreach($data3 as $l){ ?>                                
                                <li><a href="detail.php?id=<?=$l['id'] ?>"> <?=$l['N_title'] ?></a></li>
                            <?php }?>
                            </ul>
                        </td>
                        <td>
                            <h3><img src="images/news.png" alt="tp">校园新闻</h3> 
                            <ul>
                            <?php foreach($data4 as $l){ ?>                                
                                <li><a href="detail.php?id=<?=$l['id'] ?>"> <?=$l['N_title'] ?></a></li>
                            <?php }?>
                            </ul>
                        </td>
                    </tr>
                </table>
            </td>
        </tr>
        <tr>
            <td class="footer">
                &copy; 版权归 理大新闻网 所有
            </td>
        </tr>
    </table>     -->
    <script src="./js/index.js"></script>
</body>
</html>