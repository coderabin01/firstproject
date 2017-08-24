<?php

	$fname = $_POST['Fname'];
	$mname = $_POST['Mname'];
	$lname = $_POST['Lname'];
	$gender = $_POST['Gender'];
	$age = $_POST['Age'];
	$clas = $_POST['Class'];
	$id= $_POST['id'];
	
	include ('dbConfig.php') ;
	
	echo $id;
	echo "hello";
	
	//Query the database for user
		$sql= "UPDATE student_db SET fname='$fname', mname='$mname', lname='$lname' , gender='$gender' ,age='$age' , class='$clas' WHERE id='$id'";	
		if (mysqli_query($conn, $sql)) {
			echo "New record created successfully";
		} else {
			echo "Error: " . $sql . "<br>" . mysqli_error($conn);
		}
	
	mysqli_close($conn);
	header ('Location: ../view.php');

?>