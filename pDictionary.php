<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>PHPDictionary</title>
<style>
</style>
</head>
<body>
<table>
<?php
	$id = array(1,2,3,4,5,6,7,8,9);
	$language = array("C", "Java", "Objective-C", "C++", "HTML", "Css", "Javascript", "Mysql", "Ruby");
	count($language);

	for($i=0; $i<count($id);$i++) {
		echo "<tr><td><a href=detail.php/?name={$id[$i]}>{$id[$i]}</a></td><td><a href=detail.php/?name={$id[$i]}>{$language[$i]}</a></td></tr>";
	}
?>
</table>
</body>
</html>