 $().ready(function() {
    $("#signupForm").validate({

        rules: {
            first_name : "required",
            last_name: "required",
            email: {
                required : true,
                email: true
            },
            mobile_number: "required",
            password: {
                required: true,
                minlength :6
            },
            confirm_password:{
                required: true,
                minlength :6,
                equalTo: "#password"

            },
            term : "required"
        },

        messages : {
            first_name : "Please enter your first name",
            last_name : "Please enter your last namme",
            password: {
                required: "Please provide a password",
                minlength: "Your password must be at least 6 characters long"
            },
            confirm_password :{
                required: "Please provide a password",
                minlength: "Your password must be at least 6 characters long",
                equalTo: "Please enter the same password as above"
            },
            term : "Please accept terms and condition"




        }
    });

 });