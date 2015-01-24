<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>areafriend</title>
</head>
<body>
<h1>都道府県リスト</h1>
<table border="1">
<?php


	$dsn = 'mysql:dbname=FriendsDB;host=localhost';
		$user = 'root';
		$password = 'camp2015';
		$dbh =new PDO($dsn, $user, $password);
		$dbh->query('SET NAMES utf8');

		$sql = 'SELECT * FROM area_table WHERE 1';
		$stmt = $dbh->prepare($sql);
		$stmt->execute();
		// var_dump($stmt);

		while(1)
		{

		$rec = $stmt->fetch(PDO::FETCH_ASSOC);

		$sql2 = 'SELECT count(*) as `cnt` from friends_table WHERE area_table_id = '.$rec['id'];
		$stmt2 = $dbh->prepare($sql2);
		$stmt2->execute();

		
		$rec2 = $stmt2->fetch(PDO::FETCH_ASSOC);
			// echo '<tr>'.var_dump($rec).'</tr>';
		if($rec==false)
		{
			break;
		}	
		// var_dump($rec2['cnt']);
		echo "<tr><td><a href=friends.php/?id={$rec['id']}>{$rec['id']}</a></td><td><a href=friends.php/?id={$rec['id']}>{$rec['name']}</a></td><td>{$rec2['cnt']}</td></tr>";

		}
		$dbh = null;

?>
</table>
</body>
</html>