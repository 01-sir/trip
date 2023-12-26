<?php
$uname =  $_POST['uname'] ?? '';
$upass = md5($_POST['upass']) ;
$link = mysqli_connect('localhost','root','','flower');
if(!$link){
    exit(mysqli_connect_error());
}
if(!mysqli_set_charset($link,'utf8')){
    exit(mysqli_error($link));
}

$sql = "INSERT INTO `tb_user` VALUES(NULL,'".$uname."','".$upass."')";
$result = mysqli_query($link,$sql);
if($result){
    echo '<script>alert("注册成功..."),location="login.php"</script>';    
}
mysqli_close($link);
?>