






<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>SB Admin 2 - Register</title>

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">

</head>

<body class="bg-gradient-primary">

    <div class="container">

        <div class="card o-hidden border-0 shadow-lg my-5 bg-warning">
            <div class="m-3">
                <center><h3> Create New Account</h3></center>
            </div>

            <!-- Nested Row within Card Body -->
            <div class="my-5 container bg-warning">
                <form action="register.php" method="post" class="row g-3">

                    <div class="col-md-4">
                        <label for="first_name" class="form-label">First Name</label>
                        <input type="text" name="first_name" class="form-control" aria-label="First name" id="first_name">
                    </div>
                    <div class="col-md-4">
                        <label for="middle_name" class="form-label">Middle Name</label>
                        <input type="text" name="middle_name" class="form-control" aria-label="Middle Name" id="middle_name">
                    </div>
                    <div class="col-md-4">
                        <label for="last_name" class="form-label">Last Name</label>
                        <input type="text" name="last_name" class="form-control" aria-label="Last name" id="last_name">
                    </div>
                    <div class="col-md-4">
                        <label for="dob" class="form-label">Birth Date</label>
                        <input type="date" class="form-control" id="dob" name="dob" placeholder="Birth Date">
                        <span id="doberror" class="text-danger font-weight-bold"></span>
                    </div>
                    <div class="col-2 m-4">
                        <label>Gender</label>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="gender" id="gender_m">
                            <label class="form-check-label" for="gender_m" value="Male">
                                Male
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="gender" id="gender_f" value="Female" >
                            <label class="form-check-label" for="gender_f">
                                Female
                            </label>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <label for="merital_status" class="form-label">Merital Status</label>
                        <select id="merital_status" name="merital_status"  class="form-select">
                            <option selected>Choose...</option>
                            <option>Unmarried</option>
                            <option>Married</option>
                            <option>Divorced</option>
                            <option>Widowed</option>
                        </select>
                    </div>
                    <div class="col-md-12">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" class="form-control" name="email" id="email">
                    </div>
                    <div class="col-md-6">
                        <label for="password" class="form-label">Password</label>
                        <input type="password" class="form-control" name="password" id="password">
                    </div>
                    <div class="col-md-6">
                        <label for="confirm_pawword" class="form-label">Confirm Password</label>
                        <input type="password" class="form-control" id="confirm_password">
                    </div>

                    <div class="col-md-6">
                        <label for="mobile_number" class="form-label">Mobile Number</label>
                        <input type="number" class="form-control" id="mobile_number" name="mobile_number" aria-label="Mobile Number">
                    </div>
                    <div class="col-md-6">
                        <label for="home_phone" class="form-label">Home Phone</label>
                        <input type="number" class="form-control" id="home_phone" name="home_phone" aria-label="Home Phone">
                    </div>
                    <!-- ADDRESS CARD -->
                    <div class="card bg-warning ">


                        <div class="card card-body bg-warning">
                            <div>
                                <h5>Primary Address:</h5>
                            </div>

                            <div class="row">
                                <div class="col-12 ">
                                    <label for="primary_address" class="form-label">Address</label>
                                    <input type="text" class="form-control" id="primary_address" name="primary_address"
                                        placeholder="1234 Main St">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12">
                                    <label for="primary_address2" class="form-label">Address 2</label>
                                    <input type="text" class="form-control" id="primary_address2" name="primary_address2"
                                        placeholder="Apartment, studio, or floor">
                                </div>
                            </div>
                            <div class="row">

                                <div class="col-md-6">
                                    <label for="primary_city" class="form-label">City</label>
                                    <input type="text" class="form-control" id="primary_city" name="primary_city">
                                </div>
                                <div class="col-md-4">
                                    <label for="primary_state" class="form-label">State</label>
                                    <select id="primary_state" name="primary_state" class="form-select">
                                        <option selected>Choose...</option>
                                        <option>...</option>
                                    </select>
                                </div>
                                <div class="col-md-2">
                                    <label for="primary_zip" class="form-label">Zip</label>
                                    <input type="text" class="form-control" id="primary_zip" name="primary_zip">
                                </div>
                            </div>
                        </div>


                        <p>
                            <a class="btn btn-primary my-3" data-bs-toggle="collapse" href="#current_address_form"
                                role="button" aria-expanded="false" aria-controls="current_address_form">
                                Add Current Address
                            </a>

                        </p>



                        <div class="collapse" id="current_address_form">
                            <div>
                                <h5>Current Address:</h5>
                            </div>
                            <div class="card card-body bg-warning mx-2">

                                <div class="row">
                                    <div class="col-12 ">
                                        <label for="current_address" class="form-label">Address</label>
                                        <input type="text" class="form-control" id="current_address"
                                            placeholder="1234 Main St">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-12">
                                        <label for="current_address2" class="form-label">Address 2</label>
                                        <input type="text" class="form-control" id="current_address2"
                                            placeholder="Apartment, studio, or floor">
                                    </div>
                                </div>
                                <div class="row">

                                    <div class="col-md-6">
                                        <label for="current_city" class="form-label">City</label>
                                        <input type="text" class="form-control" id="current_city">
                                    </div>
                                    <div class="col-md-4">
                                        <label for="current_state" class="form-label">State</label>
                                        <select id="current_state" class="form-select">
                                            <option selected>Choose...</option>
                                            <option>...</option>
                                        </select>
                                    </div>
                                    <div class="col-md-2">
                                        <label for="current_zip" class="form-label">Zip</label>
                                        <input type="text" class="form-control" id="current_zip">
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>

                    <!-- Education Card -->
                    <div class="card bg-warning ">


                        <div class="card card-body bg-warning">
                            <div>
                                <h5>Education Qualification:</h5>
                            </div>
                            <div class="row">
                                <div class="col-md-4">
                                    <label for="education_1_level" class="form-label"> Edication Level</label>
                                    <select id="education_1_level" class="form-select">
                                        <option selected>10th or Equivalent</option>

                                    </select>
                                </div>


                                <div class="col-8 ">
                                    <label for="education_1_institute" class="form-label">Institute or University Name</label>
                                    <input type="text" class="form-control" id="education_1_institute">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-6">
                                    <label for="edication_1_sp" class="form-label">Specialization</label>
                                    <input type="text" class="form-control" id="education_1_sp">
                                </div>
                                <div class="col-2 my-4">
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="flexRadioDefault"
                                            id="edication_1_c">
                                        <label class="form-check-label" for="edication_1_c">
                                            CGPA
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="flexRadioDefault"
                                            id="edication_1_p" checked>
                                        <label class="form-check-label" for="edication_1_p">
                                            Percentage
                                        </label>
                                    </div>
                                </div>


                                <div class="col-4">
                                    <label for="edication_1_marks" class="form-label">Grade/Marks</label>
                                    <input type="text" class="form-control" id="edication_1_marks">
                                </div>
                            </div>
                        </div>


                        <p>
                            <a class="btn btn-primary my-3" data-bs-toggle="collapse" href="#education_2" role="button"
                                aria-expanded="false" aria-controls="collapseExample">
                                Add 10+2 Education
                            </a>

                        </p>



                        <div class="collapse" id="education_2">
                            <div class="card card-body bg-warning">

                                <div class="row">
                                    <div class="col-md-4">
                                        <label for="education_2_level" class="form-label"> Edication Level</label>
                                        <select id="education_2_level" class="form-select">
                                            <option selected>10+2 or Equivalent</option>

                                        </select>
                                    </div>


                                    <div class="col-8 ">
                                        <label for="education_2_institute" class="form-label">Institute or University
                                            Name</label>
                                        <input type="text" class="form-control" id="education_2_institute">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-6">
                                        <label for="education_2_sp" class="form-label">Specialization</label>
                                        <input type="text" class="form-control" id="education_2_sp">
                                    </div>
                                    <div class="col-2 my-4">
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="flexRadioDefault"
                                                id="education_2_c">
                                            <label class="form-check-label" for="education_2_c">
                                                CGPA
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="flexRadioDefault"
                                                id="education_2_p" checked>
                                            <label class="form-check-label" for="education_2_p">
                                                Percentage
                                            </label>
                                        </div>
                                    </div>


                                    <div class="col-4">
                                        <label for="education_2_zip" class="form-label">Grade/Marks</label>
                                        <input type="text" class="form-control" id="education_2_zip">
                                    </div>
                                </div>
                            </div>


                            <p>
                                <a class="btn btn-primary my-3" data-bs-toggle="collapse" href="#education_3"
                                    role="button" aria-expanded="false" aria-controls="collapseExample">
                                    Add Bachelors Degree
                                </a>

                            </p>

                            <div class="collapse" id="education_3">
                                <div class="card card-body bg-warning">

                                    <div class="row">
                                        <div class="col-md-4">
                                            <label for="education_3_level" class="form-label"> Edication Level</label>
                                            <select id="education_3_level" class="form-select">
                                                <option selected>Bachelors</option>

                                            </select>
                                        </div>


                                        <div class="col-8 ">
                                            <label for="education_3_institute" class="form-label">Institute or University
                                                Name</label>
                                            <input type="text" class="form-control" id="education_3_institute">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-6">
                                            <label for="education_3_sp" class="form-label">Specialization</label>
                                            <input type="text" class="form-control" id="education_3_sp">
                                        </div>
                                        <div class="col-2 my-4">
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="flexRadioDefault"
                                                    id="education_3_c">
                                                <label class="form-check-label" for="education_3_c">
                                                    CGPA
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="flexRadioDefault"
                                                    id="education_3_p" checked>
                                                <label class="form-check-label" for="education_3_p">
                                                    Percentage
                                                </label>
                                            </div>
                                        </div>


                                        <div class="col-4">
                                            <label for="education_3_marks" class="form-label">Grade/Marks</label>
                                            <input type="text" class="form-control" id="education_3_marks">
                                        </div>
                                    </div>
                                </div>

                            </div>


                        </div>


                    </div>

                    <!-- Current Experiance -->
                    <div class="card bg-warning ">


                        <div class="card card-body bg-warning">
                            <div>
                                <h5>Current Professional :</h5>
                            </div>
                            <div class="row">
                                <div class="col-md-4">
                                    <label for="xp_1_type" class="form-label"> Type of Employee</label>
                                    <select id="xp_1_type" class="form-select">
                                        <option selected>Choose....</option>
                                        <option>Full Time</option>
                                        <option>Part Time</option>
                                    </select>
                                </div>


                                <div class="col-8 ">
                                    <label for="xp_1_org" class="form-label">Name of the Company /
                                        Organization</label>
                                    <input type="text" class="form-control" id="xp_1_org">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-4">
                                    <label for="xp_1_post" class="form-label">Position</label>
                                    <input type="text" class="form-control" id="xp_1_post">
                                </div>

                                <div class="col-md-4">
                                    <label for="xp_1_start" class="form-label">Start Date</label>
                                    <input type="date" class="form-control" id="xp_1_start" placeholder="Starting Date">
                                    <span id="xp_1_starterror" class="text-danger font-weight-bold"></span>
                                </div>

                                <div class="col-md-4">
                                    <label for="xp_1_end" class="form-label">End Date</label>
                                    <input type="date" class="form-control" id="xp_1_end" placeholder="Ending Date">
                                    <span id="xp_1_enderror" class="text-danger font-weight-bold"></span>
                                </div>

                            </div>



                            <p>
                                <a class="btn btn-primary my-3" data-bs-toggle="collapse" href="#xp_2" role="button"
                                    aria-expanded="false" aria-controls="collapseExample">
                                    Add More Exprience
                                </a>

                            </p>



                            <div class="collapse" id="xp_2">
                                <div class="card card-body bg-warning">

                                    <div class="row">
                                        <div class="col-md-4">
                                            <label for="xp_2_type" class="form-label"> Type of Employee</label>
                                            <select id="inputState" class="form-select">
                                                <option selected>Choose....</option>
                                                <option>Full Time</option>
                                                <option>Part Time</option>
                                            </select>
                                        </div>


                                        <div class="col-8 ">
                                            <label for="xp_2_org" class="form-label">Name of the Company /
                                                Organization</label>
                                            <input type="text" class="form-control" id="xp_2_org">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-4">
                                            <label for="xp_2_post" class="form-label">Position</label>
                                            <input type="text" class="form-control" id="xp_2_post">
                                        </div>

                                        <div class="col-md-4">
                                            <label for="xp_2_start" class="form-label">Start Date</label>
                                            <input type="date" class="form-control" id="xp_2_start" placeholder="Birth Date">
                                            <span id="xp_2_starterror" class="text-danger font-weight-bold"></span>
                                        </div>

                                        <div class="col-md-4">
                                            <label for="xp_2_end" class="form-label">End Date</label>
                                            <input type="date" class="form-control" id="xp_2_end" placeholder="Birth Date">
                                            <span id="xp_2_enderror" class="text-danger font-weight-bold"></span>
                                        </div>

                                    </div>



                                    <p>
                                        <a class="btn btn-primary my-3" data-bs-toggle="collapse" href="#xp_3"
                                            role="button" aria-expanded="false" aria-controls="collapseExample">
                                            Add More Exprience
                                        </a>

                                    </p>
                                    <div class="collapse" id="xp_3">
                                        <div class="card card-body bg-warning">

                                            <div class="row">
                                                <div class="col-md-4">
                                                    <label for="xp_3_type" class="form-label"> Type of Employee</label>
                                                    <select id="xp_3_type" class="form-select">
                                                        <option selected>Choose....</option>
                                                        <option>Full Time</option>
                                                        <option>Part Time</option>
                                                    </select>
                                                </div>


                                                <div class="col-8 ">
                                                    <label for="xp_3_org" class="form-label">Name of the Company /
                                                        Organization</label>
                                                    <input type="text" class="form-control" id="xp_3_org">
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-4">
                                                    <label for="xp_3_post" class="form-label">Position</label>
                                                    <input type="text" class="form-control" id="xp_3_post">
                                                </div>

                                                <div class="col-md-4">
                                                    <label for="xp_3_start" class="form-label">Start Date</label>
                                                    <input type="date" class="form-control" id="xp_3_start"
                                                        placeholder="Birth Date">
                                                    <span id="xp_3_starterror" class="text-danger font-weight-bold"></span>
                                                </div>

                                                <div class="col-md-4">
                                                    <label for="xp_3_end" class="form-label">End Date</label>
                                                    <input type="date" class="form-control" id="xp_3_end">
                                                    <span id="xp_3_enderror" class="text-danger font-weight-bold"></span>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="col-12">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" id="term">
                            <label class="form-check-label" for="term">
                                Accept Terms & Conditions
                            </label>
                        </div>
                    </div>
                    
                    <button type="submit" class="btn btn-primary">Submit</button>

                </form>
                <?php
    $isset =false;

    if(isset($_POST['first_name'])){
       $server = "localhost:3307";
       $username= "root";
       $password= "";

       $con= mysqli_connect($server, $username, $password);
       
       
       if(!$con){
           die("Connection to this database failed due to ". mysqli_connect_error());
       }
       else{
        echo "Sucess connecting to the database";
       }
       $first_name= $_POST['first_name'];
       $middle_name = $_POST['middle_name'];
       $last_name   = $_POST['last_name'];
       $dob = $_POST['dob'];
       $gender = $_POST['gender'];
       $merital_status = $_POST['merital_status'];
       $email = $_POST['email'];
       $password = $_POST['password'];
       $mobile_number = $_POST['mobile_number'];
       $home_phone =$_POST['home_phone'];
       $primary_address = $_POST['primary_address'];
       $primary_address2 = $_POST['primary_address2'];
       $primary_city = $_POST['primary_city'];
       $primary_state = $_POST['primary_state'];
       $primary_zip = $_POST['primary_zip'];

      



       $sql= "INSERT INTO `assesment2`.`employee` (`emp_id`, 
                                                    `first_name`, 
                                                    `middle_name`, 
                                                    `last_name`, 
                                                    `dob`, 
                                                    `gender`, 
                                                    `merital_status`, 
                                                    `email`, 
                                                    `password`, 
                                                    `mobile_number`, 
                                                    `home_phone`, 
                                                    `p_add1`, 
                                                    `p_add2`, 
                                                    `p_city`, 
                                                    `p_state`, 
                                                    `p_zip`, 
                                                    `c_add1`, 
                                                    `c_add2`, 
                                                    `c_city`, 
                                                    `c_state`, 
                                                    `c_zip`, 
                                                    `edu_1_institute`, 
                                                    `edu_1_sp`, 
                                                    `edu_1_pc`, 
                                                    `edu_1_marks`, 
                                                    `edu_2_institute`, 
                                                    `edu_2_sp`, 
                                                    `edu_2_pc`, 
                                                    `edu_2_marks`, 
                                                    `edu_3_institute`, 
                                                    `edu_3_sp`, 
                                                    `edu_3_pc`,
                                                    `edu_3_marks`,
                                                    `xp_1_type`, 
                                                    `xp_1_org`,
                                                    `xp_1_post`,
                                                    `xp_1_start`, 
                                                    `xp_1_end`,
                                                    `xp_2_type`, 
                                                    `xp_2_org`, 
                                                    `xp_2_post`, 
                                                    `xp_2_start`, 
                                                    `xp_2_end`, 
                                                    `xp_3_type`, 
                                                    `xp_3_org`, 
                                                    `xp_3_post`, 
                                                    `xp_3_start`, 
                                                    `xp_3_end`)
                                             VALUES (NULL,
                                                '$first_name',
                                                '$middle_name',
                                                '$last_name', 
                                                '$dob', 
                                                '$gender', 
                                                '$merital_status', 
                                                '$email', 
                                                '$password', 
                                                '$mobile_number', 
                                                '$home_phone', 
                                                '$primary_address', 
                                                '$primary_address2', 
                                                '$primary_city', 
                                                '$primary_state', 
                                                '$primary_zip', 
                                                NULL, 
                                                NULL, 
                                                NULL, 
                                                NULL, 
                                                NULL, 
                                                NULL, 
                                                NULL, 
                                                NULL, 
                                                NULL, 
                                                NULL, 
                                                NULL, 
                                                NULL, 
                                                NULL, 
                                                NULL, 
                                                NULL, 
                                                NULL, 
                                                NULL, 
                                                NULL, 
                                                NULL, 
                                                NULL, 
                                                NULL, 
                                                NULL, 
                                                NULL,
                                                NULL, 
                                                NULL, 
                                                NULL,
                                                NULL, 
                                                NULL, 
                                                NULL, 
                                                NULL, 
                                                NULL, 
                                                NULL);";

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


            </div>


        </div>

    </div>
    
    

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa"
        crossorigin="anonymous"></script>

    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>

</body>

</html>