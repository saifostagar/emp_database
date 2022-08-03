<!DOCTYPE html>
<html lang="en">

<head>
	<title>View Ajax</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</head>

<body>

	<div class="container">


		<div class="text-right">
			<button type="button" onClick="location.href='http://localhost/assesment2/login.php'"
				class="btn btn-danger ml-2">Logout</button>
		</div>


		<h2>
			<center>View data</center>
		</h2>
		<div class="alert alert-success alert-dismissible" id="success" style="display:none;">
			<a href="#" class="close" data-dismiss="alert" aria-label="close">×</a>
		</div>
		<div id="sucess"></div>
		<table class="table table-bordered table-sm">
			<thead>
				<tr>
					<th>Employee ID</th>
					<th>Name</th>
					<th>Gender</th>
					<th>Mobile Number</th>
					<th>Email Address</th>
					<th>Action</th>
				</tr>
			</thead>
			<tbody id="table">

			</tbody>
		</table>
	</div>
	<!-- Modal Update-->
	<div class="modal fade" id="emp_update" role="dialog">
		<form id="emp_update_form" action="#">
		<div class="modal-dialog modal-sm">
			<div class="modal-content">
				<div class="modal-header" style="color:#fff;background-color: #e35f14;padding:6px;">
					<h5 class="modal-title"><i class="fa fa-edit"></i> Update</h5>

				</div>
				<div class="modal-body">

					<!--1-->
					<div class="row">
						<div class="col-md-3">
							<label>First Name</label>
						</div>
						<div class="col-md-9">
							<input type="text" name="first_name" id="first_name" class="form-control-sm" required>
						</div>
					</div>

					<div class="row">
						<div class="col-md-3">
							<label>Middle Name</label>
						</div>
						<div class="col-md-9">
							<input type="text" name="middle_name" id="middle_name" class="form-control-sm">
						</div>
					</div>

					<div class="row">
						<div class="col-md-3">
							<label>Last Name</label>
						</div>
						<div class="col-md-9">
							<input type="text" name="last_name" id="last_name" class="form-control-sm" required>
						</div>
					</div>

					<!--2-->
					<div class="col-2 m-4">
						<label>Gender</label>
						<div class="form-check">
							<input class="form-check-input" type="radio" name="gender" id="m_gender" value="Male"
								required>
							<label class="form-check-label">
								Male
							</label>
						</div>
						<div class="form-check">
							<input class="form-check-input" type="radio" name="gender" id="f_gender" value="Female"
								required>
							<label class="form-check-label">
								Female
							</label>
						</div>
			
					</div>
					<!--3-->
					<div class="row">
						<div class="col-md-3">
							<label>Mobile Number</label>
						</div>
						<div class="col-md-9">
							<input type="text" name="mobile_number" id="mobile_number" class="form-control-sm" required>
						</div>
					</div>
					<!--4-->

					<div class="row">
						<div class="col-md-3">
							<label>Email</label>
						</div>
						<div class="col-md-9">
							<input type="email" name="email" id="email" class="form-control-sm" required>
						</div>
					</div>




					<input type="hidden" name="emp_id" id="emp_id" class="form-control-sm">
				</div>
				<div class="modal-footer" style="padding-bottom:0px !important;text-align:center !important;">
					<p style="text-align:center;float:center;"><button type="submit" id="update_data"
							class="btn btn-default btn-sm" style="background-color: #e35f14;color:#fff;">Save</button>
						<button type="button" class="btn btn-default btn-sm" data-dismiss="modal"
							style="background-color: #e35f14;color:#fff;">Close</button>
					</p>

				</div>
			</div>
		</div>
	</form>
	</div>
	<!-- Modal End-->
	<script>
		$(document).ready(function () {
			$.ajax({
				url: "view_ajax.php",
				type: "POST",

				cache: false,
				success: function (data) {
					$('#table').html(data);
				}
			});
			$(function () {
				$('#emp_update').on('show.bs.modal', function (event) {
					var button = $(event.relatedTarget); /*Button that triggered the modal*/
					var emp_id = button.data('emp_id');
					var first_name = button.data('first_name');
					var middle_name = button.data('middle_name');
					var last_name = button.data('last_name');
					var gender = button.data('gender');
					var mobile_number = button.data('mobile_number');
					var email = button.data('email');



					var modal = $(this);
					modal.find('#first_name').val(first_name);
					modal.find('#middle_name').val(middle_name);
					modal.find('#last_name').val(last_name);
					// modal.find('#gender').val(gender);
					if(gender =='Male'){
						modal.find('#m_gender').attr('checked', true);
					}else if(gender == 'Female'){
						modal.find('#f_gender').attr('checked', true);
					}
					modal.find('#mobile_number').val(mobile_number);
					modal.find('#email').val(email);
					modal.find('#emp_id').val(emp_id);
				});
			});
			$(document).on("click", "#update_data", function () {
				var emp_data = $("#emp_update_form").serialize();
				$.ajax({
					url: "update_ajax.php",
					type: "POST",
					cache: false,
					data: emp_data,
					success: function (dataResult) {
						var dataResult = JSON.parse(dataResult);
						// console.log(dataResult);
						// debugger;
						if (dataResult.statusCode == 200) {
							$('#emp_update').modal().hide();
							document.getElementById('sucess').innerHTML = "Updated Sucessfully";

							location.reload();
						}
					}
				});
			});

			$(document).on("click",".delete-btn",function(){
				if(confirm("Do you really want to delete this record?"))
				{

				
					var emp_id=$(this).data("emp_id");
					
					
					$.ajax({

						url: "delete_ajax.php",
						type: "POST",
						data : {id : emp_id},
						success : function(data){
							location.reload();
						}


					});
				}

			});
		});
	</script>
</body>

</html>