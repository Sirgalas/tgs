<?php 
require "function.php"; 
$post=$_GET;
	$idAct=$post[idAct];
	$dataAct=$post[data];
	$actCode=$post[actCode];
	$actItself=$post[actItself];
	$actResult=$post[actResult];
	var_dump($actCode);
upedataAct($idAct,$dataAct,$actCode,$actItself,$actResult); ?>