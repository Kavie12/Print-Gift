// Login Data

document.addEventListener("DOMContentLoaded", () => {

    let xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
            document.getElementById("editUsername").value = this.responseText;
        }
    }
    xhttp.open('GET', './sql/admindetails.php', true);
    xhttp.send();

    document.getElementById("loginForm").addEventListener('submit', e => {
        if (document.getElementById("editPassword").value == "") {
            e.preventDefault();
            document.getElementById("msg").innerHTML = "Enter password!";
        }
    });

});