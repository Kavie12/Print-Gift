document.addEventListener("DOMContentLoaded", () => {

    const deleteBtn = document.querySelector(".account-section .details .buttons .delete");
    deleteBtn.addEventListener("click", e => {
        const confirmDelete = confirm("Please confirm delete account!");
        if (confirmDelete == true) {
            del.closest(".user-info").remove();
            console.log(userId + " - delete");
        } else {
            e.preventDefault();
        }
    });




    // Display data
    function displayData() {
        let xhttp = new XMLHttpRequest();
        xhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {

                let data = JSON.parse(this.responseText);

                document.getElementById("profileFName").value = data[0].fname;
                document.getElementById("profileLName").value = data[0].lname;
                document.getElementById("profileTel").value = data[0].phone;
                document.getElementById("profileDOB").value = data[0].dob;
                document.getElementById("profileAddress").value = data[0].address;
                document.getElementById("profileCity").value = data[0].city;
                document.getElementById("profilePostalCode").value = data[0].postalcode;

            }
          };
        xhttp.open('GET', './sql/userdetails.php', true);
        xhttp.send();
    }

    displayData();

});

