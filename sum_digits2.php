<html>
<head>
	<title>sum_digits2.php</title>
</head>
<body bgcolor="blue">
	
	<form method = "post" >
  <center>
	enter a number :<input type = "text" name ="t1"><br>
	
	<input type="submit" name="b1" value="enter">
	</center>

</form>
</body>
</html>


<?php

if(isset($_POST['b1']))
{



$a=$_POST['t1'];
$b=0;
while($a>0)
{
	
	$c=$a%10; 
	$b=$b+$c;  
	//$a=$a/10;
	$a = (int)($a/10);
} 

echo"sum is ".$b; 
  

}
?>