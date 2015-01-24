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
	$dsn = 'mysql:dbname=phpkiso;host=localhost';
	$user = 'root';
	$password = 'camp2015';
	$dbh =new PDO($dsn, $user, $password);
	$dbh->query('SET NAMES utf8');

	$sql = 'SELECT * FROM survey WHERE 1';
	$stmt = $dbh->prepare($sql);
	$stmt->execute();

	while(1)
	{
		$rec = $stmt->fetch(PDO::FETCH_ASSOC);
		if($rec==false)
		{
			break;
		}
		echo $rec['id'];
		echo $rec['nickname'];
		echo $rec['email'];
		echo $rec['goiken'];
		echo '<br />';
	}

	$dbh = null;
?>	
</body>
</html>