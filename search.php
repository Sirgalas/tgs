<?php

	require "function.php"; 
	sleep( 3 );
	// no term passed - just exit early with no response
	//if (empty($_GET['term'])) exit ;
	$q = strtolower($_GET["term"]);
	// remove slashes if they were magically added
	if (get_magic_quotes_gpc()) $q = stripslashes($q);
	$searh= search();
	$theArr = array();
	while ($flowers = mysqli_fetch_assoc($searh)) { 
		
			foreach ($flowers as $key=>$value) {
				if (strpos(strtolower($value), $q) !== false) {
					array_push($theArr, array("id"=>$value, "label"=>$value, "value" => strip_tags($value)));
				}
				if (count($theArr) > 11)
				break;
			} 
				
			}
	$str=json_encode($theArr);
		$result= normJsonStr($str); 
		echo $result;    
	 
?>