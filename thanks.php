<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>PHP基礎 by Nagayama</title>
<style>
</style>
<!-- <link rel="stylesheet" href="style.css"> -->
</head>
<body>
<?php
	try{
	$dsn = 'mysql:dbname=phpkiso;host=localhost';
	$user = 'root';
	$password = 'camp2015';
	$dbh =new PDO($dsn, $user, $password);
	$dbh->query('SET NAMES utf8');

	$nickname=$_POST['nickname'];
	$email=$_POST['email'];
	$goiken=$_POST['goiken'];

	$nickname= htmlspecialchars($nickname);
	$email= htmlspecialchars($email);
	$goiken= htmlspecialchars($goiken);

	echo $nickname;
	echo '様<br />';
	echo 'ご意見ありがとうござました。<br />';
	echo '頂いたご意見『';
	echo $goiken;
	echo '』 <br />';
	echo $email;
	echo 'にメールを送りましたのでご確認ください。';

	// $mail_sub= 'アンケート受け付けました。';
	// $mail_body= $nickname."様へ¥nアンケートご協力ありがとうございました。";
	// $mail_body=html_entity_decode($mail_body, ENT_QUOTES, "UTF-8");
	// $mail_head='From: xxx@xxx.co.jp';
	// mb_internal_encoding("UTF-8");
	// mb_language('Japanese');
	// mb_send_mail($email, $mail_sub, $mail_body, $mail_head);

	$sql = 'INSERT INTO survey (nickname,email,goiken) VALUES ("'.$nickname.'","'.$email.'","'.$goiken.'")';
	$stmt = $dbh->prepare($sql);
	$stmt->execute();

	$dbh = null;
	} catch (Exception $e){
		echo 'ただいま障害により大変ご迷惑をおかけしております。';
	}
?>	
</body>
</html>