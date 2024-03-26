<?php session_start(); ?>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?php

$selectgame = @$_POST['selectgame'];
$othergame = @$_POST['othergame'];
$teamname = @$_POST['teamname'];
$gamername = @$_POST['gamername'];
include("mysql_connect.inc.php");

//判斷帳號密碼是否為空值
//確認密碼輸入的正確性
if($selectgame != null &&  $teamname != null && $gamername != null)
{
        //新增資料進資料庫語法
			 $sql = "SELECT IFNULL(Max(No), 0)+1 as MaxNo FROM team";
	         $result = $DB->query($sql) ;
             $row = $result->fetch_array(MYSQLI_ASSOC);
             $No=$row["MaxNo"];
			 $_SESSION['No'] = $No;
        $q = "insert into team (No,selectgame,othergame, teamname, gamername) values ('$No','$selectgame','$othergame','$teamname', '$gamername')";
		$DB->query($q);
        if($DB->affected_rows == 1)
        {
              echo'創建隊伍成功!!';
			  echo '<meta http-equiv=REFRESH CONTENT=2;url=creatparty2.php>';
        }
        else
        {
                echo '新增失敗!';
    echo '<meta http-equiv=REFRESH CONTENT=2;url=creatparty2.php>';
        }
}
else
{
        echo '資料不完全!!';
        echo '<meta http-equiv=REFRESH CONTENT=2;url=creatparty2.html>';
}
?>