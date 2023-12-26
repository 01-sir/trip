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

$sql = 'SELECT * FROM `tb_flower` WHERE ID='.$id;
$result = mysqli_query($link,$sql);
if(!$result){
    exit(mysqli_error($link));
}
if($result){
    $data=mysqli_fetch_assoc($result);
    mysqli_free_result($result);
    mysqli_close($link);
}
else{
    mysqli_close($link);
    mysqli_free_result($result);
    echo '<script>alert("无效ID号..."),location="edit.php"</script>';
}


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./css/addflower.css">
    <link rel="stylesheet" href="./editor/themes/default/default.css" />
	<link rel="stylesheet" href="./editor/plugins/code/prettify.css" />
    <link rel="stylesheet" href="kindeditor/themes/default/default.css" />
    <script charset="utf-8" src="kindeditor/kindeditor-all.js"></script>
    <script charset="utf-8" src="kindeditor/lang/zh-CN.js"></script>
    <script>
        var editor;
        KindEditor.ready(function(K) {
                editor = K.create('textarea[name="content"]', {
                allowFileManager : true
             });
        });
    </script>
</head>
<body>

<h3>花的添加后台</h3> 
    <form action="insert.php" method="post" enctype="multipart/form-data">
        <div class="submitMain">
            <input type="hidden" name="id" value="<?=$data['id']?>">
            花名：<input type="text" name="title" value="<?=$data['N_title']?>" id="flowerName">
        <div class="typeClass">
            类：
            <select name="type" id="type" value="<?=$data['N_type']?>">
                <option style="color:#333;" value=" 风媒花"> 风媒花</option>
                <option style="color:#333;" value="虫媒花">虫媒花</option>
                <option style="color:#333;" value="鸟媒花">鸟媒花</option>
                <option style="color:#333;" value="水媒花">水媒花 </option>  
            </select>
        </div>
        <div class="anthor">
            来源：<input type="text" name="author" style="color:#333;" <?=$data['N_author']?>>
        </div>
        <div class="pho">
             图片：<input type="file" name="photo">  
        </div>
        内容：
            <textarea name="content" style="width: 1000px; height:400px">
                <?=$data['N_content']?> 
            </textarea>
        <div class="submit">
            <input type="submit" value="提交">
        </div>
        </div>
    </form>


</body>
</html>