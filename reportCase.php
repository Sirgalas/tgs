<?php 
include 'header.php';
	$post=$_GET;
	$order=$post[orderBy];
	$user=$post[userId];
	if($post[selReport]==0){
		
		$dateTo=$post[reportTo];
		$dataFrom=$post[reportFrom];
		
		
		$actСode;
		$serviceСode;
		$userName;
		$userFamily;
		$userSecondName;
		$userPrоfesion;
		$theUser=selectFromReport($user);
			while ($result = mysqli_fetch_assoc($theUser)) {
				global $userName;
				global $userFamily;
				global $userSecondName;
				global $userPrоfesion;
				$userName= $result[name];
				$userFamily= $result[family];
				$userSecondName= $result[secondName];
				$userPrоfesion = $result[prоfesion];
			}
		$resultAct=preg_match('/[1-9]+[\-]+[0-9]+[0-9]/',$akts);
		$elDataTo=explode("-",$dateTo);
		$theDataTo= date_create();
		$theDataTo=date_date_set($theDataTo,$elDataTo[0],$elDataTo[1],$elDataTo[2]);
		$elDataFrom=explode("-",$dataFrom);
		$theDataFrom= date_create();
		$theDataFrom=date_date_set($theDataFrom,$elDataFrom[0],$elDataFrom[1],$elDataFrom[2]);
		echo "Отчет о проделанной работе  : <br/>";
		echo "<strong> должность : </strong>".$userPrоfesion." ГБУ РК «Алуштинский ЦСССДМ» ; <br/>";
		echo "<strong>Фамилия имя отчество : </strong>".$userFamily." ".$userName." ".$userSecondName.". <br/>";
		echo "Период с ".date_format($theDataTo, 'd.m.Y')."г. по ".date_format($theDataFrom, 'd.m.Y')."г. <br/> "; ?>
		<h3>Информация о выходах</h3>
		<table border="1" cellspacing="0" cellpadding="7">
			<thead>
				<tr>
					<th>Семья</td>
					<th>название услуги в акте социального обследования</td>
					<th>описание услуги в акте социального обследования</td>
				</tr>
			</thead>
			<tboby>
			<?php $weekRepAkt=weekReportAct($user,$dateTo,$dataFrom);
			while ($result = mysqli_fetch_assoc($weekRepAkt)) {
				global $actСode; ?>
				<tr>
					<td><?php 
						$name=str_replace(";%","<br/>",$result[name]);
						echo $name;
					?></td>
					<td><?php
					$code=str_replace(";%","<br/>",$result[actСode]);
					echo $code;
					?></td>
					<td><?php
					$self=str_replace(";%","<br/>",$result[actItself]);
					echo $self; ?></td>
				</tr>	
			<?php } ?>

			</tbody>
		</table></br>
		<?php $resultAktServ=substr_count($actItself,";%");	
		echo "Количество выходов :".$resultAct.".<br/>"; ?>
		<h3>Информация о предоставленых услугах</h3>
		<table border="1" cellspacing="0" cellpadding="7">
			<thead>
				<tr>
					<th>Семья</td>
					<th>название услуги в акте приема оказаной услуги</td>
					<th>описание услуги в акте приема оказаной услуги</td>
				</tr>
			</thead>
			<tboby>
			
			<?php 
				$weekReportServ=weekReportServices($user,$dateTo,$dataFrom);
				while ($result = mysqli_fetch_assoc($weekReportServ)) { 
				
				global $serviceСode;
				$serviceСode.=$result[serviceСode]; 
				?>
				<tr>
					<td><?php echo $result[name];?></td>
					<td><?php $serviceСodeWhile=$result[serviceСode]; 
					 $EserviceСode=str_replace(";%","<br/>",$serviceСodeWhile);
					echo $EserviceСode; ?></td>
					<td><?php $serviceItself=$result[serviceItself]; 
					$serviceItselfE=str_replace(";%","<br/>",$serviceItself);
					echo $serviceItselfE;
					?></td>
				</tr>-
			<?php } ?>
		
			</tbody>
		</table><br/>
		<?php 
		$resultServ=substr_count($serviceСode,";%");
		$sum= (int)$resultServ+(int)$serviceСode;
		echo"Количество оказаных услуг:".$sum.".<br/>"; 

	}else{
		echo "<table class='report'>";
		$clients=selectTableHeader();
		while ($result = mysqli_fetch_assoc($clients)) {
		?>
			<thead>
				<tr>
					<td rowspan="2">№/пп</td>
					<td colspan="4"><?php echo $result[one]; ?></td>
					<td colspan="4"><?php echo $result[two]; ?></td>
					<td colspan="4"><?php echo $result[three]; ?></td>
					<td colspan="16"><?php echo $result[four]; ?></td>
				</tr>
				<tr>
					<td class="col"><?php echo $result[five]; ?></td>
					<td class="col"><?php echo $result[six]; ?></td>
					<td class="col"><?php echo $result[seven]; ?></td>
					<td class="col"><?php echo $result[eight]; ?></td>
					<td class="col"><?php echo $result[nine]; ?></td>
					<td class="col"><?php echo $result[ten]; ?></td>
					<td class="col"><?php echo $result[eleven]; ?></td>
					<td class="col"><?php echo $result[twelve]; ?></td>
					<td class="col"><?php echo $result[thirteen]; ?></td>
					<td class="col"><?php echo $result[fourteen]; ?></td>
					<td class="col"><?php echo $result[fifteen]; ?></td>
					<td class="col"><?php echo $result[sixteen]; ?></td>
					<td class="col"><?php echo $result[seventeen]; ?></td>
					<td class="col"><?php echo $result[eighteen]; ?></td>
					<td class="col"><?php echo $result[nineteen]; ?></td>
					<td class="col"><?php echo $result[twenty]; ?></td>
					<td class="col"><?php echo $result[twenty_one]; ?></td>
					<td class="col"><?php echo $result[twenty_two]; ?></td>
					<td class="col"><?php echo $result[twenty_three]; ?></td>
					<td class="col"><?php echo $result[twenty_five]; ?></td>
					<td class="col"><?php echo $result[twenty_six]; ?></td>
					<td class="col"><?php echo $result[twenty_seven]; ?></td>
					<td class="col"><?php echo $result[twenty_eight]; ?></td>
					<td>Карточка семьи</td>
				</tr>
			</thead>
		<?php } ?>
			<tbody>
			<?php 
			$theClients=selectTheAllClient($order);
				while ($cl= mysqli_fetch_assoc($theClients)){ ?>
				<tr>
					<td><?php echo $cl[id]; ?></td>
					<td><?php echo $cl[name]; ?></td>
					<td><?php echo $cl[dateBirth]; ?></td>
					<td><?php echo $cl[adress]; ?></td>
					<td><?php echo $cl[wrk]; ?></td>
					<td><?php 
						$membersDegree=preg_split("/;%/",$cl[membersDegree]);
						foreach($membersDegree as $md){
							echo $md;
						}
					?></td>
					<td><?php 
					$membersName=preg_split("/;%/",$cl[membersName]);
						foreach($membersName as $mn){
							echo $mn;
						} ?>
					</td>
					<td><?php 
					$membersWork=preg_split("/;%/",$cl[membersWork]);
						foreach($membersWork as $mw){
						echo $mw;} ?></td>
					<td><?php
						$membersDate=preg_split("/;%/",$cl[membersDate]);
						foreach($membersDate as $md){
						if($md!=0000-00-00){
						echo $md;} }?></td>
					<td><?php
						$childDegree=preg_split("/;%/",$cl[childDegree]);
						foreach($childDegree as $cd){
						echo $cd;} ?></td>
					<td><?php 
					$childName=preg_split("/;%/",$cl[childName]);
						foreach($childName as $cn){
							echo $cn;
						}  ?></td>
					<td><?php 
					$childShcool=preg_split("/;%/",$cl[childShcool]);
						foreach($childShcool as $cs){
							echo $cs;
						}  ?></td>
					<td><?php
					$childDate=preg_split("/;%/",$cl[childDate]);
						foreach($childDate as $cs){
						if($cs!=0000-00-00){
						echo $cd;}
						} ?></td>
					<td><?php echo $cl[home] ?></td>
					<td><?php echo $cl[leisure]; ?></td>
					<td><?php echo $cl[socialStruct]; ?></td>
					<td><?php 
						
					?></td>
					<td><?php echo $cl[poroblemForFamily]; ?></td>
					<td><?php echo $cl[poroblemForExpert]; ?></td>
					<td><?php echo $cl[wayProblem]; ?></td>
					<td><?php 
						$idFAmily=$cl[id];
						$work =selectForCart($idFAmily); 
							while ($cp= mysqli_fetch_assoc($work)){
								
								echo $cp["data"]." ". str_replace(";%",", ",$cp ["actСode"])." ". str_replace(";%",", ",$cp ["actItself"])." ".str_replace(";%",", ",$cp ["result"])."<br/>";
							}
					?></td>
					<td><?php echo $cl[result]; ?></td>
					<td><?php echo $cl[outher]; ?></td>
					<td><?php 
						$actdata=preg_split("/;%/",$cl[data]);
						foreach($actdata as $data){
						if($data!=0000-00-00){
						echo $data;}} ?></td>
					<td><a href="CartFamile.php?id=<?php echo $idFAmily ?>">Карточка семьи</a></td>
					
				</tr>
			<?php } ?>
			</tbody>
		</table>
		
		
		
	<?php
	} ?>