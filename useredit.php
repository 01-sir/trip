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
$sql = "SELECT * FROM `tb_user` ORDER BY `id` DESC LIMIT 0,20";
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
    <link rel="stylesheet" href="./css/addflower.css">
</head>
<body>
    <div class="useTop">
        <h3 id="useTitle">用户管理</h3> 
        <ul class="use_ul">
        <?php foreach($data as $l){ ?>                                
            <li>
                用户名： <?=$l['U_name'] ?>
                <a href="del.php?id=<?=$l['id'] ?>">删除</a> 
            </li>
        <?php }?>
        </ul>
    </div

</body>
</html>