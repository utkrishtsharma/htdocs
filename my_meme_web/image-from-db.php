<body>



<?php

$con=mysqli_connect("localhost","root","root","mymemewebsite");
$sql="SELECT * FROM dankmemes";

if ($result=mysqli_query($con,$sql))
  {
  // Fetch one and one row
  while ($row=mysqli_fetch_row($result))
    {
?>
/*
<img src ="<?php echo $row[0]?>">




<?php
 
    }
}
mysqli_close($con);


?>
</table>
</body>