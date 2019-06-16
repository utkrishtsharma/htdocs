<html>
<head>
	<title>factorial.php</title>
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


$f=1;
$a=$_POST['t1']; 
for($b=1;$b<=$a;$b++ )
{
   $f=$f*$b;                
}

echo"factorial is $f"; 

  

}
?>