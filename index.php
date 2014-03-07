<?php
// All right reserved JC, Ron and Aldrin 2011
$page = $_GET['page'];
require_once("admin/include/connect.php");

// with page
if($page){

					$sql = mysql_query("SELECT w.temp_id, t.content AS template_cont, w.content AS webpage_cont FROM webpage AS w left join template AS t ON w.temp_id = t.id WHERE w.id='".$page."'");

					while($row = mysql_fetch_array($sql)){

							// webpage
							$xweb = $row['webpage_cont'];
							// template
							$xtemp = $row['template_cont'];
								// -1 for default template
							$flag = $row['temp_id'];
						
				
						// no selected template, either use default or none at all
						if($xtemp==null){
						
						
						
							// uses default template
							if($flag==-1){
							
							
							
								// with template and using default template
								$deftemp = mysql_query("SELECT * FROM template WHERE gdefault=1");
								while($deftemprow=mysql_fetch_array($deftemp)){
								
									$xtemp = $deftemprow['content'];
									$menustart = strpos($xtemp,"{gecko_menu");
									$menustr = substr($xtemp,$menustart,17);
									$gecko=explode("_",$menustr);
									require_once("admin/class/menu_layout.php");
									
									$gmenu = new Gmenu();
									$menu_layout = $gmenu->layout($gecko);
									
								}
							
							
								if($menustart==true){
									$output1 = str_replace($menustr,$menu_layout,$xtemp);
									$output2 = str_replace("{gecko_content}",$xweb,$output1);
								}else{
									$output2 = str_replace("{gecko_content}",$xweb,$xtemp);
								}
								
								// no template at all
							}else{
							
								$output2 = $xweb;
							}

						
		
						
						}else{
						
					
							
								// with template
								
								$menustart = strpos($xtemp,"{gecko_menu");
								$menustr = substr($xtemp,$menustart,17);
								$gecko=explode("_",$menustr);
								require_once("admin/class/menu_layout.php");
								
								$gmenu = new Gmenu();
								$menu_layout = $gmenu->layout($gecko);
							
							
								if($menustart==true){
									$output1 = str_replace($menustr,$menu_layout,$xtemp);
									$output2 = str_replace("{gecko_content}",$xweb,$output1);
								}else{
									$output2 = str_replace("{gecko_content}",$xweb,$xtemp);
								}
								
							
							
						
					
					
						
						
						}
				
						echo $output2;

						
					}


// no page
}else{


					$sql = mysql_query("SELECT t.content AS template_cont, w.content AS webpage_cont FROM webpage AS w left join template AS t ON w.temp_id = t.id WHERE w.homepage='1'");

					while($row = mysql_fetch_array($sql)){

						$xweb = $row['webpage_cont'];
						$xtemp = $row['template_cont'];
						
						//menu
					
						$menustart = strpos($xtemp,"{gecko_menu");
						$menustr = substr($xtemp,$menustart,17);
						$gecko=explode("_",$menustr);
						
					
						
						require_once("admin/class/menu_layout.php");
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