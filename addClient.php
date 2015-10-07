<?php 	
	require "function.php";  
	$post=$_GET;
	$name=formatstr($post[name]);
	$membersDegree=$post[membersDegree];
	$membersName=$post[membersName];
	$membersWork=$post[membersWork];
	$membersDate=$post[membersData];
	$dateBirth=formatstr($post[dateBirth]);
	$adress=formatstr($post[adress]);
	$work=formatstr($post[work]);
	$childDegree=$post[childDegree];
	$childName=$post[childName];
	$childShcool=$post[childShcool];
	$childDate=$post[childData];
	$home=formatstr($post[home]);
	$leisure=formatstr($post[leisure]);
	$socialStruct=formatstr($post[socialStruct]);
	$specialization=formatstr($post[specialization]);
	$poroblemForFamily=formatstr($post[poroblemForFamily]);
	$poroblemForExpert=formatstr($post[poroblemForExpert]);
	$wayProblem=formatstr($post[wayProblem]);
	$result=formatstr($post[result]);
	$outher=formatstr($post[outher]);
	$user=formatstr($post[user]);
save($name,$membersDegree,$membersName,$membersWork,$membersDate,$dateBirth,$adress, $work, $childDegree,$childName,$childShcool,$childDate,$home,$leisure,$socialStruct,$specialization, $poroblemForFamily, $poroblemForExpert, $wayProblem, $result, $outher,$user);
		

?>