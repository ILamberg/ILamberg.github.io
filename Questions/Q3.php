<!Doctype HTML>
<html>
<head><title>Question 3 (C)</title
</head>
<body bgcolor="#222222" text="#ffffff" link="#706e66" alink="#ffffff" vlink="#706e66" style="font-family: sans-serif;">
	<center><h1>Question 3 (C)</h1></center>
	<center><p><font size="5"><a href="../index.php" title="to HomePage">Go Back</a></font></p></center>
	<hr>

    <form method="POST" action="Q3.php">
        <label>Field 1: </label>
        <input type="text" name="num1"><br><br>

        <label>Field 2: </label>
        <input type="text" name="num2"><br><br>

        <input type="Submit" value="Submit">
    </form>

    <br>

	<?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {

        $a = $_POST['num1'];
        $b = $_POST['num2'];
        
        echo "[".$a."] with "."[".$b."] = (".strcmp($a, $b).")<br>";
        echo "[".$a."] with "."[".$b."] = (".strcasecmp($a, $b).")<br>";
        echo "[".$a."] with "."[".$b."] = (".strncmp($a, $b, 3).")<br>";
        echo "[".$a."] with "."[".$b."] = (".strncasecmp($a, $b, 3).")<br>";
    }

	?>
	
	
    </body>
</html>