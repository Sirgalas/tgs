<?php include 'header.php'; ?>
	<div class="registerForm">
		<form action="register.php" method="get" class="regform">
			<p>
				<label>
					<span>Ваш логин:</span>
					<input name="login" type="text">
				</label>
			</p>
			<p>
				<label>
					<span>Ваш пароль:</span>
					<input name="password" type="password">
				</label>
			</p>
			<input type="submit" class="submit" value="Войти">
		</form>
	</div>
<?php include 'footer.php'; ?>