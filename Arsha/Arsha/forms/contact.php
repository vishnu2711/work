<?php
$conn=mysqli_connect("localhost","root","");// database connection establishement
mysqli_select_db($conn,"vemunotes");
//taking values from input 
@$name=$_POST['name'];
@$email=$_POST['email'];
@$subject=$_POST['subject'];
@$message=$_POST['message'];
//inserting Data
$order="INSERT INTO contact (name,email,subject,message)VALUES( '$name','$email','$subject','$message')";
$result= mysqli_query($conn, $order);
if($result)
{
	echo("$name sucessfully send message");
}
else{
	 echo(" sending message  failed ");
}
?>