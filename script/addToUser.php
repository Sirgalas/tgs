<?php 
	require "function.php"; 
	$post=$_GET;
	$name=formatstr($post[name]);
	$family=formatstr($post[family]);
	$secondName=formatstr($post[secondName]);
	$birthday=$post[secondName];
	$password=$post[secondName];
	$access=$post[access];
	$dateTo=$post[dateTo];
	$snils=$post[dateTo];
	$sex=formatstr($post[sex]);
	$agreementNumber=$post[agreementNumber];
	$agreementDate=$post[agreementDate];
	$dateBirth=$post[dateBirth];
	$placeBirth=formatstr($post[sex]);
	$citizenship=formatstr($post[citizenship]);
	foreach($post[foreignLanguage] as $chaildName){
		$foreignLanguage .= formatstr($chaildName).";";
	}foreach($post[levelLanguage] as $chaildName){
		$levelLanguage .= formatstr($chaildName).";";
	}
	foreach($post[okinLanguage] as $chaildName){
		$okinLanguage .= $chaildName.";";
	}
	$education=formatstr($post[citizenship]);
	$okinEducation=$post[okinLanguage]; 
	$work=formatstr($post[work]);
	$okpdtr=$post[okinLanguage]; 
	$experienceYers=$post[experienceYers]; 
	$experienceMounts=$post[experienceMounts];  
	$experienceDay=$post[experienceDay];
	$pasportSerial=$post[pasportSerial];
	$pasportNumber=$post[pasportNumber];
	$pasportDate=$post[pasportDate];
	$married=formatstr($post[married]);
	$marriedOkin=formatstr($post[marriedOkin]);
	$dateIssue=$post[dateIssue];
	$organization=formatstr($post[organization]);
	$passportIndex=$post[passportIndex];
	$passportAdress=formatstr($post[passportAdress]);
	$actualIndex=$post[actualIndex];
	$actualAdress=formatstr($post[actualAdress]);
	$dataRegistration=$post[dataRegistration];
	$phoneNumber=$post[phoneNumber];
	$dateFrom=$post[dateFrom];
	foreach($post[univesity] as $chaildName){
		$univesity .= formatstr($chaildName).";";
	}
	foreach($post[profession] as $chaildName){
		$profession .= formatstr($chaildName).";";
	}
	foreach($post[diplom] as $chaildName){
		$diplom .= formatstr($chaildName).";";
	}
	foreach($post[diplomSerial] as $chaildName){
		$diplomSerial .= formatstr($chaildName).";";
	}
	foreach($post[diplomNumber] as $chaildName){
		$diplomNumber .= $chaildName.";";
	}
	foreach($post[yearEnd] as $chaildName){
		$yearEnd .= $chaildName.";";
	}
	foreach($post[okso] as $chaildName){
		$okso .= $chaildName.";";
	}
	foreach($post[relationDegree] as $chaildName){
		$relationDegree .= formatstr($chaildName).";";
	}
	foreach($post[nameRelation] as $chaildName){
		$nameRelation .= formatstr($chaildName).";";
	}
	foreach($post[dateBirthRelation] as $chaildName){
		$dateBirthRelation .= $chaildName.";";
	}

	saveUser($name, $family, $secondName,$password,$access,$dateTo,$snils,$birthday,$sex, $agreementNumber, $agreementDate, $dateBirth, $placeBirth, $citizenship, $foreignLanguage,$levelLanguage,$okinLanguage, $education,$okinEducation,$univesity,$profession,$diplom,$diplomSerial,$diplomNumber,$yearEnd,$okso,$work,$okpdtr,$experienceYers, $experienceMounts, $experienceDay,$married,$marriedOkin,$pasportSerial,$pasportNumber,$pasportDate,$dateIssue,$organization,$passportIndex,$passportAdress,$actualIndex,$actualAdress,$dataRegistration,$phoneNumber,$dateFrom,$univesity,$profession,$diplom,$diplomSerial,$diplomNumber,$yearEnd,$okso,$relationDegree,$nameRelation,$dateBirthRelation)
	?>