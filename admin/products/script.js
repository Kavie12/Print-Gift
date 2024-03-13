// Past Orders Search

document.addEventListener("DOMContentLoaded", () => {
    const search = document.querySelector(".admin-content .products .search input");

    search.addEventListener("change", () => {
        const key = search.value;
        console.log(key);
    });
});




// Products Status

document.addEventListener("DOMContentLoaded", () => {

    let statusList = document.querySelectorAll(".products .item .status");

    statusList.forEach(item => {
        let productID = item.closest(".item").getAttribute("data-product-id");

        item.addEventListener("submit", e => {

            saveBtn.style.background = "black";
            saveBtn.style.color = "white";
            saveBtn.value = "Saved!";

            e.preventDefault();

            let formData = new FormData(item);
            let status = formData.get("product-status-" + productID);

            console.log(productID + " - " + status);
        });


        // Change save button style
        let inStock = document.getElementById("productStatusInStock" + productID);
        let outOfStock = document.getElementById("productStatusOutOfStock" + productID);
        let hide = document.getElementById("productStatusHide" + productID);

        let switches = [inStock, outOfStock, hide];

        let saveBtn = document.getElementById("productStatusSave" + productID);

        switches.forEach(switchItem => {
            switchItem.addEventListener("change", () => {
                saveBtn.style.background = "none";
                saveBtn.style.color = "black";
                saveBtn.value = "Save";
            });
        });
    });

});