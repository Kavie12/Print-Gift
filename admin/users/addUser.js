// Sign Up Data

document.addEventListener("DOMContentLoaded", () => {

    const signupForm = document.getElementById("adminAddUserForm");

    signupForm.addEventListener("submit", e => {
        
        const fName = document.getElementById("adminAddUserFName");
        const lName = document.getElementById("adminAddUserLName");
        const tel = document.getElementById("adminAddUserTel");
        const dob = document.getElementById("adminAddUserDOB");
        const address = document.getElementById("adminAddUserAddress");
        const city = document.getElementById("adminAddUserCity");
        const postalCode = document.getElementById("adminAddUserPostalCode");
        const email = document.getElementById("adminAddUserEmail");
        const password = document.getElementById("adminAddUserPassword");
        const confirmPassword = document.getElementById("adminAddUserConfirmPassword");


        if (fName.value == "" || lName.value == "" || tel.value == "" || dob.value == "" || address.value == "" || city.value == "" || postalCode.value == "" || email.value == "" || password.value == "") {
            document.getElementById("adminAddUserCardMsg").innerHTML = "All fields must be filled!";
            e.preventDefault();
        } else if (postalCode.value.length !== 5) {
            document.getElementById("adminAddUserCardMsg").innerHTML = "Enter a valid postal code!";
            e.preventDefault();
        } else if (!(password.value == confirmPassword.value)) {
            document.getElementById("adminAddUserCardMsg").innerHTML = "Password does not match!";
            e.preventDefault();
        } else {
            document.getElementById("adminAddUserCardMsg").innerHTML = "Signing in...";
        }

    });

});