<?php
include 'database.php';
if(isset($_POST['submit']))
{
  $name=$_POST['uname'];
  $password=$_POST['psw'];
  
$sql="insert into login(username,password) values('$name','$password')";

if(mysqli_query($con,$sql))
{
echo "<script>alert('inserted a record')</script>";
}
else
{
 echo "error".mysqli_error($con);
}
mysqli_close($con);
}
?>
