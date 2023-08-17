<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Bai04</title>
</head>

<body>
	<form action="#" enctype="multipart/form-data" method="post">
    	<input type="file" name="myFile"/>
        <input type="submit" name="btnUpload" value="upload" />
    </form>
    
    <?php
        include "xuLyBai04.php";
        $p = new  Tuan04();
        
        if(isset($_REQUEST['btnUpload'])){
            $file = $_FILES['myFile'];
            $result = $p -> upload($file);
            if($result) 
                echo "<script>alert('upload successfully!')</script>";
        }
    ?>
</body>
</html>