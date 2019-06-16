<html>
<head>
	<title> test.php</title>
</head>
<body>
	<form methord = "post" >

	enter 1st no :<input type = "text" name ="t1"><br>
	enter 2nd no :<input type = "text" name ="t2"><br>
	enter 3rd no :<input type = "text" name ="t3"><br>
	<input type="submit" name="b1" value="average">
	
</form>
</body>
</html>


<?php

$a=$_GET['t1'];
$b=$_GET['t2'];
$d=$_GET['t3'];
 $c=($a+$b+$d)/3;
 echo "average is : $c" ;

?>