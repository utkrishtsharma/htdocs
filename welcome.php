<html>
<head>
<title>welcome.html</title>
</head>
<body bgcolor="green">
<form method="post">

Enter rno:<input type="text" name="t1" placeholder="rno"/>
Enter name:<input type="text" name="t2" placeholder="name"/>
<input type="submit" name="b1" value="save"/>
<input type="submit" name="b2" value="view"/>

</form>


<?php






if(isset($_POST['b1']))

{

	
    $roll=$_POST['t1'];
    $nm=$_POST['t2'];



mysql_connect("localhost","root",""); 
mysql_select_db("database1");
$con=mysqli_connect("localhost","root","","database1");




$s1="insert into student values(".$roll.",'".$nm."')";
echo"$s1";
$res=mysql_query($s1);
$res=mysqli_query($con,$s1);
if($res)
{
echo"<script>alert('successfully saved')</script>";
}
else
{
echo"<script>alert('not saved')</script>";
}



}



/*
if(isset($_POST['b2']))
{
?>
<table border="1">
<tr>
<td>Roll</td>
<td>Name</td>
</tr>
<?php

$con=mysqli_connect("localhost","root","","database1");
$sql="SELECT * FROM student";

if ($result=mysqli_query($con,$sql))
  {
  // Fetch one and one row
  while ($row=mysqli_fetch_row($result))
    {
?>
<tr>
<td><?php echo $row[0];  ?></td>
<td><?php echo $row[1]  ?></td>
</tr>    

 
    }
}
mysqli_close($con);
}
*/


?>
</table>
</body>
</html>