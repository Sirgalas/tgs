<?php include 'header.php'; ?>
 <?php
	if (isset($_GET['login'])) { $login = $_GET['login']; if ($login == '') { unset($login);} } 
	if (isset($_GET['password'])) { $password=$_GET['password']; if ($password =='') { unset($password);}}
	if (empty($login) or empty($password)) 
	{
	exit ("Вы ввели не всю информацию, вернитесь назад и заполните все поля!");}
		$login = formatstr( $login);
		$password = formatstr( $password);
		$conect=registrUser($login,$password);
			while ($user = mysqli_fetch_assoc($conect)) {
				if($password==$user['pass']){	
				
    ?>
				<h1>Добро пожаловать</h1>
				<h2> что вы хотите?</h2>
				<div id="tabs">
					<ul>
						<li>
							<a href="#tabs-1">Внести/найти семью</a>
						</li>
						<?php if($user["access"]>=4){}else{ ?>
							<li>
								<a href="#tabs-2">Вывести пользователя</a>
							</li>
							
							<li>
								<a href="#tabs-3">Добавить пользователя</a>
							</li>
						<?php } ?>
						<li>
							<a href="#tabs-4">Получить отчет</a>
						</li>
						<?php if($user["access"]>=4){}else{ ?>
							<li>
								<a href="#tabs-5">Администрирование</a>
							</li>
						<?php } ?>
					</ul>
					<div id="tabs-1">
						<?php include "work.php" ?>
					</div>
					<?php if($user["access"]>=4){}else{ ?>
						<div id="tabs-2">
							<?php include 'theUser.php' ?>
						</div>
						<div id="tabs-3">
							<?php include 'just.php' ?>
						</div>
					<?php } ?>
					<div id="tabs-4">
						<?php include 'reports.php' ?>
					</div>
					<?php if($user["access"]>=4){}else{ ?>
						<div id="tabs-5">
							<?php include 'admin.php' ?>
						</div>
					<?php } ?>	
				</div>
		<?php }else{
			echo"<div id='error'><h1 class='erorr'>Вы ввели не правельный прароль</h1></div>";
		}
			}
?>
<?php include 'footer.php'; ?>