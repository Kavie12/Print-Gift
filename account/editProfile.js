document.addEventListener('DOMContentLoaded', () => {

    const editProfileForm = document.getElementById('editProfileForm');

    editProfileForm.addEventListener('submit', e => {

        const fName = document.getElementById('editProfileFName');
        const lName = document.getElementById('editProfileLName');
        const tel = document.getElementById('editProfileTel');
        const dob = document.getElementById('editProfileDOB');
        const address = document.getElementById('editProfileAddress');
        const city = document.getElementById('editProfileCity');
        const postalCode = document.getElementById('editProfilePostalCode');
        const password = document.getElementById('editProfilePassword');
        const confirmPassword = document.getElementById('editProfileConfirmPassword');

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


    // Display data
    function displayData() {
        let xhttp = new XMLHttpRequest();
        xhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {

                let data = JSON.parse(this.responseText);

                document.getElementById("editProfileFName").value = data[0].fname;
                document.getElementById("editProfileLName").value = data[0].lname;
                document.getElementById("editProfileTel").value = data[0].phone;
                document.getElementById("editProfileDOB").value = data[0].dob;
                document.getElementById("editProfileAddress").value = data[0].address;
                document.getElementById("editProfileCity").value = data[0].city;
                document.getElementById("editProfilePostalCode").value = data[0].postalcode;

            }
        }
        xhttp.open('GET', './sql/userdetails.php', true);
        xhttp.send();
    }

    displayData();


});