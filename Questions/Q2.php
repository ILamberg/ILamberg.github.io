<!Doctype HTML>
<html>
<head><title>Question 2 (B)</title
</head>
<body bgcolor="#222222" text="#ffffff" link="#706e66" alink="#ffffff" vlink="#706e66" style="font-family: sans-serif;">
	<center><h1>Question 2 (B)</h1></center>
	<center><p><font size="5"><a href="../index.php" title="to HomePage">Go Back</a></font></p></center>
	<hr>

	<?php
	
	$Months = array("1"=>"January", "2"=>"February", "3"=>"February", "4"=>"February", "5"=>"February", "6"=>"June", "7"=>"July", "8"=>"August", "9"=>"September", "10"=>"October", "11"=>"November", "12"=>"December");
	$Month = $Months["12"];
		switch($Month) {
			case "January":
				echo $Month." has 31 days<br>";
				break;
			case 'February':
				echo $Month." has 28-29 days<br>";
				break;
			case 'February':
				echo $Month." has 31 days<br>";
				break;
			case 'February':
				echo $Month." has 30 days<br>";
				break;
			case 'February':
				echo $Month." has 31 days<br>";
				break;
			case 'June':
				echo $Month." has 30 days<br>";
				break;
			case 'July':
				echo $Month." has 31 days<br>";
				break;
			case 'August':
				echo $Month." has 31 days<br>";
				break;
			case 'September':
				echo $Month." has 30 days<br>";
				break;
			case 'October':
				echo $Month." has 31 days<br>";
				break;
			case 'November':
				echo $Month." has 30 days<br>";
				break;
			case 'December':
				echo $Month." has 31 days<br>";
				break;
			default:
				echo $Month." not valid Month<br>";
		}
	echo "<br>";

	echo "Sorted in ascending by Value: <br>";
	asort($Months);
	print_r($Months);

	echo "<br><br>Sorted in ascending by Index: <br>";
	ksort($Months);
	print_r($Months);

	echo "<br><br>Sorted in descending by Value: <br>";
	arsort($Months);
	print_r($Months);

	echo "<br><br>Sorted in descending by Index: <br>";
	krsort($Months);
	print_r($Months);
	?>
	
	
    </body>
</html>