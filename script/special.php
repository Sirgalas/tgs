<?php 
	require "function.php";
	$post=$_GET;
	$specialization=$post[specialization];
	specializationFamilySave($specialization);
?>