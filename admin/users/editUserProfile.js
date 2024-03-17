// Sign Up Data

document.addEventListener("DOMContentLoaded", () => {

    const form = document.getElementById("adminEditUserForm");

    form.addEventListener("submit", e => {

        e.preventDefault();

        const userID = form.getAttribute("data-user-id");

        const fName = document.getElementById("adminEditUserProfileFName");
        const lName = document.getElementById("adminEditUserProfileLName");
        const tel = document.getElementById("adminEditUserProfileTel");
        const dob = document.getElementById("adminEditUserProfileDOB");
        const address = document.getElementById("adminEditUserProfileAddress");
        const city = document.getElementById("adminEditUserProfileCity");
        const postalCode = document.getElementById("adminEditUserProfilePostalCode");
        const password = document.getElementById("adminEditUserProfilePassword");
        const confirmPassword = document.getElementById("adminEditUserProfileConfirmPassword");

        
        if (fName.value == "" | lName.value == "" | tel.value == "" || dob.value == "" || address.value == "" || city.value == "" || postalCode.value == "") {
            document.getElementById("adminEditUserCardMsg").innerHTML = "All fields must be filled!";
        } else if (!(/^(?:7|0|(?:\+94))[0-9]{9,10}$/.test(tel.value))) {
            document.getElementById("adminEditUserCardMsg").innerHTML = "Enter a valid phone number!";
        } else if (isNaN(postalCode.value) || !(postalCode.value.length == 5)) {
            document.getElementById("adminEditUserCardMsg").innerHTML = "Enter a valid postal code!";
        } else if (password.value !== confirmPassword.value) {
            document.getElementById("adminEditUserCardMsg").innerHTML = "Password does not match!";
        } else {
            document.getElementById("adminEditUserCardMsg").innerHTML = "Saving...";
            console.log(userID + " - Saving ");
        }

    });

});