// Sign Up Data

document.addEventListener("DOMContentLoaded", () => {


    const signupForm = document.getElementById("adminAddUserForm");

    signupForm.addEventListener("submit", e => {
        
        e.preventDefault();

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


        if (fName.value == "" | lName.value == "" | tel.value == "" || dob.value == "" || address.value == "" || city.value == "" || postalCode.value == "" || email.value == "" || password.value == "") {
            document.getElementById("adminAddUserCardMsg").innerHTML = "All fields must be filled!";
        } else if (!(/^(?:7|0|(?:\+94))[0-9]{9,10}$/.test(tel.value))) {
            document.getElementById("adminAddUserCardMsg").innerHTML = "Enter a valid phone number!";
        } else if (isNaN(postalCode.value) || !(postalCode.value.length == 5)) {
            document.getElementById("adminAddUserCardMsg").innerHTML = "Enter a valid postal code!";
        } else if (password.value !== confirmPassword.value) {
            document.getElementById("adminAddUserCardMsg").innerHTML = "Password does not match!";
        } else {
            document.getElementById("adminAddUserCardMsg").innerHTML = "Adding user...";
        }

    });

});