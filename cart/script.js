// Cart Increase QTY
function cartIncreaseQty(i) {
    let qty = parseInt(document.querySelectorAll(".cart_qty")[i].value);
    document.querySelectorAll(".cart_qty")[i].value = qty + 1;
}

// Cart decrease QTY
function cartDecreaseQty(i) {
    let qty = parseInt(document.querySelectorAll(".cart_qty")[i].value);
    document.querySelectorAll(".cart_qty")[i].value = qty - 1;
    cartQtyLimit(i);
}

// Cart QTY Limit
function cartQtyLimit(i) {
    let qty = parseInt(document.querySelectorAll(".cart_qty")[i].value);
    if (qty < 1) {
        document.querySelectorAll(".cart_qty")[i].value = 1;
    }
}

// Remove item from cart
function removeCart(item) {
    item.remove();
    numberCartItem();
    cartItemZero();
}

// Number cart items
function numberCartItem() {
    let item = document.querySelectorAll(".cart-item .item-no");
    for (let i = 0; i < item.length; i++) {
        item[i].innerHTML = i + 1;
    }
}

// Show the message if there is no items in cart
function cartItemZero() {
    if (document.querySelectorAll(".cart-item").length == 0) {
        document.querySelector(".cart-item-zero").style.display = "flex";
        document.querySelector(".cart-tab .checkout").style.display = "none";
        document.querySelector(".cart-tab .cart-list").style.width = "100%";
        document.querySelector(".cart-tab .cart-list").style.justifyContent = "center";
    }
}

// Call the functions
document.addEventListener("DOMContentLoaded", () => {
    for (let i = 0; i < document.querySelectorAll(".cart-item").length; i++) {
        document.querySelectorAll(".cart_qty")[i].addEventListener("change", () => cartQtyLimit(i));
        document.querySelectorAll(".cart_increase_qty")[i].addEventListener("click", () => cartIncreaseQty(i));
        document.querySelectorAll(".cart_decrease_qty")[i].addEventListener("click", () => cartDecreaseQty(i));
    }
    if (document.querySelectorAll(".cart-item").length > 0) {
        document.querySelectorAll(".cart-item .fa-xmark").forEach((closeBtn) => {
            closeBtn.addEventListener("click", () => removeCart(closeBtn.closest(".cart-item")));
        })
        numberCartItem();
        cartItemZero();
    }
});







// Add to Cart Data

document.addEventListener("DOMContentLoaded", () => {
    const addToCartForm = document.getElementById("addToCartForm");

    addToCartForm.addEventListener("submit", e => {
        e.preventDefault();

    });
});

