<body>
<form method="post" enctype="multipart/form-data">

Name:<input type="text" name="t1"><br>
City:<input type="text" name="t2"><br>
Select Your Resume:<input type="file" name="f1"><br>
Select your Photo:<input type="file" name="f2">
<input type="submit" name="b1" value="Upload">
<input type="submit" name="b2" value="ViewData">

</form>

<?php
if(isset($_POST['b1']))
{

$dir="uploadsData";
$dirimage="uploadsData/images";

$resume=$_FILES['f1']['tmp_name'];//get file name with path  d:\basket.jpg
$resume1=basename($_FILES['f1']['name']);//get only file name     myfile/basket.jpg
$targetresume=$dir."/".$resume1;// uploadsData/ravi.doc
$a=move_uploaded_file($resume,$targetresume) or die("error");// to move from source to destination or server


$resume=$_FILES['f2']['tmp_name'];//get file name with path  d:\basket.jpg
$resume1=basename($_FILES['f2']['name']);//get only file name     myfile/basket.jpg
$targetphoto=$dirimage."/".$resume1;// uploadsData/ravi.doc
$a=move_uploaded_file($resume,$targetphoto) or die("error");// to move from source to destination or server



if($a)
{

$con=mysqli_connect("localhost","root","","test");
$sql="insert into employee values('".$_POST['t1']."','".$_POST['t2']."','".$targetresume."','".$targetphoto."')";
$res=mysqli_query($con,$sql);
if($res)
{
	echo"saved successfully";
}
else
{
	echo" not saved";
}


}




}

if(isset($_POST['b2']))
{
?>
<table border="1">
<tr>
<td>Name</td>
<td>City</td>
<td>Resume</td>
<td>Photo</td>
</tr>
<?php

$con=mysqli_connect("localhost","root","","test");
$sql="SELECT * FROM employee";

if ($result=mysqli_query($con,$sql))
  {
  // Fetch one and one row
  while ($row=mysqli_fetch_row($result))
    {
?>
<tr>
<td><?php echo $row[0];  ?></td>
<td><?php echo $row[1]  ?></td>
<td><a href="<?php echo $row[2]?>">Download Resume</a></td>
<td><a href="<?php echo $row[3]  ?>">Download Photo</a></td>
</tr>
<?php
 
    }
}
mysqli_close($con);
}

?>
</table>
</body>