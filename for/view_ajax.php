<?php
	include 'database.php';
	$sql ='SELECT `first_name`,`middle_name`,`last_name`,`emp_id`,`gender`,`email`,`mobile_number` FROM `assesment2`.`employee`';
	$result = $conn->query($sql);
	if ($result->num_rows > 0) {
		while($row = $result->fetch_assoc()) {
?>	
		<tr>
            <td><?=$row['emp_id'];?></td>
			<td><?=$row['first_name'];?>
            <?=$row['middle_name'];?>
            <?=$row['last_name'];?></td>
            <td><?=$row['gender'];?></td>
            <td><?=$row['mobile_number'];?></td>
			<td><?=$row['email'];?></td>
			
			<td><button type="button" class="btn btn-success btn-sm update" data-toggle="modal" data-keyboard="false" data-backdrop="static" data-target="#emp_update"
			data-emp_id="<?=$row['emp_id'];?>"
			data-first_name="<?=$row['first_name'];?>"
            data-middle_name="<?=$row['middle_name'];?>"
            data-last_name="<?=$row['last_name'];?>"

            data-gender="<?=$row['gender'];?>"
            data-mobile_number="<?=$row['mobile_number'];?>"
			data-email="<?=$row['email'];?>"
			>Edit</button>
			<button type="button" class="delete-btn btn btn-danger btn-sm update" data-emp_id="<?=$row['emp_id'];?>">Delete</button>
			</td>
			
		</tr>
<?php	
	}
	}
	else {
		echo "<tr >
		<td colspan='5'>No Result found !</td>
		</tr>";
	}
	mysqli_close($conn);
?>