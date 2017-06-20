<?php

if($_FILES['file']['size']>0){
	
	if($_FILES['file']['size']<= 153600){
		if(move_uploaded_file($_FILES['file']['tmp_name'],"images/".$_FILES['file']["name"])){
		//file uploaded
		
		?>
		
		<script type = "text/javascript">
		parent.document.getElementId("message").innerHTML = "";
		parent.document.getElementId("file").value = "";
		window.parent.uploadpicture("<?php echo'images/'.$_FILES['file']["name"];?>");
		</script>
		
		<?php
			
	}else{
		//the upload failed
		
		
	}
	}else{
		//the file is too big
		
		
	}
}

?>
