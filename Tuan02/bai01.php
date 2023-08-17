<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>bai01</title>
</head>

<body>
	<?php
		if(isset($_REQUEST["chieudai"])&&isset($_REQUEST["chieurong"])){
			$cd = $_REQUEST["chieudai"];
			$cr = $_REQUEST["chieurong"];
			$dt = $cd * $cr;
		}
	?>

	<center>
    	<h2>Diện Tích Hình Chữ Nhật</h2>
        <form name="Shcn" action="#" method="get">
        	<table>
            	<tr>
                	<td>Chiều dài: </td>
                    <td>
                    	<input type="number" name="chieudai" value="<?php if(isset($cd)) echo $cd?>"/>
                    </td>
                </tr>
                
                <tr>
                	<td>Chiều rộng: </td>
                    <td>
                    	<input type="number" name="chieurong" value="<?php if(isset($cr)) echo $cr?>"/>
                    </td>
                </tr>
                
                <tr>
                	<td>Diện tích: </td>
                    <td>
                    	<input type="number" name="dientich" disabled value="<?php if(isset($dt)) echo $dt?>"/>
                    </td>
                </tr>
                <tr>
                	<td colspan="2" align="center">
                    	<input type="submit" name="btnsub" value="Tính"/>
                    </td>
                </tr>
            </table>
        </form>
    </center>
</body>
</html>
