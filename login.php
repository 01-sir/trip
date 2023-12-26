<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>花之语花店</title>
    <link rel="stylesheet" href="./css/reg.css">
</head>
<body>
      <!-- 主区 -->
      <div class="mainReg">
        <div class="reg">
            <h1 class="usereg">用户登录</h3> 
            <form action="login1.php" method="post" enctype="multipart/form-data">
                <div class="useName">
                    用户账号：<input type="text" name="uname" value="" id="input">
                </div>
               <div class="upass">
                    用户密码：<input type="password" name="upass" id="input">
               </div>
               <div class="submit">
                <input type="submit" value="登录" id="submit">
               </div>
               
            </form>
            <div class="login">
                <a href="reg.html">注册</a>
            </div>
            
        </div>
    </div>
</body>
</html>