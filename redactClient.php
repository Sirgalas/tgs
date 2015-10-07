<?php 
 include 'header.php'; 
 
$id=$_GET["id"];
$str= selectAllClient($id); 
	while ($clients = mysqli_fetch_assoc($str)) { 
?>
<div>
	<div class="acardion">
		<h2>Данные на представителя семьи</h2>
			<div>
				<form action="addClient.php" mehod="post" class="clientRedact"/>
					<input type="hidden" name="id" class="id" value="<?php echo $id ?>"/>
					<input type="hidden" name="dataRedact" class="dataRedact" value="<?php echo $clients["date"] ?>"/>
					<label>
						<span> имя  отчество клиента <?php echo $clients["name"] ?><br/>
						<a href="#" data-name="name" data-value="<?php echo $clients["name"] ?>" class="redact name">Редактировать</a>
						</span>
						<div></div>
					</label>

					<label>
						<span> дата рождения клиента <?php echo $clients["dateBirth"] ?><br/>
						<a href="#" data-name="dateBirth" data-value="<?php echo $clients["dateBirth"] ?>" class="redact dateBirth">Редактировать</a>
						</span>
						<div></div>
					</label>
					<label>
						<span>контактные данные <?php echo $clients["adress"] ?><br/>
						<a href="#" data-name="adress" data-value="<?php echo $clients["adress"] ?>" class="redact adress">Редактировать</a>
						<a href="#" data-name="adress" data-value="<?php echo $clients["adress"] ?>"   class="upedata">Добавить</a>
						</span>
						<div></div>
					</label>
					<label>
						<span>место работы клиента <?php echo $clients["wrk"] ?><br/>
						<a href="#" data-name="work" data-value="<?php echo $clients["wrk"] ?>" class="redact work">Редактировать</a>
						<a href="#" data-name="work" data-value="<?php echo $clients["wrk"] ?>"   class="upedata">Добавить</a>
						</span>
						<div></div>
					</label>
					<h2>Данные на взрослых членов семьи</h2>
					<label id="membersNameRedact">
						<?php 
							$membersDeg=preg_split("/;%/",$clients["membersDegree"]);
							$membersN=preg_split("/;%/",$clients["membersName"]);
							$membersW=preg_split("/;%/",$clients["membersWork"]);
							$membersDate=preg_split("/;%/",$clients["membersDate"]);
	
							if(is_array($membersDeg)){
								foreach($membersDeg as $i=>$k)
								{
									if($k=="" ||$k==" " ){}else{ 
										?>
									<section>
										<span> Спепень родства: <strong><?php echo $k;?></strong><br/>
											<a href="#" data-name="membersDegree[]" data-classThe="membersDegree" data-value="<?php echo $k ?>" class="redact membersDegree">Редактировать</a>
											<a href="#" data-name="membersDegree[]" data-classThe="membersDegree" data-value="<?php echo $k ?>"   class="upedata">Добавить</a>
										</span>
										<div></div>
									</section>
								<?php }
									if($membersN[$i]==""|| $membersN[$i]==""){}else{ ?>	
									<section>
										<span> Данные на члена семьи: <strong><?php echo $membersN[$i];?></strong><br/>
											<a href="#" data-name="membersName[]" data-classThe="membersName" data-value="<?php echo $membersN[$i]; ?>" class="redact membersName">Редактировать</a>
											<a href="#" data-name="membersName[]" data-classThe="membersName" data-value="<?php echo $membersN[$i];  ?>"   class="upedata">Добавить</a>
										</span>
										<div></div>
									</section>
								<?php }
									if($membersW[$i]==""|| $membersW[$i]==""){}else{ ?>
									<section>
										<span> Место работы: <strong> <?php echo $membersW[$i];?></strong><br/>
											<a href="#" data-name="membersWork[]" data-classThe="membersWork" data-value="<?php echo $membersW[$i]; ?>" class="redact membersWork">Редактировать</a>
											<a href="#" data-name="membersWork[]" data-classThe="membersWork" data-value="<?php echo  $membersW[$i]; ?>"   class="upedata">Добавить</a>
										</span>
										<div></div>
									</section>
								<?php }
									if($membersDate[$i]==""|| $membersDate[$i]==""){}else{ ?>	
									<section>
										<span> Дата рождения:<strong><?php echo $membersDate[$i];?></strong><br/>
											<a href="#" data-name="membersDate[]" data-classThe="membersDate" data-value="<?php echo $membersDate[$i]; ?>" class="redact membersDate">Редактировать</a>
											<a href="#" data-name="membersDate[]" data-classThe="membersDate" data-value="<?php echo $membersDate[$i];  ?>"   class="upedata">Добавить</a>
										</span>
										<div></div>
									</section>
								<?php }
								}
							}else{ 
								if($membersDeg==""|| $membersDeg==""){}else{ ?>
								<section>
									<span> Спепень родства: <strong><?php echo $membersDeg;?></strong><br/>
										<a href="#" data-name="membersDegree[]" data-classThe="membersDegree" data-value="<?php echo $k?>" class="redact membersDegree">Редактировать</a>
										<a href="#" data-name="membersDegree[]" data-classThe="membersDegree" data-value="<?php echo $k ?>"   class="upedata">Добавить</a>
									</span>
									<div></div>
								</section>
								<?php } 
								if($membersN==""|| $membersN==""){}else{ ?>
								<section>
									<span> Данные на члена семьи: <strong><?php echo $membersN;?></strong><br/>
										<a href="#" data-name="membersName[]" data-classThe="membersName" data-value="<?php echo $membersN[$i]; ?>" class="redact membersName">Редактировать</a>
										<a href="#" data-name="membersName[]" data-classThe="membersName" data-value="<?php echo $membersN[$i]; ?>"   class="upedata">Добавить</a>
									</span>
									<div></div>
								</section>
								<?php }
								if($membersW==""|| $membersW==""){}else{ ?>	
								<section>
									<span>  Место работы: <strong><?php echo $membersW;?></strong><br/>
										<a href="#" data-name="membersWork[]" data-classThe="membersWork" data-value="<?php echo $membersW[$i]; ?>" class="redact membersWork">Редактировать</a>
										<a href="#" data-name="membersWork[]" data-classThe="membersWork" data-value="<?php echo  $membersW[$i];  ?>"   class="upedata">Добавить</a>
									</span>
									<div></div>
								</section>
								<?php }
								if($membersDate==""|| $membersDate==""){}else{ ?>	
								<section>
									<span> Дата рождения:<strong><?php echo $membersDate;?></strong><br/>
										<a href="#" data-name="membersDate[]" data-classThe="membersDate" data-value="<?php echo $membersDate[$i]; ?>" class="redact membersDate">Редактировать</a>
										<a href="#" data-name="membersDate[]" data-classThe="membersDate" data-value="<?php echo $membersDate[$i];  ?>"   class="upedata">Добавить</a>
									</span>
									<div></div>
								</section>
								<?php }
							} ?>
							<a href="#" class="members pluss">+</a>
					</label>
					<h2>Данные нанесовршенолетних членов семьи</h2>
					<label id="childNameRedact">
						<?php 
							$childDegree=preg_split("/;%/",$clients["childDegree"]);
							$childName=preg_split("/;%/",$clients["childName"]);
							$childShcool=preg_split("/;%/",$clients["childShcool"]);
							$childDate=preg_split("/;%/",$clients["childDate"]);
							
							if(is_array($childDegree)){
								foreach($childDegree as $i=>$k)
								{
									if($k=="" ||$k==" " ){}else{ 
									?>
									<section>
										<span> Спепень родства: <strong><?php echo $k;?></strong><br/>
										<a href="#" data-name="childDegree[]" data-classThe="childDegree" data-value="<?php echo $k?>" class="redact childDegree">Редактировать</a>
										<a href="#" data-name="childDegree[]" data-classThe="childDegree" data-value="<?php echo $k ?>"   class="upedata">Добавить</a>
										</span>
										<div></div>
									</section>
								<?php }
									if($childName[$i]==""|| $childName[$i]==""){}else{ ?>	
									<section>
										<span> Данные на члена семьи: <strong><?php echo $childName[$i];?></strong><br/>
										<a href="#" data-name="childName[]" data-classThe="childName" data-value="<?php echo $childName[$i]; ?>" class="redact childName">Редактировать</a>
										<a href="#" data-name="childName[]" data-classThe="childName" data-value="<?php echo $childName[$i];  ?>"   class="upedata">Добавить</a>
										</span>
										<div></div>
									</section>
								<?php }
									if($childShcool[$i]==" " || $childShcool[$i]==""){}else{ ?>
									<section>
										<span> Место учебы: <strong><?php echo $childShcool[$i];?></strong><br/>
											<a href="#" data-name="childShcool[]" data-classThe="childShcool" data-value="<?php echo $childShcool[$i]; ?>" class="redact childShcool">Редактировать</a>
											<a href="#" data-name="childShcool[]" data-value="<?php echo $childShcool[$i]; ?>"   class="upedata">Добавить</a>
										</span>
										<div></div>
									</section>	
									<?php } 
									if($childDate[$i]=="" ||$childDate[$i]==""){}else{ ?>
									<section>
										<span> Дата рождения:<strong><?php echo $childDate[$i];?></strong><br/>
											<a href="#" data-name="childDate[]" data-classThe="childDate" data-value="<?php echo $childDate[$i]; ?>" class="redact childDate">Редактировать</a>
											<a href="#" data-name="childDate[]" data-classThe="childDate" data-value="<?php echo $childDate[$i]; ?>"   class="upedata">Добавить</a>
											</span>
										<div></div>
									</section>	
								<?php 
									}
								}
							}else{ 
									if($childDegree=="" ||$childDegree==" " ){}else{ ?>
									<section>
										<span> Спепень родства: <strong><?php echo $childDegree;?></strong><br/>
											<a href="#" data-name="childDegree[]" data-classThe="childDegree" data-value="<?php echo $childDegree ?>" class="redact childDegree">Редактировать</a>
											<a href="#" data-name="childDegree[]" data-classThe="childDegree" data-value="<?php echo $childDegree ?>"   class="upedata">Добавить</a>
										</span>
										<div></div>
									</section>	
									<?php }
									if($childName==""|| $childName==""){}else{ ?>
									<section>
										<span>  Данные на члена семьи: <strong> <?php echo $childName;?></strong><br/>
											<a href="#" data-name="childName[]" data-classThe="childName" data-value="<?php echo $childName; ?>" class="redact childName">Редактировать</a>
											<a href="#" data-name="childName[]" data-classThe="childName" data-value="<?php echo $childName; ?>"   class="upedata">Добавить</a>
										</span>
										<div></div>
									</section>
									<?php }
									if($childShcool==" " || $childShcool==""){}else{ ?>
									<section>
										<span> Место учебы: <strong><?php echo $childShcool;?></strong><br/>
											<a href="#" data-name="childShcool[]" data-classThe="childShcool" data-value="<?php echo $childShcool; ?>" class="redact childShcool">Редактировать</a>
											<a href="#" data-name="childShcool[]" data-classThe="childShcool" data-value="<?php echo $childShcool; ?>"   class="upedata">Добавить</a>
										</span>
										<div></div>
									</section>
									<?php } 
										if($childDate=="" ||$childDate==""){}else{ ?>
									<section>
										<span> Дата рождения:<strong><?php echo $childDate;?></strong><br/>
											<a href="#" data-name="childDate[]" data-classThe="childDate" data-value="<?php echo $childDate; ?>" class="redact childDate">Редактировать</a>
											<a href="#" data-name="childDate[]" data-classThe="childDate" data-value="<?php echo $childDate; ?>"   class="upedata">Добавить</a>
										</span>
										<div></div>
									</section>
									<?php	}	
							 } ?>
							 <a href="#" class="child pluss">+</a>
					</label>
					<h2>Общая характеристика семьи</h2>
					<label>
						<span>характеристикa жилья <br/> <strong> <?php echo $clients["home"]?></strong> <br/>
						<a href="#" data-name="home" data-value="<?php echo $clients["home"]; ?>" class="redact home">Редактировать</a>
						<a href="#" data-name="home" data-value="<?php echo $clients["home"]; ?>"   class="upedata">Добавить</a>
						</span>
						<div></div>
					</label>
					<label>
						<span> характеристика мест досуга в населенном пункте:<br/> <strong> <?php echo $clients["leisure"]?></strong> <br/>
						<a href="#" data-name="leisure" data-value="<?php echo $clients["leisure"]; ?>" class="redact leisure">Редактировать</a>
						<a href="#" data-name="leisure" data-value="<?php echo $clients["leisure"] ?>"   class="upedata">Добавить</a>
						</span>
						<div></div>
					</label>
					<label>
						<span>доступные к социальные структуры:<br/><strong> <?php echo $clients["socialStruct"]?> </strong><br/>
						<a href="#" data-name="socialStruct" data-value="<?php echo $clients["socialStruct"]; ?>" class="redact socialStruct">Редактировать</a>
						<a href="#" data-name="socialStruct" data-value="<?php echo $clients["socialStruct"] ?>"   class="upedata socialStruct">Добавить</a>
						</span>
						<div></div>
					</label>
					<label>
						<span>специализация семьи:<strong>
						<?php 
							$spec=selectForSpecializationFamilyForID($clients["specialization"]);
							while ($seps=mysqli_fetch_assoc($spec)) { 
								echo "<strong>".$seps["specialization"]."</strong>";
							}	
						?>
						</strong><br/>
						<a href="#" data-name="specialization" data-class="specialization" data-select="<?php $spec=selectForSpecializationFamilySave();while ($result = mysqli_fetch_assoc($spec)) { echo "<option value=".$result ['id'].">".$result['specialization']."</option>";}?>" class="selectRedact socialStruct">Редактировать</a>
						</span>
						<div></div>
					</label>
					<label>
						<span>Проблемы семьи со слов клиента <strong> <?php echo $clients["poroblemForFamily"]; ?></strong> <br/>
						<a href="#" data-name="poroblemForFamily" data-value="<?php echo $clients["poroblemForFamily"]; ?>" class="redact poroblemForFamily">Редактировать</a>
						<a href="#" data-name="poroblemForFamily" data-value="<?php echo $clients["poroblemForFamily"] ?>"   class="upedata">Добавить</a>
						</span>
						<div></div>
					</label>
					<label>
						<span>Проблемы семьи по мнению специалиста <strong> <?php echo $clients["poroblemForExpert"]; ?></strong> <br/>
						<a href="#" data-name="poroblemForExpert" data-value="<?php echo $clients["poroblemForExpert"]; ?>" class="redact poroblemForExpert">Редактировать</a>
						<a href="#" data-name="poroblemForExpert" data-value="<?php echo $clients["poroblemForExpert"] ?>"   class="upedata">Добавить</a>
						</span>
						<div></div>
					</label>
					<label>
						<span>Пути решения проблемы  <strong> <?php echo $clients["wayProblem"]; ?> </strong> <br/>
						<a href="#" data-name="wayProblem" data-value="<?php echo $clients["wayProblem"]; ?>" class="redact wayProblem">Редактировать</a>
						<a href="#" data-name="wayProblem" data-value="<?php echo $clients["wayProblem"] ?>"   class="upedata">Добавить</a>
						</span>
						<div></div>
					</label>
					<label>
						<span>Проводимая работа   <strong> <?php echo $clients["workExpert"]; ?>  </strong> <br/>
						<a href="#" data-name="workExpert" data-value="<?php echo $clients["workExpert"]; ?>" class="redact workExpert">Редактировать</a>
						<a href="#" data-name="workExpert" data-value="<?php echo $clients["workExpert"] ?>"   class="upedata">Добавить</a>
						</span>
						<div></div>
					</label>
					<label>
						<span>Результаты работы: <strong> <?php  echo $clients["result"]; ?> </strong> <br/>
						<a href="#" data-name="result" data-value="<?php  echo $clients["result"]; ?>" class="redact result">Редактировать</a>
						<a href="#" data-name="result" data-value="<?php echo $clients["result"] ?>"   class="upedata">Добавить</a>
						</span>
						<div></div>
					</label>
					<label>
						<span>Примичания: <?php  echo $clients["outher"]; ?><br/>
						<a href="#" data-name="outher" data-value="<?php  echo $clients["outher"]; ?>" class="redact outher">Редактировать</a>
						<a href="#" data-name="outher" data-value="<?php echo $clients["outher"] ?>"   class="upedata">Добавить</a>
						</span>
						<div></div>
					</label>
					<input type="hidden" value="<?php echo $clients['user'];?>" class="userId"/>
					<input type="hidden" value="<?php echo $user['id'];?>" class="userIdRedact"/>
					<a href="#" class="submit" id="addRedactClient">Внести</a>
					<input type="reset"  class="hidden" id="ClientRedactReset"/>
				</form>
			</div>
			<h1>Данные о выходах</h1>
			<div>
			<?php 
				$act=selectActByRedact($id);
				while ($clients = mysqli_fetch_assoc($act)){ 
			 ?>
				<h2><?php if($clients["data"]=="0000-00-00"){}else{echo $clients["data"]; }?></h2>
					
						<form action="#" method="get" class="redactAct" >
							<label id="akt">
								<hr/>
								<input type="hidden" class="aktId" value="<?php echo $clients["id"]?>" />
								<section class="textCenter">
									<span>датa составления акта <strong><?php if($clients["data"]=="0000-00-00"){}else{echo $clients["data"]; }?></strong><br/>
										<a href="#" data-name="data" data-classThe="data" data-value="<?php echo $clients["data"]; ?>" class="redact data">Редактировать</a>
									</span>
									<div></div>
								</section>
									<?php 
										$actСode=preg_split("/;%/",$clients["actСode"]);
										$actItself=preg_split("/;%/",$clients["actItself"]);
										$actRedact=preg_split("/;%/",$clients["result"]);
										if (is_array($actСode)){
											foreach($actСode as $i=>$k ){ 
											 if($actItself[$i]==" "||$actItself[$i]==""){}else{
										?>
											<section>
												<span> содержание акта <strong><?php echo $k  ?></strong><br/>
													<a href="#" data-name="actСode[]" data-classThe="actСode" data-value="<?php echo $k ?>" class="redact actСode">Редактировать</a>
													<a href="#" data-name="actСode[]" data-classThe="actСode"  data-value="<?php echo $k ?>"   class="upedata">Добавить</a>
												</span>
												<div></div>
											</section>
											<section>
												<span> рекомендации данные в акте <strong><?php echo $actItself[$i]; ?></strong><br/>
													<a href="#" data-name="actItself[]" data-classThe="actItself" data-value="<?php echo $actItself[$i]; ?>" class="redact actItself">Редактировать</a>
													<a href="#" data-name="actItself" data-classThe="actItself" data-value="<?php echo $actItself[$i] ?>"   class="upedata">Добавить</a>
												</span>
												<div></div>
											</section>
											<section>
												<span>результат <strong><?php echo $actRedact[$i]; ?></strong><br/>
													<a href="#" data-name="actResult" data-classThe="actResult" data-value="<?php echo $actRedact[$i]; ?>" class="redact actResult">Редактировать</a>
													<a href="#" data-name="actResult" data-classThe="actResult" data-value="<?php echo $actRedact[$i]; ?>"   class="upedata">Добавить</a>
												</span>
												<div></div>
											</section>
											<?php }
											 } 
										}else{ ?>
											<section>
												<span> содержание акта <?php echo $actСode ?><br/>
													<a href="#" data-name="actСode[]" data-classThe="actСode" data-value="<?php echo $actСode; ?>" class="redact actСode">Редактировать</a>
													<a href="#" data-name="actСode[]" data-classThe="actСode" data-value="<?php echo $actСode; ?>"   class="upedata">Добавить</a>
												</span>
												<div></div>
											</section>
											<section>
												<span> рекомендации данные в акте <strong><?php echo $actItself; ?></strong><br/>
													<a href="#" data-name="actItself[]" data-classThe="actItself" data-value="<?php echo $actItself; ?>" class="redact actItself">Редактировать</a>
													<a href="#" data-name="actItself" data-classThe="actItself" data-value="<?php echo $actItself ?>"   class="upedata">Добавить</a>
												</span>
												<div></div>
											</section>
											<section>
												<span>результат <strong><?php echo $actRedact; ?></strong><br/>
													<a href="#" data-name="actResult" data-classThe="actResult" data-value="<?php echo $actRedact; ?>" class="redact actResult">Редактировать</a>
													<a href="#" data-name="actResult" data-classThe="actResult" data-value="<?php echo $actRedact; ?>"   class="upedata">Добавить</a>
												</span>
												<div></div>
											</section>
									<?php } ?>
								
							</label>
							<a href="#" class="submit RedactAkt">Внести</a>
						</form>				
			<?php } ?>
			</div>
			<h2>Даные об услугах</h2>
			<div>
			<?php 
				$service=selectServByRedact($id);
				while ($clients = mysqli_fetch_assoc($service)){
					$serviceСode=preg_split("/;%/",$clients["serviceСode"]);
					$serviceItself=preg_split("/;%/",$clients["serviceItself"]);
					$serviceResult=preg_split("/;%/",$clients["result"]);?>
					
						<form action="#" method="get" class="redactAct">
							<label class="plus">
								<hr/>
								<input type="hidden" class="servId" value="<?php echo $clients["id"]?>" />
								<section class="textCenter">
									<span>датa оказания услуги <strong><?php if($clients["data"]=="0000-00-00"){}else{echo $clients["data"]; }?></strong><br/>
										<a href="#" data-name="data" data-classThe="data" data-value="<?php echo $clients["data"]; ?>" class="redact data">Редактировать</a>
									</span>
									<div></div>
								</section>
								<?php if(is_array($serviceСode)){
									foreach($serviceСode as $i=>$k){	
										if($k=="" ||$k==" " ){}else{ 
										?>
										 <section>
											<span> название услуги  <strong><?php  echo $k; ?></strong><br/>
												<a href="#" data-name="serviceСode[]" data-classThe="serviceСode"  data-value="<? echo $k; ?>" class="redact serviceСode">Редактировать</a>
												<a href="#" data-name="serviceСode[]" data-classThe="serviceСode" data-value="<?php echo $k ?>"   class="upedata">Добавить</a>
											</span>
											<div></div>
										</section>
										<section>	
											<span> описание услуги  <strong><?php  echo $serviceItself[$i]; ?></strong><br/>
												<a href="#" data-name="serviceItself[]" data-classThe="serviceItself"  data-value="<?php  echo $serviceItself[$i]; ?>" class="redact serviceItself">Редактировать</a>
												<a href="#" data-name="serviceItself[]" data-classThe="serviceItself"  data-value="<?php echo $serviceItself[$i]; ?>"   class="upedata">Добавить</a>
											</span>
											<div></div>
										</section>
										<section>
											<span>результат <strong><?php echo $serviceResult[$i]; ?></strong><br/>
												<a href="#" data-name="serviceResult" data-classThe="serviceResult" data-value="<?php echo $serviceResult[$i];  ?>" class="redact serviceResult">Редактировать</a>
												<a href="#" data-name="serviceResult" data-classThe="serviceResult" data-value="<?php echo $serviceResult[$i];  ?>"   class="upedata">Добавить</a>
											</span>
											<div></div>
										</section>
										<?php 
										}
											}
										}else{ 
										if($serviceСode=="" ||$serviceСode==" " ){}else{ 
										?>
										<section>	
											<span> название услуги <?php  echo $serviceСode; ?><br/>
												<a href="#" data-name="serviceСode[]" data-classThe="serviceСode" data-value="<? echo $serviceСode; ?>" class="redact serviceСode">Редактировать</a>
												<a href="#" data-name="serviceСode[]" data-classThe="serviceСode" data-value="<?php echo $serviceСode?>"   class="upedata">Добавить</a>
											</span>
											<div></div>
										</section>
									<?php }
										if($serviceItself=="" ||$serviceItself==" " ){}else{ ?>
										<section>	
											<span> описание услуги <?php  echo $serviceItself; ?><br/>
												<a href="#" data-name="serviceItself[]" data-classThe="serviceItself" data-value="<?php  echo $serviceItself; ?>" class="redact serviceItself">Редактировать</a>
												<a href="#" data-name="serviceItself[]" data-classThe="serviceItself" data-value="<?php echo $serviceItself ?>"   class="upedata">Добавить</a>
											</span>
											<div></div>
										</section>	
									<?php }
										if($serviceResult=="" ||$serviceResult==" " ){}else{ ?>
										<section>
											<span>результат <strong><?php echo $serviceResult; ?></strong><br/>
												<a href="#" data-name="actResult" data-classThe="serviceResult" data-value="<?php echo $serviceResult;  ?>" class="redact serviceResult">Редактировать</a>
												<a href="#" data-name="actResult" data-classThe="serviceResult" data-value="<?php echo $serviceResult;  ?>"   class="upedata">Добавить</a>
											</span>
											<div></div>
										</section>	
									<?php }
								} ?>
								
							</label>	
							<a href="#" class="submit RedactServece">Внести</a>
						</form>
					
			<?php	}	?>
			</div>
		</div>
	</div>

 <?php } ?>
 <?php include 'footer.php'; ?>