<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Bai03</title>
</head>

<body>
	<center>
    	<form action="#" name=bai03" method="post">
        	<label for=""><h1>Chọn hình ảnh</h1></label>
            <select name="image">
            	<?php
					foreach(glob("image/*.*") as $filename){
						echo "<option value='$filename'>".substr($filename,6)."</option>";
					}
				?>
            </select>
            <input type="submit" name="btnSubmit" value="Xem ảnh"/>
        </form>
    </center>
    
    <?php
		if(isset($_REQUEST['btnSubmit'])){
			$image=$_REQUEST['image'];
			echo "<img src='$image' width='500px' />";
		}
	?>
</body>
</html>