// Sign Up Data

document.addEventListener('DOMContentLoaded', () => {

    const signupForm = document.getElementById('signupForm');

    signupForm.addEventListener('submit', e => {
        e.preventDefault();

        const fName = document.getElementById('signUpFName');
        const lName = document.getElementById('signUpLName');
        const tel = document.getElementById('signUpTel');
        const dob = document.getElementById('signUpDOB');
        const address = document.getElementById('signUpAddress');
        const city = document.getElementById('signUpCity');
        const postalCode = document.getElementById('signUpPostalCode');
        const email = document.getElementById('signUpEmail');
        const password = document.getElementById('signUpPassword');
        const confirmPassword = document.getElementById('signUpConfirmPassword');
        const agreeTerms = document.getElementById('signUpAgreeTerms');

        if (!(password.value == confirmPassword.value)) {
            document.getElementById("signUpCardMsg").innerHTML = "Password does not match!";
        } else {
            document.getElementById("signUpCardMsg").innerHTML = "Saving...";
        }

        // if (fName.value == "" | lName.value == "" | tel.value == "" || dob.value == "" || address.value == "" || city.value == "" || postalCode.value == "" || password.value == "") {
        //     document.getElementById("signUpCardMsg").innerHTML = "All fields must be filled!";
        // } else if (!(/^(?:7|0|(?:\+94))[0-9]{9,10}$/.test(tel.value))) {
        //     document.getElementById("signUpCardMsg").innerHTML = "Enter a valid phone number!";
        // } else if (isNaN(postalCode.value) || !(postalCode.value.length == 5)) {
        //     document.getElementById("signUpCardMsg").innerHTML = "Enter a valid postal code!";
        // } else if (password.value !== confirmPassword.value) {
        //     document.getElementById("signUpCardMsg").innerHTML = "Password does not match!";
        // } else {
        //     document.getElementById("signUpCardMsg").innerHTML = "Saving...";
        // }
    });

});