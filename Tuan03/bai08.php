<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Bai08</title>
</head>

<body>
	<center>
    	<form action="xuLyBai08.php" name="anh" method="post">
        	Chọn hình ảnh:
            <select name="anh">
            	<?php
					foreach(glob("image/*.*") as $filename){
						echo "<option value='$filename'>".substr($filename,6)."</option>";
					}
				?>
            </select>
            <br />
            Chọn kích thước:
            <input type="radio" name="kthuoc" value="200"/>200x200
            <input type="radio" name="kthuoc" value="300"/>300x300
            <input type="radio" name="kthuoc" value="500"/>500x500
           	<br />
            <input type="submit" name="btnSubmit" value="Xem ảnh" />
        </form>
    </center>
</body>
</html>