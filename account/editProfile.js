document.addEventListener('DOMContentLoaded', () => {

    const editProfileForm = document.getElementById('editProfileForm');

    editProfileForm.addEventListener('submit', e => {
        e.preventDefault();

        const fName = document.getElementById('editProfileFName');
        const lName = document.getElementById('editProfileLName');
        const tel = document.getElementById('editProfileTel');
        const dob = document.getElementById('editProfileDOB');
        const address = document.getElementById('editProfileAddress');
        const city = document.getElementById('editProfileCity');
        const postalCode = document.getElementById('editProfilePostalCode');
        const password = document.getElementById('editProfilePassword');
        const confirmPassword = document.getElementById('editProfileConfirmPassword');

        if (fName.value == "" | lName.value == "" | tel.value == "" || dob.value == "" || address.value == "" || city.value == "" || postalCode.value == "" || password.value == "") {
            document.getElementById("editProfileCardMsg").innerHTML = "All fields must be filled!";
        } else if (!(/^(?:7|0|(?:\+94))[0-9]{9,10}$/.test(tel.value))) {
            document.getElementById("editProfileCardMsg").innerHTML = "Enter a valid phone number!";
        } else if (isNaN(postalCode.value) || !(postalCode.value.length == 5)) {
            document.getElementById("editProfileCardMsg").innerHTML = "Enter a valid postal code!";
        } else if (password.value !== confirmPassword.value) {
            document.getElementById("editProfileCardMsg").innerHTML = "Password does not match!";
        } else {
            document.getElementById("editProfileCardMsg").innerHTML = "Saving...";
        }
    });

});