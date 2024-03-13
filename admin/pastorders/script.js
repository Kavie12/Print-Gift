// Past Orders Search

document.addEventListener("DOMContentLoaded", () => {
    const search = document.querySelector(".admin-content .past-orders .search input");

    search.addEventListener("change", () => {
        const key = search.value;
        console.log(key);
    });
});




// Past Orders Status

document.addEventListener("DOMContentLoaded", () => {

    let orders = document.querySelectorAll(".past-orders-list .item .status");

    orders.forEach(order => {
        let orderID = order.closest(".item").getAttribute("data-order-id");

        order.addEventListener("submit", e => {

            saveBtn.style.background = "black";
            saveBtn.style.color = "white";
            saveBtn.value = "Saved!";

            e.preventDefault();

            let formData = new FormData(order);
            let status = formData.get("past-order-status-" + orderID);

            console.log(orderID + " - " + status);
        });


        // Change save button style
        let declined = document.getElementById("pastOrderStatusDeclined" + orderID);
        let confirmed = document.getElementById("pastOrderStatusConfirmed" + orderID);
        let processing = document.getElementById("pastOrderStatusProcessing" + orderID);
        let dispatched = document.getElementById("pastOrderStatusDispatched" + orderID);
        let delivered = document.getElementById("pastOrderStatusDelivered" + orderID);

        let switches = [declined, confirmed, processing, dispatched, delivered];

        let saveBtn = document.getElementById("pastOrderStatusSave" + orderID);

        switches.forEach(switchItem => {
            switchItem.addEventListener("change", () => {
                saveBtn.style.background = "none";
                saveBtn.style.color = "black";
                saveBtn.value = "Save";
            });
        });
    });

});