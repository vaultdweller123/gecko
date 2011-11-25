<?php
// all right reserved JC and Aldrin 2011 
$page = $_GET['page'];



mysql_connect("localhost","root","");
					mysql_select_db("gecko");

if($page){

					

					$sql = mysql_query("SELECT w.temp_id, t.content AS template_cont, w.content AS webpage_cont FROM webpage AS w left join template AS t ON w.temp_id = t.id WHERE w.id='".$page."'");

					while($row = mysql_fetch_array($sql)){

						$xweb = $row['webpage_cont'];
						$xtemp = $row['template_cont'];
						$flag = $row['temp_id'];
						
						
						
						
				
				

						if($xtemp==null&&$flag!='-1'){
						
							//menu
							$menustart = strpos($xtemp,"{gecko_menu");
							$menustr = substr($xtemp,$menustart,17);
							$gecko=explode("_",$menustr);
							require_once("admin/menu_layout.php");
							
							$gmenu = new Gmenu();
							$menu_layout = $gmenu->layout($gecko);

							$output2 = $xweb;
		
						
						}else{
						
						
							$deftemp = mysql_query("SELECT * FROM template WHERE gdefault=1");
							while($deftemprow=mysql_fetch_array($deftemp)){
							
								$xtemp = $deftemprow['content'];
								$menustart = strpos($xtemp,"{gecko_menu");
								$menustr = substr($xtemp,$menustart,17);
								$gecko=explode("_",$menustr);
								require_once("admin/menu_layout.php");
								
								$gmenu = new Gmenu();
								$menu_layout = $gmenu->layout($gecko);
								
							}
						
						
			if($menustart==true){
							$output1 = str_replace($menustr,$menu_layout,$xtemp);
							$output2 = str_replace("{gecko_content}",$xweb,$output1);
							}else{
							$output2 = str_replace("{gecko_content}",$xweb,$xtemp);
							}
						
						}
						
						echo $output2;
						

						
					}


}else{


					$sql = mysql_query("SELECT t.content AS template_cont, w.content AS webpage_cont FROM webpage AS w left join template AS t ON w.temp_id = t.id WHERE w.homepage='1'");

					while($row = mysql_fetch_array($sql)){

						$xweb = $row['webpage_cont'];
						$xtemp = $row['template_cont'];
						
						//menu
						$menustart = strpos($xtemp,"{gecko_menu");
						$menustr = substr($xtemp,$menustart,17);
						$gecko=explode("_",$menustr);
						
						require_once("admin/menu_layout.php");
						$gmenu = new Gmenu();
						$menu_layout = $gmenu->layout($gecko);
					
						if($menustart==true){
						$output1 = str_replace($menustr,$menu_layout,$xtemp);
						$output2 = str_replace("{gecko_content}",$xweb,$output1);
						}else{
						$output2 = str_replace("{gecko_content}",$xweb,$xtemp);
						}
						
					
						echo $output2;
						

						
					}
					
				
				
}




?>