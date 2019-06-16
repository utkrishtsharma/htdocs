<!DOCTYPE html>
<html>

	<head>
    <meta name="viewport"content="width=device-width, initial-scale=1.0">
		<link rel="stylesheet"href="main.css" type="text/css">
  <link rel="stylesheet" href="A_Lolita_Scorned/fontface.css" type="text/css">
</head>



	<body>
	
<div class="nav">

           <ul >
           
           <li><a href="http://localhost:8888/main_login.php">LOGIN</a></li>
           <li><a hef="'#contact">CONTACT</a></li>
           <li><a hef="'#about">ABOUT</a></li>
           <li ><a hef="'#news">HOME</a></li>
          </ul>
      </div>


      <div class="div00" >
       <centre class="centre1" > <h1>DANKEST MEMES</h1></centre>
      </div>





    <div class="div2" > 
  
   





    <?php

$con=mysqli_connect("localhost","root","root","mymemewebsite");
$sql="SELECT image FROM dankmemes";
echo $sql;
if ($result=mysqli_query($con,$sql))
  {

  while ($row=mysqli_fetch_row($result))
    {
?> 
<div class="div3" >

 <img src="<?php echo $row[0]?>"> 

</div>




<?php
 
    }
}
mysqli_close($con);
}

?>



    </div>


    
    
  </div>



  </body>
	


</html>