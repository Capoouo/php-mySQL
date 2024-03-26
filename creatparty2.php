<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<?php session_start(); ?>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<style type="text/css">

  a:link {

font-size: 16px;

color: #fff;

text-decoration: none;

}

a:visited {

font-size: 16px;

color: #fff;

text-decoration: none;

}

a:hover {

font-size: 16px;

color: #FF9966;

text-decoration: underline;

}

</style>
<title>無標題文件</title>
<style type="text/css">
.coverflow{
        width: 1190px;
        height: 624px;
        position: relative;
    }
    .coverflow>a{
        display: block;
        position: absolute;
        top:0;
        left:0;
        opacity: 0;
    filter: alpha(opacity=0);
    -webkit-animation: silder 12s linear infinite;
                    animation: silder 12s linear infinite;
    }
    .coverflow>a>img{
        max-width: 100%;
    }

/動畫關鍵影格/
    @-webkit-keyframes silder {
        8% {
            opacity: 1;
            filter: alpha(opacity=100);
        }
        27% {
            opacity: 1;
            filter: alpha(opacity=100);
        }
        38% {
            opacity: 0;
            filter: alpha(opacity=0);
        }
    }
    @keyframes silder {
        8% {
            opacity: 1;
            filter: alpha(opacity=100);
        }
        27% {
            opacity: 1;
            filter: alpha(opacity=100);
        }
        38% {
            opacity: 0;
            filter: alpha(opacity=0);
        }
    }


/每個圖片各延遲5秒/
    .coverflow>a:nth-child(3) {
        -webkit-animation-delay: 12s;
                animation-delay: 12s;

    }
	.coverflow>a:nth-child(2) {
        -webkit-animation-delay: 8s;
                animation-delay: 8s;

    }
	.coverflow>a:nth-child(1) {
        -webkit-animation-delay: 4s;
                animation-delay: 4s;

    }
	/滑入時停止播放/
.coverflow:hover>a{
-webkit-animation-play-state: paused;
animation-play-state: paused;
}
.coverflow:hover>a{
-webkit-animation-iteration-count: 100;
animation-iteration-count: 100;
}
.1 {
}
.font12 {
	color: #FFF;
}
.table {
	background-color: #141c33;
	text-align: left;
}
.font3 {
	font-size: 36px;
	text-align: center;
}
.title1 {
	height: auto;
	width: auto;
}
body {
	background-color: #000;
	margin-right: 100px;
}
.table tr td .font12 {
	font-size: 36px;
	border-top-style: none;
	border-right-style: none;
	border-bottom-style: none;
	border-left-style: none;
}
.fonr4 {
	font-size: 24px;
	color: #000;
}
.top {
	background-color: #FFF;
}
ul { /* 取消ul預設的內縮及樣式 */
        margin: 0;
        padding: 0;
        list-style: none;
    }

    ul.drop-down-menu {
        border: #ccc 1px solid;
        display: inline-block;
        font-family: 'Open Sans', Arial, sans-serif;
        font-size: 16px;
    }

    ul.drop-down-menu li {
        position: relative;
        white-space: nowrap;
        border-right: #ccc 1px solid;
    }

    ul.drop-down-menu > li:last-child {
        border-right: none;
    }

    ul.drop-down-menu > li {
        float: left; /* 只有第一層是靠左對齊*/
    }

     ul.drop-down-menu a {
        background-color: #6c6c6c;
        color: #fff;
        display: block;
        padding: 0 30px;
        text-decoration: none;
        line-height: 40px;

    }
    ul.drop-down-menu a:hover { /* 滑鼠滑入按鈕變色*/
        background-color: #ef5c28;
        color: #fff;
    }
    ul.drop-down-menu li:hover > a { /* 滑鼠移入次選單上層按鈕保持變色*/
        background-color: #ef5c28;
        color: #fff;
    }
	 ul.drop-down-menu ul {
        border: #ccc 1px solid;
        position: absolute;
        z-index: 99;
        left: -1px;
        top: 100%;
       min-width: 180px;
    }

    ul.drop-down-menu ul li {
        border-bottom: #ccc 1px solid;
    }

    ul.drop-down-menu ul li:last-child {
        border-bottom: none;
    }

    ul.drop-down-menu ul ul { /*第三層以後的選單出現位置與第二層不同*/
        z-index: 999;
        top: 10px;
        left: 90%;
    }
	  ul.drop-down-menu ul { /*隱藏次選單*/
        display: none;
    }

    ul.drop-down-menu li:hover > ul { /* 滑鼠滑入展開次選單*/
        display: block;
    }
	 .linkstyle-1 {

font-size: 12px;

color: #FFf;
text-decoration: none;
}

.linkstyle-1 a{

font-size: 12px;

color: #fff;

text-decoration:underline;

}

.linkstyle-1 a:hover{

font-size: 12px;

color: #FFf;

text-decoration: none;

}
.creatgametext{
	color:#fff;
	font-size:24px;
}
.regustertextform {	text-align: left;
}
</style></head>

