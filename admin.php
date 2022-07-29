<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Bootstrap demo</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
</head>

<body>
  

  <?php

    $server = "localhost:3307";
    $username= "root";
    $password= "";

    $con= mysqli_connect($server, $username, $password);


    if(!$con){
        die("Connection to this database failed due to ". mysqli_connect_error());
    }
    

    $sql= 'SELECT `first_name`,`middle_name`,`last_name`,`emp_id`,`gender`,`email`,`mobile_number` FROM `assesment2`.`employee`';

    $result= mysqli_query($con,$sql);

    //print_r($result);

    //echo'<h1>Hello World</h1>';

    $data =mysqli_fetch_all($result, MYSQLI_ASSOC);

    //print_r($data);
    ?>

  <center>
    <h4>List of Employee</h4>
  </center>
  <div class="container">
    
      <?php foreach($data as $emp){?>

      <div class="col s6 md3">
      
        <div class="card z-depth-0 m-2">
          <div class="card-context center m-2">
            <div>
              <h6>
                <?php echo htmlspecialchars($emp['first_name']);?>
                <?php echo htmlspecialchars($emp['middle_name']);?>
                <?php echo htmlspecialchars($emp['last_name']);?>
                <?php echo "(SHT00".htmlspecialchars($emp['emp_id'].")");?>
              </h6>
              
              <?php echo htmlspecialchars($emp['gender']);?>
              <?php echo ",".htmlspecialchars($emp['mobile_number']);?>
              <?php echo ",".htmlspecialchars($emp['email']);?>

            </div>



            <div>
              
            </div>
          </div>
        </div>
      </div>
    <?php } ?>

  </div>






  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa"
    crossorigin="anonymous"></script>
</body>

</html>