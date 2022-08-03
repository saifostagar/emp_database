<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table>
        <thead>
            <tr>
                <th>Emp Id</th>
                <th>Name</th>
                <th>Gender </th>
                <th>Mobile No</th>
                <th>Email </th>
                <th></th>
            </tr>
</thead>
<tbody>
    <?php 
include 'database.php';
	$sql ='SELECT `first_name`,`emp_id`,`gender`,`email`,`mobile_number` FROM `assesment2`.`employee`';
	$result = $conn->query($sql);
	if ($result->num_rows > 0) {
		while($row = $result->fetch_assoc()) {
            
            ?>
    <tr>
    <td><?php echo $row['emp_id'] ?></td>
    <td><?php echo $row['first_name'] ?></td>
    <td><?php echo $row['gender'] ?></td>
    <td><?php echo $row['mobile_number'] ?></td>
    <td><?php echo $row['email'] ?></td>
    <td><a href="?empid=<?php echo $row['emp_id'];?>">Edit</a> | <a href="#?empid=<?php echo $row['emp_id'];?>">Delete</a></td>
    </tr>
    <?php } } ?>
</tbody>
    </table>
    <?php
    // get the id  of row
    $row_id = @$_GET['empid'];
    // get the records as per empid
    $get_emp_details = 'SELECT `first_name`,`emp_id`,`gender`,`email`,`mobile_number` FROM `assesment2`.`employee` WHERE emp_id = "'.$row_id.'"';
    $emp_result = $conn->query($get_emp_details);
    $emp_data = $emp_result->fetch_assoc();
    // print_r($emp_data);
    if(isset($emp_data)):
    ?>
<form action="#" method="post" id="edit_profile_form">
    <p>    
        <label>Emp Id</label>
        <input type="text" name="emp_id" value="<?php  echo $emp_data['emp_id']; ?>" readonly>
    </p> 
    <p>    
        <label>First Name</label>
        <input type="text" name="name" value="<?php  echo $emp_data['first_name']; ?>">
    </p> 
    <p>    
        <label>Gender</label>
        <input type="radio" name="gender" value="Male" <?php echo ($emp_data['gender'] == 'Male') ? 'checked': '';  ?> >Male <br/>
        <input type="radio" name="gender" value="Female" <?php echo ($emp_data['gender'] == 'Female') ? 'checked': '';  ?>>FeMale
    </p> 
    <p>    
        <label>Email</label>
        <input type="email" name="email" value="<?php  echo $emp_data['email']; ?>">
    </p> 
    <p>    
        <label>Phone #</label>
        <input type="tel" name="mobile_number" value="<?php  echo $emp_data['mobile_number']; ?>">
    </p> 
    <p>
        <input type="submit" value="Edit Profile" name="edit_profile"/>
    </p>
        </form>
        <?php endif;?>
<?php
// update the records.

?>
</body>
</html>