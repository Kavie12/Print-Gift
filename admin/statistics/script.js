document.addEventListener("DOMContentLoaded", () => {

    const filter = document.getElementById("adminStatisticsDurationFilter");

    const usersTitle = document.querySelector(".statistics-cards .users h3");
    const ordersTitle = document.querySelector(".statistics-cards .orders h3");
    const revenueTitle = document.querySelector(".statistics-cards .revenue h3");

    const usersValue = document.querySelector(".statistics-cards .users span");
    const ordersValue = document.querySelector(".statistics-cards .orders span");
    const revenueValue = document.querySelector(".statistics-cards .revenue span");
    
    const xhttp = new XMLHttpRequest();

    function changeValues() {
        if (filter.value !== "all") {
            usersTitle.innerHTML = "Users - 30 Days";
            ordersTitle.innerHTML = "Orders - 30 Days";
            revenueTitle.innerHTML = "Revenue - 30 Days";

            xhttp.open('GET', './sql/30days.php', true);
            xhttp.send();
            xhttp.onreadystatechange = function() {
                if (this.readyState == 4 && this.status == 200) {
                    const data = JSON.parse(this.responseText);

                    usersValue.innerHTML = data[0];
                    ordersValue.innerHTML = data[1];
                    revenueValue.innerHTML = "Rs. " + data[2];
                }
            }
        } else {
            usersTitle.innerHTML = "Total Users";
            ordersTitle.innerHTML = "Total Orders";
            revenueTitle.innerHTML = "Total Revenue";

            xhttp.open('GET', './sql/alltime.php', true);
            xhttp.send();
            xhttp.onreadystatechange = function() {
                if (this.readyState == 4 && this.status == 200) {
                    const data = JSON.parse(this.responseText);

                    usersValue.innerHTML = data[0];
                    ordersValue.innerHTML = data[1];
                    revenueValue.innerHTML = "Rs. " + data[2];
                }
            }
        }
    }

    changeValues();

    filter.addEventListener("change", () => changeValues());

});