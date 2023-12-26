<?php
session_start();
if(!isset($_SESSION['uname']))
{
    echo "<script>alert('请登录！'),location='login.php'</script>"; 
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>花之语花店</title>
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
            花名：<input type="text" name="title" value="" id="flowerName">
        <div class="typeClass">
            类：
            <select name="type" id="type">
                <option style="color:#333;" value=" 风媒花"> 风媒花</option>
                <option style="color:#333;" value="虫媒花">虫媒花</option>
                <option style="color:#333;" value="鸟媒花">鸟媒花</option>
                <option style="color:#333;" value="水媒花">水媒花 </option>  
            </select>
        </div>
        <div class="anthor">
            来源：<input type="text" name="author" style="color:#333;">
        </div>
        <div class="pho">
             图片：<input type="file" name="photo">  
        </div>
        内容：
            <textarea name="content" style="width: 1000px; height:400px">
            </textarea>
        <div class="submit">
            <input type="submit" value="提交">
        </div>
        </div>
    </form>
</body>
</html>