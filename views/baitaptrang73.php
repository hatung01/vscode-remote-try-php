
<html>
	<head>
		<title>Visual Studio Code Remote :: PHP</title>
	</head>
	<body>
	<?php

		define("PI", 3.14);
		$r=10;
		$s= PI * pow($r ,2); 
		$p = 2 * PI * $r;
		echo $p;
		echo "<br> $s";
		echo "<br>";
		$n = 100;
		$arr1 = array($n);
		$arr2 = array(1, 2, 3, 4);
		$arr3 = array();
		$arr4 = array('hoten' => "HTung", 
					'quequan' => "LX",
					'tuoi' => 24,
					'IQ' => "Rat cao");
		print_r($arr4);
		for($a = 0; $a <= 200; $a++){
			if($a%2 == 0){
				echo "<b><font color=red>".$a."</font></b>";
				echo "<br>";
			}
			else {
				echo "<i><font color=blue>".$a."</font></i>";
				echo "<br>";
			}
		}
		

?>
	</body>
</html>