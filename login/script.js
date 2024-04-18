// Login Data

document.addEventListener("DOMContentLoaded", () => {

    const queryString = window.location.search;
    const urlParams = new URLSearchParams(queryString);
    if (urlParams.get('error') == 1) {
        document.getElementById("loginCardMsg").innerHTML = "Your email or password is incorrect!";
    }


    const loginForm = document.getElementById("loginForm");

    loginForm.addEventListener("submit", e => {
        const email = document.getElementById("loginEmail");
        const password = document.getElementById("loginPassword");

        if (email.value == "" || password.value == "") {
            e.preventDefault();
            document.getElementById("loginCardMsg").innerHTML = "You must fill every fields!";
        } else {
            document.getElementById("loginCardMsg").innerHTML = "Logging in...";
        }
    });
});