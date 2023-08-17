<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>bai04</title>
</head>

<body>
	<?php
		if(isset($_REQUEST["canha"]) && isset($_REQUEST["canhb"]))
		{
			$ca=$_REQUEST["canha"];
			$cb=$_REQUEST["canhb"];
			$tong=round(sqrt(pow($ca,2)+pow($cb,2)), 2);
		}
	?>
    <center>
        <h1>Cạnh Huyền Tam Giác Vuông</h1>
            <form name="canhuyenTGV" action="#" method="get">
                <table>
                <tr>
                    <td>Cạnh A: </td>
                    <td>
                        <input type="number" name="canha" value="<?php if(isset($ca)) echo $ca ?>"/>
                            </td>
                </tr>
                 <tr>
                    <td>Cạnh B: </td>
                    <td>
                        <input type="number" name="canhb" value="<?php if(isset($cb)) echo $cb ?>"/>
                            </td>
                </tr>
                 <tr>
                    <td>Canh Huyen</td>
                    <td>
                        <input type="number" name="canhhuyen" disabled value="<?php if(isset($tong)) echo $tong ?>"/>
                            </td>
                </tr>
                 <tr>
                    <td colspan="2" align = "center">
                        <input type="submit" name="btnTinh" value="Tính"/>
                            </td>
                </tr>
                </table>
            
            </form>
 	</center>
</body>
</html>
