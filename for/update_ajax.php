<?php
	include 'database.php';
	$id=$_POST['emp_id'];
	$first_name=$_POST['first_name'];
    $middle_name=$_POST['middle_name'];
    $last_name=$_POST['last_name'];
	$gender=$_POST['gender'];
	$mobile_number=$_POST['mobile_number'];
	$email=$_POST['email'];
	$sql = "UPDATE `employee` 
	SET `first_name`='$first_name',
    `middle_name`='$middle_name',
    `last_name`='$last_name',
    `gender`='$gender',
    `mobile_number`='$mobile_number',
	`email`='$email'
	WHERE emp_id=$id";
	if (mysqli_query($conn, $sql)) {
		//echo json_encode(array("statusCode"=>200));
	} 
	else {
		echo json_encode(array("statusCode"=>201));
	}
	mysqli_close($conn);
?>