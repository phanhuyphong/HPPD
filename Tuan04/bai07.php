<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Bai07</title>
</head>

<body>
	
	<?php
		$file = fopen("filetext.txt", "w");// Mở file để ghi
		$text = "
		Why is my verse so barren of new pride,\n
        So far from variation or quick change?\n
        Why with the time do I not glance aside\n
        To new-found methods, and to compounds strange?\n
        Why write I still all one, ever the same,\n
        And keep invention in a noted weed,\n
        That every word doth almost tell my name,\n
        Showing their birth, and where they did proceed?\n
        O! know sweet love I always write of you,\n
        And you and love are still my argument; \n
        So all my best is dressing old words new,\n
        Spending again what is already spent:\n
        For as the sun is daily new and old,\n
        So is my love still telling what is told.\n
        ";
		
		fwrite($file, $text);//Ghi nội dung vào file
		fclose($file); // Đóng file
	?>
    
    <?php
		$file = fopen("filetext.txt", "a");// Mở file ghi thêm
		$text="\nFaculty of IT";
		fwrite($file, $text);//Ghi nội dung vào file
		fclose($file); // Đóng file
	?>
    
    <?php
		$file = fopen("filetext.txt", "a");// Mở file ghi thêm
		$read = file('filetext.txt');
		foreach($read as $line){
			echo $line."<br>";
		}
		fclose($file); // Đóng file
	?>
    
</body>
</html>