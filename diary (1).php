<?php
$a=$_POST["email1"];
$b=$_POST["email2"];
$c=$_POST["the-textarea"];
date_default_timezone_set('Asia/Kolkata');
$d=date("Y-m-d");
$e=date("h:i:s a",time());
$f=date("l");


$con=mysqli_connect("127.0.0.1","root","admin123","chronicle");
if(!$con)
{
echo"Error in connection";
}
$s="INSERT into diary(email,password,dateofenter,dayofenter,timeofenter,content) VALUES('$a','$b','$d','$f','$e','$c')";
$result=mysqli_query($con,$s);
if($result)
{
echo "<script>
alert('You have saved your data successfully!');
window.location.href='http://localhost/program/chronicle/personal.html';
</script>";
}
else
{
echo"Error in entering".mysqli_error();
}
mysqli_close($con);
?>