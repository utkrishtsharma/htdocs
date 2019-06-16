
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1">
   <style>
body {font-family: Arial, Helvetica, sans-serif;}

input[type=text], select, textarea {
    margin-top: 10%;
    width: 100%;
    padding: 12px;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
    margin-top: 6px;
    margin-bottom: 16px;
    resize: vertical;
}

input[type=submit] {
    margin-top: 10%;
    background-color: #4CAF50;
    color: white;
    padding: 12px 20px;
    border: none;
    border-radius: 4px;
    cursor: pointer;
      font-size: 60px;
}

input[type=submit]:hover {
    background-color: #45a049;
     font-size: 80px;

}

.container {
    border-radius: 10px;
    background-color: #f2f2f2;
    padding: 40px;
    height: 60%;
}
</style>
		


	










<title>LOGIN</title>


</head>
<div class="container">


	<center>
<form method="post">

Enter user Id:<input type="text" name="t1" /><br>
Enter password:<input type="text" name="t2" /><br>
<input type="submit" name="b1" value="Login" />

<input type="submit" name="b2" value='Register' />

</form>
</center>
</div>

</center>
</body>
</html>
<?php










if(isset($_POST['b1']))
{
$con=mysqli_connect("localhost","root","root","mymemewebsite");







$s1="select * from regestration where uid='".$_POST['t1']."' and pwd='".$_POST['t2']."'";
echo $s1;
$result=mysqli_query($con,$s1);

$f=0;
$myuid=$_POST['t1'];
$p1="php language";
while ($row=mysqli_fetch_row($result))
{
$f=1;
}

if($f==1)

	header('location:http://localhost:8888/my_meme_web/mydashboard.php?x='.$myuid.'&p='.$p1);
else
	echo("invalid user id or password");


}






if(isset($_POST['b2']))
{

header('location:http://localhost:8888/my_meme_web/regestrarion_main.php');

}

?>






























<!--           error code.  ----------------------------------------------------------------------------------











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



/*


if(isset($_POST['b1']))
{

$con=mysqli_connect("localhost","root","root","database1");


$result=mysqli_query($con,$s1);
/*   ---- to check connection -----
 if ($con==true) {
    echo "Connected successfully";
}
  else {echo "notsuccessfully";}


*/

 




/*

if($con)
{
	

$s1="select * from student where user='".$_POST['t1']."' and password='".$_POST['t2']."'";

echo $s1;

$result = $conn->mysqli_query($s1);


echo $result;


$f=0;



while ($row=mysqli_fetch_row($result))
{
$f=1;
}

if($f==1){header('location:next.php');}

else
	{echo"invalid user id or password";}



}
}

?>
-->