<?php

class Gecko{

	public function start_session(){
		session_start();
	
	}
	
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

}

?>