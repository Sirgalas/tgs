<?php 
	require "function.php"; 
	$post=$_GET;
	$name=formatstr($post[name]);
	$family=formatstr($post[family]);
	$secondName=formatstr($post[secondName]);
	$birthday=$post[secondName];
	$password=$post[password];
	$access=$post[access];
	$dateTo=$post[dateTo];
	$snils=$post[dateTo];
	$sex=formatstr($post[sex]);
	$agreementNumber=$post[agreementNumber];
	$agreementDate=$post[agreementDate];
	$dateBirth=$post[dateBirth];
	$placeBirth=formatstr($post[sex]);
	$citizenship=formatstr($post[citizenship]);
	$foreignLanguage .= formatstr($chaildName);
	$levelLanguage .= formatstr($chaildName);
	$okinLanguage .= $chaildName;
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
	$univesity .= formatstr($chaildName);
	$profession .= formatstr($chaildName);
	$diplom .= formatstr($chaildName);
	$diplomSerial .= formatstr($chaildName);
	$diplomNumber .= $chaildName;
	$yearEnd .= $chaildName;
	$okso .= $chaildName;
	$relationDegree .= formatstr($chaildName);
	$nameRelation .= formatstr($chaildName);
	$dateBirthRelation .= $chaildName;
	saveUser($name, $family, $secondName,$password,$access,$dateTo,$snils,$birthday,$sex, $agreementNumber, $agreementDate, $dateBirth, $placeBirth, $citizenship, $foreignLanguage,$levelLanguage,$okinLanguage, $education,$okinEducation,$univesity,$profession,$diplom,$diplomSerial,$diplomNumber,$yearEnd,$okso,$work,$okpdtr,$experienceYers, $experienceMounts, $experienceDay,$married,$marriedOkin,$pasportSerial,$pasportNumber,$pasportDate,$dateIssue,$organization,$passportIndex,$passportAdress,$actualIndex,$actualAdress,$dataRegistration,$phoneNumber,$dateFrom,$univesity,$profession,$diplom,$diplomSerial,$diplomNumber,$yearEnd,$okso,$relationDegree,$nameRelation,$dateBirthRelation);
	$id=theId();
?>
<span> Табельный номер и пароль</span>
		<?php 
			$pass=getPass(); 
			$thePass=array_pop ($pass);
			$thePass=$thePass+1;
			echo $thePass ?>
<input type="hidden" class="password" value="<?php echo $thePass; ?>">