<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>bai03</title>
</head>

<body>
	<?php
		if(isset($_REQUEST["canh1"])&&isset($_REQUEST["canh2"])&&isset($_REQUEST["canh3"]))
		{
			$c1=$_REQUEST["canh1"];
			$c2=$_REQUEST["canh2"];
			$c3=$_REQUEST["canh3"];
			if($c1+$c2>$c3 && $c1+$c3>$c2 && $c2+$c3>$c1)
			{
				if($c1==$c2 && $c2==$c3 && $c3==$c1)
				{
					$loai="Tam giac deu";
				}
				else if($c1==$c2 || $c1==$c3 || $c2==$c3)	
				{
					$loai="Tam giac can";
				}
				else if(pow($c1,2)==pow($c2,2)+pow($c3,2) || pow($c2,2)==pow($c1,2)+pow($c3,2) || pow($c3,2)==pow($c1,2)+pow($c2,2) )
				{
					$loai="Tam giac vuong";
				}
				else
				{
					$loai="Tam giac thuong";
				}
			}
			else
				$loai="Khong phai tam giac";
		}
	?>
    <center>
        <h1>Hình Tam Giác</h1>
            <form name="HTG" action="#" method="get">
              	<table>
                    <tr>
                        <td>Cạnh 1: </td>
                        <td>
                            <input type="number" name="canh1" value="<?php if(isset($c1)) echo $c1 ?>"/>
                                </td>
                    </tr>
                     <tr>
                        <td>Cạnh 2: </td>
                        <td>
                            <input type="number" name="canh2"  value="<?php if(isset($c2)) echo $c2 ?>"/>
                                </td>
                    </tr>
                     <tr>
                        <td>Cạnh 3: </td>
                        <td>
                            <input type="number" name="canh3"  value="<?php if(isset($c3)) echo $c3 ?>"/>
                                </td>
                    </tr>
                    <tr>
                        <td>Hình tam giác: </td>
                        <td>
                            <input type="text" name="htg" disabled value="<?php if(isset($loai)) echo $loai ?>"/>
                       </td>
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
