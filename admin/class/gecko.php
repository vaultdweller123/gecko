<?php

class Gecko{




	public function load_CKEditor($id,$attr,$path='/ckeditor/ckeditor.js'){
		return "<script type=\"text/javascript\" src=\"".$path."\"></script>
			<script type=\"text/javascript\">
			window.onload = function()
			{
				CKEDITOR.replace( '".$id."', 
						{
							".$attr."
						});
			};
			</script>";
	}
	
	public function load_jQuery($jquery="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"){
		return "<script type=\"text/javascript\" src=\"".$jquery."\"></script>";
	}
	
	
	public function load_jQueryUI($jquery="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8.5/jquery-ui.min.js"){
		return "<script type=\"text/javascript\" src=\"".$jquery."\"></script>";
	}
	
	public function load_jQueryUICSS($jquery="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8.5/themes/vader/jquery-ui.css"){
		return "<link rel=\"stylesheet\" type=\"text/css\" href=\"".$jquery."\" />";
	}
	
	

}

?>