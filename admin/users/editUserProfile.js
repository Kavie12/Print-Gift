// Sign Up Data

document.addEventListener("DOMContentLoaded", () => {

    const form = document.getElementById("adminEditUserForm");

    const fName = document.getElementById("adminEditUserProfileFName");
    const lName = document.getElementById("adminEditUserProfileLName");
    const tel = document.getElementById("adminEditUserProfileTel");
    const dob = document.getElementById("adminEditUserProfileDOB");
    const address = document.getElementById("adminEditUserProfileAddress");
    const city = document.getElementById("adminEditUserProfileCity");
    const postalCode = document.getElementById("adminEditUserProfilePostalCode");
    const password = document.getElementById("adminEditUserProfilePassword");
    const confirmPassword = document.getElementById("adminEditUserProfileConfirmPassword");

    // URL ID Param
    const queryString = window.location.search;
    const urlParams = new URLSearchParams(queryString);
    const id = urlParams.get('id');

    // Display data
    let xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {

            let data = JSON.parse(this.responseText);
            
            document.getElementById("header").innerHTML = "Edit Profile of " + data.fname + " " + data.lname;
            fName.value = data.fname;
            lName.value = data.lname;
            tel.value = data.phone;
            dob.value = data.dob;
            address.value = data.address;
            city.value = data.city;
            postalCode.value = data.postalcode;

        }
    }
    xhttp.open('GET', './sql/userdetails.php?id='+id, true);
    xhttp.send();

    form.addEventListener("submit", e => {
        
        if (fName.value == "" || lName.value == "" || tel.value == "" || dob.value == "" || address.value == "" || city.value == "" || postalCode.value == "") {
            document.getElementById("editProfileCardMsg").innerHTML = "All fields must be filled!";
            e.preventDefault();
        } else if (postalCode.value.length !== 5) {
            document.getElementById("editProfileCardMsg").innerHTML = "Enter a valid postal code!";
            e.preventDefault();
        } else if (password.value !== "" && (password.value !== confirmPassword.value)) {
            document.getElementById("editProfileCardMsg").innerHTML = "Password does not match!";
        } else {
            document.getElementById("editProfileCardMsg").innerHTML = "Saving...";
        }

    });

});