<form action="addToUser.php" mehod="post" class="user" value="" />

	<label>
		<span>введите фамилию пользователя</span>
		<input type="text" name="family" class="family" value="" />
	</label>
	<label>
		<span>введите имя пользователя</span>
		<input type="text" name="name" class="nameUser" value="" />
	</label>
	<label>
		<span>введите отчество пользователя</span>
		<input type="text" name="secondName"class="sName" value="" />
	</label>
	
	<p id="thePass"><span> Табельный номер и пароль</span>
		<?php 
			$pass=getPass(); 
			$thePass=array_pop ($pass);
			$thePass=$thePass+1;
			echo $thePass ?>
		<input type="hidden" class="password" value="<?php echo $thePass; ?>">
	</p>
	<label>
		<span>выберите категорию доступа</span>
		<select name="access" class="access" value="">
			<option value="0">Супер админ</option>
			<option value="1">Директор</option>
			<option value="2">Заместитель</option>
			<option value="3">Кадровик</option>
			<option value="4">другие должности</option>
			<option value="5">должности без права бд</option>
			<option value="6">уволен</option>
			<option value="7">дикретный отпуск</option>
		</select>
	</label>
	<label>
		<span>введите дата приема</span>
		<input type="text" name="dateTo" class="dateTo datepicker" value="" />
	</label>
	<label>
		<span>введите СНИЛС</span>
		<input type="text" name="snils" class="snils" value="" />
	</label>
	<label>
		<span>введите пол</span>
		<input type="text" name="sex" class="sex" value="" />
	</label>
	<label>
		<span>введите номер договора последний договор <?php $agreementNumber=lastDog();$theAgreementNumber=array_pop ($agreementNumber); echo $theAgreementNumber;?></span>
		<input type="text" name="agreementNumber" class="agreementNumber" value="" />
	</label>
	<label>
		<span>введите дату рождения</span>
		<input type="text" name="birthday" value=""  class="birthday datepicker" />
	</label>
	<label>
		<span>введите место рождения</span>
		<input type="text" name="placeBirth" class="placeBirth" value="" />
	</label>
	<label>
		<span>введите гражданство</span>
		<input type="text" name="citizenship" class="citizenship" value="" />
	</label>
	<label class="plus border" id="foreignLanguage">
		<span>знание языка</span>
		<input type="text" name="foreignLanguage[]" class="foreignLanguage" value="" />
		<span>степень знания языка</span>
		<input type="text" name="levelLanguage[]" class="levelLanguage" value="" />
		<span>окин языка</span>
		<input type="text" name="okinLanguage[]" class="okinLanguage" value="" />
		<a href="#">+</a>
	</label>
	<label>
		<span>образование</span>
		<input type="text" name="education" class="education" value="" />
	</label>
	<label>
		<span>образование ОКИН</span>
		<input type="text" name="okinEducation" class="okinEducation" value="" />
	</label>
	<label id="education" class="plus border">
		<span>название заведения</span>
		<input type="text" name="univesity[]" class="univesity relation" value="" />
		<span>професия по диплому</span>
		<input type="text" name="profession[]" class="profession relation" value="" />
		<span>название атестационного документа </span>
		<input type="text" name="diplom[]" class="diplom relation" value="Диплом" />
		<span>серия атестационного документа </span>
		<input type="text" name="diplomSerial[]" class="diplomSerial relation" value="" />
		<span>номер атестационного документа </span>
		<input type="text" name="diplomNumber[]" class="diplomNumber relation" value="" />
		<span>год окончания</span>
		<input type="text" name="yearEnd[]" class="yearEnd relation" value="" />
		<span>ОКСО</span>
		<input type="text" name="okso[]" class="okso relation" value="" />
		<a href="#">+</a>
	</label>
	<label>
		<span>выбирите должность</span>
		<select name="work" class="work">

		<?php 
			$spec=selectForSpecialist();
			while ($result = mysqli_fetch_assoc($spec)) { 
				echo "<option value=".$result ['id'].">".$result['prоfesion']."</option>";
			}
		?>
		</select>
	</label>
	<label>
		<span>введите колличество дней стажа </span>
		<input type="text" name="experienceDay" class="experienceDay" value="" />
	</label>
	<label>
		<span>введите колличество месяцев стажа </span>
		<input type="text" name="experienceMounts" class="experienceMounts" value="" />
	</label>
	<label>
		<span>введите колличество лет стажа </span>
		<input type="text" name="experienceYers" class="experienceYers" value="" />
	</label>
	<label>
		<span>Состояние в браке</span>
		<input type="text" name="married" class="married" value="" />
	</label>
	<label>
		<span>ОКИН брака</span>
		<input type="text" name="marriedOkin" class="marriedOkin" value="" />
	</label>
	<label id="relation" class="plus border">
		<span>Cтепень родства</span>
		<input type="text" name="relationDegree[]" class="relationDegree relation" value="" />
		<span>введите ФИО члена семьи</span>
		<input type="text" name="nameRelation[]" class="nameRelation relation" value="" />
		<span>введите дату рождения члена семьи</span>
		<input type="text" name="dateBirthRelation[]" class="dateBirthRelation relation datepicker" value="" />
		<a href="#">+</a>
	</label>
	<label>
		<span>введите название организации которая выдала паспорт</span>
		<textarea name="organization" class="organization resizable" value="" /></textarea>
	</label>
	<label>
		<span>введите серию паспорта </span>
		<input type="text" name="pasportSerial" class="pasportSerial" value="" />
	</label>
	<label>
		<span>введите номер паспорта </span>
		<input type="text" name="pasportNumber" class="pasportNumber" value="" />
	</label>
	<label>
		<span>введите дата выдача  паспорта </span>
		<input type="text" name="pasportDate" class="pasportDate" value="" />
	</label>
	<label>
		<span>введите дату выдачи паспорта </span>
		<input type="text" name="dataRegistration" class="dataRegistration datepicker" value="" />
	</label>
	<label><span>индекс по паспорту </span>
		<input type="text" name="passportIndex" class="passportIndex" value="" />
	</label>
	<label><span>адрес  по паспорту </span>
		<input type="text" name="passportAdress" class="passportAdress" value="" />
	</label>
	<label><span>индекс проживания </span>
		<input type="text" name="actualIndex" class="actualIndex" value="" />
	</label>
	
	<label><span>адрес  пороживания </span>
		<input type="text" name="actualAdress" class="actualAdress" value="" />
	</label>
	<label>
		<span>введите номер телефона </span>
		<input type="text" name="phoneNumber" class="phoneNumber" value="" />
	</label>
	<label>
		<span>введите срок заключения договора</span>
		<input type="text" name="datadog" class="datepicker" value="" />
	</label>
	<a class="submit" id="addToUser" href="#">Ввнести</a>
	<input type="reset" class="hidden" value="" id="userReset"/>
</form>