<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>bai05</title>
</head>

<body>
	<?php
		if(isset($_REQUEST["a"]) && isset($_REQUEST["b"]))
		{
			$a=$_REQUEST["a"];
			$b=$_REQUEST["b"];
			if($a==0){
				if($b==0){
					$x="Phương Trình Vô Số Nghiệm";
				}else{
					$x="Phương Trình Vô Nghiệm";
				}
			}else{
				$x=-$b/$a;
			}
		}
	?>
    <center>
        <h1>Giải Phương Trình Bậc Nhất</h1>
            <form name="PTBacNhay" action="#" method="get">
                <table>
                <tr>
                    <td>Phương trình: </td>
                    <td>
                        <input type="number" name="a" value="<?php if(isset($a)) echo $a ?>"/> x +
                        <input type="number" name="b" value="<?php if(isset($b)) echo $b ?>"/> = 0
                            </td>
                </tr>
                 
                 <tr>
                    <td>Nghiệm: </td>
                    <td>
                        <input type="text" name="nghiem" disabled value="<?php if(isset($x)) echo $x ?>"/>
                            </td>
                </tr>
                 <tr>
                    <td colspan="2" align="center">
                        <input type="submit" name="btnTinh" value="Giải Phương Trình"/>
                            </td>
                </tr>
                </table>
            
            </form>
 	</center>
</body>
</html>
