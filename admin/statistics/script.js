document.addEventListener("DOMContentLoaded", () => {

    const usersValue = document.querySelector(".statistics-cards .users span");
    const ordersValue = document.querySelector(".statistics-cards .orders span");
    const revenueValue = document.querySelector(".statistics-cards .revenue span");
    
    const xhttp = new XMLHttpRequest();

    xhttp.open('GET', './sql/statistics.php', true);
    xhttp.send();
    xhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
            const data = JSON.parse(this.responseText);

            usersValue.innerHTML = data[0];
            ordersValue.innerHTML = data[1];
            revenueValue.innerHTML = "Rs. " + data[2];
        }
    }

});