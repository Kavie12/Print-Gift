// New order accept or decline

document.addEventListener("DOMContentLoaded", () => {
    const orders = document.querySelectorAll(".new-orders-list .item");
    const orderID = document.querySelectorAll(".new-orders-list .order-id");
    const accept = document.querySelectorAll(".new-orders-list .item .accept");
    const decline = document.querySelectorAll(".new-orders-list .item .decline");
    for (let i = 0; i < orders.length; i++) {
        accept[i].addEventListener("click", () => {
            let orderIDNo = parseInt(orderID[i].innerHTML.substring(10));
            console.log(orderIDNo + " - Accept");
            orders[i].remove();
            noNewOrders();
        });
        decline[i].addEventListener("click", () => {
            let orderIDNo = parseInt(orderID[i].innerHTML.substring(10));
            console.log(orderIDNo + " - Decline");
            orders[i].remove();
            noNewOrders();
        });
    }
});





// New Orders Search

document.addEventListener("DOMContentLoaded", () => {
    const search = document.querySelector(".admin-content .new-orders .search input");

    search.addEventListener("change", () => {
        const key = search.value;
        console.log(key);
    });
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

document.addEventListener("DOMContentLoaded", () => noNewOrders());