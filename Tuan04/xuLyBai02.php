	
	<?php
		class Tuan04{
			function upload($file){
				$allowtypes = array('image/ipg', 'image/png', 'image/jpeg', 'image/gif');
				if(!in_array($file["type"], $allowtypes)){
					echo "<script>alert('This file is not image format!')</script>";
					return false;
				}
				$maxsize = 10*1024*1024;
				$size = $file["size"];
				if($size>$maxsize){
					echo "<script>alert(This file is tô large to upload!)</script>";
					return false;
				}
				$name = date("YmdHis").strstr($file["name"], ".");
				$dir="image/upload/".$name;
				$result = move_uploaded_file($file["tmp_name"], $dir);
				if(!$result){
					echo "<script>alert('Cantnot upload file!')</script>";
					return $result;
				}else{
					echo "<script>alert('Upload successfully!')</script>";	
				}
			}
		}
	?>
	
    