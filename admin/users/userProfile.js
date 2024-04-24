document.addEventListener("DOMContentLoaded", () => {

    const queryString = window.location.search;
    const urlParams = new URLSearchParams(queryString);
    const id = urlParams.get('id');

    // Display data
    let xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {

            let data = JSON.parse(this.responseText);
            
            document.getElementById("header").innerHTML = "Profile of " + data.fname + " " + data.lname;
            document.getElementById("adminUserProfileFName").value = data.fname;
            document.getElementById("adminUserProfileLName").value = data.lname;
            document.getElementById("adminUserProfileTel").value = data.phone;
            document.getElementById("adminUserProfileDOB").value = data.dob;
            document.getElementById("adminUserProfileAddress").value = data.address;
            document.getElementById("adminUserProfileCity").value = data.city;
            document.getElementById("adminUserProfilePostalCode").value = data.postalcode;

        }
    }
    xhttp.open('GET', './sql/userdetails.php?id='+id, true);
    xhttp.send();



    // Delete Users
    let deleteProfile = document.querySelectorAll(".profile-details .buttons .delete");

    deleteProfile.forEach(del => {
        del.addEventListener("click", () => {
            xhttp.open('POST', './sql/deleteuser.php', true);
            xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
            xhttp.send('id=' + id);
            xhttp.onreadystatechange = function() {
                if (this.readyState == 4 && this.status == 200) {
                    window.location.replace("./");
                }
            }            
        });
    });

});