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

		$sql = 'SELECT area_table.* , count(friends_table.id) as `friends_cnt` from area_table left outer join friends_table on area_table.id = friends_table.area_table_id group by area_table.id';
		$stmt = $dbh->prepare($sql);
		$stmt->execute();
		// var_dump($stmt);

		while(1)
		{

			$rec = $stmt->fetch(PDO::FETCH_ASSOC);

			// echo '<tr>'.var_dump($rec).'</tr>';
			if($rec==false)
			{
				break;
			}	
			// var_dump($rec2['cnt']);

			if($rec['friends_cnt']==0)
			{
				echo "<tr><td>{$rec['id']}</td><td>{$rec['name']}</td><td>{$rec['friends_cnt']}</td></tr>";
			}
			else
			{
				echo "<tr><td><a href=friends.php/?id={$rec['id']}>{$rec['id']}</a></td><td><a href=friends.php/?id={$rec['id']}>{$rec['name']}</a></td><td>{$rec['friends_cnt']}</td></tr>";
			}

		}
		$dbh = null;

?>
</table>
</body>
</html>