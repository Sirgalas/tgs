<?php
	require "function.php"; 
	$post=$_GET;
	$prоfesion=formatstr($post[prоfesion]);
	$okin=$post[okin];
	$salary=$post[salary];
	$rate=$post[rate];
	speshialistSave($prоfesion,$okin,$salary,$rate)
 ?>