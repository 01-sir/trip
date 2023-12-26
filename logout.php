<?php
session_start();
if(isset($_SESSION["uname"])){
    session_destroy();
}
echo "<script>alert('安全退出！'),location='index.php'</script>"

?>