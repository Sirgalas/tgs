<?php 
	include 'conect.php'; 
	function addAct($familyNumber,$actСode,$actItself,$data,$result,$socialResult,$kesh,$userId){
		global $link;
		$sql="INSERT INTO akt ( familyNumber,actСode,actItself,data,result,userId,socialResult,kesh ) VALUES ($familyNumber,'$actСode','$actItself','$data','$result','$userId','$socialResult',$kesh) ";
		$result=mysqli_query($link,$sql);
		return $result;
		mysqli_close($link);
	}
	function addServ($familyNumber,$servicesСode,$servicesItself,$data,$result,$userId){
		global $link;
		$sql="INSERT INTO services ( familyNumber,serviceСode,serviceItself,data,result,userId ) VALUES ($familyNumber,'$servicesСode','$servicesItself','$data','$result','$userId') ";
		$result=mysqli_query($link,$sql);
		return $result;
		mysqli_close($link);
	}
	
	function readExelFile($filepath){
	require_once "PHPExcel.php"; //подключаем наш фреймворк
	$ar=array();// инициализируем массив
	$inputFileType = PHPExcel_IOFactory::identify($filepath);  // узнаем тип файла, excel может хранить файлы в разных форматах, xls, xlsx и другие
	$objReader = PHPExcel_IOFactory::createReader($inputFileType); // создаем объект для чтения файла
	$objPHPExcel = $objReader->load($filepath); // загружаем данные файла в объект
	$ar = $objPHPExcel->getActiveSheet()->toArray(); // выгружаем данные из объекта в массив
	return $ar; //возвращаем массив
	}	
	
	function formatstr($str) {
		$str = trim($str);
		$str = stripslashes($str);
		$str = htmlspecialchars($str);
		return $str;
	}
	function getPass(){
		global $link;
		$sql="SELECT COUNT( id ) FROM  `user`";
		if ($row = mysqli_query($link,$sql)){
			while ($result = mysqli_fetch_assoc($row)) {
				return $result;
			} 
		}
		mysqli_close($link);	
	}
	function lastDog(){
		global $link;
		$theId=getPass();
		$id=array_pop ($theId);
		$sql="SELECT agreementNumber FROM user WHERE ".$id;
		mysqli_query($link,$sql);
		if ($row = mysqli_query($link,$sql)){
			while ($result = mysqli_fetch_assoc($row)) {
				return $result;
			}
		 }
		mysqli_close($link);
	}
	function normJsonStr($str){
		$str = preg_replace_callback('/\\\u([a-f0-9]{4})/i', create_function('$m', 'return chr(hexdec($m[1])-1072+224);'), $str);
		return iconv('cp1251', 'utf-8', $str);
	}
	function registrUser($login){
		global $link;
		$sql="SELECT  id,family,pass,access FROM  `user` WHERE family='".$login."'";
		$row = mysqli_query($link,$sql);
		return $row;
		mysqli_close($link);
	}

	function save($name,$membersDegree,$membersName,$membersWork,$membersDate,$dateBirth,$adress,$work,$childDegree,$childName,$childShcool,$childDate,$home,$leisure, $socialStruct,$specialization,$poroblemForFamily,$poroblemForExpert,$wayProblem,$workExpert,$data,$actСode,$actItself,$serviceСode,$serviceItself,$result,$outher,$user) {
		global $link;
		$date=date("Y-m-d H:i:s");
		$sql = "INSERT INTO catalog(name,dateBirth,adress,wrk,home,leisure,socialStruct,specialization,poroblemForFamily,poroblemForExpert,wayProblem,workExpert,result,outher,user,date) VALUES('$name','$dateBirth','$adress','$work','$home','$leisure','$socialStruct','$specialization','$poroblemForFamily','$poroblemForExpert','$wayProblem','$workExpert','$result','$outher','$user','$date');";
		$sql .="SET @last_id_in_catalog = LAST_INSERT_ID();";
		$sql .="INSERT INTO cild(familyNumber,childDegree,childName,childShcool,childDate)VALUES(@last_id_in_catalog,'$childDegree','$childName','$childShcool','$childDate');";		
		$sql .="INSERT INTO members(familyNumber,membersDegree,membersName,membersWork,membersDate)VALUES(@last_id_in_catalog,'$membersDegree','$membersName','$membersWork','$membersDate');";		
		$sql .="INSERT INTO specializationFamily(familyNumber,serviceСode,serviceItself)VALUES(@last_id_in_catalog,'$serviceСode','$serviceItself');";		
		if (!mysqli_multi_query($link, $sql)){
			print_r("Errormessage: %s\n", mysqli_error($link));
		}
		mysqli_close($link);
	}
	function saveUser($name, $family, $secondName,$password,$access,$dateTo,$snils,$sex, $agreementNumber,$birthday, $agreementDate,  $placeBirth, $citizenship, $foreignLanguage,$levelLanguage,$okinLanguage, $education,$okinEducation,$univesity,$profession,$diplom,$diplomSerial,$diplomNumber,$yearEnd,$okso,$work,$okpdtr,$experienceYers, $experienceMounts, $experienceDay,$married,$marriedOkin,$pasportSerial,$pasportNumber,$pasportDate,$dateIssue,$organization,$passportIndex,$passportAdress,$actualIndex,$actualAdress,$dataRegistration,$phoneNumber,$dateFrom,$univesity,$profession,$relationDegree,$nameRelation,$dateBirthRelation) {
		global $link;
		$sql = "INSERT INTO user(name,family,secondName,pass,access,dateTo,snils,birthday,sex,agreementNumber,agreementDate,placeBirth,citizenship,education,okinEducation,wrk,okpdtr,experienceYers,experienceMounts,experienceDay,married,marriedOkin,pasportSerial,pasportNumber,pasportDate,dateIssue,organization,passportIndex,passportAdress,actualIndex,actualAdress,dataRegistration,phoneNumber,dateFrom) VALUES('$name','$family','$secondName','$password','$access','$dateTo','$snils','$birthday','$sex','$agreementNumber','$agreementDate','$placeBirth','$citizenship','$education','$okinEducation','$work','$okpdtr','$experienceYers','$experienceMounts','$experienceDay','$married','$marriedOkin','$pasportSerial','$pasportNumber','$pasportDate','$dateIssue','$organization','$passportIndex','$passportAdress','$actualIndex','$actualAdress','$dataRegistration','$phoneNumber','$dateFrom');";
		$sql .="SET @last_id_in_catalog = LAST_INSERT_ID();";
		$sql .="INSERT INTO education(userId,univesity,profession,diplom,diplomSerial,diplomNumber,yearEnd,okso)VALUES(@last_id_in_catalog,'$univesity','$profession','$diplom','$diplomSerial','$diplomNumber','$yearEnd','$okso');";		
		$sql .="INSERT INTO language(userId,foreignLanguage,levelLanguage,okinLanguage)VALUES(@last_id_in_catalog,'$foreignLanguage','$levelLanguage','$okinLanguage');";		
		$sql .="INSERT INTO relation(userId,relationDegree,nameRelation,dateBirthRelation)VALUES(@last_id_in_catalog,'$relationDegree','$nameRelation','$dateBirthRelation');";	
		if (!mysqli_multi_query($link, $sql)){
			print_r("Errormessage: %s\n", mysqli_error($link));
		}
		mysqli_close($link);
	}
	function search (){	
		global $link;
		$sql = "SELECT  name  FROM catalog ";
		$row = mysqli_query($link,$sql);
		return $row;
		mysqli_close($link);	
		}
	function selectAllClient($id){
		global $link;
		$sql="SELECT * FROM catalog,members,cild WHERE catalog.id=".$id." and catalog.id=members.familyNumber and catalog.id=cild.familyNumber";
		$result=mysqli_query($link,$sql);
		return $result;
		mysqli_close($link);
	}
	function selectActByRedact($id){
		global $link;
		$sql="SELECT * FROM akt WHERE familyNumber =".$id." ORDER BY data";
		$row = mysqli_query($link,$sql);
		return $row;
		mysqli_close($link);
	}
	function selectServByRedact($id){
		global $link;
		$sql="SELECT * FROM services WHERE familyNumber =".$id." ORDER BY data";
		$row = mysqli_query($link,$sql);
		return $row;
		mysqli_close($link);
	}
	function selectForCart($id){
		global $link;
		$sql="SELECT  'akt', id, familyNumber, actСode, actItself, data, result, userId,socialResult, kesh FROM akt WHERE familyNumber =".$id." UNION SELECT  'serv', id, familyNumber, serviceСode, serviceItself, data, result, userId,soother1,soother2 FROM services WHERE familyNumber =".$id." ORDER BY data";
		$row = mysqli_query($link,$sql);
		return $row;
		mysqli_close($link);
	}
	function selectFromReport($user){
		global $link;
		$sql="SELECT user.family,user.name,user.secondName,user.okpdtr,spesialis.prоfesion FROM user,spesialis WHERE user.id=".$user." and spesialis.id=user.okpdtr";
		$row = mysqli_query($link,$sql);
		return $row;
		mysqli_close($link);	
	}	
	function selectForSpecialist(){
		global $link;
		$sql="SELECT id,prоfesion FROM spesialis";
		$row = mysqli_query($link,$sql);
		return $row;
		mysqli_close($link);	
	}
	function selectForSpecializationFamilyForID($id){
		global $link;
		$sql="SELECT specialization FROM specializationFamily WHERE id=".$id;
		$row = mysqli_query($link,$sql);
		return $row;
		mysqli_close($link);	

	}	
	function selectForSpecializationFamilySave(){
		global $link;
		$sql="SELECT id,specialization FROM specializationFamily";
		$row = mysqli_query($link,$sql);
		return $row;
		mysqli_close($link);	
	}	
	function selectUserById($id){
		global $link;
		$sql="SELECT  id,family,pass,access FROM  `user` WHERE id='".$id."'";
		$row = mysqli_query($link,$sql);
		return $row;
		mysqli_close($link);
	}
	function specializationFamilySave($specialization){
		global $link;
		$sql="INSERT INTO specializationFamily (specialization) VALUES ('$specialization'); ";
		if(!mysqli_query($link, $sql)){
			print_r("Errormessage: %s\n", mysqli_error($link));
		}
		mysqli_close($link);
	}
	function selectReport(){
		global $link;
		$sql="SELECT template,id FROM tableHeader";
		$result=mysqli_query($link,$sql);
		return $result;
		mysqli_close($link);
	}
	function speshialistSave($prоfesion,$okin,$salary,$rate){
		global $link;
		$sql="INSERT INTO spesialis (prоfesion,okin,salary,rate) VALUES ('$prоfesion','$okin','$salary','$rate'); ";
		if(!mysqli_query($link, $sql)){
			print_r("Errormessage: %s\n", mysqli_error($link));
		}
		mysqli_close($link);
	}
	function selectTableHeader(){
		global $link;
		$sql="SELECT * FROM tableHeader";
		$result=mysqli_query($link,$sql);
		return $result;
		mysqli_close($link);
	}
	function selectTheAllClient($order){
		global $link;
		$sql="SELECT * FROM catalog LEFT JOIN members ON members.familyNumber = catalog.id LEFT JOIN cild ON cild.familyNumber = catalog.id  ORDER BY ".$order." ";
		$result=mysqli_query($link,$sql);
		return $result;
		mysqli_close($link);
	}
	function theSearchClient($name){
		global $link;
		$sql="SELECT catalog.id,name,adress,wrk,membersDegree,membersName,childDegree,childName FROM catalog,members,cild WHERE catalog.name='".$name."' and members.familyNumber=catalog.id and cild.familyNumber=catalog.id  ";
		$result=mysqli_query($link,$sql);
		return $result;
		mysqli_close($link);
	}
	function theId(){
		global $link;
		$sql="SELECT COUNT( id ) FROM  `user`";
		$row = mysqli_query($link,$sql);
		return $row;
		mysqli_close($link);
	}
	function upedate($id,$name,$membersDegree,$membersName,$membersWork,$membersDate,$dateBirth,$adress,$work,$childDegree,$childName,$childShcool,$childDate,$home,$leisure, $socialStruct,$specialization,$poroblemForFamily,$poroblemForExpert,$wayProblem,$workExpert,$result,$outher,$theUser,$userIdRedact,$dataRedact) {
		global $link;
		$date= date("Y-m-d H:i:s");
		$user=$theUser." ;% ".$userIdRedact;
		$sql = "UPDATE catalog,cild,members SET name='".$name."',dateBirth='".$dateBirth."',adress='".$adress."',wrk='".$work."',home='".$home."',leisure='".$leisure."',socialStruct='".$socialStruct."',specialization='".$specialization."',poroblemForFamily='".$poroblemForFamily."',poroblemForExpert='".$poroblemForExpert."',wayProblem='".$wayProblem."',workExpert='".$workExpert."',result='".$result."',outher='".$outher."',user='".$theUser."',date='".$date."',childDegree='".$childDegree."',childName='".$childName."',childShcool='".$childShcool."',childDate='".$childDate."',membersDegree='".$membersDegree."',membersName='".$membersName."',membersWork='".$membersWork."',membersDate='".$membersDate."' WHERE catalog.id=".$id." AND cild.familyNumber=".$id." AND members.familyNumber=".$id." ;";			
		if (!mysqli_query($link, $sql)){
			print_r("Errormessage: %s\n", mysqli_error($link));
		}
		mysqli_close($link);
	}
	function upedataAct($idAct,$dataAct,$actСode,$actItself,$actResult){
		global $link;
		$sql = "UPDATE akt SET actСode='".$actСode."' , actItself='".$actItself."', data='".$dataAct."', result='".$actResult."'  WHERE akt.id=".$idAct." ;";			
		if (!mysqli_query($link, $sql)){
			print_r("Errormessage: %s\n", mysqli_error($link));
		}
		mysqli_close($link);
	}
	function upedataServ($idServ,$dataServ,$servСode,$servItself,$servResult){
		global $link;
		$sql = "UPDATE services SET serviceСode='".$servСode."' , serviceItself='".$servItself."', data='".$dataServ."', result='".$servResult."'  WHERE services.id=".$idServ." ;";			
		if (!mysqli_query($link, $sql)){
			print_r("Errormessage: %s\n", mysqli_error($link));
		}
		mysqli_close($link);
	}
	function weekReportAct($user,$dateTo,$dataFrom){
		global $link;
			$sql="SELECT catalog.id, catalog.name, akt.*  FROM catalog, akt WHERE akt.userId=".$user." AND akt.data BETWEEN '".$dateTo."' AND '".$dataFrom."' and catalog.id=akt.familyNumber";
			$result =mysqli_query($link,$sql);
			return $result;
		mysqli_close($link);
	}
	function weekReportServices($user,$dateTo,$dataFrom){
		global $link;
			$sql="SELECT catalog.id, catalog.name, services.* FROM catalog, services WHERE services.userId=".$user." AND services.data BETWEEN '".$dateTo."' AND '".$dataFrom."'  and catalog.id=services.familyNumber ";          
			$result =mysqli_query($link,$sql);
		return $result;
		mysqli_close($link);
	}
	
	


?>