function FormValidate() {

    let email = document.RegForm.c_email.value;
    // let fname = document.RegForm.c_first_name.value;
    // let lname = document.RegForm.c_last_name.value;

    // let phone = document.RegForm.c_phone.value;
    // let password = document.RegForm.c_password.value;
    // let Cpassword = document.RegForm.c_password_confirmation.value;

    if (email == "") {
        alert("Please enter a valid e-mail address.");
        return false;
    }


    // if (fname == "") {
    //     alert("Please enter First name.");
    //     return false;
    // }


    // if (lname == "") {
    //     alert("Please enter Last name.");
    //     return false;
    // }


    // if (phone == "") {
    //     alert(
    //         "Please enter your telephone number.");

    //     return false;
    // }


    // if ((password == "") || (password.length < 6) {
    //         alert("Please enter your password and it must be at least 6 character");

    //         return false;
    //     }

    //     if (password != Cpassword) {
    //         alert("Passwords do not match");

    //         return false;
    //     }















    return true;
}