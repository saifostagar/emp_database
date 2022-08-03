<?php
    include 'database.php';
    $emp_id =$_POST["id"];
    $sql = "DELETE FROM `employee` WHERE emp_id=$emp_id";
    if(mysqli_query($conn, $sql)){
        echo 1;
    }else{
        echo 0;
    }

?>