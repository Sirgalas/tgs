<form action="reportCase.php" method="get">
	<input type="hidden"  class="userId"  name="userId" value="<?php echo $user[id]; ?>"/>
	<select  name="selReport" class="selReport">
		<option value="0" class="weeks">еженедельный отчет</option>
		<?php 
			$select=selectReport();
			while ($result = mysqli_fetch_assoc($select)) { 
				?>
				<option class="<?php echo $result[id] ?>" value="<?php echo $result[id] ?>"><?php echo $result[template]; ?></option>
				<?php
			} ?>
	</select>
	<div id="weeks">
		<label>
			<span>Начало отчета</span>
			<input type="text" class="reportTo" name="reportTo">
		</label>
		<label>
			<span>Конец отчета</span>
			<input type="text" class="reportFrom" name="reportFrom">
		</label>
	</div>
	<div id="tgs" class="roundedOne">
		<label>
			<span>по фамилии</span>
			<input type="radio" class="family" id="roundedOne" name="orderBy" value="name">
			 <label for="roundedOne"></label>
		</label>
		<label>
			<span>по адресу</span>
			<input type="radio" class="adress" id="roundedTwo" name="orderBy" value="adress" >
			 <label for="roundedTwo"></label>
		</label>
	</div>
	
	<input type="submit" class="theReport submit" value="Вывести отчет" />
</form>