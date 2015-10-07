<div class="acardion">
	<h3>Найти семью</h3>
	<div>
		<form action="theSearch.php" mehod="post" class="clientSearch "/>
			<label>
					<span>введите фамилию имя  отчество клиента</span>
					<input type="text" name="name" class="name" id="nameSearch" value=""/>
					<input type="hidden" name="userId" class="userIdForAct" value="<?php echo $user[id]; ?>"
			</label>
			<a href="#" class="submit" id="searchClient">Найти</a>
		</form>
		<div id="theClientSearch"></div>
	</div>
	<h3>Ввести данные</h3>
	<div>
		<form action="addClient.php" mehod="post" class="client"/>
			<h2>Данные на представителя семьи</h2>
			<label>
				<span>введите фамилию имя  отчество клиента</span>
				<input type="text" name="name" class="name" id="name" value=""/>
			</label>

			<label>
				<span>введите дату рождения клиента </span>
				<input type="text" name="dateBirth" class="dateBirth datepicker" value=""/>
			</label>
			<label>
				<span>введите контактные данные</span>
				<input type="text" name="adress" class="adress" value=""/>
			</label>
			<label>
				<span>введите место работы клиента</span>
				<input type="text" name="work" class="work"  value=""/>
			</label>
			<h2>Данные на взрослых членов семьи</h2>
			<label class="plus" id="membersName">
				<span>введите cтепень родства взрослого члена семьи</span>
				<input type="text" name="membersDegree[]"class="membersDegree" value=""/>
				<span>введите данные взрослого члена семьи</span>
				<input type="text" name="membersName[]"class="membersName" value=""/>
				<span>введите место работы взрослого члена семьи</span>
				<input type="text" name="membersWork[]"class="membersWork" value=""/>
				<span>введите дату рождения взрослого члена семьи</span>
				<input type="text" name="membersData[]"class="membersData datepicker" value=""/>
				<a href="#">+</a>
			</label>
			<h2>Данные нанесовршенолетних членов семьи</h2>
			<label id="childName" class="plus">
				<span>Степень родства</span>
				<input type="text" name="childDegree[]" class="childDegree" value=""/>
				<span>введите данные на  ребенка</span>
				<input type="text" name="childName[]" class="childName" value=""/>
				<span>введите учебное заведение ребенка</span>
				<input type="text" name="childShcool[]" class="childShcool" value=""/>
				<span>введите дату рождения ребенка</span>
				<input type="text" name="childData[]" class="childData  datepicker" value=""/>
				<a href="#">+</a>
			</label>
			<h2>Общая характеристика семьи</h2>
			<label>
				<span>введите характеристику жилья клиента</span>
				<textarea name="home" class="home" value=""></textarea>
			</label>
			<label>
				<span>Наличие мест досуга в населенном пункте, отдаленность (детские площадки, кружки, секции) наличие мест, наполняемость</span>
				<textarea name="leisure" class="resizable leisure" value=""></textarea>
			</label>
			<label>
				<span>введите доступность к социальным структурам</span>
				<textarea name="socialStruct" class="resizable socialStruct" value=""></textarea>
			</label>
			<label>
				<span>выбирите специализация семьи</span>
				<select name="specialization" class="specialization">

				<?php 
					$spec=selectForSpecializationFamilySave();
					while ($result = mysqli_fetch_assoc($spec)) { 
						echo "<option value=".$result ['id'].">".$result['specialization']."</option>";
					}
				?>
				</select>
			</label>
			<label>
				<span>Проблемы семьи со слов клиента</span>
				<textarea name="poroblemForFamily" class="resizable poroblemForFamily" value=""/></textarea>
			</label>
			<label>
				<span>Проблемы семьи по мнению специалиста</span>
				<textarea name="poroblemForExpert" class="resizable poroblemForExpert" value=""/></textarea>
			</label>
			<label>
				<span>Пути решения проблемы</span>
				<textarea name="wayProblem" class="resizable wayProblem" value=""/></textarea>
			</label>
			<label>
				<span>Результаты работы</span>
				<textarea name="result" class="resizable result" value=""/></textarea>
			</label>
			<label>
				<span>Примичание</span>
				<textarea name="outher" class="resizable" value=""/></textarea>
			</label>
			<input type="hidden" value="<?php echo $user['id'];?>" class="userId"/>
			<a href="#" class="submit" id="addClient">Внести</a>
				<input type="reset"  class="hidden" id="Client"/>
		</form>
	</div>
</div>