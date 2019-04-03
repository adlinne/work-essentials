<?php
$con= mysqli_connect('localhost', 'root', '', 'work_essentials');
//$db = mysqli_connect('localhost', 'root', '', 'work_essentials');
if(!$con)
{
	echo "Not connected to server";
}
if(!mysqli_select_db($con, 'work_essentials'))
{
	echo 'Database not selected';
}	
$Name =$_POST['tr_name'];
$Address = $_POST['tr_address'];
$Phone = $_POST['tr_phone'];
// $Email = $_POST['email'];

$sql="INSERT INTO orders (Name,Address,Phone) VALUES ('$Name','$Address','$Phone')";
if(!mysqli_query($con,$sql))
{
	
	 echo "not inserted";
}
else
{ 
	header("Location: success.html");

}


?>