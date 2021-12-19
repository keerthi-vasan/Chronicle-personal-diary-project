<?php
$a=$_POST["yemail"];
$b=$_POST["ypass"];
$con=mysqli_connect("127.0.0.1","root","admin123","chronicle");
if(!$con)
{
echo"Error in connection";
}
$s="select email,password from signup where email='$a' and password='$b'";
$result2=mysqli_query($con,$s);
while($row=mysqli_fetch_array($result2))
{
$c=$row['email'];
$d=$row['password'];
}
if($c==$a && $d==$b)
{
	header('Location: http://localhost/program/chronicle/personal.html'); 
}
else
{
echo "<script>
alert('Username or password is wrong');
window.location.href='http://localhost/program/chronicle/homepage.html';
</script>";
}
?>
