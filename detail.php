<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>PHPDictionary</title>
<style>
</style>
</head>
<body>
<?php
	$id = $_GET['name'];
	// var_dump($number);
	$dsn = 'mysql:dbname=phpkiso;host=localhost';
	$user = 'root';
	$password = 'camp2015';
	$dbh =new PDO($dsn, $user, $password);
	$dbh->query('SET NAMES utf8');

	$sql = 'SELECT * FROM language WHERE id=?';
	$stmt = $dbh->prepare($sql);
	$data[]=$id;
	$stmt->execute($data);

	while(1)
	{
		$rec = $stmt->fetch(PDO::FETCH_ASSOC);
		if($rec==false)
		{
			break;
		}
		echo $rec['explain'];
		echo '<br />';
	}

	$dbh = null;


?>
</body>
</html>