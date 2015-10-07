   <?php  
   
   require "header.php"; 
    var_dump($_GET["exel"]);
   $ar=readExelFile('Sgo.xls');
    foreach($ar as $ar_colls){
	echo $ar_colls[0]." ".$ar_colls[1]." ".$ar_colls[2]." ".$ar_colls[3]." ".$ar_colls[4]." ".$ar_colls[5]." ".$ar_colls[6]." ".$ar_colls[7]." ".$ar_colls[8]." ".$ar_colls[9];

    }?>