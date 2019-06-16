<html>
<head>
	<title> test.php</title>
</head>
<body bgcolor="green">
	<form methord = "POST" >

	enter 1st no :<input type = "text" name ="t1">

	<input type="submit" name="b1" value="sum">
	
	
</form>
</body>
</html>





<?php



if(isset($_GET['b1']))
{
$a=$_GET['t1'];


while ($a>0)
{
$x=$a%10;
echo"$x "

 $a=int($a/10);
  ;
 }







?>

