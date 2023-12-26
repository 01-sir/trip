<?php
session_start();
if(!isset($_SESSION['uname']))
{
    echo "<script>alert('请登录！'),location='login.php'</script>"; 
}
// 连接数据库
$link = mysqli_connect('localhost', 'root', '', 'flower', '3306');
if (!$link) {
     exit(mysqli_connect_error());
}
// 设置字符集
if (!mysqli_set_charset($link, 'utf8')) {
     exit(mysqli_error($link));
}
$sql = "SELECT `id`,`N_title`,`N_type`,`N_author`,`N_photo` FROM `tb_flower` ORDER BY `id` DESC LIMIT 0,20";
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
<head>
    <meta charset="UTF-8">
    <title>花之语花店</title>
    <link rel="stylesheet" href="./css/rest.css">
    <link rel="stylesheet" href="http://at.alicdn.com/t/c/font_3840031_odwdkxqbwbi.css">
</head>
<body>
    <div class="restContainer">
        <i class="iconfont icon-tiaojianpanduan" ></i>
        <h1>后台重选</h1>
        <!-- 添加的内容区 -->
        <div class="restImg">
            <ul class="rest_ul">
            <?php foreach($data as $l){ ?>  
                <li>
                    <!-- 图片区 -->
                    <img src="<?=$l['N_photo'] ?>" alt="" id="typeImg">
                    <!-- 标题 -->
                    <div class="rest_T"><?=$l['N_title'] ?></div>
                    <!-- 类型 -->
                    <div class="rest_Type">[<?=$l['N_type'] ?>] </div>
                    <div class="link">
                    <a href="delete.php?id=<?=$l['id'] ?>" id="delte">删除</a>
                    <a href="modify.php?id=<?=$l['id'] ?>" id="rest">修改</a>
                    </div>
                </li>
                <?php }?>
            </ul>
        </div>
    </div>

        <ul>
                                      
            <li>   
            
            【<?=$l['N_photo'] ?>】
        </li>
        
        </ul>
</body>
</html>