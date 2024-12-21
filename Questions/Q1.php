<!Doctype HTML>
<html>
<head><title>Question 1 (A)</title
</head>
<body bgcolor="#222222" text="#ffffff" link="#706e66" alink="#ffffff" vlink="#706e66" style="font-family: sans-serif;">
	<center><h1>Question 1 (A)</h1></center>
	<center><p><font size="5"><a href="../index.php" title="to HomePage">Go Back</a></font></p></center>
	<hr>
	
	<form method="post" action="Q1.php">
		<label>First Number</label>
		<input type="number" name="num1" min="20" max="30"><br><br>
		
		<label>Second Number</label>
		<input type="number" name="num2" min="20" max="30"><br><br>
		
		<label>Shape (s-S=Square, c-C=Circle, t-T=Triangle, r-R=Rectangle, sf-SF=Sphere): </label>
		<input type="text" name="shape" pattern="[sScCtTrRfF]+"><br><br>
		
		<input type="Submit" value="Submit">
	</form>

	<?php
	
	if ($_SERVER["REQUEST_METHOD"] == "POST") {
		$num1 = $_POST["num1"];
		$num2 = $_POST["num2"];
		$shape = $_POST["shape"];

		echo "<br>";

		switch($shape) {
			case 'S':
			case 's':
				$area = $num1 * $num1; // num1*2
				echo "Area of Square = ".$area;
				break;
			case 'C':
			case 'c':
				$area = pi() * $num1 * $num1; // Pi * num1*2
				echo "Area of Circle = ".$area;
				break;
			case 'T':
			case 't':
				$area = 0.5 * $num1 * $num2; // 1/2 * num1 * num2
				echo "Area of Triangle = ".$area;
				break;
			case 'R':
			case 'r':
				$area = $num1 * $num2; // num1 * num2
				echo "Area of Rectangle = ".$area;
				break;
			case 'SF':
			case 'sf':
				$area = 4 * pi() * $num1 * $num1; // Surface Area? - 4*pi * num1*2
				echo "Area of Sphere = ".$area;
				break;
			default:
				echo "Please Choose the Right Shape";
		}
	}
	?>
	
    </body>
</html>