<?php
header('Access-Control-Allow-Origin: *');
if(!empty($_GET['username']) && !empty($_GET['content'])){
	$username = $_GET['username'];
	$content = $_GET['content'];
	$array = array("username"=>$username,"content"=>$content);
	$str = json_encode($array);
	echo $str;
}
?>