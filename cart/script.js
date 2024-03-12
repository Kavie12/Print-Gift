// Cart Increase QTY
function cartIncreaseQty(i, itemID) {
    let qty = parseInt(document.querySelectorAll(".cart_qty")[i].value);
    let qtyInput = document.querySelectorAll(".cart_qty")[i];
    qtyInput.value = qty + 1;
    console.log(itemID + " - " + qtyInput.value);
}

// Cart decrease QTY
function cartDecreaseQty(i, itemID) {
    let qty = parseInt(document.querySelectorAll(".cart_qty")[i].value);
    let qtyInput = document.querySelectorAll(".cart_qty")[i];
    
    if (qty > 1) {
        qtyInput.value = qty - 1;
        console.log(itemID + " - " + qtyInput.value);
    } else {
        cartQtyLimit(i, itemID);
    }
}

// Cart QTY Limit
function cartQtyLimit(i, itemID) {
    let qty = parseInt(document.querySelectorAll(".cart_qty")[i].value);
    let qtyInput = document.querySelectorAll(".cart_qty")[i];
    if (qty < 1) {
        qtyInput.value = 1;
    }
    console.log(itemID + " - " + qtyInput.value);
}

// Remove item from cart
function removeCart(item, itemID) {
    item.remove();
    numberCartItem();
    cartItemZero();

    console.log(itemID + " - removed");
}

// Number cart items
function numberCartItem() {
    let item = document.querySelectorAll(".cart-item .item-no");
    for (let i = 0; i < item.length; i++) {
        item[i].innerHTML = i + 1;
    }
}

// if there is no items in cart
function cartItemZero() {
    if (document.querySelectorAll(".cart-item").length == 0) {
        document.querySelector(".cart-item-zero").style.display = "flex";
        document.querySelector(".cart-tab .checkout").style.display = "none";
        document.querySelector(".cart-tab .cart-list").style.width = "100%";
        document.querySelector(".cart-tab .cart-list").style.justifyContent = "center";
    }
}

// Confirm Order
function confirmOrder() {
    const successCard = document.querySelector(".order-success");
    const successCardCloseBtn = document.querySelector(".order-success i");
    document.querySelectorAll(".cart-item").forEach((item) => {
        item.remove();
        cartItemZero();
    });
    successCard.style.display = "flex";
    successCardCloseBtn.addEventListener("click", () => {
        successCard.style.display = "none";
    });
}

// Call the functions
document.addEventListener("DOMContentLoaded", () => {
    for (let i = 0; i < document.querySelectorAll(".cart-item").length; i++) {
        let itemID = document.querySelectorAll(".cart-item")[i].getAttribute("data-item-id");
        document.querySelectorAll(".cart_qty")[i].addEventListener("change", () => cartQtyLimit(i, itemID));
        document.querySelectorAll(".cart_increase_qty")[i].addEventListener("click", () => cartIncreaseQty(i, itemID));
        document.querySelectorAll(".cart_decrease_qty")[i].addEventListener("click", () => cartDecreaseQty(i, itemID));
    }

    document.querySelectorAll(".cart-item .fa-xmark").forEach((closeBtn) => {
        closeBtn.addEventListener("click", () => {
            removeCart(closeBtn.closest(".cart-item"), closeBtn.closest(".cart-item").getAttribute("data-item-id"));
        });
    });

    numberCartItem();
    cartItemZero();

    document.getElementById("cartConfirmOrder").addEventListener("click", () => confirmOrder());
});