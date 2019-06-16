<html>
<head>
	<title> test.php</title>
</head>
<body bgcolor="green">
	<form methord = "post" >

	enter 1st no :<input type = "text" name ="t1">
	
	<input type="submit" name="b1" value="add">
	
</form>
</body>
</html>





<?php

if(isset($_GET['b1']))
{
$a=$_GET['t1'];
  

eCHO"$a";
}
/*
$s=0;
$x=0;
while ($a>0)
{
$x=$a%10;
$s=$s+$x;
 $a=($a/10);
  echo" sum of digits is : $s ";

 }









?>

