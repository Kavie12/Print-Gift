document.addEventListener("DOMContentLoaded", () => {

    const filter = document.getElementById("adminStatisticsDurationFilter");

    const usersTitle = document.querySelector(".statistics-cards .users h3");
    const ordersTitle = document.querySelector(".statistics-cards .orders h3");
    const revenueTitle = document.querySelector(".statistics-cards .revenue h3");

    const usersValue = document.querySelector(".statistics-cards .users span");
    const ordersValue = document.querySelector(".statistics-cards .orders span");
    const revenueValue = document.querySelector(".statistics-cards .revenue span");
    

    function changeValues() {
        if (filter.value !== "all") {
            usersTitle.innerHTML = "Users - 30 Days";
            ordersTitle.innerHTML = "Orders - 30 Days";
            revenueTitle.innerHTML = "Revenue - 30 Days";

            usersValue.innerHTML = "26";
            ordersValue.innerHTML = "17";
            revenueValue.innerHTML = "Rs. 6300";
        } else {
            usersTitle.innerHTML = "Total Users";
            ordersTitle.innerHTML = "Total Orders";
            revenueTitle.innerHTML = "Total Revenue";

            usersValue.innerHTML = "395";
            ordersValue.innerHTML = "309";
            revenueValue.innerHTML = "Rs. 43000";
        }
    }

    changeValues();

    filter.addEventListener("change", () => changeValues());

});