function validateRegistration() {
  var firstname = $("#firstname").val();
  var lastname = $("#lastname").val();
  var username = $("#username").val();
  var email = $("#email").val();
  var phone = $("#phone").val();
  var nic = $("#nic").val();
  var password = $("#password").val();
  var rePassword = $("#repassword").val();

  if (firstname == "") {
    error_popup("Please Enter First Name");
    return false;
  } else if (lastname == "") {
    error_popup("Please Enter Last Name");
    return false;
  } else if (username == "") {
    error_popup("Please Enter User Name");
    return false;
  } else if (email == "") {
    error_popup("Please Enter Email");
    return false;
  } else if (phone == "") {
    error_popup("Please Enter Phone Number");
    return false;
  } else if (nic == "") {
    error_popup("Please Enter NIC Number");
    return false;
  } else if (password == "") {
    error_popup("Please Enter Password");
    return false;
  } else if (rePassword == "") {
    error_popup("Please Enter Confirm Password");
    return false;
  } else if (password != rePassword) {
    error_popup("The confirm password does not match");
    return false;
  }
}

function showPassword() {
  var inputField = document.getElementById("password");
  if (inputField.type === "password") {
    inputField.type = "text";
  } else {
    inputField.type = "password";
  }
}
