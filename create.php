<?php
// var_dump($_POST);
// exit();

$name = $_POST["name"];
$reki = $_POST["reki"];
$genre = $_POST["genre"];
$area = $_POST["area"];
$skill = $_POST["skill"];
$sound = $_POST["sound"];

//読み込むデータ
$write_data = $name."\n".$reki."\n".$genre."\n".$area."\n".$skill."\n".$sound;

$file = fopen("data/dj.csv","a");
flock($file, LOCK_EX);
fwrite($file, $write_data);
flock($file, LOCK_UN);
fclose($file);

//保存した後トップページに戻る
header("Location:index.php");
