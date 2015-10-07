<?php include 'header.php';
	$id=$_GET["id"];
	$str= selectAllClient($id); 
	while ($clients = mysqli_fetch_assoc($str)) { ?>
		<div class='WordSection'>
			<table class='MsoTableGrid' border=1 cellspacing=0 cellpadding=0 >
				<tr class="height">
					<td width=329 colspan=2 valign="top" style="margin-bottom:0cm;margin-bottom:.0001pt;line-height: normal;">
						<p>
							<span>Контактные данные</span>
						</p>
					</td>
					<td width=283 colspan=2 valign="top" style='width:212.6pt;border:solid windowtext 1.0pt; border-left:none;padding:0cm 5.4pt 0cm 5.4pt;height:46.0pt'>
						<p>
							<span><?php echo $clients["adress"] ?></span>
						</p>
						<p>
							<span>&nbsp;</span>
						</p>
						<p>
							<span>&nbsp;</span>
						</p>
					</td>
				</tr>
				<tr>
					<td width=215 valign="top" style='width:161.35pt;border:solid windowtext 1.0pt; border-top:none;padding:0cm 5.4pt 0cm 5.4pt'>
						<p >
							<span>Фамилия имя отчество</span>
						</p>
					</td>
					<td width=113 valign="top" style='width:3.0cm;border-top:none;border-left:none; border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt; padding:0cm 5.4pt 0cm 5.4pt'>
						<p >
							<span style='font-size:10.0pt;font-family:"Times New Roman",serif;color:black'>Дата рождения</span>
						</p>
					</td>
					<td width=123 valign="top" style='width:92.15pt;border-top:none;border-left: none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt; padding:0cm 5.4pt 0cm 5.4pt'>
						<p >
							<span style='font-size:10.0pt;font-family:"Times New Roman",serif;color:black'>Родственные отношения</span>
						</p>
					</td>
					<td width=161 valign="top" style='width:120.45pt;border-top:none;border-left: none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt; padding:0cm 5.4pt 0cm 5.4pt'>
						<p >
							<span>Место работы, учебы</span>
						</p>
					</td>
				</tr>
				<tr>
					<td width=215 valign="top" style='width:161.35pt;border:solid windowtext 1.0pt; border-top:none;padding:0cm 5.4pt 0cm 5.4pt'>
						<p >
							<span><?php echo $clients["name"] ?></span>
						</p>
					</td>
					<td width=113 valign="top" style='width:3.0cm;border-top:none;border-left:none; border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt; padding:0cm 5.4pt 0cm 5.4pt'>
						<p >
							<span><?php echo $clients["dateBirth"] ?></span>
						</p>
					</td>
					<td width=123 valign="top" style='width:92.15pt;border-top:none;border-left: none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt; padding:0cm 5.4pt 0cm 5.4pt'>
						<p >
							<span>&nbsp;</span>
						</p>
					</td>
					<td width=161 valign="top" style='width:120.45pt;border-top:none;border-left: none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt; padding:0cm 5.4pt 0cm 5.4pt'>
						<p >
							<span><?php echo $clients["wrk"] ?></span>
						</p>
					</td>
				</tr>
				<?php 
					$membersDeg=preg_split("/;%/",$clients["membersDegree"]);
					$membersN=preg_split("/;%/",$clients["membersName"]);
					$membersW=preg_split("/;%/",$clients["membersWork"]);
					$membersDate=preg_split("/;%/",$clients["membersDate"]);

					if(is_array($membersDeg)){
						foreach($membersDeg as $i=>$k)
						{ ?>
								<tr>
									<td width=215 valign="top" style='width:161.35pt;border:solid windowtext 1.0pt; border-top:none;padding:0cm 5.4pt 0cm 5.4pt'>
										<p >
											<span><?php echo $membersN[$i];?></span>
										</p>
									</td>
									<td width=113 valign="top" style='width:3.0cm;border-top:none;border-left:none; border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt; padding:0cm 5.4pt 0cm 5.4pt'>
										<p >
											<span><?php echo $membersDate[$i];?></span>
										</p>
									</td>
									<td width=123 valign="top" style='width:92.15pt;border-top:none;border-left: none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt; padding:0cm 5.4pt 0cm 5.4pt'>
										<p >
											<span><?php echo $k;?></span>
										</p>
									</td>
									<td width=161 valign="top" style='width:120.45pt;border-top:none;border-left: none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt; padding:0cm 5.4pt 0cm 5.4pt'>
										<p >
											<span> <?php echo $membersW[$i];?></span>
										</p>
									</td>
								</tr>
						<?php }
					}
					$childDegree=preg_split("/;%/",$clients["childDegree"]);
					$childName=preg_split("/;%/",$clients["childName"]);
					$childShcool=preg_split("/;%/",$clients["childShcool"]);
					$childDate=preg_split("/;%/",$clients["childDate"]);
					
					if(is_array($childDegree)){
						foreach($childDegree as $i=>$k)
						{ ?>
							<tr>
								<td width=215 valign="top" style='width:161.35pt;border:solid windowtext 1.0pt; border-top:none;padding:0cm 5.4pt 0cm 5.4pt'>
									<p >
										<span><?php echo $childName[$i];?></span>
									</p>
								</td>
								<td width=113 valign="top" style='width:3.0cm;border-top:none;border-left:none; border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt; padding:0cm 5.4pt 0cm 5.4pt'>
									<p >
										<span><?php echo $childDate[$i];?></span>
									</p>
								</td>
								<td width=123 valign="top" style='width:92.15pt;border-top:none;border-left: none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt; padding:0cm 5.4pt 0cm 5.4pt'>
									<p >
										<span><?php echo $k;?></span>
									</p>
								</td>
								<td width=161 valign="top" style='width:120.45pt;border-top:none;border-left: none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt; padding:0cm 5.4pt 0cm 5.4pt'>
									<p >
										<span><?php echo $childShcool[$i];?></span>
									</p>
								</td>
							</tr>
						<?php }
					} ?>
			</table>
			<p ><span style='font-size:10.0pt;line-height:115%;font-family: "Times New Roman",serif;color:#0070C0'>&nbsp;</span></p>
			<table class=MsoTableGrid border=1 cellspacing=0 cellpadding=0 >
				<tr>
					<td width=300 valign="top" style='width:225.15pt;border:solid windowtext 1.0pt; padding:0cm 5.4pt 0cm 5.4pt'>
						<p ><b>
							<span>Общая площадь жилого помещения. Краткая характеристика жилья</span></b>
						</p>
					</td>
					<td width=338 valign="top" style='width:253.4pt;border:solid windowtext 1.0pt; border-left:none;padding:0cm 5.4pt 0cm 5.4pt'>
						<p >
							<span style='font-size:10.0pt;font-family:"Times New Roman",serif;  color:black'><?php echo $clients["home"]?></span>
						</p>
					</td>
				</tr>
			</table>
			<p ><span style='font-size:10.0pt;line-height:115%;font-family: "Times New Roman",serif;color:#0070C0'>&nbsp;</span></p>
			<table class=MsoTableGrid border=1 cellspacing=0 cellpadding=0 >
				<tr>
					<td width=345 valign="top" style='width:259.0pt;border:solid windowtext 1.0pt; padding:0cm 5.4pt 0cm 5.4pt'>
						<p >
							<b><span>Причина социального обследования</span></b>
						</p>
					</td>
					<td width=293 valign="top" style='width:219.55pt;border:solid windowtext 1.0pt; border-left:none;padding:0cm 5.4pt 0cm 5.4pt'>
						<p >
							<span>Семья находится на учете семей ТЖС</span>
						</p>
					</td>
				</tr>
			</table>
			<p ><span style='font-size:10.0pt;line-height:115%;font-family: "Times New Roman",serif;color:#0070C0'>&nbsp;</span></p>
			<p ><span style='font-size:10.0pt;line-height:115%;font-family: "Times New Roman",serif;color:#0070C0'>&nbsp;</span></p>
			<table class=MsoTableGrid border=1 cellspacing=0 cellpadding=0 width=640 style='width:480.3pt;border-collapse:collapse;border:none'>
				<tr>
					<td width=92 valign="top" style='width:69.35pt;border:solid windowtext 1.0pt; padding:0cm 5.4pt 0cm 5.4pt'>
						<p >
							<span>Дата проведения социального обследования </span>
						</p>
					</td>
					<td width=92 valign="top" style='width:69.35pt;border:solid windowtext 1.0pt; padding:0cm 5.4pt 0cm 5.4pt'>
						<p >
							<span>Среднемесячный доход семьид семьи на дату проведения обследования </span>
						</p>
					</td>
					<td width=75 valign="top" style='width:55.95pt;border:solid windowtext 1.0pt; border-left:none;padding:0cm 5.4pt 0cm 5.4pt'>
						<p >
							<span>Дата оказания срочной услуги  по Акту приема оказанных услуг </span>
						</p>
					</td>
					<td width=133 valign="top" style='width:99.85pt;border:solid windowtext 1.0pt; border-left:none;padding:0cm 5.4pt 0cm 5.4pt'>
						<p >
							<span>Наименование оказанной услуги</span>
						</p>
					</td>
					<td width=100 valign="top" style='width:74.9pt;border:solid windowtext 1.0pt; border-left:none;padding:0cm 5.4pt 0cm 5.4pt'>
						<p >
							<span>Рекомендации / выводы</span>
						</p>
					</td>
					<td width=100 valign="top" style='width:74.9pt;border:solid windowtext 1.0pt; border-left:none;padding:0cm 5.4pt 0cm 5.4pt'>
						<p >
							<span>Результат</span>
						</p>
					</td>
					<td width=104 valign="top" style='width:78.0pt;border:solid windowtext 1.0pt; border-left:none;padding:0cm 5.4pt 0cm 5.4pt'>
						<p >
							<span>Лицо проводившее социальное обследование/ оказавшее услуги </span>
						</p>
					</td>
				</tr>
				<?php $serv= selectForCart($id);
					while ($akt = mysqli_fetch_assoc($serv)) { 
					?>
				<tr>
					<td width=92 valign="top" style='width:69.35pt;border:solid windowtext 1.0pt; border-top:none;padding:0cm 5.4pt 0cm 5.4pt'>
						<p >
							<span>
								<?php 
									if($akt["akt"]=="akt"){
											echo $akt["data"];
										}else{
											echo "";} 
								?>
							</span>
						</p>
					</td>
					<td width=92 valign="top" style='width:69.35pt;border:solid windowtext 1.0pt; border-top:none;padding:0cm 5.4pt 0cm 5.4pt'>
						<p >
							<span>
							<?php 
								if($akt["akt"]=="akt"){
										echo $akt["kesh"];
									}else{
										echo "";} 
							?>
							</span>
						</p>
					</td>
					<td width=75 valign="top" style='width:55.95pt;border-top:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt; padding:0cm 5.4pt 0cm 5.4pt'>
						<p >
							<span>
								<?php if($akt["akt"]=="serv"){
										echo $akt["data"];
									}else{
										echo "";} ?>
										</span>
						</p>
					</td>
					<td width=133 valign="top" style='width:99.85pt;border-top:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt; padding:0cm 5.4pt 0cm 5.4pt'>
						<p >
							<span>&nbsp;</span>
						</p>
					</td>
					<td width=133 valign="top" style='width:99.85pt;border-top:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt; padding:0cm 5.4pt 0cm 5.4pt'>
						<p >
							<span>&nbsp;</span>
						</p>
					</td>
					<td width=133 valign="top" style='width:99.85pt;border-top:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt; padding:0cm 5.4pt 0cm 5.4pt'>
						<p >
							<span>&nbsp;</span>
						</p>
					</td>
					<td width=133 valign="top" style='width:99.85pt;border-top:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt; padding:0cm 5.4pt 0cm 5.4pt'>
						<p >
							<span><?php $theUser=selectFromReport($akt['userId']);
									while($user = mysqli_fetch_assoc($theUser)){
										echo $user["family"]." ".$user["name"]." ".$user["secondName"];
									}?></span>
						</p>
					</td>
				</tr>
				<?php 
				$code=preg_split("/;%/",$akt["actСode"]);
				$itSelf=preg_split("/;%/",$akt["actItself"]);
				$result=preg_split("/;%/",$akt["result"]);
				if(is_array($code)){
					foreach($code as $i=>$k){
						if($k=="" ||$k==" " ){}else{ 
				?>
				
					<tr>
						<td width=133 valign="top" style='width:99.85pt;border-top:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt; padding:0cm 5.4pt 0cm 5.4pt'>
							<p >
								<span>&nbsp;</span>
							</p>
						</td>
						<td width=133 valign="top" style='width:99.85pt;border-top:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt; padding:0cm 5.4pt 0cm 5.4pt'>
							<p >
								<span>&nbsp;</span>
							</p>
						</td>
						<td width=133 valign="top" style='width:99.85pt;border-top:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt; padding:0cm 5.4pt 0cm 5.4pt'>
							<p >
								<span><?php echo $k ?> </span>
							</p>
						</td>
						<td width=100 valign="top" style='width:74.9pt;border-top:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt; padding:0cm 5.4pt 0cm 5.4pt'>
							<p >
								<span><?php echo $itSelf[$i] ?></span>
							</p>
						</td>
						<td width=100 valign="top" style='width:74.9pt;border-top:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt; padding:0cm 5.4pt 0cm 5.4pt'>
							<p >
								<span><?php echo $result[$i] ?></span>
							</p>
						</td>
						<td width=133 valign="top" style='width:99.85pt;border-top:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt; padding:0cm 5.4pt 0cm 5.4pt'>
							<p >
								<span>&nbsp;</span>
							</p>
						</td>
					</tr>
						<?php }}}else{?>
					<tr>
						<td width=133 valign="top" style='width:99.85pt;border-top:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt; padding:0cm 5.4pt 0cm 5.4pt'>
							<p >
								<span>&nbsp;</span>
							</p>
						</td>
						<td width=133 valign="top" style='width:99.85pt;border-top:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt; padding:0cm 5.4pt 0cm 5.4pt'>
							<p >
								<span>&nbsp;</span>
							</p>
						</td>
						<td width=133 valign="top" style='width:99.85pt;border-top:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt; padding:0cm 5.4pt 0cm 5.4pt'>
							<p >
								<span><?php echo $code ?> </span>
							</p>
						</td>
						<td width=100 valign="top" style='width:74.9pt;border-top:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt; padding:0cm 5.4pt 0cm 5.4pt'>
							<p >
								<span><?php echo $itSelf ?></span>
							</p>
						</td>
						<td width=100 valign="top" style='width:74.9pt;border-top:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt; padding:0cm 5.4pt 0cm 5.4pt'>
							<p >
								<span><?php echo $result ?></span>
							</p>
						</td>
						<td width=133 valign="top" style='width:99.85pt;border-top:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt; padding:0cm 5.4pt 0cm 5.4pt'>
							<p >
								<span>&nbsp;</span>
							</p>
						</td>
					</tr>
				
				
				<?php }
				} 
	}?>
			</table>
			<p ><span style='font-size:10.0pt;line-height:115%;font-family: "Times New Roman",serif;color:#0070C0'>&nbsp;</span></p>
		</div>
	<?php	
	include 'footer.php';?>
