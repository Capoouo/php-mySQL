<?php session_start(); ?>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?php

$selectgame = @$_POST['selectgame'];
$othergame = @$_POST['othergame'];
$gamename = @$_POST['gamename'];
$gameyear = @$_POST['gameyear'];
$gamemonth = @$_POST['gamemonth'];
$gameday = @$_POST['gameday'];
$starttimehour = @$_POST['starttimehour'];
$starttimemin = @$_POST['starttimemin'];
include("mysql_connect.inc.php");

//判斷帳號密碼是否為空值
//確認密碼輸入的正確性
if($selectgame != null && $gamename != null && $gameyear != null && $gamemonth != null && $gameday != null && $starttimehour != null && $starttimemin != null )
{
        //新增資料進資料庫語法
			 $sql = "SELECT IFNULL(Max(No), 0)+1 as MaxNo FROM game";
	         $result = $DB->query($sql) ;
             $row = $result->fetch_array(MYSQLI_ASSOC);
             $No=$row["MaxNo"];
			 $_SESSION['No'] = $No;
        $q = "insert into game (No,selectgame,othergame, gamename, gameyear, gamemonth, gameday, starttimehour, starttimemin) values ('$No','$selectgame','$othergame', '$gamename','$gameyear', '$gamemonth', '$gameday', '$starttimehour','$starttimemin')";
		$DB->query($q);
        if($DB->affected_rows == 1)
        {
               echo '<meta http-equiv=REFRESH CONTENT=2;url=creatgame-2.html>';
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