<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Bai01</title>
</head>

<body>
	<table border="1">
    	<tr>
        	<td>Định dạng</td>
        	<td>Hiển thị</td>
        </tr>
        <?php
			echo "<tr><td>d/m/y</td><td>".date("d/m/y")."</td></tr>";
			echo "<tr><td>d/m/Y</td><td>".date("d/m/Y")."</td></tr>";
			echo "<tr><td>d/M/Y</td><td>".date("d/M/Y")."</td></tr>";
			echo "<tr><td>D/M/Y</td><td>".date("D/M/Y")."</td></tr>";
			echo "<tr><td>l/M/Y</td><td>".date("l/M/Y")."</td></tr>";
			echo "<tr><td>h/i/s</td><td>".date("h/i/s")."</td></tr>";
		?>
    </table>
</body>
</html>