<body>
<table width="600" border="0" align="center">
  <tr class="table">
    <td height="30" class="creatgametext">創建你的隊伍</td>
  </tr>
</table>
<table width="600" border="0" align="center" cellpadding="0" cellspacing="0" class="table">
  <tr>
    <td colspan="5" class="1263">
  
    </td>
  </tr>
  <tr>
    <td width="205" height="500" colspan="5"><p>&nbsp;</p>
    <p>&nbsp;</p>
    <p>&nbsp;</p>
    <form id="form1" name="form1" method="post" action="creatparty_finish.php">
      <table width="550" border="0" align="center">
        <tr>
          <td colspan="2" class="creatgametext">選擇遊戲</td>
        </tr>
        <tr>
          <td colspan="2"><label for="selectgame"></label>
            <select name="selectgame" id="selectgame">
              <option value disabled selected hidden>請選擇遊戲</option>
              <option value="英雄聯盟">英雄聯盟</option>
              <option value="傳說對決">傳說對決</option>
              <option value="特戰英豪">特戰英豪</option>
              <option value="Counter-Strike: Global Offensive">Counter-Strike: Global Offensive</option>
              <option value="鬥陣特工">鬥陣特工</option>
              <option value="聯盟戰棋">聯盟戰棋</option>
              <option value="Apex Legends">Apex Legends</option>
              <option value="決勝時刻：現代戰域">決勝時刻：現代戰域</option>
              <option value="絕地求生-PLAYERUNKNOWN'S BATTLEGROUNDS">絕地求生-PLAYERUNKNOWN'S BATTLEGROUNDS</option>
              <option value="要塞英雄 Fortnite">要塞英雄 Fortnite</option>
              <option value="虹彩六號 Tom Clancy's Rainbow Six: Siege">虹彩六號 Tom Clancy's Rainbow Six: Siege</option>
              <option value="灌籃高手 SLAM DUNK">灌籃高手 SLAM DUNK</option>
              <option value="NBA 2K20">NBA 2K20</option>
              <option value="魔獸爭霸3 Warcraft III">魔獸爭霸3 Warcraft III</option>
              <option value="魔靈召喚 - Summoners War">魔靈召喚 - Summoners War</option>
              <option value="《英雄聯盟：激鬥峽谷》">《英雄聯盟：激鬥峽谷》</option>
              <option value="爐石戰記 - Hearthstone">爐石戰記 - Hearthstone</option>
              <option value="英雄戰場 - Hearthstone">英雄戰場 - Hearthstone</option>
              <option value="黎明死線 Dead by Daylight">黎明死線 Dead by Daylight</option>
              <option value="其他遊戲">其他遊戲 Other Game</option>
            </select>
            <div id="a" style="display:none"> <span>
              <input type="text" name="123" id="othergame"  placeholder="請輸入遊戲" />
            </span> </div>
            <script type="text/javascript" src="https://code.jquery.com/jquery-3.3.1.js"></script>
            <script>
$("#selectgame").on("change",function(){
	var selectedValue =$("#selectgame").val();
	if(selectedValue == "其他遊戲"){
		$("#a").show();
		}
    else if(selectedValue != "其他遊戲"){
		$("#a").hide();
		}
})
        </script></td>
        </tr>
        <tr>
          <td width="238"></td>
        </tr>
        <tr>
          <td colspan="2" class="creatgametext">隊伍名稱 </td>
        </tr>
        <tr>
          <td colspan="2"><label for="teamname"></label>
            <span class="creatgametext">
              <input type="text" name="teamname" id="teamname" placeholder="輸入隊伍名稱" />
            </span></td>
        </tr>
        <tr>
          <td colspan="2" class="creatgametext">&nbsp;</td>
        </tr>
        <tr>
          <td class="creatgametext">隊長
		  	<?php
	include("mysql_connect.inc.php");
	$DB->query("SET NAMES 'utf8'");
	 $sql = "SELECT * FROM register WHERE  acount = ".$_SESSION['acount']."";
	$result = $DB->query($sql) ;
    $row = $result->fetch_array(MYSQLI_ASSOC);//印出資料
    printf("%s", $row["id"]);
?>
</td>
          <td width="302" class="creatgametext"><label for="gamername"></label>
            <input type="text" name="gamername" id="gamername" placeholder="輸入遊戲內名稱" /></td>
        </tr>
        <tr>
          <td colspan="2" class="creatgametext">&nbsp;</td>
        </tr>
        <tr>
          <td colspan="2">&nbsp;</td>
        </tr>
      </table>
      <table width="550" border="0" align="center">
        <tr>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td><input type="submit" name="gm-1" id="gm-1" value="下一步"  /></td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
        </tr>
      </table>
    </form>    
    <p>&nbsp;</p></td>
  </tr>
</table>
</body>
</html>

