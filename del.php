<?php
session_start();
if(!isset($_SESSION['uname']))
{
    echo "<script>alert('请登录！'),location='login.php'</script>"; 
}
$id =  $_GET['id'] ?? '';
$link = mysqli_connect('localhost','root','','flower');
if(!$link){
    exit(mysqli_connect_error());
}
if(!mysqli_set_charset($link,'utf8')){
    exit(mysqli_error($link));
}

$sql = 'DELETE FROM `tb_user` WHERE ID='.$id;
$result = mysqli_query($link,$sql);
if($result){
    echo '<script>alert("成功删除..."),location="useredit.php"</script>';
}
else{
    echo '<script>alert("添加失败..."),location="useredit.php"</script>';
}
mysqli_close($link);
?>