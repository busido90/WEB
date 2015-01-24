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
// var_dump($_POST);
	$nickname = $_POST['nickname'];
	$email=$_POST['email'];
	$goiken=$_POST['goiken'];
	$bool=false;

	$nickname= htmlspecialchars($nickname);
	$email= htmlspecialchars($email);
	$goiken= htmlspecialchars($goiken);

	if($nickname=='')
	{
		// echo 'ニックネームが入力されていません。<br />';
		// $bool=true;
		$bool = outputEmptyMessage('ニックネーム');
		// echo '<br />'.$bool.'<br />'		;
		// var_dump($bool);
	}
	else
	{
		echo 'ようこそ';
		echo $nickname;
		echo '様';
		echo '<br />';
	}

	if($email=='')
	{
		echo 'メールアドレスが入力されていません。<br />';
		$bool=true;
	}
	else
	{
		echo 'メールアドレス：';
		echo $email;
		echo '<br />';
	}

	if($goiken=='')
	{
		echo 'ご意見が入力されていません。<br />';
		$bool=true;
	}
	else
	{
		echo 'ご意見『';
		echo $goiken;
		echo '』<br />';
	}

	// if($nickname=='' || $email=='' || $goiken=='')
	if ($bool==true)
	{
		echo '<form>';
		echo '<input type="button" onclick="history.back()" value="戻る">';
		echo '</form>';
	}
	else
	{
		echo '<form method="post" action="thanks.php">';
		echo '<input name="nickname" type="hidden" value="'.$nickname.'">';
		echo '<input name="email" type="hidden" value="'.$email.'">';
		echo '<input name="goiken" type="hidden" value="'.$goiken.'">';
		echo '<input type="button" onclick="history.back()" value="戻る">';
		echo '<input type="submit" value="OK">';
		echo '</form>';
	}
?>
</body>
</html>
<?php
	function outputEmptyMessage($item) {
 		echo $item.'が入力されてないよ！<br />';
 		// echo $bool;
 		$bool = true;
 		return $bool;
	}
?>