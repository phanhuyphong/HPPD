<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Bai05b</title>
</head>

<body>
	<form action="#" name="img" method="post">
    	<label for="">Chọn thư mục: </label> 
        <select name="img">
        	<?php
				$result = scandir("image");
				$file = array_diff($result, array('.', '..'));
				if(count($file)>0){
					foreach($file as $file){
						if(isset($_REQUEST['btnSubmit'])){
							if($file==$_REQUEST['img']){
								echo "<option value='$file' selected>".$file."</option>";
							} else{
								echo "<option value='$file'>".$file."</option>";
							}
						} else{
								echo "<option value='$file'>".$file."</option>";
							}
					}
				}
			?>
        </select>
        <br>
        <input type="submit" name="btnSubmit" value="Xem ảnh"/>
    </form>
    
    <?php
		if(isset($_REQUEST['btnSubmit'])){
			foreach(glob("image/".$_REQUEST['img']."/*.*") as $filename){
				echo "<img src='$filename' width='100px'>";
			}
		}
	?>
</body>
</html>