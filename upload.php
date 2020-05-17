<?php 

/* Getting file name */
$filename = $_FILES['file']['name']; 

/* Location */
$location = "arquivos/".$filename; 
$uploadOk = 1; 

if($uploadOk == 0){ 
echo 0; 
}else{ 
/* Upload file */
if(move_uploaded_file($_FILES['file']['tmp_name'], $location)){ 
	echo $location; 
}else{ 
	echo 0; 
} 
} 
?> 
