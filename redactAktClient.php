<?php 
include 'header.php'; 
$userId=formatstr($_GET["userId"]);
?>
<form action="radectAkt.php" methhod='get' class="redactAct">
	<input type="hidden" class="userId" value="<?php echo $userId;?>" />
	<input type="hidden" class="familyId" value="<?php echo formatstr($_GET["id"]);?>" />
	<?php 
		$user=selectUserById($userId);
			while ($result = mysqli_fetch_assoc($user)) { 
				 ?>
				<input type="hidden" class="login" value="<?php echo $result["family"];?>" />
				<input type="hidden" class="pass" value="<?php echo $result["pass"];?>" />
	<?php		}
	?>
	<label>
		<span>датa составления акта</span>
		<input type="text" name="dataAkt" class="dataAkt datepicker">
	</label>	
	<label>
		<span> Результаты социального обследования</span>
		<input type="text" name="socialResult" class="socialResult" />
	</label>
	<label>
		<span>Среднемесячный доход семьи</span>
		<input type="text" name="kesh" class="kesh" />
	</label>
	<section  id="actIdServ">
		<label >
			<span> название услуги</span>
			<input type="text" name="actCode" class="actCode">
		</label>
		<label>
			<span> описание услуги</span>
			<input type="text" name="actItself" class="actItself" />
		</label>
		<a href="#" class="pluss">+</a>
	</section>
	
	<label>
		<span> результаты работы</span>
		<input type="text" name="actResult" class="actResult" />
	</label>
	<a href="#" class="submit" id="addAct">Внести</a>
	<input type="reset"  class="hidden" id="act"/>
</form>