function reg_valid() {
    var first_name = document.getElementById("first_name").value;
    var middle_name = document.getElementById("middle_name").value;
    var last_name = document.getElementById("last_name").value;
    var dob = document.getElementById("dob").value;
    var gender = document.getElementById("gender").value;
    var merital_status = document.getElementById("merital_status").value;
    
    var email = document.getElementById("email").value;
    var password = document.getElementById("password").value;
    var confirm_password = document.getElementById("confirm_password").value;

    var mobile_number = document.getElementById("mobile_number").value;
    var home_phone = document.getElementById("home_phone").value;
    

    var primary_address = document.getElementById("primary_address").value;
    var primary_address2 = document.getElementById("primary_address2").value;
    var primary_city = document.getElementById("primary_city").value;
    var primary_state = document.getElementById("primary_state").value;
    var primary_zip = document.getElementById("primary_zip").value;


    var current_address = document.getElementById("current_address").value;
    var current_address2 = document.getElementById("current_address2").value;
    var current_city = document.getElementById("current_city").value;
    var current_state = document.getElementById("current_state").value;
    var current_zip = document.getElementById("current_zip").value;


    var education_1_level = document.getElementById("education_1_level").value;
    var education_1_institute = document.getElementById("education_1_institute").value;
    var edication_1_sp = document.getElementById("edication_1_sp").value;
    var edication_1_c = document.getElementById("edication_1_c").value;
    var edication_1_marks = document.getElementById("edication_1_marks").value;


    var education_2_level = document.getElementById("education_2_level").value;
    var education_2_institute = document.getElementById("education_2_institute").value;
    var edication_2_sp = document.getElementById("edication_2_sp").value;
    var edication_2_c = document.getElementById("edication_2_c").value;
    var edication_2_marks = document.getElementById("edication_1_marks").value;


    var education_3_level = document.getElementById("education_3_level").value;
    var education_3_institute = document.getElementById("education_3_institute").value;
    var edication_3_sp = document.getElementById("edication_3_sp").value;
    var edication_3_c = document.getElementById("edication_3_c").value;
    var edication_3_marks = document.getElementById("edication_1_marks").value;

    var xp_1_type = document.getElementById("xp_1_type").value;
    var xp_1_org = document.getElementById("xp_1_org").value;
    var xp_1_post = document.getElementById("xp_1_post").value;
    var xp_1_start = document.getElementById("xp_1_start").value;
    var xp_1_end = document.getElementById("xp_1_end").value;


    var xp_2_type = document.getElementById("xp_2_type").value;
    var xp_2_org = document.getElementById("xp_2_org").value;
    var xp_2_post = document.getElementById("xp_2_post").value;
    var xp_2_start = document.getElementById("xp_2_start").value;
    var xp_2_end = document.getElementById("xp_2_end").value;

    var xp_3_type = document.getElementById("xp_3_type").value;
    var xp_3_org = document.getElementById("xp_3_org").value;
    var xp_3_post = document.getElementById("xp_3_post").value;
    var xp_3_start = document.getElementById("xp_3_start").value;
    var xp_3_end = document.getElementById("xp_3_end").value;



    var checkbox = document.getElementById("term").value;


    var namecheck = /^[A-Za-z. ]{3,30}$/;
    var emailcheck = /^[A-Za-z0-9_.]{3,}@[A-z]{3,15}.[A-Za-z.]{2,6}$/;
    //var passwordcheck= /^(?=.*[0-9])(?=.*[!@#$%^&*])[A-Za-z0-9!@#$%^&*]{8,16}$/ ;
    var passwordcheck = /^[A-Za-z0-9.,/# ]{8,16}$/
    var addresscheck = /^[A-Za-z0-9.,/# ]{10,35}$/



    if (namecheck.test(first_name)) {
        document.getElementById('first_nameerror').innerHTML = " ";

    }
    else {
        document.getElementById('first_nameerror').innerHTML = "**First Name Invalid";
        return false;
    }

    if ((namecheck.test(middle_name)) || middle_name==waiwait) {
        document.getElementById('middle_nameerror').innerHTML = " ";

    }
    else {
        document.getElementById('middle_nameerror').innerHTML = "**Middle Name Invalid";
        return false;
    }

    if (namecheck.test(last_name)) {
        document.getElementById('last_nameerror').innerHTML = " ";

    }
    else {
        document.getElementById('last_nameerror').innerHTML = "**Last Name Invalid";
        return false;
    }

    if (!(dob==null)) {
        document.getElementById('doberror').innerHTML = " ";

    }
    else {
        document.getElementById('doberror').innerHTML = "**Please select your date of birth";
        return false;
    }

    if (gender == "Choose") {
        document.getElementById('gendererror').innerHTML = "**Select Gender";
        return false;
    }
    else {
        document.getElementById('gendererror').innerHTML = " ";
    }

    if (merital_status == "Choose") {
        document.getElementById('merital_statuserror').innerHTML = "**Select Merital Status";
        return false;
    }
    else {
        document.getElementById('merital_statuserror').innerHTML = " ";
    }

    if (emailcheck.test(email)) {
        document.getElementById('emailerror').innerHTML = " ";

    }
    else {
        document.getElementById('emailerror').innerHTML = "** Email Invalid";
        return false;
    }


    if (password==confirm_password) {
        document.getElementById('passworderror').innerHTML = " ";

    }
    else {
        document.getElementById('passworderror').innerHTML = "**Password Not Matched";
        return false;
    }

    if (passwordcheck.test(password)) {
        document.getElementById('passworderror').innerHTML = " ";

    }
    else {
        document.getElementById('passworderror').innerHTML = "**Invalid Password";
        return false;
    }


    if (mobile_number<9999999999) {
        document.getElementById('mobile_numbererror').innerHTML = " ";

    }
    else {
        document.getElementById('mobile_numbererror').innerHTML = "**Invalid Mobile Number";
        return false;
    }

    if (home_phone<9999999999 || home_phone==null) {
        document.getElementById('home_phoneerror').innerHTML = " ";

    }
    else {
        document.getElementById('home_phoneerror').innerHTML = "**Invalid Number";
        return false;
    }


    


    if (addresscheck.test(primary_address)) {
        document.getElementById('primary_addresserror').innerHTML = " ";

    }
    else {
        document.getElementById('primary_addresserror').innerHTML = "**Invalid Address";
        return false;
    }

    if (addresscheck.test(primary_address2)) {
        document.getElementById('primary_addresserror').innerHTML = " ";

    }
    else {
        document.getElementById('primary_addresserror').innerHTML = "**Invalid Address";
        return false;
    }

    if (namecheck.test(primary_city)) {
        document.getElementById('primary_cityerror').innerHTML = " ";

    }
    else {
        document.getElementById('primary_cityerror').innerHTML = "** Invalid City";
        return false;
    }

    if (state == "Choose") {
        document.getElementById('primary_stateerror').innerHTML = "**Select State";
        return false;
    }
    else {
        document.getElementById('primary_stateerror').innerHTML = "";
    }


    if (zip > 999999) {
        document.getElementById('primary_zip').innerHTML = "**Invalid Postal Code";
        return false;
    }


    
    if (addresscheck.test(current_address)) {
        document.getElementById('current_addresserror').innerHTML = " ";

    }
    else {
        document.getElementById('current_addresserror').innerHTML = "**Invalid Address";
        return false;
    }

    if (addresscheck.test(current_address2)) {
        document.getElementById('current_address2error').innerHTML = " ";

    }
    else {
        document.getElementById('current_address2error').innerHTML = "**Invalid Address";
        return false;
    }

    if (namecheck.test(current_city)) {
        document.getElementById('current_cityerror').innerHTML = " ";

    }
    else {
        document.getElementById('current_cityerror').innerHTML = "** Invalid City";
        return false;
    }

    if (current_state == "Choose") {
        document.getElementById('current_state').innerHTML = "**Select State";
        return false;
    }
    else {
        document.getElementById('current_state').innerHTML = "";
    }


    if (current_zip > 999999) {
        document.getElementById('current_zip').innerHTML = "**Invalid Postal Code";
        return false;
    }








    if(checkbox){
        document.getElementById('checkboxerror').innerHTML = " ";

    }
    else {
        document.getElementById('checkboxerror').innerHTML = "Please accept T&C";
        return false;
    }
}