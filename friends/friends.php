<?php
	$area_id = $_GET['id'];
	// var_dump($number);
	$dsn = 'mysql:dbname=FriendsDB;host=localhost';
	$user = 'root';
	$password = 'camp2015';
	$dbh =new PDO($dsn, $user, $password);
	$dbh->query('SET NAMES utf8');

	$sql = 'SELECT `name` FROM `area_table` WHERE `id` ='.$area_id;
	$stmt = $dbh->prepare($sql);
	$stmt->execute();
	$area_name = $stmt->fetch(PDO::FETCH_ASSOC);

	$sql = 'SELECT * FROM friends_table WHERE area_table_id='.$area_id;
	$stmt = $dbh->prepare($sql);
	$stmt->execute();

	$dbh = null;

?>

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>areafriend</title>
<style>
</style>
<script type="text/javascript">
	function fnc_delbutton(area_id,friend_id){
			if (confirm('削除しますか？')){
				location.href='friends_list.php?id=' + area_id + '&friend_id=' + friend_id + '&del_flag=1';

				return true;
			}

			return false;
	}
</script>
</head>
<body>
<h2><?php echo $area_name['name'] ?>友達リスト</h2>
<table border="1">
<?php


	echo "<tr><td><strong>名前</strong></td><td><strong>性別</strong></td><td><strong>年齢</strong></td><td><strong>編集</strong></td><td><strong>削除</strong></td></tr>";

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

		echo "<tr><td>{$rec['name']}</td><td>{$rec['gender']}</td><td>{$rec['age']}</td>";
		//相対パスだと一つ上に移動しなければいけない？
		echo '<td><input type="button" value="編集" onclick="location.href=\'../friends_update.php?id='.$rec['id'].'\'"></td>';
		echo '<td><input type="button" value="削除" onclick="fnc_delbutton('.$area_id.','.$rec['id'].');" ></td></tr>';


	}


?>
</table>

<input type="button" value="追加" onclick="location.href='../friends_add.php'">


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