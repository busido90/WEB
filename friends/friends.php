<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>areafriend</title>
<style>
</style>
</head>
<body>
<table border="1">
<?php
	$id = $_GET['id'];
	// var_dump($number);
	$dsn = 'mysql:dbname=FriendsDB;host=localhost';
	$user = 'root';
	$password = 'camp2015';
	$dbh =new PDO($dsn, $user, $password);
	$dbh->query('SET NAMES utf8');

	$sql = 'SELECT * FROM friends_table WHERE area_table_id=?';
	$stmt = $dbh->prepare($sql);
	$data[]=$id;
	$stmt->execute($data);

	echo "<tr><td><strong>名前</strong></td><td><strong>性別</strong></td><td><strong>年齢</strong></td></tr>";

	$flag = false;

	while(1)
	{
		$rec = $stmt->fetch(PDO::FETCH_ASSOC);
		// var_dump($rec);
		if($rec==false)
		{
			break;
		}

		$flag = true;

		// echo "<h1>"
		echo "<tr><td>{$rec['name']}</td><td>{$rec['gender']}</td><td>{$rec['age']}</td></tr>";
	}


	$dbh = null;
?>
</table>
<?php
	if($flag==false)
	{
		echo "登録されていません";
	}

	echo '<form>';
	echo '<input type="button" onclick="history.back()" value="戻る">';
	echo '</form>';
?>

</body>
</html>