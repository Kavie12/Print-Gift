// Login Data

document.addEventListener("DOMContentLoaded", () => {

    const queryString = window.location.search;
    const urlParams = new URLSearchParams(queryString);
    if (urlParams.get('error') == 1) {
        document.getElementById("loginCardMsg").innerHTML = "Your username or password is incorrect!";
    }


    const loginForm = document.getElementById("loginForm");

    loginForm.addEventListener("submit", e => {
        const username = document.getElementById("loginUsername");
        const password = document.getElementById("loginPassword");

        if (username.value == "" || password.value == "") {
            e.preventDefault();
            document.getElementById("loginCardMsg").innerHTML = "You must fill every fields!";
        } else {
            document.getElementById("loginCardMsg").innerHTML = "Logging in...";
        }
    });
});