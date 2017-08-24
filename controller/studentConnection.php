<?php

	$fname = $_POST['Fname'];
	$mname = $_POST['Mname'];
	$lname = $_POST['Lname'];
	$gender = $_POST['Gender'];
	$age = $_POST['Age'];
	$clas = $_POST['Class'];
	
	include ('dbConfig.php') ;
	// Query the database for user
	$sql = "INSERT INTO student_db (fname,mname,lname,gender,age,class) VALUES ('$fname','$mname','$lname','$gender',$age,$clas)";

	if (mysqli_query($conn, $sql)) {
		echo "New record created successfully";
	} else {
		echo "Error: " . $sql . "<br>" . mysqli_error($conn);
	}

	mysqli_close($conn);
	
	header ('Location: ../view.php');

?>