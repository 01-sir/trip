<?php
session_start();
if(isset($_SESSION['uname']))
{
    $username=$_SESSION['uname']; 
}
else{
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
$sql = "SELECT `id`,`N_title`,`N_type` FROM `tb_flower` ORDER BY `id` DESC LIMIT 0,4";
// 执行查询操作
$result = mysqli_query($link, $sql);
if (!$result) {
    exit(mysqli_error($link));
}
$data1 = mysqli_fetch_all($result, MYSQLI_ASSOC);
mysqli_free_result($result);
mysqli_close($link);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>花之语花店</title>
    <!-- <link rel="stylesheet" href="./css/addflower.css"> -->
    <link rel="stylesheet" href="./css/root.css">
</head>
<body>
    <div class="admincontainer" >
        <!-- 头部 -->
        <div class="admin-top" style="margin: 0; padding: 0; box-sizing: border-box;">
            <img src="./images/banner5.jpg" alt="" style="width: 100vw; height:300px; object-fit: cover;" >
        </div>
        <!-- 表格 -->
        <!-- 管理部分 -->
        <div class="coutGray">
            <div class="welcom">
                欢迎你，<?=$username?>!
            </div>
            
            <ul class="root">
                <li><a href="index.php">首页</a></li>
                <li> <a href="addnews.php" target="mainframe">发布花类</a> </li>
                <li> <a href="edit.php" target="mainframe">后台管理</a> </li>
                <li> <a href="useredit.php" target="mainframe">用户管理</a> </li>
            </ul>
            <a href="logout.php" id="loginout">安全退出</a>
        </div>
        <!-- 显示区 -->
        <div class="iframe">
        <iframe src="addnews.php" name="mainframe" frameborder="0" width="100%" height="800px">
        </iframe>
        </div>
</body>
</html>