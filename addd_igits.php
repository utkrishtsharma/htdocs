<html>
<head>
	<title> test.php</title>
</head>
<body>
	<form methord = "post" >

	enter 4 digit number  :<input type = "text" name ="t1"><br>
	
	<input type="submit" name="b1" value="add">
	
</form>
</body>
</html>





<?php

$a=$_GET['t1'];
$b=$a%10;          //$b=6
$c=($a%100 -$b)/10 ;
$d=[$a%1000-($c*10+$b)]/100 ;
$e=[$a%10000-($d*100 +$c*10+$b)]/1000    

$sum=$b+$c+$d+$e;
echo"Sum of $a and $b=$sum";



?>

