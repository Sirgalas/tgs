<?php 
	$db= new PDO("mysql:host=localhost;dbname=tgs","root","");
	$sql = "SELECT * FROM user";
    $stmt = $db->query($sql);

    $stmt = $db->query($sql);

    


    foreach( $stmt  as $result ){
	    var_dump($result);
    }