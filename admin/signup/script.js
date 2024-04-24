// Sign Up Data

document.addEventListener('DOMContentLoaded', () => {

    const queryString = window.location.search;
    const urlParams = new URLSearchParams(queryString);
    if (urlParams.get('error') == "userexist") {
        document.getElementById("signUpCardMsg").innerHTML = "You have already registered, <a href='../login/'>click here</a> to login!";
    }


    const signupForm = document.getElementById('signupForm');

    signupForm.addEventListener('submit', e => {

        const username = document.getElementById('signUpUsername');
        const password = document.getElementById('signUpPassword');

        if (username.value == "" || password.value == "") {
            document.getElementById("signUpCardMsg").innerHTML = "All fields must be filled!";
            e.preventDefault();
        } else if (!(password.value == confirmPassword.value)) {
            document.getElementById("signUpCardMsg").innerHTML = "Password does not match!";
            e.preventDefault();
        } else {
            document.getElementById("signUpCardMsg").innerHTML = "Signing in...";
        }



    });

});