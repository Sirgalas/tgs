<?php
// Создание структуры Базы Данных гостевой книги
	define("DB_HOST", "localhost");
	define("DB_LOGIN", "root");
	define("DB_PASSWORD", "");
	define("DB_NAME", "tgs");

mysql_connect(DB_HOST, DB_LOGIN, DB_PASSWORD) or die(mysql_error());

$sql = 'CREATE DATABASE ' . DB_NAME;
mysql_query($sql) or die(mysql_error());

mysql_select_db(DB_NAME) or die(mysql_error());

$sql = "
CREATE TABLE catalog (
	id int(11) NOT NULL auto_increment,
	name varchar(550) NOT NULL default '',
	dateBirth varchar(550) NOT NULL default '',
	adress varchar(550) NOT NULL default '',
	wrk varchar(550) NOT NULL default '',
	home varchar(550) NOT NULL default '',
	leisure varchar(550) NOT NULL default '',
	socialStruct varchar(550) NOT NULL default '',
	specialization int(11) NOT NULL,
	poroblemForFamily varchar(550) NOT NULL default '',
	poroblemForExpert varchar(550) NOT NULL default '',
	wayProblem varchar(550) NOT NULL default '',
	workExpert varchar(550) NOT NULL default '',
	result varchar(550),
	outher  varchar(550),
	user  varchar(550),
	date  date(11) NOT NULL default '0000-00-00',
	PRIMARY KEY (id)
)";
mysql_query($sql) or die(mysql_error());
$sql = "
CREATE TABLE cild (
	id int(11) NOT NULL auto_increment,
	familyNumber int(11) NOT NULL ,
	childDegree varchar(550) NOT NULL default '',
	childName varchar(550) NOT NULL default '',
	childShcool varchar(550) NOT NULL default '',
	childDate  date(11) NOT NULL default '0000-00-00',
	PRIMARY KEY (id)
)";
mysql_query($sql) or die(mysql_error());
$sql = "
CREATE TABLE members (
	id int(11) NOT NULL auto_increment ,
	familyNumber int(11) NOT NULL ,
	membersDegree varchar(550) NOT NULL default '',
	membersName varchar(550) NOT NULL default '',
	membersWork varchar(550) NOT NULL default '',
	membersDate  date(11) NOT NULL default '0000-00-00',
	PRIMARY KEY (id)
)";
mysql_query($sql) or die(mysql_error());
$sql = "
CREATE TABLE services (
	id int(11) NOT NULL auto_increment,
	familyNumber int(11) NOT NULL,
	serviceСode varchar(550) default '',
	serviceItself varchar(550) default '',
	serviceDate date(11) NOT NULL default '0000-00-00',
	PRIMARY KEY (id)
)";
mysql_query($sql) or die(mysql_error());

$sql = "
CREATE TABLE services (
	id int(11) NOT NULL auto_increment,
	familyNumber int(11) NOT NULL,
	actСode varchar(550) default '',
	actItself varchar(550) default '',
	data  date(11) NOT NULL default '0000-00-00',
	PRIMARY KEY (id)
)";
mysql_query($sql) or die(mysql_error());


$sql = "
CREATE TABLE specializationFamily (
	id int(11) NOT NULL auto_increment,
	specialization varchar(550) default '',
	PRIMARY KEY (id)
)";
mysql_query($sql) or die(mysql_error());

$sql = "
CREATE TABLE user (
	id int(11) NOT NULL auto_increment,
	name varchar(550) NOT NULL default '',
	family varchar(550) NOT NULL default '',
	secondName varchar(550) NOT NULL default '',
	pass varchar(550) NOT NULL default '',
	access int(4) NOT NULL ,
	dateTo date(11) NOT NULL default '0000-00-00',
	snils int(11) NOT NULL ,
	birthday varchar(550) NOT NULL default '',
	sex varchar(550) NOT NULL default '',
	agreementNumber int(4) NOT NULL,
	agreementDate date(11) NOT NULL default '0000-00-00',
	placeBirth varchar(550) NOT NULL default '',
	citizenship varchar(550) NOT NULL default '',
	education varchar(550) NOT NULL default '',
	okinEducation int(11) NOT NULL,
	wrk varchar(550) NOT NULL default '',
	okpdtr varchar(550) NOT NULL default '',
	experienceYers int(4) ,
	experienceMounts int(4),
	experienceDay int(4),
	married  varchar(550) NOT NULL default '',
	marriedOkin  varchar(550) NOT NULL default '',
	pasportSerial int(11) NOT NULL,
	pasportNumber int(11) NOT NULL,
	pasportDate date(11) NOT NULL default '0000-00-00',
	dateIssue date(11) NOT NULL default '0000-00-00',
	organization varchar(550) NOT NULL default '',	
	passportIndex int(11) NOT NULL,
	passportAdress varchar(550) NOT NULL default '',
	actualIndex int(11) NOT NULL,
	actualAdress varchar(550) NOT NULL default '',	
	dataRegistration date(11) NOT NULL default '0000-00-00',
	phoneNumber int(15) NOT NULL,
	dateFrom date(11) NOT NULL default '0000-00-00',
	reason varchar(550) NOT NULL default '',
	PRIMARY KEY (id) 
)";
mysql_query($sql) or die(mysql_error());

