<?php
session_start();
$uname =  $_POST['uname'] ?? '';
$upass =  md5($_POST['upass']);
$link = mysqli_connect('localhost','root','','flower');
if(!$link){
    exit(mysqli_connect_error());
}
if(!mysqli_set_charset($link,'utf8')){
    exit(mysqli_error($link));
}

$sql = 'SELECT `U_pass` FROM `tb_user` WHERE `U_name`=\''.$uname.'\'';
$result = mysqli_query($link,$sql);
$data = mysqli_fetch_row($result);
mysqli_free_result($result);
mysqli_close($link);
    if($data[0] == $upass){
        $_SESSION['uname']=$uname;
        echo '<script>alert("登录成功..."),location="admin.php"</script>';
    }
    else{
        echo '<script>alert("登录失败..."),location="login.php"</script>';
    } 

?>