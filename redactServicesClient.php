<?php 
include 'header.php'; 
$userId=formatstr($_GET["userId"]);
?>
<form action="servAdd.php" methhod='get' class="redactServices">
	<input type="hidden" class="userId" value="<?php echo formatstr($_GET["userId"]);?>" />
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
		<span>датa оказания услуги </span>
		<input type="text" name="dataServices" class="dataServices datepicker">
	</label>	
		<section id="serviceAdd">
			<label>
				<span> название услуги</span>
				<input type="text" name="servicesCode[]" class="servicesCode">
			</label>
			<label>
				<span> рекомендации данные в акте</span>
				<input type="text" name="servicesItself[]" class="servicesItself" />
			</label>
			<a href="#" class="pluss">+</a>
		</section>
	<!--<label>
		<span> рекомендации данные в акте</span>
		<input type="text" name="servicesResult" class="servicesResult" />
	</label>-->
	<a href="#" class="submit" id="addServices">Внести</a>
</form>