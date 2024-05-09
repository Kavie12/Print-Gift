document.addEventListener("DOMContentLoaded", () => {

    // New order accept or decline
    const orders = document.querySelectorAll(".new-orders-list .item");
    const orderID = document.querySelectorAll(".new-orders-list .order-id");
    const accept = document.querySelectorAll(".new-orders-list .item .accept");
    const decline = document.querySelectorAll(".new-orders-list .item .decline");

    const xhttp = new XMLHttpRequest();

    for (let i = 0; i < orders.length; i++) {
        accept[i].addEventListener("click", () => {
            let orderIDNo = parseInt(orderID[i].innerHTML.substring(10));
            xhttp.open('GET', './sql/orderacceptance.php?id=' + orderIDNo + '&status=1', true);
            xhttp.send();
            orders[i].remove();
            noNewOrders();
        });
        decline[i].addEventListener("click", () => {
            let orderIDNo = parseInt(orderID[i].innerHTML.substring(10));
            xhttp.open('GET', './sql/orderacceptance.php?id=' + orderIDNo + '&status=0', true);
            xhttp.send();
            orders[i].remove();
            noNewOrders();
        });
    }


    // New Orders Search
    const search = document.querySelector(".admin-content .new-orders .search input");

    search.addEventListener("change", () => {
        const key = search.value;
        console.log(key);
    });




    noNewOrders();
});



// If there is no new orders
function noNewOrders() {
    const msg = document.getElementById("noNewOrdersMsg");
    const search = document.querySelector(".admin-content .new-orders .search");

    if (document.querySelectorAll(".new-orders-list .item").length < 1) {
        msg.style.display = "flex";
        search.style.display = "none";
    }
}