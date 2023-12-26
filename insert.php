<?php
session_start();
if(!isset($_SESSION['uname']))
{
    echo "<script>alert('请登录！'),location='login.php'</script>"; 
}
$title =  $_POST['title'] ?? '';
$type = $_POST['type'] ?? '';
$author = $_POST['author'] ?? '';
$details = $_POST['content'] ?? '';
$file = $_FILES["photo"];
// 先判断有没有错
if ($file["error"] == 0) {
    // 成功 
    // 判断传输的文件是否是图片，类型是否合适
    // 获取传输的文件类型
    $typeArr = explode("/", $file["type"]);
    if($typeArr[0]== "image"){
        // 如果是图片类型
        $imgType = array("png","jpg","jpeg");
        if(in_array($typeArr[1], $imgType)){ // 图片格式是数组中的一个
            // 类型检查无误，保存到文件夹内
            // 给图片定一个新名字 (使用时间戳，防止重复)
            $imgname = "photo/".time().".".$typeArr[1];
            // 将上传的文件写入到文件夹中
            // 参数1: 图片在服务器缓存的地址
            // 参数2: 图片的目的地址（最终保存的位置）
            // 最终会有一个布尔返回值
            $bol = move_uploaded_file($file["tmp_name"], $imgname);
            if($bol){
                echo "上传成功！";
            } else {
                echo "上传失败！";
            };
        };
    } else {
        // 不是图片类型
        echo "没有图片，再检查一下吧！";
        };
} else {
    // 失败
    echo $file["error"];
};
$link = mysqli_connect('localhost','root','','flower');
if(!$link){
    exit(mysqli_connect_error());
}
if(!mysqli_set_charset($link,'utf8')){
    exit(mysqli_error($link));
}

$sql = 'INSERT INTO `tb_flower` VALUES(NULL,\''.$title.'\',\''.$author.'\',\''.$type.'\',\''.$imgname.'\',\''.$details.'\',NUll,0)';
$result = mysqli_query($link,$sql);
if($result){
    echo '<script>alert("添加成功..."),location="addnews.php"</script>';
}
else{
    echo '<script>alert("添加失败..."),location="addnews.php"</script>';
}
mysqli_close($link);
?>