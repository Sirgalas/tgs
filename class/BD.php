<?php class db{
	try {
		$dsn = "mysql:host=localhost;dbname=tgs;charset=utf8";
		$opt = array(
			PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
			PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
		);
		$pdo = new PDO($dsn, 'root', '', $opt);
	

}