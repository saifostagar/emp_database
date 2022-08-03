<!DOCTYPE html>
<html>
<head>
	<title>Login Page</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
	<style type="text/css">
		body{
			margin: 20px;
		}
	</style>
</head>
<body class="bg-primary">
	<div><center><h1>Login</h1></center></div>
<div class="card card-body">
	<form action="for/view.php" method="post" class="">
              <div class="m-2">
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                  <label class="form-check-label" for="flexRadioDefault1">
                    User Sign in
                  </label>
                </div>
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2" checked>
                  <label class="form-check-label" for="flexRadioDefault2">
                    Admin Sign in
                  </label>
                </div>
              </div>
              <div class="form-floating mb-3">
			  <label for="floatingInput">Employee ID</label>
                <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com">
                
              </div>
              <div class="form-floating">
			  <label for="floatingPassword">Password</label>
                <input type="password" class="form-control" id="floatingPassword" placeholder="Password">
                
              </div>
              <button type="submit" class="btn btn-primary m-2">Sign in</button>
              <button type="" class="btn btn-warning m-2">Forgot Password</button>
			  <br>
			  <div><center>Dont have any Account</center> </div>
			  <center><input  type="button" onClick="location.href='register.php'" class="btn btn-success m-2" value="Create New Account"></center>
            </div>
	</form>

    <script src="http://code.jquery.com/jquery-2.1.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.5/dist/jquery.validate.min.js"></script>
    <script src="login_form.js"></script>
</body>
</html>