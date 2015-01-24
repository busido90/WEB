<?php
$array = array("hoge", "fuga", "moge", "foo", "bar");
	var_dump($array);
	echo "<br />";
	for ($i = 0; $i < 5; $i++) {
		echo $i;
		echo "<br />";
		echo $array[$i];
		echo "<br />";
	}

echo "<br />";

$array_area = array("city"=>"cebu", "language"=>"English", "school"=>"Nexseed", "country"=>"philippine");
	var_dump($array_area);
	echo "<br />";
	for ($i = 0; $i < count($array_area); $i++) {
		echo $i;
		echo "<br />";
		echo $array_area[$i];
		echo "<br />";
	}

echo "<br />";

// while文(繰り返し処理 ----- あんまり使わないやつ)
$j = 0;
while(true) {
	if ($j >= 5) {
		break;
	}
	echo "hogehoge";
	echo "<br />";
	$j++;
}
$j = 0;
while($j < 5) {
	echo "hogehoge";
	echo "<br />";
	$j++;
}

echo "<br />";

// foreach文の紹介(for文で繰り返すデータの中身を変数に入れて使える)
	$ary = array("hoge", "fuga", "moge", 1);
	foreach($ary as $str) {
		echo $str;
		echo "<br />";
	}

echo "<br />";

	foreach($array_area as $key =>$str) {
		switch ($key) {
			case 'city':
				echo 'お住いの都市：'.$str;
				echo "<br />";
				break;
			
			case 'language':
				echo '勉強している言語：'.$str;
				echo "<br />";
				break;

			case 'school':
				echo '学校：'.$str;
				echo "<br />";
				break;

			case 'country':
				echo '滞在国：'.$str;
				echo "<br />";
				break;
		}
		// echo ''.$key.'は';
		// echo $str;
		// echo "<br />";
	}

echo "<br />";

$array_area2 = array("city"=>"sydney", "language"=>"English", "school"=>"Ability", "country"=>"Australia");

foreach($array_area2 as $key =>$str) {
		switch ($key) {
			case 'city':
				echo 'お住いの都市：'.$str;
				echo "<br />";
				break;
			
			case 'language':
				echo '勉強している言語：'.$str;
				echo "<br />";
				break;

			case 'school':
				echo '学校：'.$str;
				echo "<br />";
				break;

			case 'country':
				echo '滞在国：'.$str;
				echo "<br />";
				break;
		}
	}

echo "<br />";


	$hoge = "ほげほげ";
	$fuga = "ふがふが";
	echo $hoge;
	echo "<br />";
	echo $fuga;
	echo "<br />";
	echo "$hoge";
	echo "<br />";
	echo '$hoge';
	echo '<br />';


?>