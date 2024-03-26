<?php session_start(); ?>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?php

$Discord = @$_POST['Discord'];
$FaceBook = @$_POST['FaceBook'];
$email = @$_POST['email'];
$contacat = @$_POST['contacat'];
$rule = @$_POST['rule'];
$reward = @$_POST['reward'];
include("mysql_connect.inc.php");
//判斷帳號密碼是否為空值
//確認密碼輸入的正確性
if($Discord != null || $FaceBook != null || $email != null || $contacat != null && $rule != null && $reward != null )
{
        //新增資料進資料庫語法
		$No = $_SESSION['No'];
        $q = "update game set Discord='$Discord', FaceBook='$FaceBook' , email='$email' , contacat='$contacat', rule='$rule',reward='$reward' where No='$No'";
		$DB->query($q);
        if($DB->affected_rows == 1)
        {
               echo '創建比賽成功!';
			   echo '<meta http-equiv=REFRESH CONTENT=2;url=creatgame-1.php>';
        }
        else
        {
                echo '新增失敗!';
        }
}
else
{
        echo '資料不完全!!';
        echo '<meta http-equiv=REFRESH CONTENT=2;url=creatgame-1.html>';
}
?>