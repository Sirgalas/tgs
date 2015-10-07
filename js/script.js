jQuery(document).ready(function($) {
	$( "#resizable" ).resizable({
		handles: "se"
	});
	
	$( "#tabs" ).tabs();
	
	jQuery('form').on('click', '#childName a',function(ev){
		ev.preventDefault();
		var plus='<span>Степень родства</span><input type="text" name="childDegree[]" class="childDegree" value=""/><span>введите данные на  ребенка</span><input type="text" name="childName[]" class="childName" value=""/><span>введите учебное заведение ребенка</span><input type="text" name="childShcool[]" class="childShcool" value=""/><span>введите дату рождения ребенка</span><input type="text" name="childData[]" class="childData  datepicker" value=""/><a href="#">+</a>'
		$('#childName').append(plus);
		$( ".datepicker" ).datepicker({dateFormat: "yy-mm-dd",changeMonth: true, changeYear: true});
	});
	jQuery('.selReport').change(function () {
		var opt = $(this).val();
		if(opt==0){
			jQuery('#weeks').show();
			jQuery("#tgs").hide();
		}
		if(opt==1){
			jQuery('#weeks').hide();
			jQuery("#tgs").show();
		}
	});
	jQuery('.reportTo').datepicker({
		dateFormat: "yy-mm-dd",
		changeMonth: true,
		onClose: function( selectedDate ) {
			$( ".reportFrom" ).datepicker( "option", "minDate", selectedDate );
		}
	});	
	
	jQuery('.reportFrom').datepicker({
		dateFormat: "yy-mm-dd",
		changeMonth: true,
		onClose: function( selectedDate ) {
			 $( ".reportTo" ).datepicker( "option", "maxDate", selectedDate );
		}
	});
	
	jQuery('form').on('click', '#childNameRedact a.pluss',function(ev){
		ev.preventDefault();
		var plus='<span>Степень родства</span><input type="text" name="childDegree[]" class="childDegree" value=""/><span>введите данные на  ребенка</span><input type="text" name="childName[]" class="childName" value=""/><span>введите учебное заведение ребенка</span><input type="text" name="childShcool[]" class="childShcool" value=""/><span>введите дату рождения ребенка</span><input type="text" name="childData[]" class="childData  datepicker" value=""/><a href="#">+</a>'
		$('#childNameRedact').append(plus);
		$( ".datepicker" ).datepicker({dateFormat: "yy-mm-dd",changeMonth: true, changeYear: true});
	});
	
	jQuery('form').on('click', '#membersNameRedact a.pluss',function(ev){
		ev.preventDefault();
		var plus='<label><span>введите cпень родства взрослого члена семьи</span><input type="text" name="membersDegree[]"class="membersDegree" value=""/></label><label><span>введите данные взрослого члена семьи</span><input type="text" name="membersName[]"class="membersName" value=""/></label><label><span>введите место работы взрослого члена семьи</span><input type="text" name="membersWork[]"class="membersWork" value=""/></label><label><span>введите дату рождения взрослого члена семьи</span><input type="text" name="membersData[]"class="membersData datepicker" value=""/></label>';
		$('#membersNameRedact').append(plus);
		$( ".datepicker" ).datepicker({dateFormat: "yy-mm-dd",changeMonth: true, changeYear: true});
	});
	jQuery('form').on('click', '#akt a.pluss',function(ev){
		ev.preventDefault();
		var plus='<span>введите дату составления акта</span><input type="text" name="data[]" class="data datepicker" value=""/><span>введите  содержание акта </span><input type="text" name="actСode[]" class="actСode" value=""/><span>введите рекомендации данные в акте</span><input type="text" name="actItself[]" class="actItself" value=""/>';
		$('#akt').append(plus);
		$( ".datepicker" ).datepicker({dateFormat: "yy-mm-dd",changeMonth: true, changeYear: true});
	});
	jQuery('form').on('click', '#serviceRedact a.pluss',function(ev){
		ev.preventDefault();
		var plus='<span>введите название услуги </span><input type="text" name="serviceСode[]" class="serviceCode" value=""/><span>введите описание услуги </span><input type="text" name="serviceItself[]" class="serviceItself" value=""/>';
		$('#service').append(plus);
		$( ".datepicker" ).datepicker({dateFormat: "yy-mm-dd",changeMonth: true, changeYear: true});
	});
	jQuery('form').on('click', '#membersName a',function(ev){
		ev.preventDefault();
		var plus='<label><span>введите cпень родства взрослого члена семьи</span><input type="text" name="membersDegree[]"class="membersDegree" value=""/></label><label><span>введите данные взрослого члена семьи</span><input type="text" name="membersName[]"class="membersName" value=""/></label><label><span>введите место работы взрослого члена семьи</span><input type="text" name="membersWork[]"class="membersWork" value=""/></label><label><span>введите дату рождения взрослого члена семьи</span><input type="text" name="membersData[]"class="membersData datepicker" value=""/></label>';
		$('#membersName').append(plus);
		$( ".datepicker" ).datepicker({dateFormat: "yy-mm-dd",changeMonth: true, changeYear: true});
	});
	
	jQuery('form').on('click', '#foreignLanguage a',function(ev){
		ev.preventDefault();
		var plus='<span>знание языка</span><input type="text" name="foreignLanguage[]"class="language" value="" /><span>окин языка</span><input type="text" name="okinLanguage[]"class="language" value="" />';
		$('#foreignLanguage').append(plus);
		$( ".datepicker" ).datepicker({dateFormat: "yy-mm-dd",changeMonth: true, changeYear: true});
	});
	
	jQuery('form').on('click', '#relation a',function(ev){
		ev.preventDefault();
		var plus='<span>Cтепень родства</span><input type="text" name="relationDegree[]" class="relation" value="" /><span>введите ФИО члена семьи</span><input type="text" name="nameRelation[]" class="relation" value="" /><span>введите дату рождения члена семьи</span><input type="text" name="dateBirthRelation[]" class="relation datepicker" value="" />';
		$('#relation').append(plus);
		$( ".datepicker" ).datepicker({dateFormat: "yy-mm-dd",changeMonth: true, changeYear: true});
	});
	
	jQuery('form').on('click', '#education a',function(ev){
		ev.preventDefault();
		var plus='<span>название заведения</span><input type="text" name="univesity[]" class="relation" value="" /><span>професия по диплому</span><input type="text" name="profession[]" class="relation" value="" /><span>название атестационного документа </span><input type="text" name="diplom[]" class="relation" value="Диплом" /><span>серия атестационного документа </span><input type="text" name="diplomSerial[]" class="relation" value="" /><span>номер атестационного документа </span><input type="text" name="diplomNumber[]" class="relation" value="" /><span>год окончания</span><input type="text" name="yearEnd[]" class="relation" value="" /><span>ОКСО</span><input type="text" name="okso[]" class="relation" value="" />';
		$('#education ').append(plus);
		$( ".datepicker" ).datepicker({dateFormat: "yy-mm-dd",changeMonth: true, changeYear: true});
	});
		
	jQuery('form').on('click', '#service a',function(ev){
		ev.preventDefault();
		var plus='<span>введите название услуги </span><input type="text" name="serviceСode[]" class="serviceCode" value=""/><span>введите описание услуги </span><input type="text" name="serviceItself[]" class="serviceItself" value=""/>';
		$('#service ').append(plus);
		$( ".datepicker" ).datepicker({dateFormat: "yy-mm-dd",changeMonth: true, changeYear: true});
	});
		
	jQuery('form').on('click', '#actIdServ a.pluss',function(ev){
		ev.preventDefault();
		var plus='<label ><span> содержание акта</span><input type="text" name="actCode" class="actCode"></label><label><span> рекомендации данные в акте</span><input type="text" name="actItself" class="actItself" /></label>';
		$('#actIdServ').append(plus);
	});
	jQuery('form').on('click', '#serviceAdd a.pluss',function(ev){
		ev.preventDefault();
		var plus='<label><span> название услуги</span><input type="text" name="servicesCode[]" class="servicesCode"></label><label><span> рекомендации данные в акте</span><input type="text" name="servicesItself[]" class="servicesItself" /></label>'
			$('#serviceAdd').append(plus);
	});
	
	$(".datepicker").datepicker({dateFormat: "yy-mm-dd",changeMonth: true, changeYear: true});
	$(".acardion").accordion({heightStyle: "content"});
	
	$('.name').autocomplete({
		source: "search.php", 
		minLength: 2,	
	});
	
	
	jQuery('form').on('click', '.clientRedact label span a',function(ev){
		$( ".datepicker" ).datepicker({dateFormat: "yy-mm-dd",changeMonth: true, changeYear: true});
	});
	
	jQuery('.clientRedact label .redact').click(function(e){
		e.preventDefault();
		var name=$(this).data('name');
		var value=$(this).data('value');
		var theClass= $(this).data('classthe');
		if(value==undefined){
			value="";
		}
		if(theClass==undefined){
			theClass=name;
		}
		
		var textarea ="<textarea value='"+value+"' name='"+name+"' class='"+theClass+"'>"+value+"</textarea>";
		$(this).parent("span").siblings("div").html(textarea);
	});
	
	jQuery('.clientRedact label .upedata').click(function(e){
		e.preventDefault();
		var name=$(this).data('name');
		var value=$(this).data('value');
		var theClass= $(this).data('classthe');
		if(value==undefined){
			value="";
		}
		if(theClass==undefined){
			theClass=name;
		}
		var textarea ="<input type='hidden' value='"+value+"' name='"+name+"' class='"+theClass+"' />";
		textarea +="<textarea value='' name='"+name+"' class='"+theClass+"'></textarea>";
		$(this).parent("span").siblings("div").html(textarea);
	});
	
	jQuery('.clientRedact label .selectRedact').click(function(e){
		e.preventDefault();
		var name=$(this).data('name');
		var select=$(this).data('select');
		var theClass=$(this).data('class')
		if(select!=undefined){
			select="<select name='"+name+"' class='"+theClass+"'>"+select+"</select>";
		}else{
			select="";
			}
		$(this).parent("span").siblings("div").html(select);
	});
	
	jQuery('.redactAct .redact').click(function(e){
		e.preventDefault();
		var name=$(this).data('name');
		var value=$(this).data('value');
		var theClass= $(this).data('classthe');
		
		if(value==undefined){
			value="";
		}
		if(theClass==undefined){
			theClass=name;
		}
		var textarea ="<textarea value='"+value+"' name='"+name+"' class='"+theClass+"'>"+value+"</textarea>";
		$(this).parent("span").siblings("div").html(textarea);
	});
	
	jQuery('.redactAct .upedata').click(function(e){
		e.preventDefault();
		var name=$(this).data('name');
		var value=$(this).data('value');
		var theClass= $(this).data('classthe');
		
		if(value==undefined){
			value="";
		}
		if(theClass==undefined){
			theClass=name;
		}
		var textarea ="<input type='hidden' value='"+value+"' name='"+name+"' class='"+theClass+"' />";
		textarea +="<textarea value='"+value+"' name='"+name+"' class='"+theClass+"'></textarea>";
		$(this).parent("span").siblings("div").html(textarea);
	});
	
	
	/*Ajax*/
	
	
	$("#adminUser").click(function(e){
		e.preventDefault();	
		var prоf=$('#prоfesion').val();
		var okp =$('#okpdr').val();
		var sal =$('#salary').val();
		var rat = $('#rate').val();
		jQuery.get("../adminUser.php",
			{
			prоfesion:prоf,
			okin:okp,
			salary:sal,
			rate:rat} ,
			function(data) {
				alert('должность добавлена');
				$('#adminReset').click();
				});
	});
	$("#special").click(function(e){
		e.preventDefault();	
		var spec=$('#specialization').val();
		
		jQuery.get("../special.php",
			{
			specialization:spec,
			} ,
			function(data) {
				alert('спецализация добавлена');
				$('#specialReset').click();
				});
	});
	
	$("#addClient").click(function(e){
		e.preventDefault();	
		var n = $('.client .name').val();
		var bd=$('.client .dateBirth').val();
		var a=$('.client .adress').val();
		var w=$('.client .work').val();
		var mDe= ' ';
		var mN=' ';
		var mW=' ';
		var mDa=' ';
		$('.client .membersDegree').each(function(){
			 mDe +=$(this).val()+";%";
		});
		$('.client .membersName').each(function(){ 	
			mN +=$(this).val()+";%";
		});
		$('.client .membersWork').each(function(){ 	
			mW +=$(this).val()+";%";
		});
		$('.client .membersData').each(function(){ 	
			mDa +=$(this).val()+";%";
		});
		var cDe=' ';
			$('.client .childDegree').each(function(){
			 cDe +=$(this).val()+";%";
		});
		var cN=' ';
		$('.client .childName').each(function(){
			cN +=$(this).val()+";%";
		});
		var cS=' ';
		$('.client .childShcool').each(function(){
			cS +=$(this).val()+";%";
		});
		var cDa=' ';
		$('.client .childData').each(function(){ 	
			cDa +=$(this).val()+";%";
		});
		var h=$('.client .home').val();
		var ls =$(".client .leisure").val();
		var sS=$('.client .socialStruct').val();
		var pF=$('.client .poroblemForFamily').val();
		var pE=$('.client .poroblemForExpert').val();
		var wP=$('.client .wayProblem').val();
		var spec=$(".client .specialization").val();
		var d=' ';
		$('.client .data').click(function(){
			 d +=$('.client .data').val()+" ;%";
		});
		var r=$('.client .result').val();
		var o=$('.client .outher').val();
		var uId=$('.client .userId').val();
		jQuery.get("../addClient.php",
			{
			name:n,
			adress:a,
			dateBirth:bd,
			work:w,
			membersDegree:mDe,
			membersName:mN,
			membersWork:mW,
			membersData:mDa,
			childDegree:cDe,
			childName:cN,
			childShcool:cS,
			childData:cDa,
			home:h,
			leisure:ls,
			socialStruct:sS,
			specialization:spec,
			poroblemForFamily:pF,
			poroblemForExpert:pE,
			wayProblem:wP,

			result:r,
			outher:o,
			user:uId,
			} ,
			function(data) {
				alert('семья добавлена ');
				$('#Client').click();
				});
	});
	$("#addToUser").click(function(){
		var n = $(".user .name").val();
		var f= $(".user .family").val();
		var sN=$(".user .sName").val();
		var pass=$(".user .password").val();
		var acs=$(".user .access").val();
		var dT=$(".user .dateTo").val();
		var snl=$(".user .snils").val();
		var sx=$(".user .sex").val();
		var aN=$('.user .agreementNumber').val();
		var bd=$('.user .birthday').val();
		var aD=$('.user .agreementDate').val();
		var pB=$('.user .placeBirth').val();
		var cs=$('.user .citizenship').val();
		var fL=$('.user .foreignLanguage').val();
		var lL=$('.user .levelLanguage').val();
		var oL=$('.user .okinLanguage').val();
		var ed=$('.user .education').val();
		var oE=$('.user .okinEducation').val();
		var un=$('.user .univesity').val();
		var pf=$('.user .profession').val();
		var dp=$('.user .diplom').val();
		var dS=$('.user .diplomSerial').val();
		var dN=$('.user .diplomNumber').val();
		var yE=$('.user .yearEnd').val();
		var oS=$('.user .okso').val();
		var wrk=$('.user .work').val();
		var okr=$('.user .okpdtr').val();
		var eY=$('.user .experienceYers').val();
		var eM=$('.user .experienceMounts').val();
		var eD=$('.user .experienceDay').val();
		var md=$('.user .married').val();
		var mO=$('.user .marriedOkin').val();
		var pS=$('.user .pasportSerial').val();
		var pN=$('.user .pasportNumber').val();
		var pD=$('.user .pasportDate').val();
		var dI=$('.user .dateIssue').val();
		var org=$('.user .organization').val();
		var pI=$('.user .passportIndex').val();
		var pA=$('.user .passportAdress').val();
		var aI=$('.user .actualIndex').val();
		var aA=$('.user .actualAdress').val();
		var dR=$('.user .dataRegistration').val();
		var pN=$('.user .phoneNumber').val();
		var dF=$('.user .dateFrom').val();
		var rD=$('.user .relationDegree').val();
		var nR=$('.user .nameRelation').val();
		var dBR=$('.user .dateBirthRelation').val();
		jQuery.get("../addToUser.php",{
			name:n,
			family:f,
			secondName:sN,
			password:pass,
			access:acs,
			dateTo:dT,
			snils:snl,
			sex:sx,
			agreementNumber:aN,
			birthday:bd,
			agreementDate:aD,
			placeBirth:pB,
			citizenship:cs,
			foreignLanguage:fL,
			levelLanguage:lL,
			okinLanguage:oL,
			education:ed,
			okinEducation:oE,
			univesity:un,
			profession:pf,
			diplom:dp,
			diplomSerial:dS,
			diplomNumber:dN,
			yearEnd:yE,
			okso:oS,
			work:wrk,
			okpdtr:okr,
			experienceYers:eY,
			experienceMounts:eM,
			experienceDay:eD,
			married:md,
			marriedOkin:mO,
			pasportSerial:pS,
			pasportNumber:pN,
			pasportDate:pD,
			dateIssue:dI,
			organization:org,
			passportIndex:pI,
			passportAdress:pA,
			actualIndex:aI,
			actualAdress:aA,
			dataRegistration:dR,
			phoneNumber:pN,
			dateFrom:dF,
			relationDegree:rD,
			nameRelation:nR,
			dateBirthRelation:dBR
		} ,
			function(data) {
				alert('пользователь добавлен');
				$('#userReset').click();
				$("#thePass").html(data);
			});
		
		
	});
	$('#searchClient').click(function(){
		var n = $('#nameSearch').val();
		var  uIFA=$('.userIdForAct').val()
		jQuery.get("../theClientSearch.php",{
			name:n,
			userId:uIFA
			},
		function(data) {
			$("#theClientSearch").html(data);
		});
	});
	$(".RedactAkt").click(function(e){
		e.preventDefault();
		var i = $(this).siblings('label').find('.aktId').val();
		var aC = "";
		var aI ="";
		var aR = "";
		if($(this).siblings('label').find('textarea.data').val()){
				var  d= $(this).siblings('label').find('textarea.data').val();	
			}else{
				var  d =$(this).siblings('label').find('.redact.data').data('value');
			}
			if($(this).siblings('label').find('textarea.actСode').val()){
				$(this).siblings('label').find('.actСode').each(function(){ 	
					
					aC +=$(this).val()+";%";
					}); 
			}else{
					aC +=$(this).siblings('label').find('.redact.actСode').data('value');
				}
			if($(this).siblings('label').find('textarea.actItself').val()){
				$(this).siblings('label').find('.actItself').each(function(){ 	
					aI +=$(this).val()+";%";
					console.log(aI);
					});		
			}else{
					aI +=$(this).siblings('label').find('.redact.actItself').data('value');
				}
			if($(this).siblings('label').find('textarea.actResult').val()){	
				$(this).siblings('label').find('.actResult').each(function(){ 
					aR += $(this).val()+";%";
					console.log(aR);
				});
			}else{
				 aR =$(this).siblings('label').find('.redact.actResult').data('value');
				}
		jQuery.get("../upedataAct.php",
			{
			idAct:i,
			data:d,
			actCode:aC,
			actItself:aI,
			actResult:aR
			},
			function(data) {
				alert('Изменения добавлены');})  
	});
	
	$(".RedactServece").click(function(e){
		e.preventDefault();
		var i = $(this).siblings('label').find('.servId').val();
		if($(this).siblings('label').find('textarea.data').val()){
				var  d= $(this).siblings('label').find('textarea.data').val();	
			}else{
				var  d =$(this).siblings('label').find('.redact.data').data('value');
			}
		var aC = "" ;
		var aI ="";
		var aR = ""
		if($(this).siblings('label').find('textarea.serviceСode').val()){
			$(this).siblings('label').find('.serviceСode').each(function(){ 	
				aC +=$(this).val()+";%";}); 
		}else{
			aC =$(this).siblings('label').find('.redact.serviceСode').data('value');
			}	
		if($(this).siblings('label').find('textarea.serviceItself').val()){
			$(this).siblings('label').find('.serviceItself').each(function(){ 	
				aI +=$(this).val()+";%";});
		}else{
			  aI =$(this).siblings('label').find('.redact.serviceItself').data('value');
			}
		if($(this).siblings('label').find('textarea.serviceResult').val()){	
				$(this).siblings('label').find('.serviceResult').each(function(){ 
					aR += $(this).val()+";%";
				});
		}else{
			 aR =$(this).siblings('label').find('.redact.serviceResult').data('value');
			}
		jQuery.get("../upedataServ.php",
			{
			idAct:i,
			data:d,
			actCode:aC,
			actItself:aI,
			actResult:aR
			},
			function(data) {
				alert('Изменения добавлены');})  
	});

	$("#addRedactClient").click(function(e){
		e.preventDefault();	
		var i = $('.clientRedact .id').val();
		var dR = $('.clientRedact .dataRedact').val();
		var n = "";
		var bd= "";
		var a= "";
		var h="";
		var ls ="";
		var sS="";
		var pF="";
		var pE="";
		var wP="";
		var wE="";
		var spec="";
		var r="";
		var o="";
		var uId="";
		var uIdR="";
		var w="";
		var Is ="";
		var mDe= "";
		var mN="";
		var mW="";
		var mDa="";
		var cN="";
		var cDe="";
		var cS="";
		var cDa="";
		var w="";
		if($(this).siblings('label').find('textarea.name').val()){	
			$(this).siblings('label').find('.name').each(function(){ 
			n += $(this).val();});
		}else{
			n =$(this).siblings('label').find('.redact.name').data('value');
		}
		
		if($(this).siblings('label').find('textarea.dateBirth').val()){	
			$(this).siblings('label').find('.dateBirth').each(function(){ 
				bd += $(this).val();});
		}else{
			bd =$(this).siblings('label').find('.redact.dateBirth').data('value');
		}
		if($(this).siblings('label').find('textarea.work').val()){	
			$(this).siblings('label').find('.work').each(function(){ 
				w+=$(this).val();});
		}else{
			w =$(this).siblings('label').find('.redact.work').data('value');
		}	
		if($(this).siblings('label').find('textarea.adress').val()){	
			$(this).siblings('label').find('.adress').each(function(){ 
				a += $(this).val();});
		}else{
			a =$(this).siblings('label').find('.redact.adress').data('value');
		}
		
		if($(this).siblings('label').find('textarea.home').val()){	
			$(this).siblings('label').find('.home').each(function(){ 
				h += $(this).val();});
		}else{
			h =$(this).siblings('label').find('.redact.home').data('value');
		}
		
		if($(this).siblings('label').find('textarea.leisure').val()){	
			$(this).siblings('label').find('.leisure').each(function(){ 
				Is += $(this).val();});
		}else{
			Is =$(this).siblings('label').find('.redact.leisure').data('value');
		}
		
		if($(this).siblings('label').find('textarea.socialStruct').val()){	
			$(this).siblings('label').find('.socialStruct').each(function(){ 
				sS += $(this).val();});
		}else{
			sS =$(this).siblings('label').find('.redact.socialStruct').data('value');
		}
		
		if($(this).siblings('label').find('textarea.poroblemForFamily').val()){	
			$(this).siblings('label').find('.poroblemForFamily').each(function(){ 
				pF += $(this).val();});
		}else{
			pF =$(this).siblings('label').find('.redact.poroblemForFamily').data('value');
		}
		
		if($(this).siblings('label').find('textarea.poroblemForExpert').val()){	
			$(this).siblings('label').find('.poroblemForExpert').each(function(){ 
				pE += $(this).val();});
		}else{
			pE =$(this).siblings('label').find('.redact.poroblemForExpert').data('value');
		}
		
		if($(this).siblings('label').find('textarea.wayProblem').val()){	
			$(this).siblings('label').find('.wayProblem').each(function(){ 
				wP += $(this).val();});
		}else{
			wP =$(this).siblings('label').find('.redact.wayProblem').data('value');
		}
		
		if($(this).siblings('label').find('textarea.workExpert').val()){	
			$(this).siblings('label').find('.workExpert').each(function(){ 
				wE += $(this).val();});
		}else{
			wE =$(this).siblings('label').find('.redact.workExpert').data('value');
		}
		
		if($(this).siblings('label').find('select.specialization').val()){	
			$(this).siblings('label').find('.specialization').each(function(){ 
				spec += $(this).val();});
		}else{
			spec =$(this).siblings('label').find('.redact.specialization').data('value');
		}
		if($(this).siblings('label').find('textarea.result').val()){	
			$(this).siblings('label').find('.result').each(function(){ 
				r += $(this).val();});
		}else{
			r =$(this).siblings('label').find('.redact.result').data('value');
		}
		if($(this).siblings('label').find('textarea.outher').val()){	
			$(this).siblings('label').find('.outher').each(function(){ 
				o += $(this).val();
			});
		}else{
			o =$(this).siblings('label').find('.redact.outher').data('value');
		}
		if($(this).siblings('label').find('textarea.membersDegree').val()){	
			$(this).siblings('label').find('.membersDegree').each(function(){ 
				mDe +=$(this).val()+";%";
			});
		}else{
			mDe =$(this).siblings('label').find('.redact.membersDegree').data('value');
		}	
		if($(this).siblings('label').find('input.membersDegree').val()){
			$(this).siblings('label').find('.membersDegree').each(function(){ 
				mDe +=$(this).val()+";%";
			});
		}	
		if($(this).siblings('label').find('textarea.membersName').val()){	
			$(this).siblings('label').find('.membersName').each(function(){ 
				mN+=$(this).val()+";%";
			});
		}else{
			mN =$(this).siblings('label').find('.redact.membersName').data('value');
		}
		if($(this).siblings('label').find('input.membersName').val()){	
			$(this).siblings('label').find('.membersName').each(function(){ 
				mN+=$(this).val()+";%";
			});
		}
		if($(this).siblings('label').find('textarea.membersWork').val()){	
			$(this).siblings('label').find('.membersWork').each(function(){ 
				mW+=$(this).val()+";%";
			});
		}else{
			mW =$(this).siblings('label').find('.redact.membersWork').data('value');
		}
		if($(this).siblings('label').find('input.membersWork').val()){	
			$(this).siblings('label').find('.membersWork').each(function(){ 
				mW+=$(this).val()+";%";
			});
		}
		if($(this).siblings('label').find('textarea.membersDate').val()){	
			$(this).siblings('label').find('.membersDate').each(function(){ 
				mDa+=$(this).val()+";%";
			});
		}else{
			mDa =$(this).siblings('label').find('.redact.membersDate').data('value');
		}
		if($(this).siblings('label').find('input.membersWork').val()){	
			$(this).siblings('label').find('.membersWork').each(function(){ 
				mW+=$(this).val()+";%";
			});
		}
		if($(this).siblings('label').find('textarea.childDegree').val()){	
			$(this).siblings('label').find('.childDegree').each(function(){ 
				cDe+=$(this).val()+";%";
			});
		}else{
			cDe =$(this).siblings('label').find('.redact.childDegree').data('value');
		}
		
		if($(this).siblings('label').find('input.childDegree').val()){	
			$(this).siblings('label').find('.childDegree').each(function(){ 
				cDe+=$(this).val()+";%";
			});
		}
		if($(this).siblings('label').find('textarea.childName').val()){	
			$(this).siblings('label').find('.childName').each(function(){ 
				cN+=$(this).val()+";%";
			});
		}else{
			cN =$(this).siblings('label').find('.redact.childName').data('value');
		}
		if($(this).siblings('label').find('input.childName').val()){	
			$(this).siblings('label').find('.childName').each(function(){ 
				cN+=$(this).val()+";%";
			});
		}
		if($(this).siblings('label').find('textarea.childShcool').val()){	
			$(this).siblings('label').find('.childShcool').each(function(){ 
				cS+=$(this).val()+";%";
			});
		}else{
			cS =$(this).siblings('label').find('.redact.childShcool').data('value');
		}
		if($(this).siblings('label').find('input.childShcool').val()){	
			$(this).siblings('label').find('.childShcool').each(function(){ 
				cS+=$(this).val()+";%";
			});
		}
		if($(this).siblings('label').find('textarea.childDate').val()){	
			$(this).siblings('label').find('.childDate').each(function(){ 
				cDa+=$(this).val()+";%";
			});
		}else{
			cDa =$(this).siblings('label').find('.redact.childDate').data('value');
		}
		if($(this).siblings('label').find('input.childDate').val()){	
			$(this).siblings('label').find('.childDate').each(function(){ 
				cDa+=$(this).val()+";%";
			});
		}
		var uId=$('.clientRedact .userId').val();		
		var uIdR=$('.clientRedact .userIdRedact').val();
		jQuery.get("../upedataClient.php",
			{
			id:i,
			dataRedact:dR,
			name:n,
			adress:a,
			dateBirth:bd,
			work:w,
			membersDegree:mDe,
			membersName:mN,
			membersWork:mW,
			membersData:mDa,
			childDegree:cDe,
			childName:cN,
			childShcool:cS,
			childData:cDa,
			home:h,
			leisure:Is,
			socialStruct:sS,
			specialization:spec,
			poroblemForFamily:pF,
			poroblemForExpert:pE,
			wayProblem:wP,
			workExpert:wE,
			result:r,
			outher:o,
			userId:uId,
			userIdRedact:uIdR
			} ,
			function(data) {
				alert('Изменения добавлены');
				$('#ClientRedactResett').click();}
				)});
				
	$('#addAct').click(function(){	
		var uI = $(".userId").val();
		var fN = $(".familyId").val();
		var d =$(".dataAkt").val();
		var login =$(".login").val();
		var pass =$(".pass").val();
		var aC=" ";
		var aIs=" ";
		var aR =$(".actResult").val();
		$(".actCode").each(function(){
			aC +=$(".actCode").val()+" ;%";
		});	
		$(".actItself").each(function(){
			aIs +=$(".actItself").val()+" ;%";
		});
		var sR=$(".socialResult").val();

		var k=$(".kesh").val();
		jQuery.get("../addAct.php",{	
			familyNumber:fN,
			data:d,
			actСode:aC,
			actItself:aIs,
			result:aR,
			userId:uI,
			socialResult:sR,
			kesh:k},
			function(data) {
				alert('Изменения добавлены');
				$('#act').click();
				window.location.href = "http://tgs/register.php?login="+login+"&password="+pass+"";}
		)
	});
	$('#addServices').click(function(){	
		var uI = $(".userId").val();
		var fN = $(".familyId").val();
		var d =$(".dataServices").val();
		var login =$(".login").val();
		var pass =$(".pass").val();
		var sC=" ";
		var sIs=" ";
		var sR =$(".servicesResult").val();
		$(".servicesCode").each(function(){
			sC +=$(".servicesCode").val()+" ;%";
		});	
		$(".servicesItself").each(function(){
			sIs +=$(".servicesItself").val()+" ;%";
		});
		jQuery.get("../addServices.php",{	
			familyNumber:fN,
			data:d,
			servicesСode:sC,
			servicesItself:sIs,
			result:sR,
			userId:uI},
			function(data) {
				alert('Изменения добавлены');
				$('#act').click();
				window.location.href = "http://tgs/register.php?login="+login+"&password="+pass+"";}
		)
	});
});