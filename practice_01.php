<?php
	// 変数とは何か
	$hello = "Hello World!!";
	echo $hello;
	echo "<br />";
	$evening = "Good Evening!!";
	echo $evening;
	echo "<br />";

	var_dump($hello);	
	echo "<br />";

	$number = 1;
	var_dump($number);
	echo "<br />";

	$float = 1.25;
	var_dump($float);
	echo "<br />";

	// 論理値(true/false)
	$bool = false;
	var_dump($bool);
	echo "<br />";

	// 配列
	$array = array(1, 2, "aa", 4, 5);
	var_dump($array);
	echo "<br />";
	var_dump($array[1]);
	echo "<br />";
	var_dump($array[2]);
	echo "<br />";

// 連想配列
	$array2 = array("first" => 1, "second" => 2, "third" => 3);
	var_dump($array2);
	echo "<br />";
	var_dump($array2["first"]);
	echo "<br />";
	var_dump($array2["third"]);
	echo "<br />";

	// NULL型
	$null = null;
	var_dump($null);
	echo "<br />";

	// $hello = "Hello World!!";
	if ($hello == "Hello World!!")
	{
		echo $hello;
		echo '<br />こんにちは';
	}
	else
	{
		echo $hello;
		echo '<br />何が違う？';
	}

	$array = array("hoge", "fuga", "moge", "foo", "bar");
	var_dump($array);
	echo "<br />";
	for ($i = 0; $i < 5; $i++) {
		echo $i;
		echo "<br />";
		echo $array[$i];
		echo "<br />";
	}

?>