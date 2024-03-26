<?php session_start(); ?>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?php

$email = @$_POST['email'];
$acount = @$_POST['acount'];
$password = @$_POST['password'];
$passwordrp = @$_POST['passwordrp'];
$id = @$_POST['id'];
$sex = @$_POST['sex'];
$city = @$_POST['city'];
$grade = @$_POST['grade'];
$jk = @$_POST['jk'];
$us = @$_POST['us'];
$year = @$_POST['year'];
$month = @$_POST['month'];
$day = @$_POST['day'];
include("mysql_connect.inc.php");

//判斷帳號密碼是否為空值
//確認密碼輸入的正確性
if($email != null && $acount != null && $password != null && $id != null && $password == $passwordrp )
{
        //新增資料進資料庫語法
        $q = "insert into register (email, acount, password, passwordrp, id, sex, city, grade, jk , us, year, month, day ) values ('$email', '$acount', '$password', '$passwordrp', '$id','$sex','$city','$grade','$jk','$us','$year', '$month', '$day')";
		$DB->query($q);
        if($DB->affected_rows == 1)
        {
                echo '新增成功!';
                echo '<meta http-equiv=REFRESH CONTENT=2;url=index.html>';
        }
        else
        {
                echo '新增失敗!';
                echo '<meta http-equiv=REFRESH CONTENT=2;url=index.html>';
        }
}
else
{
        echo '您無權限觀看此頁面!';
        echo '<meta http-equiv=REFRESH CONTENT=2;url=index.html>';
}
?>