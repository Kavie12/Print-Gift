// Delivery Data

document.addEventListener("DOMContentLoaded", () => {

    let xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
            document.getElementById("wrap").value = this.responseText;
        }
    }
    xhttp.open('GET', './sql/wrapdetails.php', true);
    xhttp.send();

});