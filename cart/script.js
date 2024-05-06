// Cart Increase QTY
function cartIncreaseQty(i, itemID) {
    let qty = parseInt(document.querySelectorAll(".cart_qty")[i].value);
    let qtyInput = document.querySelectorAll(".cart_qty")[i];
    qtyInput.value = qty + 1;

    qtyDBUpdate(qtyInput.value, itemID);

    // console.log(itemID + " - " + qtyInput.value);

}

// Cart decrease QTY
function cartDecreaseQty(i, itemID) {
    let qty = parseInt(document.querySelectorAll(".cart_qty")[i].value);
    let qtyInput = document.querySelectorAll(".cart_qty")[i];
    
    if (qty > 1) {
        qtyInput.value = qty - 1;
        // console.log(itemID + " - " + qtyInput.value);
        qtyDBUpdate(qtyInput.value, itemID);
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
    // console.log(itemID + " - " + qtyInput.value);
    qtyDBUpdate(qtyInput.value, itemID);
}

// Remove item from cart
function removeCart(item, itemID) {
    item.remove();
    numberCartItem();
    cartItemZero();

    // console.log(itemID + " - removed");
    cartDBDelete(itemID);
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
    console.log("Order Success");
}




// Cart qty update to the DB
function qtyDBUpdate(qty, pid) {
    const xhttp = new XMLHttpRequest();
    xhttp.open('POST', './sql/changeqty.php', true);
    xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    xhttp.send("qty=" + qty + "&pid=" + pid);

    updateCheckoutDB();
}

// Cart delete from DB
function cartDBDelete(pid) {
    const xhttp = new XMLHttpRequest();
    xhttp.open('POST', './sql/removecartitem.php', true);
    xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    xhttp.send("pid=" + pid);

    updateCheckoutDB();
}

// Update checkout data from DB
function updateCheckoutDB() {
    const xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
            // Data
            const data = JSON.parse(this.responseText);
            data.reverse();

            // Remove current data
            const itemsList = document.querySelectorAll(".checkout-items-list .items-list");
            itemsList.forEach((item) => {
                item.remove();
            });

            // Add new data
            data.forEach((row) => {
                const tr = document.createElement("tr");
                tr.classList.add("items-list");
                tr.innerHTML = `
                    <td>${row[0]}</td>
                    <td class="qty">${row[1]}x</td>
                    <td class="rs">Rs.</td>
                    <td class="price">${row[2] * row[1]}</td>
                `;
                document.querySelector(".checkout-items-list").prepend(tr);
            });
        }
    }
    xhttp.open('GET', './sql/checkoutdetails.php', true);
    xhttp.send();

    updateTotalPrice();
}


// Update service prices
function updateServicePrices() {
    const xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
            const data = JSON.parse(this.responseText);

            document.querySelector(".checkout-items-list .shipping .price").innerHTML = data[0];
            document.querySelector(".checkout-items-list .wrapping .price").innerHTML = data[1] * data[2];
            document.querySelector(".checkout-items-list .wrapping .qty").innerHTML = data[2] + 'x';

        }
    }
    xhttp.open('GET', './sql/servicepricedetails.php', true);
    xhttp.send();
}


function updateTotalPrice() {
    const xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
            document.querySelector(".total-price-value").innerHTML = parseInt(this.responseText);
        }
    }
    xhttp.open('GET', './sql/totalprice.php', true);
    xhttp.send();
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
    updateCheckoutDB();
    updateServicePrices();
    updateTotalPrice();

    document.getElementById("cartConfirmOrder").addEventListener("click", () => confirmOrder());
});