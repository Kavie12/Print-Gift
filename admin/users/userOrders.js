// User Orders Search

document.addEventListener("DOMContentLoaded", () => {
    const search = document.querySelector(".admin-content .user-orders .search input");

    search.addEventListener("change", () => {
        const key = search.value;
        console.log(key);
    });
});




// User Orders Status

document.addEventListener("DOMContentLoaded", () => {

    let orders = document.querySelectorAll(".user-orders-list .item .status");

    orders.forEach(order => {
        let orderID = order.closest(".item").getAttribute("data-order-id");

        order.addEventListener("submit", e => {

            saveBtn.style.background = "black";
            saveBtn.style.color = "white";
            saveBtn.value = "Saved!";

            e.preventDefault();

            let formData = new FormData(order);
            let status = formData.get("user-order-status-" + orderID);

            console.log(orderID + " - " + status);
        });


        // Change save button style
        let declined = document.getElementById("userOrderStatusDeclined" + orderID);
        let confirmed = document.getElementById("userOrderStatusConfirmed" + orderID);
        let processing = document.getElementById("userOrderStatusProcessing" + orderID);
        let dispatched = document.getElementById("userOrderStatusDispatched" + orderID);
        let delivered = document.getElementById("userOrderStatusDelivered" + orderID);

        let switches = [declined, confirmed, processing, dispatched, delivered];

        let saveBtn = document.getElementById("userOrderStatusSave" + orderID);

        switches.forEach(switchItem => {
            switchItem.addEventListener("change", () => {
                saveBtn.style.background = "none";
                saveBtn.style.color = "black";
                saveBtn.value = "Save";
            });
        });
    });

});