$sql = "
CREATE TABLE spesialis (
	id int(11) NOT NULL auto_increment,
	prоfesion varchar(550) NOT NULL default '',
	okin int(11) NOT NULL,
	salary int(11) NOT NULL,
	rate int(11) NOT NULL,
	PRIMARY KEY (id)
)";
mysql_query($sql) or die(mysql_error());

$sql = "
CREATE TABLE hooky (
	id int(11) NOT NULL auto_increment,
	reason varchar(550) NOT NULL default '',
	fromiHooky varchar(550) NOT NULL default '',
	toHooky varchar(550) NOT NULL default '',
	PRIMARY KEY (id)
)";
mysql_query($sql) or die(mysql_error());

$sql = "
CREATE TABLE education (
	id int(11) NOT NULL auto_increment,
	userId int(11) NOT NULL,
	univesity varchar(550) NOT NULL default '',
	profession varchar(550) NOT NULL default '',
	diplom varchar(550) NOT NULL default '',
	diplomSerial varchar(550) NOT NULL default '',
	diplomNumber varchar(550) NOT NULL default '',
	yearEnd int(11) NOT NULL ,
	okso int(11) NOT NULL ,
	PRIMARY KEY (id)
)";
mysql_query($sql) or die(mysql_error());

$sql = "
CREATE TABLE language (
	id int(11) NOT NULL auto_increment,
	userId int(11) NOT NULL,
	foreignLanguage varchar(550) NOT NULL default '',
	levelLanguage varchar(550) NOT NULL default '',
	okinLanguage varchar(550) NOT NULL default '',
	PRIMARY KEY (id)
)";
mysql_query($sql) or die(mysql_error());
$sql = "
CREATE TABLE relation (
	id int(11) NOT NULL auto_increment,
	userId int(11) NOT NULL,
	relationDegree varchar(550) NOT NULL default '',
	nameRelation varchar(550) NOT NULL default '',
	dateBirthRelation int(11) NOT NULL,
	PRIMARY KEY (id)
)";
mysql_query($sql) or die(mysql_error());

$sql = "
CREATE TABLE tableHeader (
	id int(11) NOT NULL auto_increment,
	template varchar(550) NOT NULL default '',
	one varchar(550) NOT NULL default '',
	two varchar(550) NOT NULL default '',
	three varchar(550) NOT NULL default '',
	four varchar(550) NOT NULL default '',
	five varchar(550) NOT NULL default '',
	six varchar(550) NOT NULL default '',
	seven varchar(550) NOT NULL default '',
	eight varchar(550) NOT NULL default '',
	nine varchar(550) NOT NULL default '',
	ten varchar(550) NOT NULL default '',
	eleven varchar(550) NOT NULL default '',
	twelve varchar(550) NOT NULL default '',
	thirteen varchar(550) NOT NULL default '',
	fourteen varchar(550) NOT NULL default '',
	fifteen varchar(550) NOT NULL default '',
	sixteen varchar(550) NOT NULL default '',
	seventeen varchar(550) NOT NULL default '',
	eighteen varchar(550) NOT NULL default '',
	nineteen varchar(550) NOT NULL default '',
	twenty varchar(550) NOT NULL default '',
	twenty_one varchar(550) NOT NULL default '',
	twenty_two varchar(550) NOT NULL default '',
	twenty_three varchar(550) NOT NULL default '',
	twenty_five varchar(550) NOT NULL default '',
	twenty_six varchar(550) NOT NULL default '',
	twenty_seven varchar(550) NOT NULL default '',
	twenty_eight varchar(550) NOT NULL default '',
	twenty_nine varchar(550) NOT NULL default '',
	thirty varchar(550) NOT NULL default '',
	PRIMARY KEY (id)
)";
mysql_query($sql) or die(mysql_error());

mysql_close();

print '<p>Структура базы данных успешно создана!</p>';
?>