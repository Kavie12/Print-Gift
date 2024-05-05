// Delivery Data

document.addEventListener("DOMContentLoaded", () => {

    let xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
            document.getElementById("delivery").value = this.responseText;
        }
    }
    xhttp.open('GET', './sql/deliverydetails.php', true);
    xhttp.send();

});