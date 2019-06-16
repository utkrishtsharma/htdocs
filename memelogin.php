<html>
<head>
<title>DANK_MEMES_Login_BITCH</title>
</head>
<body bgcolor="green">
	<form method="post">
Enter USERNAME:<input type="text" name="t1" /><br>
Enter PASSWORD:<input type="text" name="t2" /><br>

<input type="submit" name="b1" value="Login" /><br>


</body>
</html>



<?php

if(isset($_POST['b1']))
{

$con=mysqli_connect("localhost","root","root","database1");


if($con)
{
	$user=$_POST['t1'];
$password=$_POST['t2'];

$s1="select*from sudent where user='".$_POST['t1']."' and password='".$_POST['t2']."'";
echo $s1;


$result=mysqli_query($con,$s1);
echo $result;

$count=mysql_num_rows($result);






if ($count==1) {
    echo "Success! $count";
} else {
    echo "Unsuccessful! $count";
}





}
}









?>