<?php
$conn=mysqli_connect("localhost","root","");// database connection establishement
mysqli_select_db($conn,"demo");
//taking values from input 
@$name=$_POST['name'];
@$email=$_POST['email'];
@$message=$_POST['message'];
//inserting Data
$order="INSERT INTO  (name,email,message)VALUES( '$name','$email','$message')";
$result= mysqli_query($conn, $order);
if($result)
{
	echo(" kudos $name sucessfully send");
}
else{
	 echo("Not send ");
}
?>
