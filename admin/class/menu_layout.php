<?php

class Gmenu{

	function layout($gecko){
	
		$menu = ($gecko[2]-2011);
		$menu_layout = "";
		$sql5 = mysql_query("SELECT * FROM menu WHERE id='".$menu."'");
		
		while($row5=mysql_fetch_array($sql5)){
			$menu_id = $row5['elem_id'];
		}

		$menu_layout .= "<ul id=\"".$menu_id."\">";
		$sql3 = mysql_query("SELECT * FROM menu_item WHERE base='-1' AND menu='".$menu."'");
		
		while($row3=mysql_fetch_array($sql3)){
		
			$menu_layout .= "<li><a href=\"".$row3['url']."\">".$row3['name']."</a>";
			$sql4 = mysql_query("SELECT * FROM menu_item WHERE base!='-1' AND base='".$row3['id']."' AND menu='".$menu."'");

			if(mysql_num_rows($sql4)>0){
				$menu_layout .= "<ul>";
			 } 

			while($row4=mysql_fetch_array($sql4)){
				if($row4['base']==$row3['id']){
					$menu_layout .= "<li><a href=\"".$row4['url']."\">".$row4['name']."</a></li>";
				 } 
			 } 
			 
			if(mysql_num_rows($sql4)>0){
				$menu_layout .= "</ul>";
			 } 
		 
			$menu_layout .= "</li>";
	 
		} 
 
		$menu_layout .= "</ul>";
		
		return $menu_layout;
	
	}

}


	

	
	
 
 ?>

