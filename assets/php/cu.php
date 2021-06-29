<?php
$name=filter_input(INPUT_POST, 'name');
$email=filter_input(INPUT_POST, 'email');
$message=filter_input(INPUT_POST, 'message');
 if(!empty($name)){
 	 if(!empty($email)){
 	 	$host="localhost"
 	 	$dbname="root";
 	 	$dbemail="";
 	 	$dbmessage="";
 	 	$dbname="innovation club";



 	 	// creating a connection now to server
 	 	$conn=new mysqli ($host,$dbname,$dbemail,$dbmessage,$dbname);
 	 	if (mysqli_connect_error()) {
 	 		# code...
 	 		die('Connect Error('.mysqli_connect_error() .')'
 	 			.mysqli_connect_error());
 	 	}
 	 	else{
 	 		$sql="INSERT INTO account (name,email,message)
 	 		values ('$name,$dbemail,$dbmessage)";
 	 		if ($conn->query($sql)) {
 	 			echo  "new record as been inserted chini";
 	 		}
 	 		else{
 	 			echo "error:". $sql ."<br>".$conn->error;
 	 		}
 	 		$conn->close();
 	 	}

 	 }
 	 else{
           echo "email should not be empty"; 
 	        die(); 	 }
 }
 else{
 	echo "name should not be empty";
 	die();
 }
  ?>