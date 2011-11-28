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

}

?>