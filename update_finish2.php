<?php session_start(); ?>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?php
include("mysql_connect.inc.php");
$password = @$_POST['password'];
$passwordNew = @$_POST['passwordNew'];
$passwordNewrp = @$_POST['passwordNewrp'];

//紅色字體為判斷密碼是否填寫正確
if($_SESSION['acount'] != null && $passwordNew != null && $passwordNewrp != null && $passwordNew == $passwordNewrp )
{
        $acount = $_SESSION['acount'];
 
        //更新資料庫資料語法
        $q = "update register set password='$passwordNew', passwordrp='$passwordNewrp' where acount='$acount'";

		if($DB->query($q))
        {
                echo '修改成功!';
                echo '<meta http-equiv=REFRESH CONTENT=2;url=set4.html>';
        }
        else
        {
                echo '修改失敗!';
                echo '<meta http-equiv=REFRESH CONTENT=2;url=set4.html>';
        }
}
else
{
        echo '新密碼與確認新密碼不一致!!';
        echo '<meta http-equiv=REFRESH CONTENT=2;url=set4.html>';
}
?>