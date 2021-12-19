<html>
<head>
<style>
 /* Style buttons */
.btn {
  background-color: DodgerBlue; /* Blue background */
  border: none; /* Remove borders */
  color: white; /* White text */
  padding: 12px 16px; /* Some padding */
  font-size: 16px; /* Set a font size */
  cursor: pointer; /* Mouse pointer on hover */
}

/*Navigation bar*/
.navbar{margin: 1%;
float:right;
}

.navbar{
	transition:0.4s;
	}	

/* Darker background on mouse-over */
.btn:hover {
  background-color: RoyalBlue;
} 

@media only screen and(min-width:200px){
	
	.navbar{width:40%;}
	body{width:40%;}
	form{width:40%;}
	}
</style>
</head>
<body>

 <!Navigation bar>

       <button type="button" class="btn btn-primary" onclick="window.location='http://localhost/program/chronicle/homepage.html';">Logout</button>
	   <button type="button" class="btn btn-primary" onclick="window.location='http://localhost/program/chronicle/view.html';">Back</button>
      

</body>
</html>



<?php
$a=$_POST["email3"];
$b=$_POST["email4"];
$c=$_POST["the-textarea"];
$d=$_POST["datepicker"];

$con=mysqli_connect("127.0.0.1","root","admin123","chronicle");
if(!$con)
{
echo"Error in connection";
}
$s2="select * from diary where email='$a' and password='$b' and dateofenter='$d'";
$result2=mysqli_query($con,$s2);
while($row=mysqli_fetch_array($result2))
{
$day="Day:".$row['dayofenter'];
$time="Time:".$row['timeofenter'];
echo "<table border=3px align=center cellspacing=2px cellpadding=4px><tbody><tr><td><textarea rows=\"12\" cols=\"90\">" ."Date: $d"."\n".$day."\n".$time."\n\n". $row['content']. "</textarea></td></tr></tbody></table>";
}
mysqli_close($con);
?>
