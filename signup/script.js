// Sign Up Data

document.addEventListener('DOMContentLoaded', () => {

    const queryString = window.location.search;
    const urlParams = new URLSearchParams(queryString);
    if (urlParams.get('error') == "userexist") {
        document.getElementById("signUpCardMsg").innerHTML = "You have already registered, <a href='../login/'>click here</a> to login!";
    }


    const signupForm = document.getElementById('signupForm');

    signupForm.addEventListener('submit', e => {

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

        if (fName.value == "" || lName.value == "" || tel.value == "" || dob.value == "" || address.value == "" || city.value == "" || postalCode.value == "" || email.value == "" || password.value == "") {
            document.getElementById("signUpCardMsg").innerHTML = "All fields must be filled!";
            e.preventDefault();
        } else if (postalCode.value.length !== 5) {
            document.getElementById("signUpCardMsg").innerHTML = "Enter a valid postal code!";
            e.preventDefault();
        } else if (!(password.value == confirmPassword.value)) {
            document.getElementById("signUpCardMsg").innerHTML = "Password does not match!";
            e.preventDefault();
        } else if (!agreeTerms.checked) {
            document.getElementById("signUpCardMsg").innerHTML = "You must agree to the terms and conditions!";
            e.preventDefault();
        } else {
            document.getElementById("signUpCardMsg").innerHTML = "Signing in...";
        }



    });

});