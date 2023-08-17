<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>bai10</title>
</head>

<body>
	<select>
        <?php
        $ngay = getdate();
        $nam = $ngay["year"];
        for($i=1900; $i<=$nam; $i++){
            echo "<option>$i</option>";
        }
        ?>
    </select>
    <select>
        <?php
        $ngay = getdate();
        $nam = $ngay["year"];
        for($i=$nam; $i>=1900; $i--){
            echo "<option>$i</option>";
        }
        ?>
    </select>
</body>
</html>
