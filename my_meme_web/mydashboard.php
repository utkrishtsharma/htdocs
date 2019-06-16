<body>
<form method="post" enctype="multipart/form-data">


Select Your meme:<input type="file" name="f1"><br>
Enter a caption:<input type="text" name="caption" ><br>

<input type="submit" name="b1" value="Upload">
<input type="submit" name="b2" value="ViewData">
<hr><hr>

</form>

<?php
if(isset($_POST['b1']))
{

$dir="uploadsData"; // parent dir
$dirimage="uploadsData/images";// upload data in img folder

$meme=$_FILES['f1']['tmp_name'];//get file name with path  d:\basket.jpg
$meme1=basename($_FILES['f1']['name']);//get only file name     myfile/basket.jpg
$targetmeme=$dirimage."/".$meme1;// uploadsData/ravi.doc
$a=move_uploaded_file($meme,$targetmeme) or die("error");// to move from source to destination or server





if($a)
{
	 $caption = $_POST['caption'];

$con=mysqli_connect("localhost","root","root","mymemewebsite");


$sql = "INSERT INTO `dankmemes` (`id`, `image`, `caption`, `upvotes`, `downvotes`) VALUES (NULL, '".$targetmeme."', '".$caption."', "0", "0")";







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
<td>Image</td>
<td>Caption</td>

</tr>
<?php

$con=mysqli_connect("localhost","root","root","mymemewebsite");
$sql="SELECT * FROM dankmemes";

if ($result=mysqli_query($con,$sql))
  {
  // Fetch one and one row
  while ($row=mysqli_fetch_row($result))
    {
?>
<tr>
	<td><a href="<?php echo $row[0]?>">Download meme</a></td>
<td><?php echo $row[1];  ?></td>



</tr>
<?php
 
    }
}
mysqli_close($con);
}

?>
</table>
</body>