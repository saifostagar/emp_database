
   <!DOCTYPE html>
   <html lang="en">
   <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
   </head>
   <body>
    <form action="firstcode.php" method="POST">
        <input type="text" name="first_name" id="first_name">
        <input type="submit">
</form>
<?php
    $isset =false;

    if(isset($_POST['first_name'])){
       $server = "localhost:3307";
       $username= "root";
       $password= "";

       $con= mysqli_connect($server, $username, $password);
       
       
       if(!$con){
           echo("Connection to this database failed due to ". mysqli_connect_error());
       }
       else{
        echo "Sucess connecting to the database";
       }
       $first_name= $_POST['first_name'];
       
       $sql= "INSERT INTO `assesment2`.`employee` (`first_name`) VALUES ('$first_name');";

       //echo $sql; 
    
       if($con->query($sql)==true){
        echo "Sucessfully inserted";
       }
       else{
        echo "ERROR : $sql <br> $con->error";
       }
       $con->close();
    
    }
   ?>
   </body>
   </html>