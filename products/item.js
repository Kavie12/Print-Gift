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

// Call the functions
document.addEventListener("DOMContentLoaded", () => {

    document.getElementById("itemQty").addEventListener("change", () => cartQtyLimit());
    document.getElementById("itemIncreaseQty").addEventListener("click", () => cartIncreaseQty());
    document.getElementById("itemDecreaseQty").addEventListener("click", () => cartDecreaseQty());

});






// Add to Cart Data

document.addEventListener("DOMContentLoaded", () => {
    let itemID = document.querySelector(".item-tab").getAttribute("data-item-id");
    const addToCartForm = document.getElementById("addToCartForm");

    addToCartForm.addEventListener("submit", e => {
        e.preventDefault();

        let form = new FormData(addToCartForm);

        let text = form.get("printing_text");
        let color = form.get("printing_text_color");
        let img = form.get("printing_image").name;
        let isWrap = (form.get("item_wrap") !== "on") ? 0 : 1;
        let comments = form.get("additional_info");
        let qty = parseInt(form.get("item_qty"));


        console.log(text);
        console.log(color);
        console.log(img);
        console.log(isWrap);
        console.log(comments);
        console.log(qty);

    });
});