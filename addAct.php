<?php 
	require "function.php";  
	$post=$_GET;
	$userId=$post[userId];
	$familyNumber=$post[familyNumber];
	$actСode=$post[actСode];
	$actItself=$post[actItself];
	$data=$post[data];
	$result=$post[result];
	$socialResult=$post[socialResult];
	$kesh=$post[kesh];
	addAct($familyNumber,$actСode,$actItself,$data,$result,$socialResult,$kesh,$userId);
?>