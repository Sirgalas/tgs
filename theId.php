<?php 
	$id=theId();
	while ($result = mysqli_fetch_assoc(id)) { 
		echo "<option value=".$result ['id'].">".$result['pr�fesion']."</option>";
	}
?>
<span> ��������� ����� � ������</span>
		<?php 
			$pass=getPass(); 
			$thePass=array_pop ($pass);
			$thePass=$thePass+1;
			echo $thePass ?>
<input type="hidden" class="password" value="<?php echo $thePass; ?>">