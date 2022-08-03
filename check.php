<?php
if(isset($_POST['checkfirst_name'])){
    $mysqli = NEW MySQLi('localhost:3307','root','','assesment2');

    $first_name = $mysqli-> real_escape_string($_POST['checkfirst_name']);

    $resultSet = $mysqli->query("SELECT * FROM employee WHERE first_name = '$first_name' LIMIT 1");

    if($resultSet-> num_rows==0){
        echo "$first_name available"
    }
    else {"$first_name is NOT available"
    }
}

?>