<!DOCTYPE html>
<html>
<head>
	<title>Tugas TEKOTEKOTEK</title>
</head>
<body bgcolor="gray">
	<?php
	echo "TEKOTEK-OTEK anak ayam turun 100";
	echo "<br>";
	for ($i=99; $i>=1 ; $i--) {
		if($i%2==0){
			echo '<p style="color:brown; font-family:"Helvetica"">'."Mati satu tinggal $i".'</p>';
		}
		else{
			echo '<p style="color:yellow; font-family:"Helvetica"">'."Mati satu tinggal $i".'</p>';
		}
	}
	?>
</body>
</html>