<?php require "function.php"; 
$name=formatstr($_GET["name"]);
$userID=formatstr($_GET["userId"]);
$str=theSearchClient($name);?>
<table class="clientSearch">
	<tr>
		<th>ФИО</th>
		<th>Контактные данные</th>
		<th>Трудовая занятость</th>
		<th>Совершенолетние члены семьи</th>
		<th>Несовершенолетние члены семьи </th>
		<th>редактировать</th>
	</tr>
<?php while ($clients = mysqli_fetch_assoc($str)) {	
?>	<tr>
		<td><?php echo $clients["name"]; ?></td>
		<td><?php echo $clients["adress"]; ?></td>
		<td><?php echo $clients["wrk"]; ?></td>
		<td><?php
				$membersd=preg_split("/;%/",$clients["membersDegree"]);
				$members=preg_split("/;%/",$clients["membersName"]);
				if(is_array($membersd)){
					foreach($membersd as $i=>$k)
					{
						echo $k." ".$members[$i]."<br/>";
					}
				}else{ 
					echo $clients["membersDegree"]." ".$clients["membersName"]."<br/>"; 
				} 
		?></td>
		<td>
			 <?php
				$childd=preg_split("/;%/",$clients["childDegree"]);
				$child=preg_split("/;%/",$clients["childName"]);
				if(is_array($childd)){
					foreach($childd as $i=>$k)
					{
						echo $k." ".$child[$i]."<br/>";
					}
				}else{ 
					echo $clients["childDegree"]." ".$clients["childName"]."<br/>";
				}
			?>
		</td>
		<td><?php echo "<a href='redactClient.php?id=".$clients["id"]."&userId=".$userID."'>редактировать</a>"; ?></td>
		<td><?php echo "<a href='redactAktClient.php?id=".$clients["id"]."&userId=".$userID."'>Добавить акт</a>"; ?></td>
		<td><?php echo "<a href='redactServicesClient.php?id=".$clients["id"]."&userId=".$userID."'>Добавить услугу</a>"; ?></td>
	</tr>
<?php } ?>

</table>