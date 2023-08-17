<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>bai02</title>
</head>

<body>
	<?php
		if(isset($_REQUEST["bk"])){
			$bk = $_REQUEST["bk"];
			$dt = 3.14 * $bk * $bk;
			$cv = 2 * 3.14 * $bk;
		}
	?>

	<center>
    	<h2>Diện Tích và Chu Vi Hình Tròn</h2>
        <form name="ht" action="#" method="get">
        	<table>
            	<tr>
                	<td>Bán Kính: </td>
                    <td>
                    	<input type="number" name="bk" value="<?php if(isset($bk)) echo $bk?>"/>
                    </td>
                </tr>
                
                <tr>
                	<td>Diện Tích: </td>
                    <td>
                    	<input type="number" name="dientich" disabled value="<?php if(isset($dt)) echo $dt?>"/>
                    </td>
                </tr>
                
                <tr>
                	<td>Chu Vi: </td>
                    <td>
                    	<input type="number" name="dientich" disabled value="<?php if(isset($cv)) echo $cv?>"/>
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
