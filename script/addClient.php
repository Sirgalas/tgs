<?php 	
	require "function.php";  
	$post=$_GET;
	$n=formatstr($post[name]);
	$f=formatstr($post[family]);
	$sN=formatstr($post[secondName]);
	$a=formatstr($post[adress]);
	$w=formatstr($post[work]);
	$cN;
	foreach($post[membersName] as $chaildName){
		$mN .= formatstr($chaildName).";";
	}
	foreach($post[childName] as $chaildName){
		$cN .= formatstr($chaildName).";";
	}
	$h=formatstr($post[home]);
	$sS=formatstr($post[socialStruct]);
	$pF=formatstr($post[poroblemForFamily]);
	$pE=formatstr($post[poroblemForExpert]);
	$wP=formatstr($post[wayProblem]);
	$wE=formatstr($post[workExpert]);
	$r=formatstr($post[result]);
	$o=formatstr($post[outher]);
save($n, $f,$sN,$mN, $a, $w, $cN,$h, $sS,$pF,$pE, $wP,$wE,$r,$o); 

?>