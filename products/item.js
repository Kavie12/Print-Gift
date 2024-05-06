document.addEventListener("DOMContentLoaded", () => {

    document.getElementById("itemQty").addEventListener("change", () => cartQtyLimit());
    document.getElementById("itemIncreaseQty").addEventListener("click", () => cartIncreaseQty());
    document.getElementById("itemDecreaseQty").addEventListener("click", () => cartDecreaseQty());


    addToCartData();
});



// Cart Increase QTY
function cartIncreaseQty() {
    let qty = parseInt(document.getElementById("itemQty").value);
    let qtyInput = document.getElementById("itemQty");
    qtyInput.value = qty + 1;
}

// Cart decrease QTY
function cartDecreaseQty() {
    let qty = parseInt(document.getElementById("itemQty").value);
    let qtyInput = document.getElementById("itemQty");
    
    if (qty > 1) {
        qtyInput.value = qty - 1;
    } else {
        cartQtyLimit();
    }
}

// Cart QTY Limit
function cartQtyLimit() {
    let qty = parseInt(document.getElementById("itemQty").value);
    let qtyInput = document.getElementById("itemQty");

    if (qty < 1) {
        qtyInput.value = 1;
    }
}



// Add to Cart Data
function addToCartData() {
    // let itemID = document.querySelector(".item-tab").getAttribute("data-item-id");
    const addToCartForm = document.getElementById("addToCartForm");
    
    addToCartForm.addEventListener("submit", e => {

        document.getElementById("addToCartMsg").innerHTML = "Adding!";
    
    });
}