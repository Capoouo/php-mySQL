<?php session_start(); ?>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?php
include("mysql_connect.inc.php");

$email = @$_POST['email'];
$id = @$_POST['id'];
$sex = @$_POST['sex'];
$city = @$_POST['city'];
$year = @$_POST['year'];
$month = @$_POST['month'];
$day = @$_POST['day'];

//紅色字體為判斷密碼是否填寫正確
if($_SESSION['acount'] != null && $email != null && $id != null && $sex != null && $city != null && $year != null && $month != null && $day != null )
{
        $acount = $_SESSION['acount'];
 
        //更新資料庫資料語法
        $q = "update register set email='$email', id='$id', sex='$sex', city='$city', year='$year' , month='$month', day='$day' where acount='$acount'";

		if($DB->query($q))
        {
                echo '修改成功!';
                echo '<meta http-equiv=REFRESH CONTENT=2;url=set-1.html>';
        }
        else
        {
                echo '修改失敗!';
                echo '<meta http-equiv=REFRESH CONTENT=2;url=set-1.html>';
        }
}
else
{
        echo '麻煩填寫全部資料!!';
        echo '<meta http-equiv=REFRESH CONTENT=2;url=set-1.html>';
}
?>