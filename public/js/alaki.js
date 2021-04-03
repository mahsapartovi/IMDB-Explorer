function validateEmail(emailField) {
    var reg = /^([A-Za-z0-9_\-\.])+\@([A-Za-z0-9_\-\.])+\.([A-Za-z]{2,4})$/;

    if (reg.test(emailField.value) == false) {
        alert('Invalid Email Address');
        return false;
    }

    return true;

}

function checkPassword(form) {
    password1 = form.password1.value;
    password2 = form.password2.value;

    if (password1.match(/[a-z]/g) && password1.match(
            /[A-Z]/g) && password1.match(
            /[0-9]/g) && password1.match(
            /[^a-zA-Z\d]/g) && password1.length >= 8)
        return "TRUE";
    else
        alert("password is not secure");

    if (password1 == '')
        alert("Please enter Password");

    else if (password2 == '')
        alert("Please enter confirm password");

    else if (password1 != password2) {
        alert("\nPassword did not match: Please try again...")
        return false;
    } else {
        return true;
    }
}

function password_str() {
    var res;
    var str =
        document.getElementById("t1").value;

    document.getElementById("t2").value = res;

}