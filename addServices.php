<?php 
	require "function.php";  
	$post=$_GET;
	$userId=$post[userId];
	$familyNumber=$post[familyNumber];
	$servicesСode=$post[servicesСode];
	$servicesItself=$post[servicesItself];
	$data=$post[data];
	$result=$post[result];
	addServ($familyNumber,$servicesСode,$servicesItself,$data,$result,$userId);
?>