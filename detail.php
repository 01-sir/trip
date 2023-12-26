<!-- <?php
$id = $_GET['id'];
// 连接数据库
$link = mysqli_connect('localhost', 'root', '', 'flower', '3306');
if (!$link) {
     exit(mysqli_connect_error());
}
// 设置字符集
if (!mysqli_set_charset($link, 'utf8')) {
     exit(mysqli_error($link));
}
$sql = "UPDATE  `tb_flower` SET `N_click`=`N_click`+1 WHERE `id`=".$id;
// 执行查询操作
$result = mysqli_query($link, $sql);
if (!$result) {
    echo '<script>alert("无效id..."),location="index.php"</script>';
}
$sql = "SELECT * FROM `tb_flower` WHERE `id`=".$id;
// 执行查询操作
$result = mysqli_query($link, $sql);
if (!$result) {
    exit(mysqli_error($link));
}
$data = mysqli_fetch_all($result, MYSQLI_ASSOC);
mysqli_free_result($result);
mysqli_close($link);
?>
