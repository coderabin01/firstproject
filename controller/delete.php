<?php
	include ('dbConfig.php') ;
	
	if(($_GET['action'] == 'delete') && isset($_GET['id'])) {
			echo "delete";
			echo $_GET['id'];
			
			$sql="DELETE FROM student_db WHERE id=".$_GET['id']."";

			if ($conn->query($sql) === TRUE) {
				echo "Record deleted successfully";
			} else {
				echo "Error deleting record: " . $conn->error;
			}
	}	

	header ('Location: ../view.php');
	$conn->close();

?>