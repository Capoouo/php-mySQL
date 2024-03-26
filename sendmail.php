<?php session_start(); ?>
<!--上方語法為啟用session，此語法要放在網頁最前方-->
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?php
//連接資料庫
//只要此頁面上有用到連接MySQL就要include它
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'C:/xampp/htdocs/PHPMailer/src/Exception.php';
require 'C:/xampp/htdocs/PHPMailer/src/PHPMailer.php';
require 'C:/xampp/htdocs/PHPMailer/src/SMTP.php';
include("mysql_connect.inc.php");
$email = @$_POST['email'];

//搜尋資料庫資料
$sql = "SELECT * FROM register where email = '$email'";
//$result = mysql_query($sql);
$data = $DB->query($sql);
//$row = @mysql_fetch_row($result);

//判斷帳號與密碼是否為空白
//以及MySQL資料庫裡是否有這個會員
if ($email != null && $data->num_rows > 0) {
	$obj = $data->fetch_object();
	if( $obj->email == $email)
	{
			//將帳號寫入session，方便驗證使用者身份
			$_SESSION['email'] = $email;
			$serial = substr(md5(uniqid(rand(), true)),0,10);
			$sql = "update register set password='$serial',passwordrp='$serial' where email = '$email'";
			$DB->query($sql);
			$mail = new PHPMailer(true);
     try {
		 
    //Server settings
	$mail->Charset='UTF-8';
    $mail->isSMTP();                                            //Send using SMTP
    $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
    $mail->Username   = 'ian890608ian@gmail.com';                     //SMTP username
    $mail->Password   = 'shunchi0608';                               //SMTP password
    $mail->SMTPSecure = 'ssl';         //Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` encouraged
    $mail->Port       = 465;                                    //TCP port to connect to, use 465 for `PHPMailer::ENCRYPTION_SMTPS` above

    //Recipients
    $mail->setFrom('ian890608ian@gmail.com');
    $mail->addAddress($email);     //Add a recipient

    //Content
    $mail->isHTML(true);                                  //Set email format to HTML
    $mail->Subject = 'Check Your New Password By CESP';
    $mail->Body    = "你的新密碼為:$serial";

    $mail->send();
    echo '以傳入您的信箱';
	echo '<meta http-equiv=REFRESH CONTENT=1;url=index.html>';
}
catch (Exception $e) {
   echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}
	}
}
else {
	echo '查無此信箱!';
	echo '<meta http-equiv=REFRESH CONTENT=1;url=forgetps.html>';
}
?>