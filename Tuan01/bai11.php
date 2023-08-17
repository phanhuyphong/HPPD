<!doctype html>
<html>
<head>
	<meta charset="utf-8">
	<title>bai11</title>

	<style>
		td{
            border: 1px solid; width: 50px; text-align: center;
        }
	</style>
</head>

<body>
	<table>
		<?php
		for($i=1;$i<=10;$i++){
			echo "<tr>";
				for($j=1;$j<=10;$j++){
					echo "<td>";
					echo $i*$j;
					echo "</td>";
				}
			echo "</tr>";
		}
		?>
	</table>
</body>
</html>
