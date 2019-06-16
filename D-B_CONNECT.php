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
$s1="select*from student where userid='".$_POST['t1']."' and password='".$_POST['t2']."'";
echo $a;
/*
if ($con)
	echo "hello world";
else
	echo "hel world";
}
*/


if($con)
{
	$user=$_POST['t1'];
$password=$_POST['t2'];


$a="insert into student values('".$user."','".$password."')";
echo $a;
}


$res=mysqli_query($con,$a);
if($res)
echo"successfully registered";
else{
echo "not registered";
}





/*
$result=mysqli_query($con,$s1);
$f=0;
echo" hello ".$result;
$myuid=$_POST['t1'];
$p1="php language";
while ($row=mysqli_fetch_row($result))
{
$f=1;
}
if($f==1)
	header('location:localhost:8888/next.php?');
else
	echo"invalid user id or password";

}
*/



}

?>