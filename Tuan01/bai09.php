<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>bai09</title>

<style>
	table, th, td {
		border:0.5px solid;
	}
	td{
		text-align:center;	
	}
</style>
</head>

<body>
	<table>
    	<tr>
        	<th>STT</th>
            <th>Tên sách</th>
            <th>Nội dung sách</th>
        </tr>
        <?php
    		for($i=0;$i<=100;$i++){
				echo "<tr>";
				echo "<td>$i</td>";
				echo "<td> Tên sách $i</td>";
				echo "<td> Nội dung $i</td>";
				echo "</tr>";
			}
   		?>
    </table>
</body>
</html>
